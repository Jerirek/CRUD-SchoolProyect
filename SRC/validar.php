<?php 
session_start();
include("conexion.php");
if(isset($_POST['typeEmailX']) && isset($_POST['typePasswordX'])){
  $usuario = $_POST['typeEmailX'];
  $password = $_POST['typePasswordX'];
  $query = "SELECT * FROM perfiles WHERE usuario = '$usuario' AND contraseña = '$password'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  
  if ($row && $row['usuario'] == $usuario && $row['contraseña'] == $password) {

    if ($row['puesto'] == 'Usuario') {
      $_SESSION['Nombre'] = $row['Nombre'];
      $_SESSION['Usuario'] = $usuario;
      $_SESSION['inicio_url'] = "inicioUsuario.php";
      header("Location: inicioUsuario.php");

    } elseif ($row['puesto'] == 'Administrador') {
      $_SESSION['Nombre'] = $row['Nombre'];
      $_SESSION['usuario'] = $usuario;
      $_SESSION['inicio_url'] = "inicioAdministrador.php";
      header("Location: inicioAdministrador.php");

    } elseif ($row['puesto'] == 'Ajustador') {
      $_SESSION['Nombre'] = $row['Nombre'];
      $_SESSION['usuario'] = $usuario;
      $_SESSION['inicio_url'] = "inicioAjustador.php";
      header("Location: inicioAjustador.php");

    } elseif ($row['puesto'] == 'Trabajador') {
      $_SESSION['Nombre'] = $row['Nombre'];
      $_SESSION['usuario'] = $usuario;
      $_SESSION['inicio_url'] = "inicioTrabajador.php";
      header("Location: inicioTrabajador.php");

    } else {
      $_SESSION['login_error'] = "Usuario o contraseña incorrectos.";
      header("Location: login.php");
    }
  } else {
    $_SESSION['login_error'] = "Usuario o contraseña incorrectos.";
    header("Location: login.php");
  }
/*if($row){
    $_SESSION['usuario'] = $usuario;

    header("Location: inicioUsuario.php");
  }else{
    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: login.php");

  } */
} ?>