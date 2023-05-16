<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('autenticacao/login_admin');
    }

    public function cadastrar()
    {
        echo 'Cadastrar Usuario';
    }
}
