<?php
$nombre=$_POST ['nombre'];
$apellido=$_POST ['apellido'];
$telefono=$_POST ['telefono'];
$email=$_POST ['email'];
$direccion=$_POST ['direccion'];
if(isset($_POST['servicio1'])){
    $servicio1=$_POST ['servicio1'];
}
if(isset($_POST['servicio2'])){
    $servicio2=$_POST ['servicio2'];
}
if(isset($_POST['servicio3'])){
    $servicio3=$_POST ['servicio3'];
}
$imagen=$_POST ['imagen'];

echo ('El nombre es '.$nombre);
echo ("<br>");
echo $apellido;
echo ("<br>");
echo $telefono;
echo ("<br>");
echo $email;
echo ("<br>");
echo $direccion;
if(isset($_POST['servicio1'])){
echo ("<br>");
echo $servicio1;
}
if(isset($_POST['servicio2'])){
echo ("<br>");
echo $servicio2;
}
if(isset($_POST['servicio3'])){
echo ("<br>");
echo $servicio3;
}
echo ("<br>");
echo $imagen;
?>