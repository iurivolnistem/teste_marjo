<?php

    if(!isset($_SESSION['usuario'])){
        echo "<script>window.location = 'login.html' </script>";
    }
    else{
        $adm = $_SESSION['usuario'][0];
    }

?>

  <!-- Vendor JS Files -->
  <script src="../dist/vendor/jquery/jquery.min.js"></script>
  <script src="../dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../dist/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../dist/vendor/php-email-form/validate.js"></script>
  <script src="../dist/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../dist/vendor/counterup/counterup.min.js"></script>
  <script src="../dist/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../dist/vendor/venobox/venobox.min.js"></script>
  <script src="../dist/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../dist/js/main.js"></script>

</body>

</html>