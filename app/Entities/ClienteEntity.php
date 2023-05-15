<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ClienteEntity extends Entity
{
    protected $attributes =[
        'id' => null,
        'nome' => null,
        'rg' => null,
        'cpf' => null,
        'data_nascimento' => null,
    ];
    public $messages = [];
    protected $datamap = [];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];

    public function __construct(array $data = null)
    {
        if(is_null($data)){
            parent::__construct($data);
            return;
        }

        $this->validarNome($data['nome']);
    }

    private function validarNome(string $nome)
    {
        if(empty($nome)){
            $this->messages['nome'] = 'Nome não pode ser vazio'; 
            return;
        }

        if(mb_strlen($nome) < 3){
            $this->messages['nome'] = 'minimo de caracteres para o nome é 3';
            return;
        }

        $this->attributes['nome'] = $nome;
    }
}
