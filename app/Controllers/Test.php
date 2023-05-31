<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\UsuarioModel;

class Test extends BaseController
{
    public function test()
    {
        echo 'test';
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

    private function inserirAdmin()
    {
        $adminModel = new AdminModel();
        $result = $adminModel->insert([
            'nome' => 'Chris Machado',
            'email' => 'chrislan06@gmail.com',
            'senha' => password_hash('87654321',PASSWORD_ARGON2ID)
        ]);
        
        if($result){
            echo 'Inserido';
        }
    }

    private function gmailTeste()
    {
        $email = 'Chri@gmail.com';
        if(empty($email)){
            echo 'Preencha o campo de Email';
            die();
        }
        // var_dump(preg_match('/^([a-zA-Z]{3,})*(.)+@+([a-zA-z]{3,})+\.+com*(\.*[a-z]{1,3})$/',$email));
        if(!preg_match('/^([a-zA-Z]{3,})+.*@+([a-zA-z]{3,})(\.[a-z]{1,3})+$/',$email)){
            echo 'email Inválido';
        }else{
            echo 'email válido';
        }
        
    }
}
