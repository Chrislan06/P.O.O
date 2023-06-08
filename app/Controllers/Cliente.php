<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\ClienteEntity;
use App\Models\ClienteModel;
use DateTime;
use Exception;
use InvalidArgumentException;

class Cliente extends BaseController
{
    private $clienteModel;

    /*
        Criando os models necessários 
    */
    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    /*
        Redirecionando para a página de reserva
    */
    public function index()
    {
        return view('reserva/reservar');
    }

    public function informacoes($id)
    {
        $cliente = $this->clienteModel->find($id);
        if (is_null($cliente)) {
            return redirect()->to('/');
        }
        return view('informacoesCliente/informacoesCliente/' . $id, ['cliente' => $cliente]);
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

            $resultado = $this->clienteModel->insert($data);

            if (!$resultado) {
                throw new \InvalidArgumentException();
            }

            return redirect()->to('/cliente')->with('success', 'Cliente Inserido com sucesso');
        } catch (\InvalidArgumentException) {
            return redirect()->to('/cliente')->with('errors', $cliente->messages)->withInput();
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
                throw new InvalidArgumentException();
            }

            return redirect()->to('/');
        } catch (Exception) {
            return redirect()->to('/cliente/editar/' . $id)->with('errors', $cliente->messages);
        }
    }
}
