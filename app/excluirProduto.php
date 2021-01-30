<?php

    require_once("conexao.php");


    if(!isset($_GET['codigo'])){
        echo "<script>window.location = '../pages/listaProdutos.php'</script>";
    }
    else{
        $query = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
        $query->execute(array($_GET['codigo']));

        if($query->rowCount()){
            $query = $conexao->prepare("DELETE FROM produtos WHERE id = ?");
            $query->execute(array($_GET['codigo']));

            echo "<script>window.location = '../pages/listaProdutos.php</script>";
        }
        else{
            echo "<script>window.location = '../pages/listaProdutos.php</script>";
        }
    }

?>