
<form  action="acta" method="post">
<select class="form control" name="funcionario">
<option>seleccione funcionario</option>	
<?php 
  foreach ($usuario as $key) {

  
?>  
<option value="<?php  echo $key['idusuarios']?>"> <?php  echo $key['nombres']?></option>

<?php 
  }
?>


</select>

<button type="submit" class="btn btn-info"> crear acta</button>
</form>