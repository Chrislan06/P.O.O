<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use InvalidArgumentException;

class UsuarioEntity extends Entity
{
    protected $datamap = [];
    protected $attributes = [
        'id' => null,
        'nome' => null,
        'email' => null,
        'senha' => null,
    ];
    public $messages = [];
    protected $dates   = ['criado_em', 'atualizado_em'];
    protected $casts   = [];

    public function __construct($data = null)
    {
        if (is_null($data)) {
            parent::__construct($data);
            return;
        }
        $this->validarEmail($data['email']);
        $this->validarSenha($data['senha']);
        if(isset($data['nome'])){
            $this->validarNome($data['nome']);
        }
    }

    public function usuarioValido()
    {
        return count($this->messages) == 0 ;
    }


    private function validarEmail($email)
    {
        if(empty($email)){
            $this->messages[] = 'Preencha o campo de Email';
            return;
        }

        if(!preg_match('/^([a-zA-Z]{3,})+.*@+([a-zA-z]{3,})(\.[a-z]{1,3})+$/',$email)){
            $this->messages[] = 'Email Inválido';  
            return;
        }

        $this->attributes['email'] = $email;
    }

    private function validarSenha($senha)
    {
        if(empty($senha)){
            $this->messages[] = 'Preencha o campo de senha';
            return;
        }

        if(mb_strlen($senha) < 8){
            $this->messages[] = 'A senha precisa ter no mínimo 8 caracteres';
            return;
        }

        $this->attributes['senha'] = $senha;
    }

    private function validarNome($nome)
    {
        if(empty($nome)){
            $this->messages[] = 'é necessário ter um nome';
            return;
        }

        if(mb_strlen($nome) < 3){
            $this->messages[] = 'o nome precisa ter no mínimo 3 caracteres';
            return;
        }

        $this->attributes['nome'] = $nome;
    }

    public function hashSenha(){
        return password_hash($this->attributes['senha'],PASSWORD_ARGON2ID);
    }
}
