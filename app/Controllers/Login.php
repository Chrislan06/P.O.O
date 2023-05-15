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
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }

        try {
            $usuario = new UsuarioEntity($this->request->getPost());

            if(!$usuario->usuariValido()){
                throw new InvalidArgumentException();
            }

            $usuarioBanco = $this->usuarioModel->where('email',$usuario->email)->select('nome,email')->first();
            // dd($usuarioBanco);
            $verificarSenha = password_verify($usuario->senha, $usuarioBanco?->senha ?? '');
            // dd($verificarSenha);

            if(!isset($usuarioBanco) || $verificarSenha === false){
                $usuario->messages[] = 'Email ou senha Incorreto(s)';
                // dd('entrou');
                throw new InvalidArgumentException();
            }
        } catch (\InvalidArgumentException $e) {
            dd($usuario->messages);
        }
    }
}
