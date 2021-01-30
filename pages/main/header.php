<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo "<script>window.location = 'login.html' </script>";
    }
    else{
        $adm = $_SESSION['usuario'][0];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Usalidades - ADM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="dist/img/favicon.png" rel="icon">
  <link href="dist/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../dist/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../dist/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../dist/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../dist/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../dist/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1>
            <a href="index.html">
                <img src="../dist/img/logotipo.jpg" style="width: 135px; object-fit: cover;">
            </a>
        </h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Ir para site</a></li>
          <li><a href="cadProduto.php">Cadastrar Produto</a></li>
          <li><a href="listaProdutos.php">Produtos</a></li>

          <li><a href="../app/logout.php">Sair</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->