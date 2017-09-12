<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/08/17
 * Time: 16:11
 */

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta->dono = "jefferson";
$minhaConta->numeroConta = "144236";
$minhaConta->saldo = 500.00;

$minhaConta->deposita(900);

$conseguiSacar = $minhaConta->saca(300);

if ($conseguiSacar){
    echo "consegui sacar \n";
} else {
    echo "saldo insuficiente para sacar \n";
}


$contaBryan = new Conta();
$contaBryan->dono  = "Bryan Krüger";
$contaBryan->saldo = 0;

$minhaConta->transferePara($contaBryan, 1100);

var_dump($minhaConta);
var_dump($contaBryan);

//
//
//echo "O cliente {$minhaConta->dono} possui saldo de {$minhaConta->saldo}";