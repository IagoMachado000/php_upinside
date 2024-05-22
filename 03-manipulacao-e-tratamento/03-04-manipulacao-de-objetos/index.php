<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

/**
 * Podemos criar objetos de 2 formas
 * 
 * Convertendo um array em um objeto
 * 
 * Utilizando a classe dinâmica StdClass
 */

$arrProfile = [
    "name" => "Fulano",
    "company" => "Aquela Empresa",
    "mail" => "fulano@aquelaempresa.com",
];

$objProfile = (object)$arrProfile; // Convertendo um array em objeto

var_dump($arrProfile);
echo "<br><br>";

var_dump($objProfile);
echo "<br><br>";

// Acessando índices de um array
echo <<<PFL
    <h1>{$arrProfile['name']}</h1>
    <p>{$arrProfile['company']}</p>
    <p>
        <a href='mailto:{$arrProfile['mail']}' title='Enviar email para {$arrProfile['mail']}'>Enviar email</a>
    </p>
PFL;

echo "<br><br>";

// Acessando propriedades de um objeto
echo <<<PFL
    <h1>{$objProfile->name}</h1>
    <p>{$objProfile->company}</p>
    <p>
        <a href='mailto:{$objProfile->mail}' title='Enviar email para {$objProfile->mail}'>Enviar email</a>
    </p>
PFL;

echo "<br><br>";

$ceo = $objProfile;
unset($ceo->company); // Eliminando uma propriedade do objeto

var_dump($ceo);
echo "<br><br>";

$company = new StdClass(); // Criando um objeto dinâmico a partir da classe StdClass
$company->company = "Outra Empresa";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Ciclano";
$company->manager->mail = "ciclano@outraempresa.com";

var_dump($company);
echo "<br><br>";

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump(['classe' => get_class($date)]); // A qual classe um objeto pertence
echo "<br><br>";

var_dump(['metodos' => get_class_methods($date)]); // Quais métodos a classe do objeto implementa
echo "<br><br>";

var_dump(['variaveis' => get_object_vars($date)]); // Quais propriedades existem dentro de um objeto
echo "<br><br>";

var_dump(['parente' => get_parent_class($date)]); // Qual classe o objeto herda
echo "<br><br>";

var_dump(['subclasse' => is_subclass_of($date, "DateTime")]); // Qual classe o objeto é filho
echo "<br><br>";

echo "<br><br>";

$exception = new PDOException();

var_dump(['classe' => get_class($exception)]); // A qual classe um objeto pertence
echo "<br><br>";

var_dump(['metodos' => get_class_methods($exception)]); // Quais métodos a classe do objeto implementa
echo "<br><br>";

var_dump(['variaveis' => get_object_vars($exception)]); // Quais propriedades existem dentro de um objeto
echo "<br><br>";

var_dump(['parente' => get_parent_class($exception)]); // Qual classe o objeto herda
echo "<br><br>";

var_dump(['subclasse' => is_subclass_of($exception, "Exception")]); // Qual classe o objeto é filho
echo "<br><br>";