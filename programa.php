<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/08/17
 * Time: 16:11
 */

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta->dono = "Jefferson";
$minhaConta->numeroConta = "144236";
$minhaConta->saldo = 500.00;

$minhaConta->deposita(900);

$conseguiSacar = $minhaConta->saca(301);

if ($conseguiSacar){
    echo "consegui sacar \n";
} else {
    echo "saldo insuficiente para sacar \n";
}


echo "O cliente {$minhaConta->dono} possui saldo de {$minhaConta->saldo}";