<?php include("includes/header.php") ?>
<?php session_start();  ?>

<form action="validar.php" method="POST">
  <section class="vh-100 gradient-custom">

  <div class="alert-space">
  <?php if(isset($_SESSION['login_error'])): ?>
    <div class="alert alert-danger predefined-size" role="alert">
      <?php echo $_SESSION['login_error']; unset($_SESSION['login_error']); ?>
    </div>
  <?php endif; ?>
  
</div>

<div class="alert-space">
  <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> predefined-size" role="alert">
      <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
    </div>
  <?php endif; ?>
</div>

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2">Aseguradora GMT</h2>
                <p class="text-white-50 mb-5"></p>
                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="user" id="typeEmailX" name="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Usuario</label>
                </div>
                <div data-mdb-input-init class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>


<!-- css -->
 <style> 

 .predefined-size {
    width: 500px;
    height: 60px;
    margin: 0 auto;
    text-align: center;
    
}
body, html {
  height: 100%;
  margin: 0;
  background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
  background-attachment: fixed;
}
.alert-space {
    height: 30px;
}
  </style>


<?php include("includes/footer.php") ?>