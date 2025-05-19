<?php include("includes/header.php") ?>
<?php include("conexion.php");?>
<?php
session_start();
$sql = "SELECT id_perfil, Nombre, usuario, contraseña, puesto FROM perfiles";
$resultado = $conn->query($sql);

$tabla = '';

if ($resultado->num_rows > 0) {
    // Generar las filas de la tabla
    while($row = $resultado->fetch_assoc()) {
        $tabla .= '<div class="row">';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="idusuario" value="' . $row["id_perfil"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="Nombre" value="' . $row["Nombre"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="Usuario" value="' . $row["usuario"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="contraseña" value="' . $row["contraseña"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="puesto" value="' . $row["puesto"] . '" readonly></div>';
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
                <form action="guardar.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <label class="form-label text-white">id Usuario:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">Nombre:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">usuario:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">Contraseña:</label>
                            </div>
                            <div class="col">
                                <label class="form-label text-white">Puesto:</label>
                            </div>
                        </div>
                        <div class="mi-tabla">
                            <?php echo $tabla; ?>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <div class="col-auto">
                                <a href="editarusuario.php" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="eliminarusuario.php" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="agregarusuario.php" class="btn btn-warning">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="inicioAdministrador.php" class="btn btn-outline-light btn-sm">Regresar</a>
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
</style>

<?php include("includes/footer.php") ?>