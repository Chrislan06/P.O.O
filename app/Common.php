<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
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