<?php

  include('../objs/rs_municipio.php');

  $municipio = $objconsulta->municipios();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <?php
    include('./head.php')
  ?>
  <link rel="stylesheet" href="../css/estilos_registro.css">
</head>
<body>
  <main>
    <div class="imagen">
      <img src="../img/pexels-igor-haritanovich-1695052.jpg" alt="">
    </div>
    <section class="container">
      <div class="title">Registro</div>
      <article class="content">
        <form class="needs-validation" method="POST" novalidate action="../registros/regitro_persona.php">
          <div class="user-details">
            <div class="input-box">
              <label for="validationCustom01" class="details form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="validationCustom01" placeholder="Digita tu nombre" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Ingrese su Nombre</div>
            </div>
            <div class="input-box">
              <label for="validationCustom02" class="details">Apellido</label>
              <input type="text" class="form-control" name="apellido" id="validationCustom02" placeholder=" digita tu apellido" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Ingrese su Apellido</div>
            </div>
            <div class="input-box">
              <label for="validationCustom03" class="details">ID Número</label>
              <input type="text" class="form-control" name="identificacion" id="validationCustom03" placeholder="Digita tu ID número" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Ingrese su Identificación</div>
            </div>
            <div class="input-box">
              <label for="validationCustom04" class="details">Email</label>
              <input type="text" class="form-control" name="email" id="validationCustom04" placeholder="Digita tu email" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Ingrese su Email</div>
            </div>
            <div class="input-box">
              <label for="validationCustom05" class="details">Telefono</label>
              <input type="text" class="form-control" name="telefono" id="validationCustom05" placeholder="Digita tu número telefonico" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Ingrese su Número de teléfono</div>
            </div>
            <div class="input-box">
              <label for="validationCustom06" class="details">Municipio</label>
              <select name="municipio" name="municipio" id="validationCustom06" class="form-select">
                <option selected disabled value="">seleccinar..</option>
                <?php
                  foreach($municipio as $dta_municipio){
                    $mun_codigo = $dta_municipio['mun_codigo'];
                    $mun_descripcion = $dta_municipio['mun_descripcion'];
                ?>
                  <option value="<?php $mun_codigo?>"><?php echo $mun_descripcion?></option>
                <?php 

                  }
                ?>
              </select>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Seleccione su municipio</div>
            </div>
            <div class="input-box">
              <label for="validationCustom07" class="details">Contraseña</label>
              <input type="password" class="form-control" name="contrasena" id="validationCustom07" placeholder="Ingresa tu contraseña" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Cree una contraseña</div>
            </div>
            <div class="input-box">
              <label for="validationCustom08" class="details">Confirmacion de contraseña</label>
              <input type="password" class="form-control" name="retContraasena" id="validationCustom08" placeholder="Confirma tu contrasea" required>
              <div class="valid-feedback">!Se ve bien¡</div>
              <div class="invalid-feedback">Confirme la contraseña</div>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="registrarse">
          </div>
          <div class="text">
            <h3>¿Ya tienes una cuenta? <a href="#">Inicia sesión ahora</a></h3>
        </div>
        </form>
      </article>
    </section>
  </main>
  <script src="../valjs/validar_formulario.js"></script>
</body>
</html>