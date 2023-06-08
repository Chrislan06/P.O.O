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
    public $quartos;
    public $reserva;
    public $messages;
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];


    public function VerificarReserva()
    {
        $dataAtual = new DateTime();
        if($dataAtual > $this->attributes['dataFim']){
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

        if($dataCheckIn > $this->attributes['dataFim'] || $dataCheckOut > $this->attributes['dataFim']){
            $this->messages['periodo'] = 'Não é possível marcar o checkIn/checkOut depois do fim do periodo de reserva';
            return;
        }

        if($dataCheckIn < $this->attributes['dataInicio'] || $dataCheckOut < $this->attributes['dataInicio']){
            $this->messages['periodo'] = 'Não é possível marcar o checkIn/checkOut antes do inicio do periodo de reserva';
            return;
        }

        if($dataCheckIn < $dataAtual){
            $this->messages['periodo'] = 'Data Não permitida para checkIn';
            return;
        }

        $this->attributes['dataCheckIn'] = $dataCheckIn;
        $this->attributes['dataCheckOut'] = $dataCheckOut;
    }
    
    public function calcularPreco(){
       $tempoEmDias = diferencaEmDias($this->attributes['dataCheckIn'], $this->attributes['dataCheckOut']);     

       return $this->quarto->preco * $tempoEmDias;
    }
}
