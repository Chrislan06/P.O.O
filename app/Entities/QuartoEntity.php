<?php

namespace App\Entities;

use App\Libraries\TipoQuarto;
use CodeIgniter\Entity\Entity;

class QuartoEntity extends Entity
{
    // atributos relacionados ao banco de dados
    protected $attributes = [
        'tipo' => null,
        'tipo_cama' => null,
        'tamanho' => null,
        'descricao' => null,
        'preco' => null,
    ];
    // Variavel para Generalizar os tipos Dos quartos
    private $tipoQuarto;
    protected $datamap = [];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];

    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->tipoQuarto = new TipoQuarto($data['tipo'],$data['tipoCama'],$data['tamanho']);
    }

    public function retornarDescricao()
    {
        return $this->attributes['descricao'];        
    }

}
