<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define('DATE_BR', 'd/m/Y H:i:s');

$dateNow = new DateTime();

// sempre trabalhar como o formato padrão de data - inglês
$dateBirth = new DateTime('1996-12-14');

// Criando data a partir de um objeto estático
// CreateFromFormat cria uma data a partir do formato passado no primeiro parâmetro. Dessa forma, se o segundo parâmetro não tiver o formato correto, a função retornará um erro
$dateStatic = DateTime::createFromFormat(DATE_BR, '10/03/2020 12:30:00');

echo '<pre>';
var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic,
    get_class_methods($dateNow), 
);
echo '</pre>';

echo '<br><hr>';

// Funções de formatação
echo '<pre>';
var_dump(
    $dateNow->format(DATE_BR),
    $dateNow->format('d'),
);
echo '</pre>';

echo '<hr>';

echo "<p>Hoje é dia {$dateNow->format('d')} do {$dateNow->format('m')} de {$dateNow->format('Y')}</p>";

echo '<hr>';

// Configurando timezone a nível de interface
// Quando instanciamos DateTimeZone estamos trazendo uma nova classe para manipulação de timezone da aplicação
$newTimeZone = new DateTimeZone('Pacific/Apia');

// Definindo o timezone
$newDateTime = new DateTime('now', $newTimeZone);

echo '<pre>';
var_dump(
    $newTimeZone,
    $newDateTime,
);
echo '</pre>';

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

// Criando o intervalo de tempo
// Período de 10 anos, 2 meses e 10 minutos
$dateInterval = new DateInterval('P10Y2MT10M');

$dateTime = new DateTime('now');

$dateTime->add($dateInterval);
//$dateTime->sub($dateInterval);

echo '<pre>';
var_dump(
    $dateInterval,
    $dateTime
);
echo '</pre>';

echo '<hr>';

$birth = new DateTime(date('Y'). '-12-14');
$dateTime = new DateTime('now');

// Diferença do dia atual para $birth
$diff = $dateNow->diff($birth);

echo '<pre>';
var_dump(
    $birth,
    $diff
);
echo '</pre>';

echo '<hr>';

if ($diff->invert) {
    echo "<p>Seu aniversário foi a {$diff->days} dias.</p>";

} else {
    echo "<p>Faltam {$diff->days} dias para seu aniversário.</p>";
}

echo '<hr>';

$dateResources = new DateTime('now');

echo '<pre>';
var_dump(
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString('10days'))->format(DATE_BR),
    $dateResources->add(DateInterval::createFromDateString('20days'))->format(DATE_BR),
);
echo '</pre>';

/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

// Criando um período de datas uma e outra. Podemos usar pulo de datas
$start = new DateTime('now');
$interval = new DateInterval('P1M');
$end = new DateTime('2025-01-01');
$period = new DatePeriod($start, $interval, $end);

echo '<pre>';
var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR),
], $period, get_class_methods($period));
echo '</pre>';

echo '<hr>';

echo '<h1>Sua assinatura:</h1>';
foreach ($period as $recurrences) {
    echo "<p>Próximo vencimento {$recurrences->format(DATE_BR)}</p>";
}