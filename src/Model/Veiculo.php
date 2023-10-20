<?php

abstract class Veiculo {

    public function __construct(
        protected string $cor, 
        protected string $modelo, 
        protected string $ano
        )
    {
    }

    abstract function obterCor();
    abstract function mudarCor($cor);
    abstract function obterAno();
    abstract function calcularIdade();
}