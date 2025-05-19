<?php
session_start();
include("conexion.php");

$caso = isset($_POST["caso"]) ? $_POST["caso"] : null;
$marca_vehiculo = isset($_POST["marca"]) ? $_POST["marca"] : null;
$modelo_vehiculo = isset($_POST["modelo"]) ? $_POST["modelo"] : null;
$placas_vehiculo = isset($_POST["placas"]) ? $_POST["placas"] : null;
$ubicacion_caso = isset($_POST["ubicacion"]) ? $_POST["ubicacion"] : null;
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : null;
$fecha_hora_caso = isset($_POST["fecha_hora"]) ? $_POST["fecha_hora"] : null;
$estatus = isset($_POST["estatus"]) ? $_POST["estatus"] : null;
$monto_total = isset($_POST["monto_total"]) ? $_POST["monto_total"] : null;
$Dueño = isset($_POST["Dueño"]) ? $_POST["Dueño"] : null;
$cotizaciones = isset($_POST["cotizaciones"]) ? $_POST["cotizaciones"] : null;
$declaración_del_usuario = isset($_POST["declaración_del_usuario"]) ? $_POST["declaración_del_usuario"] : null;

$sql = "UPDATE caso SET caso = '$caso', marca_vehiculo = '$marca_vehiculo', modelo_vehiculo = '$modelo_vehiculo', placas_vehiculo = '$placas_vehiculo', ubicacion_caso = '$ubicacion_caso', descripcion = '$descripcion', fecha_hora_caso = '$fecha_hora_caso', estatus = '$estatus', monto_total = '$monto_total', Dueño = '$Dueño', cotizaciones = '$cotizaciones', declaración_del_usuario= '$declaración_del_usuario'  WHERE caso = '$caso'";
if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: " . $_SESSION['inicio_url']);