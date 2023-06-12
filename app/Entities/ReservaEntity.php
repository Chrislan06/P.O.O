<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use DateTime;

class ReservaEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'dataCheckIn' => null,
        'dataCheckOut' => null,
        'dataInicio' => null,
        'dataFim' => null,
        'idCliente' => null,
        'idQuarto' => null,
    ];
    protected $datamap = [
        'dataCheckIn' => 'data_check_in',
        'dataCheckOut' => 'data_check_out',
        'dataInicio' => 'data_inicio',
        'dataFim' => 'data_fim',
        'idCliente' => 'id_cliente',
        'idQuarto' => 'id_quarto',
    ];
    public $cliente;
    public $quarto;
    public $reserva;
    public $messages;
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];


    public function verificarReserva()
    {
        $dataAtual = new DateTime();
        if($dataAtual > new DateTime($this->attributes['data_fim']) || new DateTime($this->attributes['data_inicio']) > new DateTime($this->attributes['data_fim'])){
            $this->reserva = 'Indisponível';
            return false;
        }

        if(isset($this->attributes['id_cliente'])){
            $this->reserva = 'Reservado';
            return true;
        }

        $this->reserva = 'Disponível';
        return true;
    }

    public function verificarPeriodo($dataCheckIn, $dataCheckOut){
        $dataAtual = new DateTime();
        if($dataCheckIn > $dataCheckOut){
            $this->messages['periodo'] = 'Periodo Inválido'; 
            return;
        }

        if($dataCheckIn > new DateTime($this->attributes['data_fim']) || $dataCheckOut > new DateTime($this->attributes['data_fim'])){
            $this->messages['periodo'] = 'Não é possível marcar o checkIn/checkOut depois do fim do periodo de reserva';
            return;
        }

        if($dataCheckIn < new DateTime($this->attributes['data_inicio']) || $dataCheckOut < new DateTime($this->attributes['data_inicio'])){
            $this->messages['periodo'] = 'Não é possível marcar o checkIn/checkOut antes do inicio do periodo de reserva';
            return;
        }

        if($dataCheckIn < $dataAtual){
            $this->messages['periodo'] = 'Data Não permitida para checkIn';
            return;
        }

        $this->attributes['data_check_in'] = $dataCheckIn;
        $this->attributes['data_check_out'] = $dataCheckOut;
    }
    
    public function calcularPreco(){
       $tempoEmDias = diferencaEmDias($this->attributes['data_check_in'], $this->attributes['data_check_out']);     

       return $this->quarto->preco * $tempoEmDias;
    }
}
