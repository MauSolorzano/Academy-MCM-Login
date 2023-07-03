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
      
        <form action="<?php echo constant('URL'); ?>usuarios/autenticar" method="POST" class="m-4">
          
          <!-- Email input -->
          <div class="container">
            <div class="card">
              <h3 class="m-4 text-center">Iniciar Sesion</h3>
                <div class="form-outline m-3">
                    <label class="" for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="user@example.com" required />
                </div>
                <div class="form-outline m-3">
                    <label class="" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="********" 
                    required />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                </div>
                <p class="text-center mt-1">Registrarse <a href="<?php echo constant('URL'); ?>usuarios/verRegistro" class="">aquí</a></p>
              </div>
        </div>

          

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>

<?php
require 'view/footer.php';
?>