<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UsuarioModel;

class Home extends BaseController
{   
    // Redireciona para a Pagina principal
    public function index()
    {
        return view('teste', ['titulo' => 'Teste']);
    }

}

