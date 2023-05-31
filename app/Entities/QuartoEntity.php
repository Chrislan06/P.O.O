<?php

namespace App\Entities;

use App\Libraries\TipoQuarto;
use CodeIgniter\Entity\Entity;

class QuartoEntity extends Entity
{
    // atributos relacionados ao banco de dados
    protected $attributes = [
        'tipo' => null,
        'tipoCama' => null,
        'tamanho' => null,
        'descricao' => null,
        'preco' => null,
    ];
    // Variavel para Generalizar os tipos Dos quartos
    private $tipoQuarto;
    protected $datamap = ['tipoCama' => 'tipo_cama'];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];

    public function __construct(array $data = null)
    {
        if(is_null($data)){
            parent::__construct($data);
            // $this->tipoQuarto = new TipoQuarto($this->attributes['tipo'],$this->attributes['tipoCama'],$this->attributes['tamanho']);
            return;
        }
        $this->tipoQuarto = new TipoQuarto($data['tipo'],$data['tipoCama'],$data['tamanho']);
        $this->attributes['descricao'] = $data['descricao'];
        $this->attributes['preco'] = $data['preco'];
    }

    public function retornarDescricao()
    {
        return $this->attributes['descricao'];        
    }

    public function retornarPrecoFormatado()
    {
        return number_format($this->attributes['preco'],2,',','.');
    }

}
