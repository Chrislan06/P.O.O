<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UsuarioEntity;
use App\Models\AdminModel;
use App\Models\UsuarioModel;
use CodeIgniter\Filters\InvalidChars;
use InvalidArgumentException;

class Admin extends BaseController
{
    private $adminModel;
    private $usuarioModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        if (!session()->has('admin') && !session()->has('usuario')) {
            return view('autenticacao/login_admin');
        }

        return redirect()->to('/');
    }

    public function logar()
    {
        if (!$this->request->is('post')) {
            redirect()->to('/admin');
        }

        $contaValida = $this->validate([
            'email' => 'required|valid_email',
            'senha' => 'required|min_length[8]',
        ], [
            'email' => [
                'required' => 'O campo do Email é requerido',
                'valid_email' => 'Email inválido',
            ],
            'senha' => [
                'required' => 'O campo da senha é obrigatório',
                'min_length' => 'O minimo de caracteres para a senha  é 8',
            ],
        ]);

        if (!$contaValida) {
            return redirect()->to('/admin')->with('errors', $this->validator->getErrors())->withInput();
        }

        $admin = $this->request->getPost();
        $adminBanco = $this->adminModel->select('nome,email,senha')->where('email', $admin['email'])->first();
        $verificarSenha = password_verify($admin['senha'], $adminBanco?->senha ?? '');

        if ($adminBanco === null || !$verificarSenha) {
            return redirect()->to('/admin')->with('errors', ['Email ou senha Incorreta(s)']);
        }

        unset($adminBanco->senha);
        session()->set('admin', $adminBanco);
        return redirect()->to('/');
    }

    public function cadastro()
    {
        return view('registro/registro');
    }

    public function cadastrar()
    {
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }

        $params = $this->request->getPost();


        try {
            $usuario = new UsuarioEntity($params);
            if (!$usuario->usuarioValido()) {
                throw new InvalidArgumentException();
            }
            $data = [
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'senha' => $usuario->hashSenha(),
            ];

            // dd($this->usuarioModel->errors() !== null);
            $resultado = $this->usuarioModel->insert($data);
            
            if (!$resultado) {
                foreach ($this->usuarioModel->errors() as $error){
                    $usuario->messages[] = $error;
                }
                throw new InvalidArgumentException();
            }

            return redirect()->to('admin/cadastro')->with('success', 'Usuario Inserido com sucesso');
        } catch (\InvalidArgumentException) {
            return redirect()->to('admin/cadastro')->with('errors', $usuario->messages)->withInput();
        }
    }
}
