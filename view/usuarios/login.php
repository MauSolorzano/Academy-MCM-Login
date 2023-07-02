<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid " id="contendorprincipal">

  <div class="tab-content">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">
        <?php echo $this->mensajeResultado ?>
        <h3 class="m-4 text-center">Iniciar Sesion</h3>

        <form action="<?php echo constant('URL'); ?>usuarios/autenticar" method="POST" class="m-4">

          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="" for=""> Correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Brenjuan@example.com"
              required />
            <!-- <label class="form-label" for="loginName">Email or username</label> -->
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="" for=""> Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="" required />
            <!-- <label class="form-label" for="loginPassword">Password</label> -->
          </div>

          <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
          </div>

          <p class="my-2">Resgistrarse <a href="<?php echo constant('URL'); ?>usuarios/verRegistro" class="">aquí</a></p>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>

<?php
require 'view/footer.php';
?>