<?php
// Uma sessão é um arquivo
session_save_path(__DIR__ . '/session');

// Nomeando a sessão
session_name('FSPHPSESSID');

// A sessão sempre deve ser inicializada na abertura do arquivo
session_start();

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

// Cookies são dados armazenados no dispositivo do usuário e podem ser acessados na próxima vez que o usuário estiver navegando pela aplicação 

// Nome cookie, valor cookie, tempo de permanência do cookie
setcookie('fsphp', 'Esse é o meu cookie', time() + 10);

$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


echo '<pre>';
var_dump([
    $_COOKIE,
    $cookie
]);
echo '</pre>';

// Cookies válidos por 1 semana
$time = time() + 60 * 60 * 24 * 7;

$user = [
    'user' => 'root',
    'pass' => '12345',
    'expire' => $time
];

setcookie(
    'fslogin',
    http_build_query($user),
    $time,
    '/',
    'localhost',
);

$login = filter_input(INPUT_COOKIE, 'fslogin', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($login) {
    echo '<pre>';
    var_dump($login);
    echo '</pre>';

    parse_str($login, $user);

    echo '<pre>';
    var_dump($user);
    echo '</pre>';
}

/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

// Sessões ficam armazenadas enquanto o usuário está interagindo com a aplicação, mas sem interrupções significativas e são usadas para gerenciar e manter informações sobre o estado do usuário enquanto ele navega pela aplicação

echo '<pre>';
var_dump([
    $_SESSION,
    [
        'id' => session_id(),
        'name' => session_name(),
        'status' => session_status(),
        'save_path' => session_save_path(),
        'cookie' => session_get_cookie_params()
    ]
]);
echo '</pre>';

// Criando uma sessão de login
$_SESSION['login'] = (object)$user;
$_SESSION['user'] = (object)$user;

// Destruindo uma sessão
// unset($_SESSION['user']);

// Destruindo todas as sessões
// session_destroy();