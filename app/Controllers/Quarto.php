<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FotoModel;
use App\Models\QuartoModel;
use App\Models\ReservaModel;

class Quarto extends BaseController
{
    private $quartoModel;
    private $reservaModel;
    private $fotoModel;
    public function __construct()
    {
        $this->quartoModel = new QuartoModel();
        $this->reservaModel = new ReservaModel();
        $this->fotoModel = new FotoModel();
    }

    public function visualizar($id)
    {
        $reserva = $this->reservaModel->where('id_quarto', $id)->find()[0];
        $quarto = $this->quartoModel->find($id);
        $foto = $this->fotoModel->find($id);
        return view('exQuarto/exQuarto', ['titulo' => 'Quarto','reserva' => $reserva,'quarto' => $quarto,'foto' => $foto]);
    }
}
