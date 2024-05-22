<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
// Formas e criar um array

// Construtor array
$arr1 = array(1, 2, 3);

// Notação simples
$arr2 = [1, 2, 3];

var_dump($arr1);

$arrIndex = [
    "João",
    "Maria",
    "Pedro",
];

var_dump($arrIndex);

// Adicionando novos itens ao final do array
$arrIndex[] = "Felipe";
$arrIndex[] = "Arthur";

var_dump($arrIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);
$arrAssoc = [
    "Goleiro" => "Pedro",
    "Zagueiro" => "João",
    "Meio Campo" => "Arthur",
];

var_dump($arrAssoc);

$arrAssoc["Atacante"] = "Caio";

var_dump($arrAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump([
    "Brian" => $brian,
    "Angus" => $angus,
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);
$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phil"
];

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
];

echo "<p>O vocal da banda AC/DC é {$acdc['vocal']}, e junto com {$acdc['solo_guitar']} fazem um ótimo show de rock!</p>";


$rockBands = [
    "acdc" => $acdc,
    "pearl" => $pearl,
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl']['vocal']}</p>";

echo "<br>";

foreach ($acdc as $value) {
    echo "<p>{$value}</p>";
};

echo "<br>";

foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
};

echo "<br>";

foreach ($rockBands as $rockBand) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
};