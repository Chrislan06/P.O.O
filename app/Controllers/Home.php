<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ClienteModel;
use App\Models\QuartoModel;
use App\Models\ReservaModel;
use App\Models\UsuarioModel;
use DateTime;

class Home extends BaseController
{
    private $quartoModel;
    private $reservaModel;
    private $clienteModel;
    public function __construct()
    {
        $this->quartoModel = new QuartoModel();
        $this->reservaModel = new ReservaModel();
        $this->clienteModel = new ClienteModel();
    }

    // Redireciona para a Pagina principal
    public function index()
    {
        $reservas = $this->reservaModel->findAll();
        foreach ($reservas as $reserva) {
            $reserva->quarto = $this->quartoModel->find($reserva->idQuarto);
            if(!$reserva->verificarReserva() && isset($reserva->idCliente)){
                $this->clienteModel->delete($reserva->idCliente);
                $reserva->idCliente = null;
            }
        }
        return view('PagInicial/pgInicial', ['reservas' => $reservas]);
    }

    public function filtros()
    {
        $reservas = $this->reservaModel->findAll();
        foreach ($reservas as $reserva) {
            $reserva->quarto = $this->quartoModel->find($reserva->idQuarto);
            if(!$reserva->verificarReserva() && isset($reserva->idCliente)){
                $this->clienteModel->delete($reserva->idCliente);
                $reserva->idCliente = null;
            }
        }
        return view('paginadeFiltros/pagFiltro',['reservas' => $reservas,'filtro' => true]);
    }
}
