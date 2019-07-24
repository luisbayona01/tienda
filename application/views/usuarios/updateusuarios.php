 <form class="updateusuarios"> 

  
    <input class="form-control" name="idusuarios" type="hidden" value="<?php echo$usuarios["idusuarios"] ?>" id="example-text-input">
  
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> nombres</label>
  <div class="col-10">
    <input class="form-control" name="nombres" type="text" value="<?php echo$usuarios["nombres"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> apellidos</label>
  <div class="col-10">
    <input class="form-control" name="apellidos" type="text" value="<?php echo$usuarios["apellidos"] ?>" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> email</label>
  <div class="col-10">
    <input class="form-control" name="email" type="text" value="<?php echo$usuarios["email"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> ExtensiondelUsuario</label>
  <div class="col-10">
    <input class="form-control" name="ExtensiondelUsuario" type="text" value="<?php echo$usuarios["ExtensiondelUsuario"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Tipofuncionario</label>
  <div class="col-10">
    <input class="form-control" name="Tipofuncionario" type="text" value="<?php echo$usuarios["Tipofuncionario"] ?>" id="example-text-input">
  </div>
</div>
</form>
