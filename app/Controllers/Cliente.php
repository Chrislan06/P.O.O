<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\ClienteEntity;
use App\Models\ClienteModel;
use App\Models\ReservaModel;
use DateTime;
use Exception;
use InvalidArgumentException;

class Cliente extends BaseController
{
    private $clienteModel;
    private $reservaModel;

    /*
        Criando os models necessários 
    */
    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
        $this->reservaModel = new ReservaModel();
    }

    /*
        Redirecionando para a página de reserva
    */
    public function index($id)
    {
        $reserva = $this->reservaModel->find($id);
        if(!$reserva->verificarReserva() || $reserva->reserva == 'Reservado'){
            return redirect()->to('/');
        }
        return view('reserva/reservar',['cliente' => null,'reserva' => $reserva]);
    }

    public function informacoes($id)
    {
        $cliente = $this->clienteModel->find($id);
        if (is_null($cliente)) {
            return redirect()->to('/');
        }
        return view('informacoesCliente/informacoesCliente', ['cliente' => $cliente]);
    }

    /*
        Realizando Cadastro de cliente
    */
    public function cadastrar()
    {
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }

        $params = $this->request->getPost();
        $params['dataNascimento'] = new DateTime($params['dataNascimento']);
        $idReserva = $params['idReserva'];
        // dd($idReserva);
        unset($params['idReserva']);
        // dd($params);


        try {
            $cliente = new ClienteEntity($params);

            if (count($cliente->messages) > 0) {
                throw new InvalidArgumentException();
            }

            $data = [
                'nome' => $cliente->nome,
                'rg' => $cliente->rg,
                'cpf' => $cliente->getCPF(),
                'data_nascimento' => $cliente->getDataNascimento()
            ];

            // dd($data);

            $resultado = $this->clienteModel->insert($data,true);

            if (!$resultado) {
                throw new \InvalidArgumentException();
            }
            $this->reservaModel->update($idReserva,['id_cliente' => $resultado]);

            return redirect()->to('/sucesso')->with('sucesso', ['titulo'=>'Reserva Feita com Sucesso', 'mensagem' => 'A reserva foi Realizada com sucesso clique em baixo para voltar']);
        } catch (\InvalidArgumentException) {
            return redirect()->to('/cliente/'.(int)$idReserva)->with('errors', $cliente->messages)->withInput();
        }
    }

    public function editar($id)
    {
        $cliente = $this->clienteModel->find($id);
        if (is_null($cliente)) {
            return redirect()->to('/');
        }
        return view('reserva/reservar', ['cliente' => $cliente]);
    }

    public function salvar($id)
    {
        $params = $this->request->getPost();
        // dd($params);
        if(!isset($params['idCliente'])){
            return redirect()->to('/');
        }
        
        $params['dataNascimento'] = new DateTime($params['dataNascimento']);
        // dd($data);
        try {
            $cliente = new ClienteEntity($params);
            if (count($cliente->messages) > 0) {
                throw new InvalidArgumentException();
            }

            $data = [
                'nome' => $cliente->nome,
                'rg' => $cliente->rg,
                'cpf' => $cliente->getCPF(),
                'data_nascimento' => $cliente->getDataNascimento()
            ];
            $resultado = $this->clienteModel->update($id, $data);

            if (!$resultado) {
                $cliente->messages[] = 'Erro ao editar';
                throw new InvalidArgumentException();
            }

            return redirect()->to('/sucesso')->with('sucesso' , ['titulo' => 'Editado com sucesso','mensagem' => 'A reserva foi editada com sucesso']);
        } catch (Exception) {
            return redirect()->to('/cliente/editar/' . $id)->with('errors', $cliente->messages);
        }
    }

    public function cancelar($id)
    {
        $cliente = $this->clienteModel->find($id);
        if(!isset($cliente)){
            return redirect()->to('/');
        }
        return view('mensagens/cancelar',['title'=> 'Cancelar', 'cliente' => $cliente]);
    }

    public function delete($id)
    {
        $this->clienteModel->delete($id);
        return redirect()->to('/sucesso')->with('sucesso',['titulo' => 'Reserva cancelada','mensagem' => 'A reserva foi cancelada com sucesso']);
    }
}
