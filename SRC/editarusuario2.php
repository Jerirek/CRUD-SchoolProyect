<?php
include("includes/header.php");
include("conexion.php");
SESSION_START();
?>

<?php
$id_perfil = $_POST['id_perfil'];
$query = "SELECT * FROM perfiles WHERE id_perfil = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id_perfil);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="editarusuario3.php" method="post">
                <input type="hidden" name="id_perfil" value="<?php echo $id_perfil; ?>">
                    <div class="mb-3">
                        <label class="form-label text-white">Nombre:</label>
                        <input type="text" class="form-control campo-corto" name="Nombre" value="<?php echo $row['Nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Apellidos:</label>
                        <input type="text" class="form-control campo-corto" name="Apellidos" value="<?php echo $row['Apellidos']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Usuario:</label>
                        <input type="text" class="form-control campo-corto" name="Usuario" value="<?php echo $row['usuario']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Contraseña:</label>
                        <input type="text" class="form-control  campo-corto" name="contraseña" value="<?php echo $row['contraseña']; ?>"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Puesto:</label>
                            <select class="form-control campo-corto" name="Puesto">
                                <option value="<?php echo $row['puesto']; ?>"><?php echo $row['puesto']; ?></option>
                                <option value="Usuario">Usuario</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Ajustador">Ajustador</option>
                                <option value="Trabajador">Trabajador</option>
                            </select>
                    </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-outline-light btn-sm" value="guardar">
                     </div> 
                </form>
                <div class="mt-4"></div>
                    <div class="text-end">
                        <a href="editarusuario.php" class="btn btn-outline-light btn-sm">Regresar</a>
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