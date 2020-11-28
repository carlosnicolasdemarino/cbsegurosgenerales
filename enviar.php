<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

/*
echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $email;
echo "<br>";
echo $telefono;
echo "<br>";
echo $mensaje;
*/

$to = "info@cbsegurosgenerales.com.ar";
$from = $_POST['nombre'];
$email = $_POST['email'];
$subject = 'Notificacion por correo de CB Seguros Generales';
$message = $_POST['mensaje'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers .= "From: CB Seguros Generales < contacto@cbsegurosgenerales.com.ar >" . "\r\n";




?>