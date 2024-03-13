<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
// Closure é uma função anonima, ou seja, não tem seu nome definido
// Basicamente servem para que possamos executar um trecho de código repetido várias vezes dentro do arquivo, mas que de fato não precise virar uma função
$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos</p>";
};
echo $myAge(1996);
echo $myAge(1980);
echo $myAge(1940);

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};
echo "<p>O projeto custa R$ {$priceBrl(3600)}</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$carAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$carAdd("HTML5", 1, 497);
$carAdd("jQuery", 2, 497);

var_dump($myCart, $carAdd);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
// Generators nos dão a capacidade de iterar sobre objetos sem utilizar recursos de memória do servidor. Se aplica a quando precisamos percorrer grandes massas de dados

// Forma incorreta
$iterator = 10;
function showDates($days) 
{
    $saveDate = [];
    for($day = 1; $day < $days; $day++){
        $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
    }
    return $saveDate;
};
echo "<div style='text-align: center'";
foreach(showDates(0) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
};
echo "</div>";

// Forma correta
function generatorDates($days) 
{
    for($day = 1; $day < $days; $day++){
        yield date("d/m/y", strtotime("+{$day}days"));
    }
};
echo "<div style='text-align: center'";
foreach(generatorDates($iterator) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
};
echo "</div>";