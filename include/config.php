<?php

if($_POST['action']){
    $bin = $_POST['binario'];

    $dec = bindec($bin);

    echo $dec;

}


?>