<?php
include("includes/header.php");
include("conexion.php");

$id_perfil = isset($_POST['caso']) ? $_POST['caso'] : '';
$caso = isset($_POST['caso']) ? $_POST['caso'] : '';

$query = "SELECT caso FROM caso WHERE tarea_pendiente IS NULL OR tarea_pendiente = ''";
$result = mysqli_query($conn, $query);
?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="editarpendientes2.php" method="post"> <!-- usa la misma accion de editar asi que no se usa un nuevo archivo -->
                <input type="hidden" name="caso" value="<?php echo $caso; ?>">
                    <div class="mb-3">
                        <label class="form-label text-white">Id:</label>
                        <select class="form-control campo-corto" name="caso">
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <option value="<?php echo $row['caso']; ?>" <?php if ($row['caso'] == $caso) echo 'selected'; ?>><?php echo $row['caso']; ?></option>
                        <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-outline-light btn-sm" value="Editar">
                    </div>                    
                </form>
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="administrarpendientes.php" class="btn btn-outline-light btn-sm">Regresar</a>
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

.predefined-size {
    width: 500px;
    height: 60px;
    margin: 0 auto;
    text-align: center;
    
}
</style>

<?php include("includes/footer.php") ?>