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

      <section class="">
       <?php include "../-/components/php/snippet-formulario_reserva.php"; ?>
      </section> <!-- Articles -->

    </div> <!-- Content -->
  </div> <!-- Container -->
  <?php include "../-/components/php/footer.php" ?> <!-- Footer -->
  
  <script src="../-/js/jquery.js"></script>
  <script src="../-/js/myscripts.js"></script>
  <script src="../-/js/bootstrap.js"></script>
  <script src="../-/js/bootstrapValidator.min.js"></script>
  <script src="../-/js/es_CL.js"></script>
  <script src="../-/js/moment.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#formReserva').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            solicitante: {
                message: 'Campo no valido',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido y no puede estar vacio.'
                    },
                    stringLength: {
                        min: 4,
                        max: 20,
                        message: 'Este campo debe tener minimo 4 caracteres y un maximo de 20'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_. ,]+$/,
                        message: 'Este campo solo puede contener caracteres, numeros y puntos'
                    }
                }
            },
               email: {
                validators: {
                    notEmpty: {
                        message: 'El correo es requerido y no puede ir vacio'
                    },
                    emailAddress: {
                        message: 'El texto ingresado no es una direccion de correo electronico valida.'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'El numero de telefono es requerido y no puede ir vacio.'
                    },
                    regexp: {
                        regexp: /^[0-9]{11}$/,
                        message: 'Por favor use el formato de 11 numeros Los guiones se agregan solos. Ej: 02353422440.'
                    }
                }
            },
            cedrif: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido y no puede ir vacio.'
                    },
                    regexp: {
                        regexp: /^[0-9]{6,9}$/,
                        message: 'Este campo puede contener entre 6 y 9 digitos'
                    }
                }
            },
      }
    });
});</script>
</body>
</html>
