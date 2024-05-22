<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

// Criando um diretório
$folder = __DIR__ . '/storage';

// Verificando se o diretório não existe ou se não é um diretório
if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, 0777);

} else {
    // Abrindo um diretório
    echo '<pre>';
    var_dump(scandir($folder));
    echo '</pre>';
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

// Copiando e renomeando arquivos
$folder2 = __DIR__ . '/temp';

if (!file_exists($folder2) || !is_dir($folder2)) {
    mkdir($folder2, 0777);
}

$file = __DIR__ . '/file.txt';

echo '<pre>';
var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__),
);
echo '</pre>';

// Verificando se o arquivo não existe ou se não é um arquivo
if (!file_exists($file) || !is_file($file)) {
    // Criando um arquivo
    fopen($file, 'w');

} else {
    // Copiando um arquivo para outro diretório
    //copy($file, $folder . '/' . basename($file));

    // Renomeando o arquivo para não ocorrer sobrescrita
    //rename(__DIR__ . '/storage/file.txt', __DIR__ . '/storage/file-' . time() . '.' . pathinfo($file)['extension']);

    // Movendo um arquivo de diretório
    //rename($file , __DIR__ . '/storage/file-' . time() . '.' . pathinfo($file)['extension']);
}

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

// Removendo e deletando arquivos
$folder3 = __DIR__ . '/remove';

if (!file_exists($folder3) || !is_dir($folder3)) {
    mkdir($folder3, 0777);
}

// Deletando um diretório
//rmdir(__DIR__ . '/remove');

$dirRemove = __DIR__ . '/remove';
$dirFiles = array_diff(scandir($dirRemove), ['.', '..']);
$dirCount = count($dirFiles);

echo '<pre>';
var_dump($dirFiles);
echo '</pre>';

// Removendo os arquivos do diretório para que ele seja deletado
if ($dirCount >= 1) {
    echo '<h2>Clear ...</h2>';
    foreach (scandir($dirRemove) as $fileItem) {
        $fileItem = __DIR__ . "/remove/{$fileItem}";

        if (file_exists($fileItem) && is_file($fileItem)) {
            // echo '<pre>';
            // var_dump($fileItem);
            // echo '</pre>';
            unlink($fileItem);
        }
    }
} else {
    rmdir($dirRemove);
}
