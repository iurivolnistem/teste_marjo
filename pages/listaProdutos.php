<?php
    require_once("main/header.php");
?>

<main id="main" style="padding: 20px 0;margin-top: 70px;">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center text-uppercase" style="margin-bottom: 30px;">Lista de produtos mais vendidos</h4>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>Imagem</td>
                    <td>Nome do Produto</td>
                    <td>Preço</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("../app/conexao.php");
                
                    $query = $conexao->prepare("SELECT * FROM produtos");
                    $query->execute();

                    $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

                    for($i = 0; $i < sizeof($produtos); $i++):
                        $produto = $produtos[$i];
                ?>
                <tr>
                    <td><img src="<?= $produto["imagem"] ?>" style="width: 100px;"></td>
                    <td style="vertical-align: middle;"><?= $produto["nome"] ?></td>
                    <td style="vertical-align: middle;">$<?= $produto["preco"] ?></td>
                    <td style="vertical-align: middle;"><a href="../app/excluirProduto.php?codigo=<?= $produto['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    require_once("main/footer.php");
?>