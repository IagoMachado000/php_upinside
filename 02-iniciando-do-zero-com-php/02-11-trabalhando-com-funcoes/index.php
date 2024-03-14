<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
/**
 * Funções são blocos de códigos executáveis ao serem invocados. Para invocar uma função basta passar seu nome com parênteses na frente, sem esses, a mesma não é invocada
 * 
 * Podemos passar argumentos para uma função, ou seja, variáveis externas que serão usadas dentro dela, sem os argumentos, funções não tem acesso a variáveis fora do seu escopo. Os argumentos são definidos dentro dos parênteses ao se criar uma função. E para passar parâmetros para a mesma, quando for invocada, passamos as variáveis desejadas dentro dos parênteses, ma mesma ordem em que foram definidos na sua criação
 * 
 * Podemos passar argumentos opcionais, sendo que esses sempre devem estar no final da lista.
 * 
 * Caso todos os argumentos sejam obrigatórios, e na invocação da função não passemos todos, receberemos um fatal erro e a execução do script será finalizado, para isso podemos usar argumentos opcionais, para que a execução da função seja feita apenas com os obrigatórios, caso existam. Os opcionais recebem valores padrão que podem ser mudados na invocação da função 
 * 
 * Ordem de argumentos: obrigatórios, importantes (tem um valor padrão) e opcionais (são opcionais)  
 * 
 *   
*/
require __DIR__ . "/functions.php";
// Invocação da função 
echo "<pre>";
var_dump(functionName("Pearl Jean", "AC\DC", "Alter Bridge"));
echo "</pre>";

echo "<pre>";
var_dump(functionName("João", "Maria", "Pedro"));
echo "</pre>";

// Invocando função com parâmetros opcionais
echo "<pre>";
var_dump(optionArgs("Carro"));
echo "</pre>";

echo "<pre>";
var_dump(optionArgs("Carro", "Moto"));
echo "</pre>";

echo "<pre>";
var_dump(optionArgs("Carro", "Moto", "Avião"));
echo "</pre>";
/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
/**
 * Quando usamos a palavra chave global dentro de uma função, estamos indicando que ela pode ter acesso a variáveis fora do seu escopo, sem a necessidade de passarmos argumentos 
*/

// Função com global variáveis
$weight = 86;
$height = 1.83;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
/**
 * Argumentos estáticos (variáveis estáticas) mantém seu valor entre as diversas chamadas de um função ao invés de ter seu valor redefinido a cada nova chamada permitindo encapsular dados dentro da função, mantendo a flexibilidade e a modularidade do código. 
*/

// Static Arguments
$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
/**
 * Argumentos dinâmicos se refere a capacidade de uma função aceitar um número variável de argumentos durante sua chamada. Esses argumentos são passados para a função sem a necessidade de declará-los explicitamente na definição da função. 
*/

// Dinamic Arguments
echo "<pre>";
var_dump(myTeam("João", "Pedro", "Maria", "Alice"));
echo "</pre>";