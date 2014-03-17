<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/images/favicon.png" />
  <title>Palace Hotel, C.A. - Inicio</title>
  <link href="../-/css/bootstrap.css" rel="stylesheet">
  <link href="../-/css/styles.css" rel="stylesheet">
</head>
<body id="principal">
  <div class="container">
    <div class="content row"> 
      <?php include "../-/components/php/header.php" ?> <!-- Header -->

      <section class="col-md-7">
        <?php include "../-/components/php/snippet_carousel.php" ?> <!-- Carousel -->
        <?php include "../-/components/php/article_bienvenido.php" ?>
        <?php include "../-/components/php/article_noticias_eventos.php" ?>
      </section> <!-- Articles -->

      <section class="col-md-5">
        <?php include "../-/components/php/snippet-formulario_reserva.php" ?>
        <?php include "../-/components/php/aside_salon_conferencias.php" ?>
        <?php include "../-/components/php/aside_visitar_lapascua.php" ?>
        <?php include "../-/components/php/aside_servicios.php" ?>
      </section> <!-- Asides -->
    </div> <!-- Content -->
  </div> <!-- Container -->
  <?php include "../-/components/php/footer.php" ?> <!-- Footer -->

  <script src="../-/js/myscripts.js"></script>
  <script src="../-/js/jquery.js"></script>
  <script src="../-/js/bootstrap.js"></script>
</body>
</html>
