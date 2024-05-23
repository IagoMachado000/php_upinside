<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = "Um Nome";
$form->mail = "um@email.com";

echo '<pre>';
// var_dump($_REQUEST);
echo '</pre>';

// Método get interage com a url
// $form->method = 'get';

// Método post envia a requisição
// $form->method = 'post';

// include __DIR__ . "/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

// Trabalhando de forma correta e segura com formulários

// Pegando os dados do formulário
// $post = filter_input(INPUT_POST, 'name', FILTER_DEFAULT); 
// $postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// echo '<pre>';
// var_dump([
//     '$_POST' => $_POST,
//     '$post' => $post,
//     '$postArray' => $postArray
// ]);
// echo '</pre>';

// Validando dados de um formulário
// if ($postArray) {
//     if (in_array("", $postArray)) {
//         echo "<p class='trigger warning'>Preencha todos os campos</p>";

//     } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
//         echo "<p class='trigger warning'>E-mail informado não é válido</p>";
        
//     } else {
//         // array_map aplica uma função para cada item do array, e nesse caso é uma função nativa do php, a strip_tags que vai limpar qualquer tag enviada junto com o campo do formulário, evitando assim possíveis ataques
//         $saveStrip = array_map("strip_tags", $postArray);
//         $save = array_map("trim", $saveStrip);
//         echo '<pre>';
//         var_dump($save);
//         echo '</pre>';

//         echo "<p class='trigger accept'>Cadastro com sucesso</p>";
//     }
    
// }

// $form->method = 'post';
// include __DIR__ . "/form.php";

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

// $get = filter_input(INPUT_GET, 'mail', FILTER_DEFAULT);
// $getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

// echo '<pre>';
// var_dump([
//     '$_GET' => $_GET,
//     '$get' => $get,
//     '$getArray' => $getArray
// ]);
// echo '</pre>';

// $form->method = 'get';
// include __DIR__ . "/form.php";

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

// Filtros 
// Validate verificar se o dado atende a um conjunto de regras pré-definidas.
// Sanitize remove caracteres e formatações indesejadas do dado, tornando-o seguro para armazenamento ou processamento.
echo '<pre>';
var_dump(
    filter_list()
);
echo '</pre>';

$form->method = 'get';
include __DIR__ . "/form.php";

// Aplicando filtros a todos os campos do formulário
$filterForm = [
    'name' => FILTER_SANITIZE_SPECIAL_CHARS,
    'mail' => FILTER_VALIDATE_EMAIL
];

// filter_input_array faz a validação do input
$getForm = filter_input_array(INPUT_GET, $filterForm);

echo '<pre>';
var_dump(
    $getForm
);
echo '</pre>';


echo '<pre>';
var_dump(
    // filter_var_array faz a validação da variável
    filter_var_array($getForm, $filterForm)
);
echo '</pre>';