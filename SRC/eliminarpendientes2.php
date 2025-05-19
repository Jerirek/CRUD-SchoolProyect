<?php
include("includes/header.php");
include("conexion.php");
SESSION_START();
?>
<?php
if ($conn->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
$caso = $_POST['caso'];
$tarea_pendiente = $_POST['tarea_pendiente'];

$sql = "UPDATE caso SET tarea_pendiente='' WHERE caso=$caso" ;
if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Operación realizada con éxito";
    $_SESSION['message_type'] = "success";
} else {
    echo "Error al actualizar el usuario: " . $conexion->error;
}
header("Location: " . $_SESSION['inicio_url']);

?>