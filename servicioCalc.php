<?php
if (isset($_REQUEST["btn1"])){
  $nota1 = $_REQUEST["txtNota1"];
  $nota2 = $_REQUEST["txtNota2"];
  $nota3 = $_REQUEST["txtNota3"];
  $suma1=$nota1+$nota2+$nota3;
  $promedio=$suma1/3;

  if ($promedio<14) {
    $resultado="REPRUEBA";
  }elseif ($promedio>=14) {
    $resultado="APRUEBA";
  }

  $info="PROMEDIO: $promedio <br>  $resultado";
  echo $info;

}

 ?>
