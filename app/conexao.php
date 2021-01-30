<?php 

    $host = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $bd = "usalidades_db";

    try{
        $conexao = new PDO("mysql:host=$host;dbname=$bd;", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $erro){
        echo "Ocorreu um erro ao tentar se conectar com o bando de dados. {$erro->getMessage()}";
        $conexao = null;
    }

?>