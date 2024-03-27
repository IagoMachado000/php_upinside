<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge",
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

// Add item ao começo do array
array_unshift($index, "", "Pearl Jam"); // array_unshift é aplicado apenas a array com índice numérico
$assoc = ["band_4" => "", "band_5" => "Pearl Jam"] + $assoc;

// Add item ao final do array
array_push($index, ""); // array_push é aplicado apenas a array com índice numérico
$assoc = $assoc + ["band_6" => ""] ;

// Removendo primeiro item do array
array_shift($index);
array_shift($assoc);

// Removendo último item do array
array_pop($index);
array_pop($assoc);

// Filtrando um array
array_unshift($index, "");
$assoc = ["band_6" => ""] + $assoc;

$index = array_filter($index); // array_filer filtra um array com base em um callback personalizada percorrendo cada item e aplicando a função. Caso o retorno seja true pra um determinado elemento, ele será incluído no array resultante, se o retorno for false, o elemento será removido

$assoc = array_filter($assoc); // nesses casos não foi passado um callback, mas como existiam itens com o tipo false (valores vazios) apenas os valores true foram retornados no novo array

var_dump($index);
echo "<br><br>";
var_dump($assoc);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

// Invertendo a ordem de um array
$index = array_reverse($index);
$assoc = array_reverse($assoc);

// Ordenando pelos valores e ignorando as chaves
asort($index);
asort($assoc);

// Ordenando pelas chaves e ignorando os valores
ksort($index); // Esse método de ordenação é mais usado em array com índice numérico
krsort($index); // Inverte a ordenação baseada nas chaves do array

// Ordenando um array e reindexando
sort($index);
rsort($index); // Invertendo a ordenação

var_dump($index);
echo "<br><br>";
var_dump($assoc);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

// Separando chaves de valores
var_dump(array_keys($assoc));
echo "<br><br>";
var_dump(array_values($assoc));
echo "<br><br>";

// Verificando se um item existe dentro do array
if(in_array("AC/DC", $assoc)){
    echo "<p>Cause I'm back!</p>";
}

// Transformando um array em string
$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

echo "<br><br>";

// Transformando uma string em array
var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Fulano",
    "company" => "Qualquer uma",
    "mail" => "fulano@qualqueruma.com.br",
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>
            {{company}}
            <br>
            <a href="mailto:{{mail}}" title="Enviar email para {{mail}}">Enviar E-mail</a>
        </p>
    </article>
TPL;

echo $template;

echo "<br><br>";

// Estamos procurando as chaves da variável $profile dentro de $template, caso encontre, substituir pelos valores da variável $profile
echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

echo "<br><br>";

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";
// var_dump($replace);
echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
); 