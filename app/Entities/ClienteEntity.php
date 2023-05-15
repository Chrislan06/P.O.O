<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use DateTime;

class ClienteEntity extends Entity
{
    protected $attributes =[
        'id' => null,
        'nome' => null,
        'rg' => null,
        'cpf' => null,
        'dataNascimento' => null,
    ];
    public $messages = [];
    protected $datamap = ['dataNascimento' => 'data_nascimento'];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];

    public function __construct(array $data = null)
    {
        if(is_null($data)){
            parent::__construct($data);
            return;
        }

        $this->validarNome($data['nome']);
        $this->validarRg($data['rg']);
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

    private function validarRg(string $rg)
    {
        if(empty($rg)){
            $this->messages['rg'] = 'O campo do rg não pode ser vazio';
            return;
        }

        $this->attributes['rg'] = $rg;
    }

    private function validarDataNascimento(DateTime $dataNascimento)
    {
        if(empty($dataNascimento)){
            $this->messages['dataNascimento'] = 'Precisa preencher a data de nascimento'; 
            return;
        }

        $anoAtual = new DateTime();

        if($anoAtual->diff($dataNascimento) < 18){
            $this->messages['dataNascimento'] = 'Não permitimos clientes com menos de 18 anos';
            return;
        }

        $this->attributes['dataNascimento'] = $dataNascimento;
    }
}
