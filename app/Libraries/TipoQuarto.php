<?php

namespace App\Libraries;

class TipoQuarto
{
    private $tipo;
    private $tipoCama;
    private $tamanho;

    public function __construct(string $tipo, string $tipoCama, string $tamanho)
    {
        $this->tipoCama = $tipoCama;
        $this->tipo = $tipo;
        $this->tamanho = $tamanho;
    }

    public function retornarTipo()
    {
        return $this->tipo;
    }

    public function retornarTamanho()
    {
        return $this->tamanho;
    }

    public function retornarTipoCama()
    {
        return $this->tipoCama;
    }

    public function __get($name)
    {
        $methodName = 'retornar'.mb_convert_case($name,MB_CASE_TITLE);
        return $this->$methodName();
    }
}
