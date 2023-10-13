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
