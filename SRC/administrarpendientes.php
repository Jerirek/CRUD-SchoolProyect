<?php include("includes/header.php") ?>
<?php include("conexion.php");?>
<?php
session_start();
$sql = "SELECT caso, tarea_pendiente FROM caso";
$resultado = $conn->query($sql);

$tabla = '';

if ($resultado->num_rows > 0) {
    // Generar las filas de la tabla
    while($row = $resultado->fetch_assoc()) {
        if(empty($row["tarea_pendiente"])) {
            continue;
        }
        $tabla .= '<div class="row">';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="caso" value="' . $row["caso"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control descripcion-input" name="tarea_pendiente" value="' . $row["tarea_pendiente"] . '" readonly></div>';
    
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
                                <label class="form-label text-white">descripcion:</label>
                            </div>
                        </div>
                        <div class="mi-tabla">
                            <?php echo $tabla; ?>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <div class="col-auto">
                                <a href="editarpendientes.php" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="eliminarpendientes.php" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="agregarpendientes.php" class="btn btn-warning">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="inicioAjustador.php" class="btn btn-outline-light btn-sm">Regresar</a>
                </div>  
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
</style>

<?php include("includes/footer.php") ?>