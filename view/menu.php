<?php

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

  $sesionInciada = true;
  $username = $_SESSION['name'];
} else {
  // La sesión no está iniciada
  $sesionInciada = false;
}

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="Menu">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
      <ul class="navbar-nav flex-grow-1">
        <a class="nav-link" href="<?php echo constant('URL'); ?>main" class="nav-link active">Inicio</a>
        <?php if ($sesionInciada) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink">
              <li> <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos">Consulta</a></li>
              <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos/crear">Crear</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
            <div class="dropdown-menu dropdown-menu-dark">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos/crear">Crear</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
            <div class="dropdown-menu dropdown-menu-dark">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes/crear">Crear</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profesores</a>
            <div class="dropdown-menu dropdown-menu-dark">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores/crear">Crear</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu dropdown-menu-dark">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios">Consulta</a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios/crear">Crear</a>
            </div>
          </li>
        <?php } ?>
      </ul>
      <ul class="navbar-nav flex-grow-1 justify-content-end">
        <?php if ($sesionInciada) { ?>
          <li class="nav-item">
            <span class="nav-link">Hola, <?php echo $username; ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/cerrarSesion">Cerrar sesión</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/verLogin">Iniciar sesión</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo constant('URL'); ?>usuarios/verRegistro">Registrarse</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>