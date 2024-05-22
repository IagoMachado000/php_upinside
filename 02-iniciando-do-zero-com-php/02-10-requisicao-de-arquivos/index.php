<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
/**
 * Representa um recurso que será incluído, mas que não é de fato necessário para a aplicação
 * 
 * Caso o recurso não exista ou tenha um erro, receberemos um erro do tipo WARNING (aviso), mas a execução da aplicação continuara
 * 
 * Sempre que for fazer um include usar o __DIR__."/nomeArquivo" - __DIR__ retorna o caminho absoluto
 * 
 * Quando usamos o include_once o recurso é incluido apenas uma vez, dessa forma, se o recurso já tiver sido incluído anteriormente, uma segunda tentativa de inclusão será ignorada. Deve ser usado quando o recurso precisar ser incluído uma única vez
*/

// include "file.php";
// echo "<p>Olá mundo</p>";

include __DIR__ . "/header.php";

$profile = new stdClass();
$profile->name = "Fulano";
$profile->company = "Fulano Company";
$profile->email = "fulano@email.com";
include __DIR__ . "/profile.php";

$profile->name = "Pedro";
$profile->company = "Fulano Company";
$profile->email = "pedro@email.com";
include __DIR__ . "/profile.php";

$profile->name = "João";
$profile->company = "Fulano Company";
$profile->email = "joao@email.com";
include_once __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
/**
 * Representa um recurso necessário para a execução da aplicação
 * 
 * Caso o recurso não exista ou tenha um erro, receberemos um erro do tipo E_COMPILER_ERROR e a execução da aplicação será encerrada
 * 
 * Quando usamos o require_once o recurso é incluido apenas uma vez, dessa forma, se o recurso já tiver sido incluído anteriormente, uma segunda tentativa de inclusão será ignorada. Deve ser usado quando o recurso precisar ser incluído uma única vez
 * 
 * Por exemplo, caso um arquivo com constantes e funções seja incluido mais de uma vez no mesmo arquivo, teremos um erro, para isso usamos o _once
*/

// require "file.php";
// echo "<p>Olá mundo</p>";

require __DIR__ . "/config.php";
echo "<h1>" . CURSE . "</h1>";

// require __DIR__ . "/config.php";
require_once __DIR__ . "/config.php";
