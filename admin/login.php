<?php
require_once("../include/initialize.php");

 ?>
  <?php
 // login confirmation
  if(isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
  }
  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Administrador</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo web_root;?>plugins/adminlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/main.css">
<!--===============================================================================================-->
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="login.php">
          <div class="img-logo-login" data-tilte>
            <img src="<?php echo web_root; ?>images/logo-polinternacional.png" alt="logopoli" >
          </div>
          <span class="login100-form-title p-b-32">
            Ingreso Administrador
          </span>
          <span class="txt1 p-b-11">
            Usuario
          </span>
          <div class="wrap-input100 validate-input m-b-36" data-validate = "Nombre de usuario requerido">
            <input class="input100" type="text" name="user_email" >
            <span class="focus-input100"></span>
          </div>
          <span class="txt1 p-b-11">
            Contraseña
          </span>
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Contraseña requerida">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="user_pass" >
            <span class="focus-input100"></span>
          </div>
          
          <div class="flex-sb-m w-full p-b-48">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Recordar
              </label>
            </div>

            <div>
              <a href="#" class="txt3">
                olvidaste tu contraseña?
              </a>
            </div>
            <div>
              <a class="txt2" href="/E-LearningSystem/login.php">
                Portal Estudiantes
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a></div>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="btnLogin">
              Ingresar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/js/main.js"></script>

</body>
</html>
 
<?php
try
{
  if(isset($_POST['btnLogin']))
  {
    $email = trim($_POST['user_email']);
    $upass  = trim($_POST['user_pass']);
    $h_upass = sha1($upass);

    if ($email == '' OR $upass == '') 
    {
      message("Nombre de usuario o contraseña Invalidos!", "error");
      redirect("login.php");
    } 
    else 
    {
      //it creates a new objects of member
      $user = new User();
      //make use of the static function, and we passed to parameters
      $res = $user::userAuthentication($email, $h_upass);
      if ($res==true) 
      {
        message("Has ingresado como".$_SESSION['TYPE'].".","satisfactoriamente");
        if ($_SESSION['TYPE']=='Administrator')
        {
          redirect(web_root."admin/index.php");
        }
        else
        {
          redirect(web_root."admin/login.php");
        }
      }
      else
      {
        message("Esta cuenta no existe! Por favor contacte al Administrador.", "error");
        redirect(web_root."admin/login.php");
      }
    }
  }
}
catch(Exception $ex){}
?> 