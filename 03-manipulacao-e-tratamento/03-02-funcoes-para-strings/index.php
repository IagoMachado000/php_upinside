<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

/**
 * String (string de byte único) usam um byte por caractere
 * 
 * String Multibyte podem usar múltiplos bytes para representar um único caractere, permitindo suporte a uma gama mais ampla de idiomas e scripts
 */

$string = "O último show do AC/DC foi incrível!";

var_dump(["string" => $string]);
echo "<br>";

var_dump(["strlen" => strlen($string)]); // Os acentos não são aceitos, ou seja, são contados como uma caracter
echo "<br>";

var_dump(["mb_strlen" => mb_strlen($string)]);
echo "<br>";

var_dump(["substr" => substr($string, 9)]); // Tras junto um espaço como primeiro caracter
echo "<br>";

var_dump(["mb_substr" => mb_substr($string, 9)]); // Exclui o espaco inicial
echo "<br>";

var_dump(["strtoupper" => strtoupper($string)]); // Nõ converte os caracteres com acento
echo "<br>";

var_dump(["mb_strtoupper" => mb_strtoupper($string)]);
echo "<br>";

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */ 
fullStackPHPClassSession("conversão de caixa", __LINE__);
$mbString = $string;

var_dump(["mb_strtoupper" => mb_strtoupper($mbString)]);
echo "<br>";

var_dump(["mb_strtolower" => mb_strtolower($mbString)]);
echo "<br>";

var_dump(["mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER)]);
echo "<br>";

var_dump(["mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER)]);
echo "<br>";

var_dump(["mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE)]);
echo "<br>";


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);
$mbReplace = $mbString . " Fui, iria novamente, e foi épico!";

var_dump(["mb_strlen" => mb_strlen($mbReplace)]);
echo "<br>";

var_dump(["mb_strpos" => mb_strpos($mbReplace, ", ")]);
echo "<br>";

var_dump(["mb_strrpos" => mb_strrpos($mbReplace, ", ")]);
echo "<br>";

var_dump(["mb_substr" => mb_substr($mbReplace, 40 + 2, 14)]);
echo "<br>";

var_dump(["mb_strstr" => mb_strstr($mbReplace, ", ", true)]);
echo "<br>";

var_dump(["mb_strrchr" => mb_strrchr($mbReplace, ", ", true)]);
echo "<br>";

$mbStrReplace = $string;

echo "<p>", $mbStrReplace ,"</p>";

echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrReplace) ,"</p>";

echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrReplace) ,"</p>";

echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICOOO!!"], $mbStrReplace) ,"</p>";

$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
ROCK;

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace,
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Fulano&email=fulano@email.com";
mb_parse_str($endPoint, $parseEndPoint);

var_dump(["endPoint" => $endPoint]);
echo "<br>";


var_dump(["parseEndPoint" => $parseEndPoint]);