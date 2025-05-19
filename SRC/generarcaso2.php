<?php
session_start();
include("conexion.php");
$caso = isset($_POST["caso"]) ? $_POST["caso"] : null;

// Verificar si el caso ya existe
$check = "SELECT caso FROM caso WHERE caso = '$caso'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = "el codigo del caso ya existe";
    $_SESSION['message_type'] = "danger";
} else {
    // Si el caso no existe, insertarlo
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

    $sql = "INSERT INTO caso (caso, marca_vehiculo, modelo_vehiculo, placas_vehiculo, ubicacion_caso, descripcion, fecha_hora_caso, estatus, monto_total, Dueño, declaración_del_usuario, cotizaciones) 
    VALUES ('$caso', '$marca_vehiculo', '$modelo_vehiculo', '$placas_vehiculo', '$ubicacion_caso', '$descripcion', '$fecha_hora_caso', '$estatus', '$monto_total' , '$Dueño' , '$declaración_del_usuario' , '$cotizaciones')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Caso guardado correctamente";
        $_SESSION['message_type'] = "success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

header("Location: " . $_SESSION['inicio_url']);
?>