<?php
include("includes/header.php");
include("conexion.php");

$id_perfil = isset($_POST['id_perfil']) ? $_POST['id_perfil'] : '';

$query = "SELECT * FROM perfiles WHERE id_perfil = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id_perfil);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$query = "SELECT id_perfil FROM perfiles";
$result = mysqli_query($conn, $query);
?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="eliminarusuario2.php" method="post">
                <input type="hidden" name="id_perfil" value="<?php echo $id_perfil; ?>">
                    <div class="mb-3">
                        <label class="form-label text-white">Id:</label>
                        <select class="form-control campo-corto" name="id_perfil">
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <option value="<?php echo $row['id_perfil']; ?>" <?php if ($row['id_perfil'] == $id_perfil) echo 'selected'; ?>><?php echo $row['id_perfil']; ?></option>
                        <?php endwhile; ?>
                        </select>
                        </div>


                    <div class="text-end">
                        <input type="submit" class="btn btn-outline-light btn-sm" value="Eliminar">
                     </div> 

                </form>
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="gestionarusuarios.php" class="btn btn-outline-light btn-sm">Regresar</a>
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