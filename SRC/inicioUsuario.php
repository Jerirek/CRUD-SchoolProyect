<?php include("includes/header.php") ?>
<?php include("conexion.php");?>
<?php
session_start(); 
$sql = "SELECT caso, marca_vehiculo, modelo_vehiculo, estatus, monto_total  FROM caso WHERE Dueño = '".$_SESSION['Nombre']."'";
$resultado = $conn->query($sql);

$tabla = '';

if ($resultado->num_rows > 0) {
    // Generar las filas de la tabla
    while($row = $resultado->fetch_assoc()) {
        $tabla .= '<div class="row">';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="caso" value="' . $row["caso"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="marca_vehiculo" value="' . $row["marca_vehiculo"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="modelo_vehiculo" value="' . $row["modelo_vehiculo"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="estatus" value="' . $row["estatus"] . '" readonly></div>';
        $tabla .= '<div class="col"><input type="text" class="form-control campo-corto" name="monto_total" value="' . $row["monto_total"] . '" readonly></div>';
 
        $tabla .= '</div>';
    }
} else {
    echo $sql;
}
?>


<section class="vh-100 gradient-custom">
    <div class="alert-space">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?= $_SESSION['message_type'] == 'success' ? 'success' : 'danger' ?> predefined-size-<?= isset($_SESSION['message_type']) ? $_SESSION['message_type'] : '' ?> predefined-size" role="alert">
                <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <p class="text-white-100 mb-3" style="font-size: 24px;">Bienvenido <?php echo $_SESSION['Nombre']; ?></p>
                        <p class="text-white-100 mb-3" style="font-size: 15px;">Sus casos:</p>

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
                                    <label class="form-label text-white">monto total:</label>
                                </div>
                            </div>
                            <div class="mi-tabla">
                                <?php echo $tabla; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4"></div><!-- Espacio entre botones -->

                <div class="card bg-dark text-white2" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="input-group-append">
                            <form action="generarcaso.php" method="post">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Generar un nuevo caso</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-4"></div><!-- Espacio entre botones -->

                <div class="text-end">
                    <a href="salir.php" class="btn btn-outline-dark btn-sm">Salir</a>
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


div.card.bg-dark.text-white {
    width: 200%;
    position: relative;
    right: 50%;
}

.alert-space {
    height: 30px;
}
.predefined-size {
    width: 500px;
    height: 60px;
    margin: 0 auto;
    text-align: center;
    
}
</style>

<?php include("includes/footer.php") ?>