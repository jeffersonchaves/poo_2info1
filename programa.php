<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/08/17
 * Time: 16:11
 */

require 'classes/Conta.php';
require 'classes/Cliente.php';

$alde = new Cliente();

$alde->nome = "Aldé Chaves";
$alde->cpf = "0488933555-76";
$alde->endereco = "Av. Getulio Vargas 100 - Araquari";

$minhaConta = new Conta();

$minhaConta->setCliente($alde);

print_r($minhaConta);

