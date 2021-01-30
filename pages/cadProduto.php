<?php
    require_once("main/header.php");
?>

<main id="main" style="padding: 20px 0;margin-top: 70px;">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center text-uppercase" style="margin-bottom: 30px;">Cadastrar produto</h4>
            </div>
        </div>

        <form method="POST" action="../app/cadastrarProduto.php" style="border: 1px solid #000; padding: 15px;" enctype="multipart/form-data">

            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="">Nome do Produto</label>
                    <input type="text" name="nomeProduto" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <label for="">Preço médio do Produto</label>
                    <input type="text" name="precoProduto" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="">Imagem do produto</label>
                    <input type="file" name="imagemProduto" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-2 form-group">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </form>
    </div>
</main>


<?php
    require_once("main/footer.php");
?>