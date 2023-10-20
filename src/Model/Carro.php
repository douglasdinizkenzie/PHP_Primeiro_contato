<?php

require_once "Veiculo.php";


class Carro extends Veiculo {

    public function __construct(
        string $cor,
        string $modelo,
        string $ano)
    {
        parent::__construct(
             $cor,
             $modelo,
             $ano
        );
    }

    public function obterCor(){
        return $this->cor;
    }

    public function mudarCor($cor){
        $this->cor = $cor;
    }

    public function obterAno(){
        return $this->ano;
    }

    public function calcularIdade(){
        $dataHoje = new DateTime('now');
        return $this->ano - $dataHoje->format('Y');
    }

}