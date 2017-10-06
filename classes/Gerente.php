<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 05/10/17
 * Time: 11:05
 */
require_once "Funcionario.php";

class Gerente extends Funcionario
{
    private $senhaCofre;
    private $numeroFuncionariosGerenciados;

    /**
     * @return mixed
     */
    public function getSenhaCofre()
    {
        return $this->senhaCofre;
    }

    /**
     * @param mixed $senhaCofre
     */
    public function setSenhaCofre($senhaCofre)
    {
        $this->senhaCofre = $senhaCofre;
    }

    /**
     * @return mixed
     */
    public function getNumeroFuncionariosGerenciados()
    {
        return $this->numeroFuncionariosGerenciados;
    }

    /**
     * @param mixed $numeroFuncionariosGerenciados
     */
    public function setNumeroFuncionariosGerenciados($numeroFuncionariosGerenciados)
    {
        $this->numeroFuncionariosGerenciados = $numeroFuncionariosGerenciados;
    }

    public function mostra()
    {
        parent::mostra();
    }

}

//Não faça isso em casa

$joao = new Gerente();
$joao->nome = "Joao Ricardo Silva";
$joao->setNumeroFuncionariosGerenciados(2);
$joao->setSenhaCofre(12345);

$joao->mostra();