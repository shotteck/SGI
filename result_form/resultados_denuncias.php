<?php
/* $_POST ['nombre'] saca el valor de cada 'name' del formulacio html */
/* $nombre es una variable */
/* El echo sirve para sacar algo por pantalla*/
/* El . sirve para unir dos cadenas de caracteres*/

$Animal=$_POST ['Animal'];
if (isset($_POST['elemento1'])){
    $Particular=$_POST ['elemento1'];
}
if (isset($_POST['elemento1'])){
$Empresa=$_POST ['elemento1'];
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
if (isset($_POST['elemento1'])){
echo ("<br>");
echo $Particular;
}
if (isset($_POST['elemento1'])){
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