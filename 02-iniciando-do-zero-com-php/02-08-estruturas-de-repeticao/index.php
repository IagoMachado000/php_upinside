<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);
$looping = 1;
$while = [];

// Loop while
while ($looping <= 5){
    $while[] = $looping;
    $looping++;
}

var_dump($while);

// Loop do...while
// A diferença entre o while e o do...while é que no segundo, haverá sempre pelo menos uma iteração antes da verificação
$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--;

} while($looping >= 1);

var_dump($while);
/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
// Loop for
// atribuição; if; incremento
for($i = 0; $i <= 5; $i++){
    echo "<p>{$i}</p>"; 
}

echo '<br>';

// atribuição; if; decremento
for($j = 5; $j >= 0; $j--){
    echo "<p>{$j}</p>"; 
}

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);
// break e continue são muito úteis dentro de repetições

// Quando continue é executado, faz com que o fluxo da aplicação vá para o final, nesse caso, para a última chave do bloco, dando início a mais um passo do loop

// Quando break é executado ele para o fluxo da aplicação.

for($l = 0; $l <= 5; $l++){
    if($l % 2 == 0){
        continue;
    }
    
    if($l > 7){
        break;
    }

    echo "<p>Pulou + 2 :: {$l}</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);
$array = [];
for ($ar = 0; $ar <= 3; $ar++){
    $array[] = $ar;
}

var_dump($array);

foreach($array as $item){
    var_dump($item);
}

echo '<br>';

foreach($array as $key => $item){
    var_dump("{$key} = {$item}");
}