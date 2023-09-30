<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="es" dir="ltr">
  <head>
    <?php
      include('./head.php');
    ?>
    <link rel="stylesheet" href="../css/estilos_login.css">

   </head>
<body>
  <div class="imagen">
    <img src="../img/pexels-igor-haritanovich-1695052.jpg" alt="">
  </div>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="../img/saranda.jpeg"alt="">
        <div class="text">
          <span class="text-1"></span>
          <span class="text-2"></span>
        </div>
      </div>
      <!-- <img  class="avatar" src="img/logo-removebg-preview.png" alt=""> -->
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Iniciar sesión</div>
          <form  action="#"  method="POST" novalidate>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-id-badge"></i>
                <input type="text" name="usuario" class="form-control" id="" placeholder="Ingrese su Identificación" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="contraseña" class="form-control" id="" placeholder="Ingrese su Contraseña" required>
                
              <div class="button input-box">
                <input type="submit" name="enviar" value="Entrar">
              </div>
              <div class="text"><a href="">¿Has olvidado tu contraseña?</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../valjs/validar_formulario.js"></script>
</body>
</html>