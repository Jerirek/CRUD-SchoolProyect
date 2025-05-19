<?php include("includes/header.php") ?>
<?php
session_start(); 
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
                    <form action="buscar.php" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar casos registrados" name="query">
                        </div>
                        <div class="input-group-append">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Buscar</button>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="mt-4"></div>
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form action="administrarpendientes.php" method="post">
                        <div class="input-group-append">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Gestionar Pendientes</button>
                        </div>
                    </form>
                </div> 
            </div>  
            <div class="mt-4"></div>
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form action="generarcaso.php" method="post">
                        <div class="input-group-append">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Generar un nuevo caso</button>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="mt-4"></div>
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form action="vertodosloscasos.php" method="post">
                        <div class="input-group-append">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">ver todos los casos</button>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="mt-4"></div>
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