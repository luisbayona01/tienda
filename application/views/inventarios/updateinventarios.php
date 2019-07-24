 

 <form class="updateinventarios"> 
<div class="form-group row">

  <div class="col-10">
    <input class="form-control" name="id_inventariocarge" type="hidden" value="<?php echo $inventarios["id_inventariocarge"] ?>">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> elementos</label>
  <div class="col-10">
    <input class="form-control" name="elementos" type="text" value="<?php echo $inventarios["elementos"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> marca</label>
  <div class="col-10">
    <input class="form-control" name="marca" type="text" value="<?php echo $inventarios["marca"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> modelo</label>
  <div class="col-10">
    <input class="form-control" name="modelo" type="text" value="<?php echo $inventarios["modelo"] ?>" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> serial</label>
  <div class="col-10">
    <input class="form-control" name="serial" type="text" value="<?php echo $inventarios["serial"] ?>" id="example-text-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> placa</label>
  <div class="col-10">
    <input class="form-control" name="placa" type="text" value="<?php echo $inventarios["placa"] ?>" id="example-text-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">sistema operativo</label>
  <div class="col-10">
    <input class="form-control" name="so" type="text" value="<?php echo $inventarios["so"] ?>" id="example-text-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> capacidad</label>
  <div class="col-10">
    <input class="form-control" name="capacidad" type="text" value="<?php echo $inventarios["capacidad"] ?>" id="example-text-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> compañia</label>
  <div class="col-10">
    <input class="form-control" name="companiia" type="text" value="<?php echo $inventarios["companiia"] ?>" id="example-text-input">
  </div>
</div>



</form>
