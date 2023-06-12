<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sucesso extends BaseController
{
    public function index()
    {
        if(session()->has('sucesso')){
            return view('mensagens/sucesso',['title' => 'sucesso']);
        }
        return redirect()->to('/');
    }
}
