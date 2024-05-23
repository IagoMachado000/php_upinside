<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='index.php'>Clear</a></h1>";
// echo "<p><a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";

// Lista de argumentos
$data = [
    'name' => 'Iago',
    'city' => 'Itaocara',
    'country' => 'RJ'
];

// Enviando dados para a url transformando-os em argumentos válidos
$arguments = http_build_query($data);
// echo "<p><a href='index.php?{$arguments}'>Argumentos do array data</a></p>";

// echo '<pre>';
// var_dump([
//     '$data' => $data,
//     '$arguments' => $arguments,
// ]);
// echo '</pre>';

echo '<pre>';
// var_dump($_GET);
echo '</pre>';

// Podemos usar um objeto também
$object = (object)$data;

echo '<pre>';
// var_dump([
//     $object,
//     http_build_query($object)
// ]);
echo '</pre>';

/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter = http_build_query([
    'name' => 'Iago',
    'city' => 'Itaocara',
    'country' => 'RJ',
    'script' => '<script>alert("Esse é o JavaScript")</script>'
]);

echo "<p><a href='index.php?{$dataFilter}'>Data Filter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if ($dataUrl) {
    if (in_array("", $dataUrl)) {
        echo "<p class='trigger warning'>Faltam dados.</p>";
        
    } elseif (empty($dataUrl['city'])) {
        echo "<p class='trigger warning'>Precisamos da cidade.</p>";
        
    } else {
        echo "<p class='trigger accept'>Tudo certo.</p>";
        
    }

} else {
    var_dump(false);
}


echo '<pre>';
var_dump($dataUrl);
echo '</pre>';

parse_str($dataFilter, $arrDataFilter);

$dataPreFilter = [
    'name' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'city' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'country' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'script' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
];

echo '<pre>';
var_dump(filter_var_array($arrDataFilter, $dataPreFilter));
echo '</pre>';