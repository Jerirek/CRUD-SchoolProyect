<?php
session_start();
include("conexion.php");
$id_perfil = isset($_POST["id_perfil"]) ? $_POST["id_perfil"] : null;
$Nombre = isset($_POST["Nombre"]) ? $_POST["Nombre"] : null;
$Apellidos = isset($_POST["Apellidos"]) ? $_POST["Apellidos"] : null;
$usuario= isset($_POST["Usuario"]) ? $_POST["Usuario"] : null;
$contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : null;
$puesto = isset($_POST["Puesto"]) ? $_POST["Puesto"] : null;

$checkSql = "SELECT * FROM perfiles WHERE id_perfil = '$id_perfil'";
$checkResult = mysqli_query($conn, $checkSql);
if (mysqli_num_rows($checkResult) > 0) {
    $_SESSION['message'] = 'el id ya existe, por favor ingrese otro id';
    $_SESSION['message_type'] = 'danger';
    

} else {
    $sql = "INSERT INTO perfiles (id_perfil, Nombre, Apellidos, Usuario, contraseña, Puesto) 
    VALUES ('$id_perfil', '$Nombre', '$Apellidos', '$usuario', '$contraseña' , '$puesto')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Operación realizada con éxito";
        $_SESSION['message_type'] = "success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
header("Location: " . $_SESSION['inicio_url']);
?>