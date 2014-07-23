<?php
function returnHabs(){
   
$contHab = [];
$contIntHab = 1;
$strcont = (string) $contIntHab;
do {
  $contHab['tipohabitacion'.$strcont] = $_POST['tipohabitacion'.$strcont];
  $contIntHab = $contIntHab+1;
  $strcont = (string) $contIntHab;
} while (isset($_POST['tipohabitacion'.$strcont]));
return $contHab;
}

$solicitante = $_POST['solicitante'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$cedrif = $_POST['cedrif'];
$habs = returnHabs();
?>