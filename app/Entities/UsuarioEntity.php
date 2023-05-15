<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioEntity extends Entity
{
    protected $datamap = [];
    protected $attributes = [
        'id' => null,
        'nome' => null,
        'email' => null,
        'senha' => null,
    ];
    private $messages = '';
    protected $dates   = ['created_at', 'updated_at'];
    protected $casts   = [];

    public function __construct($data = null)
    {
        if (is_null($data)) {
            parent::__construct($data);
            return;
        }
        try {
            
        } catch (\InvalidArgumentException $th) {
            //throw $th;
        }
    }

    private function validarEmail($email)
    {
        if(empty($email)){
            $this->messages .= 'Preencha o campo de Email';
            return;
        }

        $posicaoArroba = $possuiArroba = mb_strpos($email,'@');

        if($possuiArroba === false){
            $this->message .= 'Preencha o campo com um Email válido';
            return;
        }

        if(mb_strlen(substr($email,$posicaoArroba))){
            
        }

    }
}
