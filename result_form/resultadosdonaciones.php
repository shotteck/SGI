<?php
/* $_POST ['nombre'] saca el valor de cada 'name' del formulacio html */
/* $nombre es una variable */
/* El echo sirve para sacar algo por pantalla*/
/* El . sirve para unir dos cadenas de caracteres*/

$nombre=$_POST ['nombre'];
$apellidos=$_POST ['apellidos'];
$email=$_POST ['email'];
$telefono=$_POST ['telefono'];
$cantidad_dinero=$_POST ['cantidad-dinero'];
$tipo_comida=$_POST ['tipo-comida'];
$cantidad_comida=$_POST ['cantidad-comida'];

echo ('El nombre es '.$nombre);
echo ("<br>");
echo $apellidos;
echo ("<br>");
echo $email;
echo ("<br>");
echo $telefono;
echo ("<br>");
echo $cantidad_dinero;
echo ("<br>");
echo $tipo_comida;
echo ("<br>");
echo $cantidad_comida;
?>