<?php

require_once('Person.php');

// HERANÇA

Class Alien extends Person {

    private string $typeAlien;

    // ^ Novo atributo da classe filha

    public function __construct(
        string $birthYear, 
        string $name, 
        string $nickname,
        string $typeAlien
        // ^ Classe filha receberá um argumento a mais
        )
        {
        parent::__construct(
            $birthYear,
            $name,
            $nickname
        );
        $this->typeAlien = $typeAlien;
        //  ^ Setar um novo atributo que será recebido por argumento 
    }

    public function returnTypeOfAlien(){
        return $this->typeAlien;
    }
    // ^ Função que só está disponível na classe filha
}