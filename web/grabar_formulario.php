<?php

include_once '../controlador/Daoperris.php';
include_once '../modelo/perro.php';

$rut=$_POST["txtRut"];
$nombre=$_POST["txtNombre"];
$telefono=$_POST["txtTelefono"];
$correo=$_POST["txtCorreo"];
$fecha_nacimiento=$_POST["txtFecha"];
$ciudad=$_POST[("cboRegion")];
$tipo_vivienda=$_POST[("cboTipo")];



$perris=new perro();
$perris->setRut($rut);
$perris->setNombre($nombre);
$perris->setTelefono($telefono);
$perris->setCorreo($correo);
$perris->setFecha_nacimiento($fecha_nacimiento);
$perris->setCiudad($ciudad);
$perris->setTipo_vivienda($tipo_vivienda);

$dao=new Daoperris();
$filas_afectadas=$dao->Grabar($perris);
if ($filas_afectadas>0) {
    echo 'Grabo';
} else {
    echo 'No Grabo';
}
