<?php
    require "config.php";

    try {
        $dbcon = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DATA_BASE);
    } catch (Exception $th) {
        echo "Erro! Ocorreu um problema ao tentar aceder a base de dados.";
    }
    
?>