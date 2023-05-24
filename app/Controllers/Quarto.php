<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Quarto extends BaseController
{
    public function index()
    {
       return view('exQuarto/exQuarto',['titulo' => 'ExemploQuarto']);
    }
}
