<?php

$apynom = urldecode($_GET['apynom']);
$documento = urldecode($_GET['documento']);
$empresa = urldecode($_GET['empresa']);
$fecha = urldecode($_GET['fecha']);
$hora = urldecode($_GET['hora']);

$file = fopen("log.txt", $apynom + ' ' + $documento + ' ' + $empresa + ' ' + $fecha + ' ' + $hora);

//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);
  echo $line. "<br>";
}

fclose($file);
?>