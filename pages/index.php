<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USAlidades | Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../dist/img/favicon.png" rel="icon">
  <link href="../dist/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
        <a href="index.php"><img src="../dist/img/logo2.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Quem somos</a></li>
          <li><a href="#portfolio">Produtos</a></li>
          <li><a href="#contact">Entre em contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="login.html" class="twitter">Login</a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">

    <div class="container-hero align-items-center">
      <div class="descricao">
        <h1>Bem vindo a USAlidades</h1>
        <h2>Nós garantimos à você a melhor experiência de importação</h2>
      </div>
      <div class="formulario">
        <form method="POST" action="../app/envia_email.php">
          <div class="form-row">
            <div class="col-md-6">
              <label for="">Nome</label>
              <input type="text" class="form-control" name="nomeCliente" placeholder="Insira seu nome">
            </div>
            <div class="col-md-6">
              <label for="">Sobrenome</label>
              <input type="text" class="form-control" name="sobrenomeCliente" placeholder="Insira seu sobrenome">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="">E-mail</label>
              <input type="email" class="form-control" name="emailCliente" placeholder="Insira seu e-mail">
            </div>
            <div class="col-md-6">
              <label for="">Celular</label>
              <input type="text" class="form-control" name="celularCliente" placeholder="(00)00000-0000">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12">
              <label for="">Produto</label>
              <textarea class="form-control" name="produtoCliente"
                placeholder="Informe o produto que deseja importar..."></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <button class="btn btn-info" style="margin: 0 auto; display: block; width: 35%;">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="../dist/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Quem somos</h3>
            <p>
              A USAlidades é um canal de comunicação entre o cliente e o seu produto de desejo, nós oferecemos a melhor experiência para o cliente, 
              afim de que a sua importação tenha a melhor qualidade possível.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i>Qualidade</li>
              <li><i class="bx bx-check-double"></i>Eficiência</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Produtos</h2>
          <p>Veja os produtos que foram mais importados recentemente</p>
        </div>

        <div class="row portfolio-container">

        <?php
            require("../app/conexao.php");
        
            $query = $conexao->prepare("SELECT * FROM produtos");
            $query->execute();

            $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

            for($i = 0; $i < sizeof($produtos); $i++):
                $produto = $produtos[$i];
        ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= $produto["imagem"] ?>">
              </figure>

              <div class="portfolio-info">
                <h4><?= $produto["nome"] ?></h4>
                <p>$<?= $produto["preco"] ?></p>
              </div>
            </div>
          </div>

          <?php endfor; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Entre em contato</h2>
          <p>Entre em contato conosco e iremos solucionar qualquer dúvida sua.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <form action="../app/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome..."
                    data-rule="minlen:4" data-msg="Por favor informe pelo menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail"
                    data-rule="email" data-msg="Por favor informe um email válido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                  data-rule="minlen:4" data-msg="Por favor informe pelo menos 8 caracteres" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Por favor insira alguma mensagem para nós" placeholder="Mensagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact d-flex align-items-center">
            <img src="../dist/img/logo2.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Quem somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Produtos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Entre em contato</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacidade.php">Termos de privacidade</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="copyright text-center">
          &copy; Copyright <strong><span>USAlidades</span></strong>. All Rights Reserved
        </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../dist/vendor/jquery/jquery.min.js"></script>
  <script src="../dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../dist/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../dist/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../dist/vendor/counterup/counterup.min.js"></script>
  <script src="../dist/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../dist/vendor/venobox/venobox.min.js"></script>
  <script src="../dist/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../dist/js/main.js"></script>

</body>

</html>