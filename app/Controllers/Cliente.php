<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\ClienteEntity;
use App\Models\ClienteModel;
use DateTime;
use InvalidArgumentException;

class Cliente extends BaseController
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function index()
    {
        return view('reserva/reservar');
    }

    public function informacoes() 
    {
      //
    }

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

            if (count($cliente->messages) > 0){
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

            if(!$resultado){
                throw new \InvalidArgumentException();
            }

            return redirect()->to('/cliente')->with('success','Cliente Inserido com sucesso');
        } 
        catch (\InvalidArgumentException) {
            return redirect()->to('/cliente')->with('errors', $cliente->messages)->withInput();
        }
    }
}
