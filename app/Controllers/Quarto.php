<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;
use App\Models\FotoModel;
use App\Models\QuartoModel;
use App\Models\ReservaModel;

class Quarto extends BaseController
{
    private $quartoModel;
    private $reservaModel;
    private $fotoModel;
    private $clienteModel;
    public function __construct()
    {
        $this->quartoModel = new QuartoModel();
        $this->reservaModel = new ReservaModel();
        $this->fotoModel = new FotoModel();
        $this->clienteModel = new ClienteModel();
    }

    public function visualizar($id)
    {
        $reserva = $this->reservaModel->where('id_quarto', $id)->find()[0];
        $quarto = $this->quartoModel->find($id);
        $foto = $this->fotoModel->find($id);
        if(!$reserva->verificarReserva() && isset($reserva->idCliente)){
            $this->clienteModel->delete($reserva->idCliente);
            $reserva->idCliente = null;
        }
        return view('exQuarto/exQuarto', ['title' => 'Quarto','reserva' => $reserva,'quarto' => $quarto,'foto' => $foto]);
    }
}
