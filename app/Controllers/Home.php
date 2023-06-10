<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\QuartoModel;
use App\Models\ReservaModel;
use App\Models\UsuarioModel;
use DateTime;

class Home extends BaseController
{
    private $quartoModel;
    private $reservaModel;
    public function __construct()
    {
        $this->quartoModel = new QuartoModel();
        $this->reservaModel = new ReservaModel();
    }

    // Redireciona para a Pagina principal
    public function index()
    {
        $reservas = $this->reservaModel->findAll();
        foreach ($reservas as $reserva) {
            $reserva->quarto = $this->quartoModel->find($reserva->idQuarto);
            $reserva->verificarReserva();
        }
        $dataAtual = new DateTime();
        // dd($reservas[0]->quarto->tipo,str_contains(mb_convert_case($reservas[0]->tipo,MB_CASE_LOWER),'família'));
        return view('PagInicial/pgInicial', ['reservas' => $reservas]);
    }
}
