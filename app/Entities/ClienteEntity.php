<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use DateTime;

class ClienteEntity extends Entity
{
    protected $attributes = [
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
        if (is_null($data)) {
            parent::__construct($data);
            return;
        }

        $this->validarNome($data['nome']);
        $this->validarDataNascimento($data['dataNascimento']);
        $this->validarRg($data['rg']);
        $this->validarCPF($data['cpf']);
    }

    private function validarNome(string $nome)
    {
        if (empty($nome)) {
            $this->messages['nome'] = 'Nome não pode ser vazio';
            return;
        }

        if (mb_strlen($nome) < 3) {
            $this->messages['nome'] = 'minimo de caracteres para o nome é 3';
            return;
        }

        $this->attributes['nome'] = $nome;
    }

    private function validarRg(string $rg)
    {
        if (empty($rg)) {
            $this->messages['rg'] = 'O campo do rg não pode ser vazio';
            return;
        }

        $this->attributes['rg'] = $rg;
    }

    private function validarDataNascimento(DateTime $dataNascimento)
    {
        if (empty($dataNascimento)) {
            $this->messages['dataNascimento'] = 'Precisa preencher a data de nascimento';
            return;
        }

        $dataAtual = new DateTime();

        if ($dataNascimento > $dataAtual) {
            $this->messages['dataNascimento'] = 'A data não pode estar no futuro';
            return;
        }

        if ($dataAtual->diff($dataNascimento)->y < 18) {
            $this->messages['dataNascimento'] = 'Não permitimos clientes com menos de 18 anos';
            return;
        }

        $this->attributes['dataNascimento'] = $dataNascimento;
    }

    private function validarCPF(string $cpf)
    {
        $cpfPuro = str_replace(['.', '-'], ['', ''], $cpf);

        if (mb_strlen($cpfPuro) < 11) {
            $this->messages['cpf'] =  'o CPF precisa ter no minimo 11 digitos';
            return;
        }

        if (!cpfValido($cpf)) {
            $this->messages['cpf'] = 'CPF inválido';
            return;
        }

        $this->attributes['cpf'] = $cpf;
    }

    public function calcularIdade(): int
    {
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($this->attributes['dataNascimento']);

        return $idade;
    }

    public function getDataNascimento($formato = 'Y-m-d H:i:s')
    {
        return $this->attributes['dataNascimento']->format($formato);
    }

    public function getCPF()
    {
        if (str_contains($this->attributes['cpf'], '.') && str_contains($this->attributes['cpf'], '-')) {
            return $this->attributes['cpf'];
        }

        $cpfFormatado = substr($this->attributes['cpf'], 0, 3) . '.' . substr($this->attributes['cpf'], 3, 3) . '.' . substr($this->attributes['cpf'], 6, 3) . '-' . substr($this->attributes['cpf'], 9, 2);
        return $cpfFormatado;
    }
}
