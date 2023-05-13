<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function _remap($method)
    {
        if(!session()->has('login')){
            return redirect()->to('/login');
        }

        return  $this->$method;
    }
    public function index()
    {
        echo 'logado';
    }
}
