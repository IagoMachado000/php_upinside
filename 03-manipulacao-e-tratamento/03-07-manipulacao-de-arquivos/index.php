<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

// Verificando se um arquivo existe e se de fato é um arquivo
$file = __DIR__ . '/file.txt';

if (file_exists($file) && is_file($file)) {
    echo '<p>Existe</p>';

} else {
    echo '<p>Não existe</p>';
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

// Criando um arquivo caso ele não exista ou não seja um arquivo
if (!file_exists($file) || !is_file($file)) {
    // A função fopen() abre um arquivo passado como primeiro parâmetro e executa uma ação passada como segundo parâmetro, que nesse caso é 'w' que abre somente para leitura, e caso o arquivo não exista, ele é criado
    $fileOpen = fopen($file, 'w');
    fwrite($fileOpen, 'Linha 01' . PHP_EOL);
    fwrite($fileOpen, 'Linha 02' . PHP_EOL);
    fwrite($fileOpen, 'Linha 03' . PHP_EOL);
    fwrite($fileOpen, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.' . PHP_EOL);
    fclose($fileOpen);

} else {
    // A função file() lê todo o arquivo para um array
    // A função pathinfo() retorna informações sobre um caminho de arquivo
    echo '<pre>';
    var_dump(
        file($file),
        pathinfo($file),
    );
    echo '</pre>';
}

echo '<hr>';

echo '<p>' . file($file)[3] . '</p>';

echo '<hr>';

$open = fopen($file, 'r');
while (!feof($open)) {
    echo '<p>' . fgets($open) . '</p>';
}

fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

// Forma simplificadas de escrever e obter dados em um arquivo
$getContents = __DIR__ . '/file2.txt';


if (file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents);

} else {
    $data = <<<TEXT
    <article>
        <h1>Iago</h1>
        <p>iago@email.com</>
        <p>(00) 01234-5678</>
    </article>
    TEXT;
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

// Removendo arquivos
if (file_exists(__DIR__ . '/file3.txt') && is_file(__DIR__ . '/file3.txt')) {
    unlink(__DIR__ . '/file3.txt');
}