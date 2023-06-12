<?php

/**
 *  Retorna o cpf válido baseando-se nos digitos verificadores
 *  @return bool
 *  @param string $cpf
 * 
 */

// var_dump(cpfValido(''));
function cpfValido(string $cpf = '681.546.883-60')
{
    $cpf = str_replace(['.', '-'], ['', ''], $cpf);
    $somador = 0;
    $multiplicador = 10;
    if($cpf == str_repeat($cpf[0],11)){
        return false;
    }

    for ($i = 0; $i < 9; $i++) {
        $somador += (($multiplicador - $i) * $cpf[$i]);
    }
    $resto = $somador % 11;

    if (($verificador1 = 11 - $resto) >= 10) {
        $verificador1 = 0;
    }
    // die(var_dump($verificador1));

    if ($verificador1 != $cpf[9]) {
        return false;
    }   

    $somador = 0;
    $multiplicador = 11;
    for ($i = 0; $i < 9; $i++) {
        $somador += (($multiplicador - $i) * $cpf[$i]);
    }


    $somador += $verificador1 * 2;
    $resto = $somador % 11;

    if (($verificador2 = 11 - $resto) >= 10) {
        $verificador2 = 0;
    }
    // var_dump($verificador2);
    if ($verificador2 != $cpf[10]) {
        return false;
    }
    return true;
}

/**
 * Função responsável por facilitar o retorno do caminho dos assets da aplicação
 * @param string $file
 * @param string $assetDir
 * @return string
 */

function asset(string $file = '', string $assetDir = '')
{
    return base_url('assets/' . $assetDir . '/' . $file);
}

/**
 * Retorna a diferença em dias de duas datas
 * @return float
 */
function diferencaEmDias($dataInicial, $dataFinal)
{
    $diferenca = strtotime($dataFinal) - strtotime($dataInicial);
    $dias = floor($diferenca / (60 * 60 * 24));
    return $dias;
}
