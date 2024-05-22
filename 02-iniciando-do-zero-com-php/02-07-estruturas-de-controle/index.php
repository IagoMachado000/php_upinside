<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);
$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age = 32;
if($age < 20){
    var_dump('bandas coloridas');
}elseif($age > 20 && $age < 50){
    var_dump('ótimas bandas');
}else{
    var_dump('rock and row raiz');
}

$hour = 23;
if($hour >= 5 || $hour < 23){
    if($hour < 7){
        var_dump('bob marley');
    }else{
        var_dump('after bridge');
    }
}else{
    var_dump('ZZZZzzzzZZZZ');
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);
$rock = "";

// isset() determina se uma variável é considerada definida, isto é, está declarada e é diferente de null.
if(isset($rock)){
    var_dump('rock and row');
}

if(!isset($rock)){
    var_dump('rock and row');
}else{
    var_dump('die');
}

// empty() determina se uma variável é considerada vazia. Uma variável é considerada vazia se não existir ou seu valor for igual a false. Retorna true se var não existir ou se tiver um valor que é vazio ou igual a zero
$rockAndRow = 'AC/DC';
if(empty($rockAndRow)){
    var_dump('rock and row existe');
}else{
    var_dump('não existe ou não está tocando');
}

if(!empty($rockAndRow)){
    var_dump('rock and row existe');
}else{
    var_dump('não existe ou não está tocando');
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);
$payment = 'canceled';

switch ($payment) {
    case 'billet_printed':
        var_dump('boleto impresso');
        break;
    case 'canceled':
        var_dump('pagamento cancelado');
        break;
    case 'past_due':
    case 'pending':
        var_dump('aguardando pagamento');
        break;
    case 'approved':
    case 'completed':
        var_dump('pagamento aprovado');
        break;
    default:
        var_dump('erro ao processar pagamento');
        break;
}



