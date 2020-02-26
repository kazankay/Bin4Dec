<?php


if($_POST['action']){
    $bin = $_POST['binario'];
    
    //$dec = bindec($bin) // função que faz a conversão sozinha

    $tamanhoDoCampo = strlen($bin);
    $potencia = array(); 
    $numero = array();
    $calculo = array();
    
    // recebe o valor da potência e valor de cada campo do binario
    for ($i=0; $i < $tamanhoDoCampo;  $i++) { 
        $potencia[] = $tamanhoDoCampo - $i - 1;  
        $numero[] = substr($bin, ($i * (-1)), 1);
    }
    // Armazena os valores de cada potência calculada
    for ($i=0; $i < $tamanhoDoCampo; $i++) { 
        $caculo[] = $numero[$i]* pow(2, $potencia[$i]);
    }

    $dec = array_sum($caculo);
    

    echo ($dec);
}


?>