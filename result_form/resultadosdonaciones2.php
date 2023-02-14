<?php
/* $_POST ['nombre'] saca el valor de cada 'name' del formulacio html */
/* $nombre es una variable */
/* El echo sirve para sacar algo por pantalla*/
/* El . sirve para unir dos cadenas de caracteres*/

$Animal=$_POST ['Animal'];
if (isset($_POST['Particular'])){
    $Particular=$_POST ['Particular'];
}
if (isset($_POST['Empresa'])){
$Empresa=$_POST ['Empresa'];
}
$Detalles=$_POST['Detalles'];
$Pais=$_POST['Pais'];
$Ciudad=$_POST['Ciudad'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Teléfono=$_POST['Teléfono'];
$DNI=$_POST['DNI'];
$Email=$_POST['Email'];

echo ('El nombre es '.$Animal);
if (isset($_POST['Particular'])){
echo ("<br>");
echo $Particular;
}
if (isset($_POST['Empresa'])){
echo ("<br>");
echo $Empresa;
}
echo ("<br>");
echo $Detalles;
echo ("<br>");
echo $Pais;
echo ("<br>");
echo $Ciudad;
echo ("<br>");
echo $Nombre;
echo ("<br>");
echo $Apellidos;
echo ("<br>");
echo $Teléfono;
echo ("<br>");
echo $DNI;
echo ("<br>");
echo $Email;
?>