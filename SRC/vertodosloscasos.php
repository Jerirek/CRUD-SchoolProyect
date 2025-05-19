<?php include("includes/header.php") ?>
<?php include("conexion.php");?>
<?php
session_start();
$sql = "SELECT * FROM caso";
$resultado = $conn->query($sql);

$tabla = '';

if ($resultado->num_rows > 0) {
    // Generar las filas de la tabla
    while($row = $resultado->fetch_assoc()) {
        $tabla .= '<div class="row">';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="caso" value="' . $row["caso"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control descripcion-input" name="tarea_pendiente" value="' . $row["marca_vehiculo"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control descripcion-input" name="tarea_pendiente" value="' . $row["modelo_vehiculo"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="caso" value="' . $row["estatus"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control descripcion-input" name="tarea_pendiente" value="' . $row["descripcion"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="caso" value="' . $row["Dueño"] . '" readonly></div>';

    
        $tabla .= '</div>';
    }
} else {
    $tabla = "No se encontraron resultados";
}
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="bg-dark p-5 rounded contenedor-formulario">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label class="form-label text-white">id del caso:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">marca del vehiculo:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">modelo del vehiculo:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">estatus del vehiculo:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">descripcion:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">Dueño:</label>
                            </div>
                        </div>
                        <div class="mi-tabla">
                            <?php echo $tabla; ?>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <div class="text-end">
                    <a href="<?php echo $_SESSION['inicio_url']; ?>" class="btn btn-outline-light btn-sm">Regresar</a>                </div>  
            </div>
        </div>
    </div>
</section>


<style> 
body, html {
  height: 100%;
  margin: 0;
  background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
  background-attachment: fixed;
}

.bg-dark {
    background-color: #000;
}
.campo-corto {
    width: 200px;
}
.contenedor-formulario {
    width: auto;
}
.descripcion-input {
    width: 100%;
}
div.card.bg-dark.text-white {
    width: 200%;
    position: relative;
    right: 50%;
}
</style>

<?php include("includes/footer.php") ?>