<?php

use Source\MyClass;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
/**
 * Constantes tem seus valores imutáveis e devem ser todas declaradas em um arquivo separado 
 * 
 * Podemos definir constantes de duas formas: define() e const
 * 
 * define() é uma função que pode ser chamada em qualquer lugar do código, incluindo dentro de funções e métodos. E é avaliado em tempo de execução. Isso significa que o valor da constante é definido quando a função define() é chamada.
 * 
 * const é uma construção de linguagem que só pode ser usada fora de funções ou métodos, ou seja, ela deve ser definida no nível mais alto de escopo. E é avaliado em tempo de compilação. Isso significa que o valor da constante é definido durante a análise do script pelo interpretador PHP.
 * 
 * Constantes não são interpretadas dentro de aspas simples ou duplas, nem mesmo protegendo a variável, apenas usando concatenação 
 * 
 * O melhor uso de const é dentro de classes, pois dentro dessas não é possível usar define()
*/

define('COURSE', 'Full Stack PHP');
const AUTHOR = 'Pedro';

$formation = true;
if($formation){
    define('COURSE_TYPE', 'Formação');
    // const TESTE = 'teste';
}else{
    define('COURSE_TYPE', 'Curso');
}

echo "<p>COURSE - AUTHOR - COURSE_TYPE</p>";
echo "<p>{COURSE} - {AUTHOR} - {COURSE_TYPE}</p>";
echo '<p>' . COURSE . ' - ' . AUTHOR . ' - ' . COURSE_TYPE . '</p>';

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>" . Config::USER . "</p>";
echo "<p>" . Config::HOST . "</p>";
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

echo '<pre>';
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);
echo '</pre>';

function fullStackPHP()
{
    return __FUNCTION__;
}
echo '<pre>';
var_dump(fullStackPHP());
echo '</pre>';

trait MyTrait
{
    public $traitName = __TRAIT__;
}

class FsPHP
{
    use MyTrait; 
    public $className = __CLASS__;
}
echo '<pre>';
var_dump(new FsPHP());
echo '</pre>';

require __DIR__ . "/MyClass.php";
echo '<pre>';
var_dump([
    new MyClass(),
    MyClass::class,
]);
echo '</pre>';