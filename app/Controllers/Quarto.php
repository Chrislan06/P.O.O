<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuartoModel;
use App\Models\ReservaModel;

class Quarto extends BaseController
{
    private $quartoModel;
    private $reservaModel;

    public function __construct()
    {
        $this->quartoModel = new QuartoModel();
        $this->reservaModel = new ReservaModel();
    }

    public function visualizar($id)
    {
        $reserva = $this->reservaModel->where('id_quarto', $id)->find()[0];
        $quarto = $this->quartoModel->find($id);
        return view('exQuarto/exQuarto', ['titulo' => 'Quarto','reserva' => $reserva,'quarto' => $quarto]);
    }
}
