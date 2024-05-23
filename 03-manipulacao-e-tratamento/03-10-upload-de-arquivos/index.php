<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

// Criando o diretório de upload de arquivos
$folder = __DIR__ . '/storage';

if (!file_exists($folder) || !is_dir($folder)) {
    mkdir($folder, '0777');
}

// Descobrindo limites de envio de arquivo do servidor
echo '<pre>';
var_dump([
    // Máximo para um arquivo individual
    'filesize' => ini_get('upload_max_filesize'),

    // Máximo para todos arquivos enviados + dados do formulário
    'postsize' => ini_get('post_max_size'),
]);
echo '</pre>';

// O que não podemos aceitar no upload
echo '<pre>';
var_dump([
    filetype(__DIR__ . '/index.php'),

    // Definimos os tipos de arquivos que aceitamos com base no mime type (tipo de mídia) do arquivo
    mime_content_type(__DIR__ . '/index.php')
]);
echo '</pre>';

$getPost = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_BOOLEAN);

if ($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES['file'];
    
    echo '<pre>';
    var_dump($fileUpload);
    echo '</pre>';

    $allowedTypes = [
        'image/jpg',
        'image/jpeg',
        'image/png',
        'application/pdf',
    ];

    $newFileName = time() . mb_strstr($fileUpload['name'], '.');
    
    if (in_array($fileUpload['type'], $allowedTypes)) {
        if (move_uploaded_file($fileUpload['tmp_name'], __DIR__ . "/storage/{$newFileName}")) {
            echo "<p class='trigger accept'>Arquivo enviado com sucesso</p>";

        } else {
            echo "<p class='trigger error'>Error inesperado.</p>";
        }
        
    } else {
        echo "<p class='trigger error'>Tipo de arquivo não permitido</p>";
    }

} elseif ($getPost) {
    echo "<p class='trigger warning'>Whoops, parece que o arquivo é muito grande</p>";

} else {
    if ($_FILES) {
        echo "<p class='trigger warning'>Selecione um arquivo antes de enviar!</p>";
    }
}


// Incluindo o formulário
include __DIR__ . '/form.php';

echo '<pre>';
var_dump(scandir(__DIR__ . '/storage'));
echo '</pre>';