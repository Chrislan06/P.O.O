<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function index()
    {
        return view('reserva/reservar');
    }

    public function cadastrar()
    {
    }
}
