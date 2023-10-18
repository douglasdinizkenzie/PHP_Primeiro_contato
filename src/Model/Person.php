<?php

Class Person {
    private $birthYear;
    private $name;
    // ^ NÃO CONSEGUIMOS ACESSAR ESSA INFORMAÇÃO ATRAVÉS DE UMA INSTANCIA, APENAS COM MÉTODOS DENTRO DA CLASSE
    public $nickname;
     // ^ PUBLIC INDICA QUE PODEMOS ACESSAR ESSA INFORMAÇÃO ATRAVÉS DE UMA INSTANCIA

    public function __construct(
         string $birthYear, 
         string $name, 
         string $nickname
        ){
            $this->birthYear = $birthYear;
            $this->name = $name;
            $this->nickname = $nickname;
        }

    public function returnName(){
        return $this->name;
    }

    public function changeNickName($nickname){
        return $this->nickname = $nickname;
    }


    public function returnAge() {
        $dateToday = new DateTime('now');
        return $dateToday->format('Y') - $this->birthYear;
    }

};