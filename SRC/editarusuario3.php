<?php
include("includes/header.php");
include("conexion.php");
SESSION_START();
?>
<?php
if ($conn->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

$id_perfil = $_POST['id_perfil'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$usuario = $_POST['Usuario'];
$contraseña = $_POST['contraseña'];
$Puesto = $_POST['Puesto'];


$sql = "UPDATE perfiles SET Nombre='$Nombre', Apellidos='$Apellidos', Usuario='$usuario', contraseña='$contraseña' WHERE id_perfil=$id_perfil";


if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Operación realizada con éxito";
    $_SESSION['message_type'] = "success";
} else {
    echo "Error al actualizar el usuario: " . $conexion->error;
}
header("Location: " . $_SESSION['inicio_url']);
?>