<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UsuarioEntity;
use App\Models\UsuarioModel;
use InvalidArgumentException;

class Login extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }
    public function index()
    {
        if (!session()->has('usuario')) {
            return view('autenticacao/login');
        }

        return redirect()->to('/');
    }
    //===================================================

    /*
        Verificando o pedido de login do usuario
    */
    public function logar()
    {
        // Verificar se foi mandando no metodo POST
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }


        // validar os campos enviados
        try {
            $usuario = new UsuarioEntity($this->request->getPost());

            if (!$usuario->usuarioValido()) {
                throw new InvalidArgumentException();
            }

            $usuarioBanco = $this->usuarioModel->where('email', $usuario->email)->select('id,nome,email,senha')->first();
            $verificarSenha = password_verify($usuario->senha, $usuarioBanco?->senha ?? '');
            if (!isset($usuarioBanco) || $verificarSenha === false) {
                $usuario->messages[] = 'Email e/ou senha Incorreto(s)';
                throw new InvalidArgumentException();
            }
            unset($usuarioBanco->senha);
            session()->set('usuario', $usuarioBanco);
            return redirect()->to('/');
        } catch (\InvalidArgumentException) {
            return redirect()->to('login')->withInput()->with('errors', $usuario->messages);
        }
    }

    public function logout()
    {
        session()->remove('usuario');

        return redirect()->to('/');
    }
}
