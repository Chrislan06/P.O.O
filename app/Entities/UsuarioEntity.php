<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use InvalidArgumentException;

class UsuarioEntity extends Entity
{
    protected $datamap = [];
    
    // Atributos do Usuario referentes a tabela no banco de dados
    protected $attributes = [
        'id' => null,
        'nome' => null,
        'email' => null,
        'senha' => null,
    ];
    // Variável para mensagens de na criação do usuário
    public $messages = [];
    protected $dates   = ['criado_em', 'atualizado_em'];
    protected $casts   = [];

    public function __construct($data = null)
    {
        // Verifica se os dados foram mandados do banco dados
        if (is_null($data)) {
            parent::__construct($data);
            return;
        }
        // Valida os dados
        $this->validarEmail($data['email']);
        $this->validarSenha($data['senha']);
        if(isset($data['nome'])){
            $this->validarNome($data['nome']);
        }
    }

    /*
        Verifica se o usuario criado foi valido.
        A partir das mensagens de erros criada
    */
    public function usuarioValido()
    {
        return count($this->messages) == 0 ;
    }


    private function validarEmail($email)
    {
        // Verifica se o campo email está vazio
        if(empty($email)){
            $this->messages['email'] = 'Preencha o campo de Email';
            return;
        }

        // verifica a formatação do email
        if(!preg_match('/^([a-zA-Z]{1,})+.*@+([a-zA-z]{3,})(\.[a-z]{1,3})+$/',$email)){
            $this->messages['email'] = 'Email Inválido';  
            return;
        }

        $this->attributes['email'] = $email;
    }

    private function validarSenha($senha)
    {
        // Verifica se o campo senha é vazio
        if(empty($senha)){
            $this->messages['senha'] = 'Preencha o campo de senha';
            return;
        }
        
        // Verifica se o campo senha tem no minimo 8 caracteres
        if(mb_strlen($senha) < 8){
            $this->messages['senha'] = 'A senha precisa ter no mínimo 8 caracteres';
            return;
        }

    
        $this->attributes['senha'] = $senha;
    }

    private function validarNome($nome)
    {
        // Verifica se  o nome é vazio
        if(empty($nome)){
            $this->messages['nome'] = 'é necessário ter um nome';
            return;
        }

        if(mb_strlen($nome) < 3){
            $this->messages['nome'] = 'o nome precisa ter no mínimo 3 caracteres';
            return;
        }

        $this->attributes['nome'] = $nome;
    }


    /*
        Faz o hash da Senha do usuário utilizando,
        Utiliza o algoritmo de Hash: PASSWORD_ARGON2ID
    */
    public function hashSenha(){
        return password_hash($this->attributes['senha'],PASSWORD_ARGON2ID);
    }
}
