<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mb-3" <?php echo isset($this->datos->id) ? "" : "hidden"; ?>>
      <label for="" class="form-label">Id</label>
      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Cedula</label>
      <input type="text" required class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Ingrese la cedula del estudiante" value="<?php echo isset($this->datos->cedula) ? $this->datos->cedula : ""; ?>">
      <small id="helpId" class="form-text text-muted">Cedula del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Correo electronico </label>
      <input type="email" required class="form-control" name="correoelectronico" id="correoelectronico" aria-describedby="helpId" placeholder="Ingrese el correo electronico del estudiante" value="<?php echo isset($this->datos->correoelectronico) ? $this->datos->correoelectronico : ""; ?>">
      <small id="helpId" class="form-text text-muted">Correo del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Telefono </label>
      <input type="tel" required class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Ingrese el telefono del estudiante" value="<?php echo isset($this->datos->telefono) ? $this->datos->telefono : ""; ?>">
      <small id="helpId" class="form-text text-muted">Telefono del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Telefono celular </label>
      <input type="tel" required class="form-control" name="telefonocelular" id="telefonocelular" aria-describedby="helpId" placeholder="Ingrese el telefono celular del estudiante" value="<?php echo isset($this->datos->telefonocelular) ? $this->datos->telefonocelular : ""; ?>">
      <small id="helpId" class="form-text text-muted">Telefono del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Fecha de nacimiento </label>
      <input type="date" required class="form-control" name="fechanacimiento" id="fechanacimiento" aria-describedby="helpId" placeholder="Ingrese la fecha de nacimiento del estudiante" value="<?php echo isset($this->datos->fechanacimiento) ? $this->datos->fechanacimiento : ""; ?>">
      <small id="helpId" class="form-text text-muted">Fecha de nacimiento del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Sexo </label>
      <input type="text" required class="form-control" name="sexo" id="sexo" aria-describedby="helpId" placeholder="Ingrese el sexo del estudiante" value="<?php echo isset($this->datos->sexo) ? $this->datos->sexo : ""; ?>">
      <small id="helpId" class="form-text text-muted">Sexo del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Direccion </label>
      <input type="text" required class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Ingrese la direccion del estudiante" value="<?php echo isset($this->datos->direccion) ? $this->datos->direccion : ""; ?>">
      <small id="helpId" class="form-text text-muted">Direccion del estudiante</small>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" required class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el nombre del estudiante" value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
      <small id="helpId" class="form-text text-muted">Nombre del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Apellido paterno </label>
      <input type="text" required class="form-control" name="apellidopaterno" id="apellidopaterno" aria-describedby="helpId" placeholder="Ingrese el apellido paterno del estudiante" value="<?php echo isset($this->datos->apellidopaterno) ? $this->datos->apellidopaterno : ""; ?>">
      <small id="helpId" class="form-text text-muted">Apellido paterno del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Apellido materno </label>
      <input type="text" required class="form-control" name="apellidomaterno" id="apellidomaterno" aria-describedby="helpId" placeholder="Ingrese el apellido materno del estudiante" value="<?php echo isset($this->datos->apellidomaterno) ? $this->datos->apellidomaterno : ""; ?>">
      <small id="helpId" class="form-text text-muted">Apellido materno del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Nacionalidad</label>
      <input type="text" required class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" placeholder="Ingrese la nacionalidad del estudiante" value="<?php echo isset($this->datos->nacionalidad) ? $this->datos->nacionalidad : ""; ?>">
      <small id="helpId" class="form-text text-muted">Nacionalidad del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Id Carrera</label>
      <input type="text" required class="form-control" name="idCarreras" id="idCarreras" aria-describedby="helpId" placeholder="Ingrese la carrera del estudiante" value="<?php echo isset($this->datos->idCarreras) ? $this->datos->idCarreras : ""; ?>">
      <small id="helpId" class="form-text text-muted">Carrera del estudiante</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Usuario </label>
      <input type="text" required class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingrese el usuario" value="<?php echo isset($this->datos->usuario) ? $this->datos->usuario : ""; ?>">
      <small id="helpId" class="form-text text-muted">Usuario</small>
    </div>
  </div>
  <div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</div>