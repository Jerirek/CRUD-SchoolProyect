<?php
session_start();
include("conexion.php");
include("includes/header.php");
if(isset($_GET['query'])){
    $query = $_GET['query'];
    $sql = "SELECT * FROM caso WHERE caso LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);

if (empty($query)) {
    $_SESSION['message'] = 'Campo vacio, por favor ingrese un caso a buscar';
    $_SESSION['message_type'] = "danger";
    header("Location: " . $_SESSION['inicio_url']);
    return;
}

    
    


    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $caso = $row['caso'];
            $marca = $row['marca_vehiculo'];
            $modelo = $row['modelo_vehiculo'];
            $placas = $row['placas_vehiculo'];
            $ubicacion = $row['ubicacion_caso'];
            $descripcion = $row['descripcion'];
            $fecha_hora = $row['fecha_hora_caso'];
            $estatus = $row['estatus'];
            $monto_total = $row['monto_total']; 
            $Dueño = $row['Dueño'];     
            $cotizaciones = $row['cotizaciones'];
            $declaración_del_usuario = $row['declaración_del_usuario'];
        }
    } else {
        $_SESSION['message'] = 'La busqueda no arrojo resultados';
        header("Location: " . $_SESSION['inicio_url']);
    }
}

?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="actualizar.php" method="post">
                    <div class="mb-3">
                        <label class="form-label text-white">Caso:</label>
                        <input type="text" class="form-control campo-corto" name="caso" value="<?php echo $caso; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Marca del vehículo:</label>
                        <input type="text" class="form-control campo-corto" name="marca" value="<?php echo $marca; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Modelo del vehículo:</label>
                        <input type="text" class="form-control  campo-corto" name="modelo" value="<?php echo $modelo; ?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Placas del vehículo:</label>
                        <input type="text" class="form-control campo-corto" name="placas" value="<?php echo $placas; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Ubicacion del caso:</label>
                        <input type="text" class="form-control campo-corto" name="ubicacion" value="<?php echo $ubicacion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">descripcion:</label>
                        <input type="text" class="form-control campo-corto" name="descripcion" value="<?php echo $descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">fecha y hora del caso:</label>
                        <input type="text" class="form-control campo-corto" name="fecha_hora" value="<?php echo $fecha_hora; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">estatus:</label>
                        <input type="text" class="form-control campo-corto" name="estatus" value="<?php echo $estatus; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Cotizaciones:</label>
                        <textarea class="form-control campo-corto" name="cotizaciones"><?php echo $cotizaciones; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">declaración del usuario:</label>
                        <textarea class="form-control campo-corto" name="declaración_del_usuario"><?php echo $declaración_del_usuario; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">monto total:</label>
                        <input type="text" class="form-control campo-corto" name="monto_total" value="<?php echo $monto_total; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Dueño:</label>
                        <input type="text" class="form-control campo-corto" name="Dueño" value="<?php echo $Dueño; ?>">
                    </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-outline-light btn-sm" value="Actualizar">
                     </div> 

                </form>
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
    width: 300px;
}
.contenedor-formulario {
    width: auto;
}
</style>

<?php include("includes/footer.php") ?>