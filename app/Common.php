<?php

/**
 *  Retorna o cpf válido baseando-se nos digitos mutiplicadores
 *  @return bool
 *  @param string $cpf
 * 
 */


function cpfValido(string $cpf)
{
    $cpf = str_replace(['.', '-'], ['', ''], $cpf);
    $somador = 0;
    $multiplicador = 10;
    for ($i = 0; $i < 9; $i++) {
        $somador += (($multiplicador - $i) * $cpf[$i]);
    }
    $resto = $somador % 11;

    if (($verificador1 = 11 - $resto) > 11) {
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

    if (($verificador2 = 11 - $resto) > 11) {
        $verificador2 = 0;
    }

    if ($verificador2 != $cpf[10]) {
        return false;
    }
    return true;
}

function asset ($file = '', $assetDir = '')
{
    return base_url('assets/' . $assetDir . '/' . $file);    
}
