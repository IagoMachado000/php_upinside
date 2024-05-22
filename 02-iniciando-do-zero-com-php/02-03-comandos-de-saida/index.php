<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
echo "Olá mundo"; //echo padrão

echo '<hr>';

echo ("Olá mundo");//também podemos usar parênteses

echo '<hr>';

$nome = 'Fulano';
$idade = 25;
echo "Nome: ", $nome, " | Idade: ", $idade;//podemos passar mais de um valor separado por ,

echo '<hr>';

echo '<p>Nome: $nome</p>';//usando aspas simples, tudo é convertido em string, até as variáveis

echo '<hr>';

echo "<p>Nome: $nome</p>";//para usar variáveis e expressões, deve ser dentro de aspas duplas

echo '<hr>';

echo '<p style="color: red;">Olá mundo</p>';//podes passar tags html e outros tipos de marcação

echo '<hr>';

$num1 = 10;
$num2 = 5;
echo "A soma entre {$num1} e {$num2} é igual a ", ($num1 + $num2);

echo '<hr>';

echo $num1 * $num2;

echo '<hr>';

echo "{$num1} * {$num2}";//não é possível passar expressões dentro das aspas, o operador e convertido em string

echo '<hr>';

?>
<!-- Short echo tag | forma resumida do echo, muito usado para impressões simples de dados -->
<?= "Olá mundo"; ?>

<hr>

<?= "A divisão entre ", $num1, "e ", $num2, "é igual a ", ($num1 / $num2); ?>

<hr>

<?= $num1 - $num2 ?>

<hr>

<?= "$num1 - $num2" ?>

<hr>

<?= '<p style="color:blue;">Olá mundo</p>' ?>

<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
print "Olá mundo";

print '<hr>';

print ("Olá mundo");

print '<hr>';

print "<p style='color:orange;'>Olá mundo</p>";

print '<hr>';

$resultado = print "Olá mundo";//$resultado tem o valor igual a 1

print '<hr>';

print $resultado;//1

print '<hr>';

$nome = 'Fulano';
print "Nome: $nome";

print '<hr>';

$idade = 25;
//print "Nome: ", $nome, "| Idade: ", $idade;//print não suporta impressão de mais valores separados por vírgula 

if($resultado){
    print $nome;
}

print '<hr>';

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
$frutas = array('maçã', 'banana', 'laranja');
print_r($frutas);

print '<hr>';

$dados = array(
    'nome' => 'Fulano',
    'idade' => 25,
    'contatos' => array(
        'email' => 'fulano@email.com',
        'telefone' => '123456789',
    ),
);
print_r($dados);

print '<hr>';

$mensagem = "Olá mundo";
print_r($mensagem);

print '<hr>';

echo '<pre>';
print_r($dados);
echo '</pre>';

print '<hr>';
 
/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
$nome = 'Fulano';
$idade = 30;
printf("Nome: %s, Idade: %d", $nome, $idade);//%s é preenchida pela var $nome e %d pela var $idade

echo '<hr>';

$produto = 'Notebook';
$preco = 1200.50;
printf('Produto: %s, Preço: %.2f', $produto, $preco);

echo '<hr>';

$numero = 42;
printf('Número: %05d', $numero);

echo '<hr>';

$caracteres_impressos = printf('Olá, %s!', 'Mundo');
echo "\nNúmero de caracteres impressos: $caracteres_impressos";

echo '<hr>';

printf("%%b = '%b'", $numero);//binário

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
$valores = array('João', 39);
vprintf('Nome: %s, Idade: %d', $valores);

echo '<hr>';

$dados = array('Notebook', 1200.50);
vprintf('Produto: %s | Preço: %.2f', $dados);

echo '<hr>';

$numero = 42;
vprintf("Número: %05d", array($numero));

echo '<hr>';

$caracteres_impressos = vprintf("Olá, %s!", array("Mundo"));
echo "\nNúmero de caracteres impressos: $caracteres_impressos";

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
$nome = 'Ricardo';
$idade = 30;
var_dump($nome, $idade);

echo '<hr>';

$frutas = array('uva', 'morango', 'abacaxi');
var_dump($frutas);

echo '<hr>';

class Pessoa {
    public $nome = 'Maria';
    public $idade = 25;
}

$pessoa = new Pessoa();
var_dump($pessoa);

echo '<hr>';
$numero = 10;
$resultado = $numero + 15;
var_dump($resultado);