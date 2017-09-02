<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/08/17
 * Time: 16:00
 */
class Conta
{

    public $numeroConta;
    public $dono;
    public $saldo;

    public function deposita(float $valor){
        $this->saldo += $valor;
    }

    public function saca(float $valor){
        if ($valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    public function transferePar($contaDestino, float $valor):bool {
        //TODO
        return true;
    }

}