<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump(date_default_timezone_get()); // Pegando o timezone do servidor
echo "<br><br>";

// ===============================================================================

var_dump(date(DATE_W3C)); // Pegando data com constantes definidas no php
echo "<br><br>";

// ===============================================================================

var_dump(date("d/m/Y H:i:s")); // Pegando data com formato manual
echo "<br><br>";

// ===============================================================================

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "Pacific/Apia");

date_default_timezone_set(DATE_TIMEZONE); // Definindo o timezone

var_dump(date_default_timezone_get());
echo "<br><br>";

var_dump(date(DATE_BR)); // Como o timezone mudou, a data e hora são diferentes
echo "<br><br>";

// ===============================================================================

define("DATE_BR_", "d/m/Y H:i:s");
define("DATE_TIMEZONE_", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE_); // Definindo o timezone

var_dump(date_default_timezone_get());
echo "<br><br>";

var_dump(date(DATE_BR_)); // Agora, com o timezone correto, a data e hora estarão corretas
echo "<br><br>";

// ===============================================================================

var_dump(getdate()); // a função getdate() retorna um array com vários atributos de date
echo "<br><br>";

echo "<p>Hoje é dia <b>", getdate()['mday'], "</b></p>";
/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

// ===============================================================================
/**
 * A função strtotime() retorna um array com vários atributos relacionados a e nos permite criar expressões para alterarmos a data e hora, como por exemplo, soma ou diminuir 10 dias a partir do dia corrente.  
 */

var_dump([
    'strtotime' => strtotime('now'),
]);
echo "<br><br>";

var_dump([
    'time' => time(),
]);
echo "<br><br>";

var_dump([
    'strtotime+10days' => strtotime("+10days"),
]);
echo "<br><br>";

var_dump([
    'date DATE_BR' => date(DATE_BR),
]);
echo "<br><br>";

var_dump([
    'date +10days' => date(DATE_BR, strtotime('+10days')),
]);
echo "<br><br>";

var_dump([
    'date -10days' => date(DATE_BR, strtotime('-10days')),
]);
echo "<br><br>";

var_dump([
    'date +1year' => date(DATE_BR, strtotime('+1year')),
]);
echo "<br><br>";