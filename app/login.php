<?php
    require_once("conexao.php");

    if(isset($_POST["nomeUsuario"]) && isset($_POST["senhaUsuario"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM usuarios WHERE nome_usuario = ? AND senha = ?");
        $query->execute(array($_POST["nomeUsuario"], $_POST["senhaUsuario"]));

        if($query->rowCount()){
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        
            session_start();
            $_SESSION["usuario"] = array($usuario["nome_usuario"]);
            echo "<script>window.location = '../pages/dashboard.php'</script>";
        }
        else{
            echo "<script>window.location = '../pages/login.html'</script>";
        }
    }
    else{
        echo "<script>window.location = '../pages/login.html'</script>";
    }

?>