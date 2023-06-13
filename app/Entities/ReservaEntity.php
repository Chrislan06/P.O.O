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
    public $messages = [];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];


    public function verificarReserva()
    {
        $dataAtual = new DateTime();
        $dataAtualSemHoras = new DateTime($dataAtual->format('Y-m-d').' 00:00:00');
        if($dataAtualSemHoras > new DateTime($this->attributes['data_fim']) || new DateTime($this->attributes['data_inicio']) > new DateTime($this->attributes['data_fim']) || $dataAtualSemHoras < new DateTime($this->attributes['data_inicio'])){
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

    public function verificarCheckInOut($dataCheckIn, $dataCheckOut){
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
    
    public function verificarPeriodo(DateTime $dataInicio, DateTime $dataFim){
        $dataAtual = new DateTime();
        $dataAtualSemHoras = new DateTime($dataAtual->format('Y-m-d').' 00:00:00');
        // die(var_dump($dataAtualSemHoras));

        if($dataInicio == $dataFim ){
            $this->messages['periodo'] = 'Data de inicio não pode ser igual a data final' ;
            return;
        }

        if($dataInicio > $dataFim){
            $this->messages['periodo'] = 'Periodo Inválido'; 
            return;
        }

        if($dataFim < $dataAtualSemHoras && !($dataFim == new DateTime($this->attributes['data_fim']))){
            $this->messages['periodo'] = 'Não é possível remarcar a reserva para esse dia';
            return;
        }

        if($dataInicio < $dataAtualSemHoras && !($dataInicio == new DateTime($this->attributes['data_inicio']))){
            $this->messages['periodo'] = 'Não é possível remarcar a reserva para esse dia';
            return;
        }

        $this->attributes['data_inicio'] = $dataInicio;
        $this->attributes['data_fim'] = $dataFim;
    }
    
    public function calcularPreco(){
       $tempoEmDias = diferencaEmDias($this->attributes['data_check_in'], $this->attributes['data_check_out']);     

       return $this->quarto->preco * $tempoEmDias;
    }

    public function retornarData(DateTime $data = null,$format = 'Y-m-d')
    {
        return $data->format($format);
    }
}
