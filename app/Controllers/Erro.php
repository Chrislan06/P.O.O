<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Erro extends BaseController
{
    public function index()
    {
        if(session()->has('redirecionar')){
            session()->set('reload', session()->get('redirecionar'));
        }
        if (!session()->has('errors')){
            $reload = session()->get('reload') ?? '/';
            session()->remove('reload');
            return redirect()->to($reload);
        }

        return view('mensagens/erro');
    }
}
