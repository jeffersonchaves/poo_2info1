<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 14/09/17
 * Time: 10:59
 */

require_once "classes/Funcionario.php";

$gerente = new Funcionario();

$gerente->nome = "Gerson";
$gerente->departamento = "Vendas";
$gerente->salario = 9000.0;

$gerente->recebeAumento(0.3);
$gerente->mostra();
print_r($gerente);

//-------

$seguranca = new Funcionario();

$seguranca->nome = "Robson";
$seguranca->departamento = "Segurança";
$seguranca->salario = 2000.0;

$seguranca->recebeAumento(0.07);
$seguranca->mostra();
