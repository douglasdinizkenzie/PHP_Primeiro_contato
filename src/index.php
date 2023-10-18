<?php

$name = '';
// > VARIÁVEL


if ($name == "Douglas"){
    echo 'O nome é' . $name;
} else{
    echo "outro nome";
}
// ^ CONDICIONAL
echo '<br>';


$has_name = $name =! "" ? "Há nome" : "Não há nome";
$has_name_2 = ($name) ? "Há nome" : "Há nome";
// ^ TERNÁRIO
echo $has_name_2;
echo '<br>';


$meuArray = ['1', 'a', 'b', '3'] ;
// ^ ARRAY


[$numero1, , ,$numero4] = $meuArray;
echo $numero4;
echo '<br>';
// CAPTURAR UM VALOR DO ARRAY


$person = [
       'name' =>  'Douglas', 
       'age' => '23',
       'number' => '00000000',

       ] ;
// ^ OBJETOS SÃO FEITOS NO ARRAY (MEIO CONFUSO...), CHAVE E VALOR


print_r($person);
// ^ PARA LISTAR UM ARRAY COM "CONSOLE.LOG", É NECESSÁRIO USAR O PRINT_R
echo '<br>';


echo $person['age'];
// ^ CAPTURA O VALOR DA CHAVE ESPECIFICADA
echo '<br>';


['number' => $number] = $person;
echo $number;
// TAMBÉM CAPTURA O VALOR DE ACORDO COM A CHAVE ESPECIFICADA. EQUIVALENTE AO DESESTRUTURAMENTO EM JS
echo "<br>";


$novosValores = [...$person, 'sex' => 'masculino'];
print_r($novosValores);
// ^ ATRIBUI UM NOVO VALOR PARA A LISTA
echo '<br>';


//  meuArray.forEach((elem) => {            <---- JAVASCRIPT
//     console.log(elem)
// })


foreach($meuArray as $elem) {
    echo $elem;
    echo '<br>';
};
// ^ FOREACH NO PHP
echo "<br>";


array_push($meuArray, 'valor adicionado');
print_r ($meuArray);
echo '<br>';
// OU
$meuArray[] = 'Outro valor adicionado';
print_r ($meuArray);
echo '<br>';
// ^ AMBOS SERVEM PARA ADICIONAR UM NOVO VALOR AO ARRAY


unset($meuArray[2]);
print_r($meuArray);
// ^ USADO PARA RETIRAR UM VALOR ATRAVÉS DO INDEX. PORÉM O INDEX TAMBÉM É REMOVIDO, PORTANTO DEVEMOS FAZER O SEGUINTE:
echo "<br>";
$arrayFormatadoEOrdenado = array_values($meuArray); 
// ^ DESSA FORMA O ARRAY SERÁ NOVAMENTE ORDENADO CORRETAMENTE.
print_r($arrayFormatadoEOrdenado);

echo "<br>";






// -------------------------------------------------------------------------------------------------
                                        // TESTE DE CLASSES (POO) NO PHP



require_once "./Model/Person.php";
// ^ DESSA MANEIRA SE IMPORTA UM ARQUIVO

$uglyPerson = new Person("2000", "Douglas", "Doug");
echo print_r($uglyPerson);
// ^ INSTANCIANDO UMA CLASSE, OU CRIANDO UMA NOVA PESSOA

echo '<br>';

$prettyPerson = new Person ("2000", "Letícia", "Cabeção");
echo print_r($prettyPerson);
// ^ CRIANDO MAIS UMA PESSOA USANDO A MESMA CLASSE ANTERIORMENTE
echo '<br>';

//
echo $prettyPerson->returnName();
echo "<br>";
echo $uglyPerson->returnName();
// ^ RETURN NAME É UM MÉTODO CRIADO NA CLASSE PARA QUE MOSTRE O NOME DO OBJETO INSTANCIADO

echo "<br>"; 

echo $prettyPerson->changeNickName('Cabeção PATH');
// ^ MÉTODO NA CLASSE QUE IRÁ MUDAR O NICKNAME DO OBJETO
echo "<br>";
echo print_r($prettyPerson);

echo '<br>'; 

echo $prettyPerson->returnAge();
// ^ MÉTODO DENTRO DA CLASSE QUE RETORNA A IDADE, FOI USADO A CLASSE DO PHP "DATETIME"

echo "<br>";



// ---------------------------------------------------------- TESTANTO HERANÇA

require_once './Model/Alien.php';

$alien1 = new Alien("1995", "Bilu", "Bilutetéia", "Agressivo");
// ^ CRIANDO UM NOVO OBJETO ATRAVÉS DA CLASSE HERDADA

echo print_r($alien1);

echo "<br>";

echo $alien1->returnTypeOfAlien();
// ^ MÉTODO QUE EXISTE NA CLASSE FILHA

echo "<br>";

echo $alien1->nickname;

echo "<br>";