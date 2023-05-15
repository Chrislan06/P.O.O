<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    // public function _remap($method)
    // {
    //     if(!session()->has('login')){
    //         return redirect()->to('/login');
    //     }

    //     return  $this->$method;
    // }

    
    public function index()
    {
        // $this->inserirUsuario();
        // return view('reserva/reservar');
    }

    private function inserirUsuario()
    {
        $usuarioModel = new UsuarioModel();
        $result = $usuarioModel->insert([
            'nome' => 'Chrislan',
            'email' => 'chrislan@gmail.com',
            'senha' => password_hash('12345678',PASSWORD_ARGON2ID)
        ]);
        
        if($result){
            echo 'Inserido';
        }
        
    }
}
