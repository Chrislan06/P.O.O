<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        return view('autenticacao/login_admin');
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
}
