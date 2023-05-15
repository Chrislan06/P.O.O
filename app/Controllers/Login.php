<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
    }
}
