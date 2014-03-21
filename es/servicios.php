<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/images/favicon.png" />
  <title>Palace Hotel, C.A. - Servicios</title>
  <link href="../-/css/bootstrap.css" rel="stylesheet">
  <link href="../-/css/styles.css" rel="stylesheet">
</head>
<body id="servicios">
  <div class="container">
    <div class="content row"> 
      <?php include "../-/components/php/header.php" ?> <!-- Header -->

      <section class="col-lg-7">
        <?php include "../-/components/php/article_servicios.php" ?>
        <?php include "../-/components/php/article_coffee_shop.php" ?>
        <?php include "../-/components/php/article_eventos_conferencias.php" ?>
      </section> <!-- Articles -->

      <section class="col-lg-5">
        <?php include "../-/components/php/snippet-formulario_reserva.php" ?>
        <?php include "../-/components/php/aside_tipo_habitacion.php" ?>
        <?php include "../-/components/php/snippet_mapa.php" ?>
        <?php include "../-/components/php/aside_visitar_lapascua.php" ?>
      </section> <!-- Asides -->
    </div> <!-- Content -->
  </div> <!-- Container -->
  <?php include "../-/components/php/footer.php" ?> <!-- Footer -->
  
  <script src="../-/js/jquery.js"></script>
  <script src="../-/js/myscripts.js"></script>
  <script src="../-/js/bootstrap.js"></script>
</body>
</html>
