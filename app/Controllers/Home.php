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
        dd(session('usuario'));
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

    public function teste()
    {
        $email = 'Chrislan06@gmail.com';
        if(empty($email)){
            echo 'Preencha o campo de Email';
            die();
        }
        // var_dump(preg_match('/^([a-zA-Z]{3,})*(.)+@+([a-zA-z]{3,})+\.+com*(\.*[a-z]{1,3})$/',$email));
        if(!preg_match('/^([a-zA-Z]{3,})*(.)+@+([a-zA-z]{3,})+\.+com*(\.*[a-z]{1,3})$/',$email)){
            echo 'email Inválido';
        }else{
            echo 'email valido';
        }
        

    }
}

