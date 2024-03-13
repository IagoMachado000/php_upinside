<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
// Básico de variáveis
$name = 'Fulano'; //Válido
$_name = 'Maria'; //Válido
$_1name = 'João'; //Válido
//$1nome = 'Pedro'; //Inválido; nomes de variáveis devem começar com letras ou underscore

var_dump([
    '$name' => $name,
    '$_name' => $_name,
    '$_1name' => $_1name
]);

echo '<hr>';

// Reatribuição
$age = 25;
$newAge = $age;
$age = 30;

var_dump([
    '$age' => $age, 
    '$newAge' => $newAge,
]);

echo '<hr>';

// Atribuição por referência
$fruit = 'Maçã';
$otherFruit = &$fruit;
$fruit = 'Morango';
//$newFruit = &('Abacaxi'); //Inválido; referencia uma expressão sem nome
function test()
{
    return 25;
}
//$num = &test(); //Inválido

var_dump([
    '$fruit' => $fruit,
    '$otherFruit' => $otherFruit,
    //'$newFruit' => $newAge,
    //'$num' => $num,
]);

echo '<hr>';

// Variáveis predefinidas - Globais
$infosServer = $_SERVER;
$allglobal = $GLOBALS;

var_dump([
    '$infosServer' => $infosServer,
    '$allglobal' => $allglobal,
]);

// Escopo de variáveis

// Escopo Global
$num1 = 10;
echo $num1;

echo '<hr>';

// Escopo local
function hello()
{
    $message = 'Olá mundo';
    echo $message;
}
hello();
//echo $message; //Inválido; a variável $message só existe dentro da função

echo '<hr>';

// Palavra-chave global
$num1 = 10;
function sum()
{
    global $num1; // Ao usar a palavra chave global trazemos a variável pra dentro do escopo da função
    $num2 = 5;
    $total = $num1 + $num2;
    echo $total;
}
sum();

echo '<hr>';

function multiplication()
{
    $num1 = $GLOBALS['num1']; // Podemos usar o array GLOBALS para trazemos variáveis globais pro escopo da função
    $num2 = 5;
    $total = $num1 * $num2;
    echo $total;
}
multiplication();

echo '<hr>';

// Variáveis Estáticas
function increase()
{
    $a = 0; // Todas vez que a função for chamada, o valor de $a voltará a 0
    echo $a;
    $a++;
}
increase();
increase();
increase();

echo '<hr>';

function increase2()
{
    static $a = 0; // Toda vez que a função for chamada, será incrementado + 1 no valor de $a; Isso acontece por conta do static que faz com que a variável $a não perca seu valor quando a execução da função sair do seu escopo
    echo $a;
    $a++;
}
increase2();
increase2();
increase2();

echo '<hr>';

// Variáveis estáticas fornecem uma forma de encerrar corretamente uma função recursiva
function recursive()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        recursive();
    }
    $count--;
}
echo recursive();

echo '<hr>';

/**
 * [ tipo booleano ] true | false
 */
fullStackPHPClassSession("tipo booleano", __LINE__);
$true = true;
$false = false;
var_dump($true, $false);

echo '<hr>';

$userAge = 27;
$bestAge = ($userAge > 50);
var_dump($bestAge);

echo '<hr>';

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
var_dump($a, $b, $c, $d, $e);

echo '<hr>';

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}

echo '<hr>';

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);
$code = "<article>Um Call User Function!</article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

echo "<hr>";

$codeMore = function($code){
    var_dump($code);
};
$codeMore("#BoraProgramar");

echo "<hr>";

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);
// string
$hello = 'Olá mundo';
$hello2 = "Olá mundo 2";
$hello3 = <<<EOD
Olá mundo!
Está é uma string herodoc.
EOD;
$hello4 = <<<'EOD'
Olá mundo!
Está é uma string nowdoc.
EOD;
var_dump([
    "aspas simples" => $hello,
    "aspas duplas" => $hello2,
    "herodoc" => $hello3,
    "nowdoc" => $hello4,
]);

echo "<hr>";

echo '$hello';
echo '<br>';
echo "$hello";
echo '<br>';
echo "{$hello}s";
echo '<br>';

// Array

// Construtor array
$list = array(1, 2, 3);
$list[] = 16;
var_dump($list, $list[0]);

echo '<hr>';

// Notação simples
$list2 = [4, 5, 6];
array_push($list2, 17);;
var_dump($list2, $list2[1]);

echo '<hr>';

// Array associativo
$list3 = ['sete' => 7, 'oito' => 8, 'nove' => 9];
$list3['dezoito'] = 18;
var_dump($list3, $list3['nove']);

echo '<hr>';

// Array multidimensional
$list4 = [
    [10, 11, 12],
    [13, 14, 15],
];
var_dump($list4, $list4[0][1]);

echo '<hr>';

// Expandindo um array
$list5 = array_merge($list, $list2);
var_dump($list5);

echo '<hr>';

$list6 = [$list3, ...$list4];

$list7 = array_merge($list3, $list4);

$list8 = [4, 5, 6, ...$list3, ...$list4];

var_dump([
    'spread operator' => $list6,
    'array merger' => $list7,
    'spread operator 2' => $list8, 
]);

echo '<hr>';

// Desconstruindo um array
$peoples = ['João', 'Maria', 'Pedro', 'José'];
list($nome1, $nome2, $nome3, $nome4) = $peoples;
[$nome5, $nome6, $nome7, $nome8] = $peoples;
var_dump([
    $nome1,
    $nome2,
    $nome3,
    $nome4
]);

echo '<br>';

var_dump([
    $nome5,
    $nome6,
    $nome7,
    $nome8
]);

echo '<hr>';

// Comparando array
$array1 = [1, 2, 3];
$array2 = array(1, 2, 3);
$array3 = [1, 2, 3];

// Comparando conteúdo e ordenação
if($array1 == $array2){
    echo 'Os arrays são iguais';
}else{
    echo 'Os arrays são diferentes';
}

echo '<br>';

// Comparando identidade | Verificando se são exatamente os mesmos, ou seja, referem-se ao mesmo objeto na memória
if($array1 === $array3){
    echo 'Os arrays são iguais';
}else{
    echo 'Os arrays são diferentes';
}

echo '<br>';

// Comparação de diferença
$array4 = [3, 4, 5];

if($array1 != $array4){
    echo 'Os arrays são diferentes';
}else{
    echo 'Os arrays são iguais';
}

echo '<br>';

// A função array_diff retorna um array com os elementos que estão presentes no primeiro parâmetro ($array3) e ausentes no segundo ($array4)
$diferenca = array_diff($array3, $array4);
var_dump($diferenca);