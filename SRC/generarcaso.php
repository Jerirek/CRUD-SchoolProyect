<?php include("includes/header.php") ?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100"> 
            <div class="bg-dark p-5 rounded contenedor-formulario">
                <form action="generarcaso2.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white">Caso:</label>
                        <input type="text" class="form-control campo-corto" name="caso">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Marca del vehículo:</label>
                        <input type="text" class="form-control campo-corto" name="marca">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Modelo del vehículo:</label>
                        <input type="text" class="form-control  campo-corto" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Placas del vehículo:</label>
                        <input type="text" class="form-control campo-corto" name="placas">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Ubicacion del caso:</label>
                        <input type="text" class="form-control campo-corto" name="ubicacion">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">descripcion:</label>
                        <input type="text" class="form-control campo-corto" name="descripcion">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">fecha y hora del caso:</label>
                        <input type="text" class="form-control campo-corto" name="fecha_hora">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">estatus:</label>
                        <input type="text" class="form-control campo-corto" name="estatus">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Cotizaciones:</label>
                        <textarea class="form-control campo-corto" name="cotizaciones"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">declaración del usuario:</label>
                        <textarea class="form-control campo-corto" name="declaración_del_usuario"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">monto total:</label>
                        <input type="text" class="form-control campo-corto" name="monto_total">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Dueño:</label>
                        <input type="text" class="form-control campo-corto" name="Dueño">
                    </div>
                    <div class="text-end">
                         <input type="submit" class="btn btn-outline-light btn-sm" value="Guardar">
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