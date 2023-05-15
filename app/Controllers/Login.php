<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UsuarioEntity;

class Login extends BaseController
{
    public function index()
    {
        if (!session()->has('usuario')) {
            return view('autenticacao/login');
        }

        return redirect()->to('/');
    }

    public function logar()
    {
        if (!$this->request->is('post')) {
            return redirect()->to('/');
        }

        try {
            $usuario = new UsuarioEntity($this->request->getPost());
            dd($usuario);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
