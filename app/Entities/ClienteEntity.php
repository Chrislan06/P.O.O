<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use DateTime;

class ClienteEntity extends Entity
{
    // Atributos de Cliente referente a tabela no banco de dados
    protected $attributes = [
        'id' => null,
        'nome' => null,
        'rg' => null,
        'cpf' => null,
        'dataNascimento' => null,
    ];
    // Armazena as mensangens de Erro
    public $messages = [];
    // Mapeia os atributos da entidade com sua respectiva coluna no banco dedados
    protected $datamap = ['dataNascimento' => 'data_nascimento'];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];

    public function __construct(array $data = null)
    {
        // Verifica se os dados vieram do banco dados
        if (is_null($data)) {
            parent::__construct($data);
            return;
        }

        // Valida as informações do Cliente
        $this->validarNome($data['nome']);
        $this->validarDataNascimento($data['dataNascimento']);
        $this->validarRg($data['rg']);
        $this->validarCPF($data['cpf']);
    }

    private function validarNome(string $nome)
    {
        // Verifica se nome está vazio
        if (empty($nome)) {
            $this->messages['nome'] = 'Nome não pode ser vazio';
            return;
        }

        // Verifica o tamanho minimo do nome
        if (mb_strlen($nome) < 3) {
            $this->messages['nome'] = 'minimo de caracteres para o nome é 3';
            return;
        }

        $this->attributes['nome'] = $nome;
    }

    private function validarRg(string $rg)
    {
        // Verifica se o rg não está vazio
        if (empty($rg)) {
            $this->messages['rg'] = 'O campo do rg não pode ser vazio';
            return;
        }

        if (!preg_match('/^[0-9]*$/',$rg)){
            $this->messages['rg'] = 'O campo de rg só aceita números';
            return;
        }

        $this->attributes['rg'] = $rg;
    }

    private function validarDataNascimento(DateTime $dataNascimento)
    {
        
        // Verifica se a data de nascimento está vazia
        if (empty($dataNascimento)) {
            $this->messages['dataNascimento'] = 'Precisa preencher a data de nascimento';
            return;
        }

        $dataAtual = new DateTime();
    
        // Verifica se a data está no futuro
        if ($dataNascimento > $dataAtual) {
            $this->messages['dataNascimento'] = 'A data não pode estar no futuro';
            return;
        }

        // Verifica se o titular é Possui mais de 18 anos
        // if ($dataAtual->diff($dataNascimento)->y < 18) {
        if (retornaIdade($dataNascimento) < 18) {
            $this->messages['dataNascimento'] = 'Não permitimos clientes com menos de 18 anos';
            return;
        }

        $this->attributes['dataNascimento'] = $dataNascimento;
    }

    private function validarCPF(string $cpf)
    {
        // Retira os "." e "-" do cpf
        $cpfPuro = str_replace(['.', '-'], ['', ''], $cpf);

        // Verifica se o cpf tem tamanho correto
        if (mb_strlen($cpfPuro) !== 11 ) {
            $this->messages['cpf'] =  'o CPF precisa ter no minimo 11 digitos';
            return;
        }

        // Verifica se o cpf é válido
        if (!cpfValido($cpf)) {
            $this->messages['cpf'] = 'CPF inválido';
            return;
        }

        $this->attributes['cpf'] = $cpf;
    }

    /*
        Calcula a idade se baseando no ano de nascimento
    */
    public function calcularIdade(): int
    {
        $dataAtual = new DateTime();
        // $idade = $dataAtual->diff($this->attributes['dataNascimento']);
        $idade = retornaIdade($this->attributes['dataNascimento']);
        return $idade;
    }

    /*
        Formata e retorna a data de nascimento a partir do formato desejado.
        O formato padrão é baseado no banco de dados e
        como suas datas são armazenadas
    */
    public function getDataNascimento($formato = 'Y-m-d H:i:s')
    {
        if(isset($this->attributes['data_nascimento']) && is_string($this->attributes['data_nascimento'])){
            $this->attributes['dataNascimento'] = new DateTime($this->attributes['data_nascimento']);
        }
        return $this->attributes['dataNascimento']->format($formato);
    }

    /*
        Retorna o cpf formatado baseado em seu formato padrão.
    */
    public function getCPF()
    {
        // Verifica se o cpf já está formatado
        if (str_contains($this->attributes['cpf'], '.') && str_contains($this->attributes['cpf'], '-')) {
            // Retorna o cpf já formatado
            return $this->attributes['cpf'];
        }

        $cpfFormatado = substr($this->attributes['cpf'], 0, 3) . '.' . substr($this->attributes['cpf'], 3, 3) . '.' . substr($this->attributes['cpf'], 6, 3) . '-' . substr($this->attributes['cpf'], 9, 2);
        return $cpfFormatado;
    }
}
