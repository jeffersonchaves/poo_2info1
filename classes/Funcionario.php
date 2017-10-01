<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 14/09/17
 * Time: 10:39
 */
class Funcionario
{
    public $nome;
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;
    const  SALARIO_DECIMO_E_FERIAS = 13.3;

    public function recebeAumento(float $aumento)
    {


        $this->salario = $this->salario + ($this->salario * abs($aumento));

    }

    public function calculaGanhoAnual()
    {

        return $this->salario * self::SALARIO_DECIMO_E_FERIAS;

    }

    public function mostra()
    {
        echo "O funcionário {$this->nome} recebe anualmente 
        {$this->calculaGanhoAnual()} reais";
    }
}