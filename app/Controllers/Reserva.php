<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservaModel;
use DateTime;
use Exception;
use InvalidArgumentException;

class Reserva extends BaseController
{

    private $reservaModel;

    public function __construct()
    {
        $this->reservaModel = new ReservaModel();
    }
    public function agendar()
    {
        // dd($this->request->getPost());
        $params = $this->request->getPost();
        $id = $params['idReserva'];
        if(empty(trim($params['dataInicio'])) || empty(trim($params['dataFim']))){
            return redirect()->back();
        }

        $reserva = $this->reservaModel->find($id);
        $dataInicio = new DateTime($params['dataInicio']);
        $dataFim = new DateTime($params['dataFim']);
        // dd($dataInicio,$dataFim);
        try {
            $reserva->verificarPeriodo($dataInicio,$dataFim);
            // dd($reserva);
            if(count($reserva->messages)){
                throw new InvalidArgumentException();
            }

            $data = [
                'data_inicio' => $reserva->retornarData($dataInicio),
                'data_fim' => $reserva->retornarData($dataFim),
            ];
            
            $resultado = $this->reservaModel->update($id,$data);

            if(!$resultado){
                $reserva->messages['erro'] = 'Erro ao atualizar a data';
                throw new Exception();
            }

            return redirect()->route('visualizar.quarto',[(int)$id]);
        } catch (\Exception) {
            return redirect()->to('/erro')->with('errors', $reserva->messages)->with('titulo','Erro ao agendar')->with('redirecionar','quarto/visualizar/'.(int)$reserva->idQuarto);
        }
    }
}
