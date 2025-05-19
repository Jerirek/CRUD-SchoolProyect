<?php
include("includes/header.php");
include("conexion.php");
SESSION_START();
?>

<?php
$caso = $_POST['caso'];
$query = "SELECT * FROM caso WHERE caso = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $caso);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="editarpendientes3.php" method="post">
                <input type="hidden" name="caso" value="<?php echo $caso; ?>">
                    <div class="mb-3">
                        <label class="form-label text-white">descripcion:</label>
                        <input type="text" class="form-control campo-corto" name="tarea_pendiente" value="<?php echo $row['tarea_pendiente']; ?>">
                    </div>

                    <div class="text-end">
                        <input type="submit" class="btn btn-outline-light btn-sm" value="guardar">
                     </div> 
                </form>
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="editarpendientes.php" class="btn btn-outline-light btn-sm">Regresar</a>
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
    width: 300px;
}
.contenedor-formulario {
    width: auto;
}
</style>

<?php include("includes/footer.php") ?>