<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/08/17
 * Time: 16:00
 */
class Conta
{
    //Atributos
    public $numeroConta;
    public $dono;
    public $saldo;

    public function deposita(float $valor){

        $this->saldo += abs($valor);
    }

    public function saca(float $valor):bool {
        if ($valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    public function transferePara(Conta $contaDestino, float $valor):bool {

        $deuCerto = $this->saca($valor);

        if ($deuCerto){
            $contaDestino->deposita($valor);
            return true;
        } else {
            return false;
        }
    }
}

















