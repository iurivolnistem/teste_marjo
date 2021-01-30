<?php

require_once("conexao.php");

    if(isset($_POST['nomeProduto']) && isset($_POST['precoProduto'])){

        $name = $_FILES['imagemProduto']['name'];
        $target_dir = "../dist/img/uploads";
        $target_file = $target_dir . basename($_FILES["imagemProduto"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){

            try{
                $query = $conexao->prepare("INSERT INTO produtos (nome, preco, imagem) VALUES (:nome, :preco, :imagem)");
                $query->execute(array(
                    ':nome' => $_POST['nomeProduto'],
                    ':preco' => $_POST['precoProduto'],
                    'imagem' => $target_dir.$name
                ));
            
                // Upload file
                move_uploaded_file($_FILES['imagemProduto']['tmp_name'], $target_dir.$name);

                echo "<script>window.location = '../pages/listaProdutos.php'</script>";
            }
            catch(PDOException $erro){
                echo $erro;
            }

        }
    }
?>