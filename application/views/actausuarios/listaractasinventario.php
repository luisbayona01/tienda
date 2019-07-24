

<div class="table-responsive">
<table class='table'>
          <thead>
          <tr>

          	<th>nombres</th>
          	<th>apellidos</th>
          	<th>email</th>
          	<th>ExtensiondelUsuario</th>
          	<th>Tipofuncionario</th>
          	<th>ubicacionpiso</th>
          	<th>nombreequipo</th>
          	<th>nocaso</th>
          	<th>codigoacta</th>
            <th>elementos</th>
          	<th>marca</th>
          	<th>modelo</th>
          	<th>serial</th>
          	<th>so</th>
          	<th>capacidad</th>
          	<th>compañia</th>
          	<th>placa</th>
            <th>tipo acta</th>
            <th>fecha</th>
          </tr>  
          </thead>
          <tbody>
          	<tr ng-repeat="x in actausuarios">
          	 <td>{{x.nombres}} </td>
          	<td>{{x.apellidos}} </td>
          	<td>{{x.email}} </td>
          	<td>{{x.ExtensiondelUsuario}} </td>
          	<td>{{x.Tipofuncionario}} </td>
          	<td>{{x.ubicacionpiso}} </td>
          	<td>{{x.nombreequipo}} </td>
          	<td>{{x.nocaso}} </td>
          	<td>{{x.codigoacta}} </td>
          	<td>{{x.elementos}} </td>
          	<td>{{x.marca}} </td>
          	<td>{{x.modelo}} </td>
          	<td>{{x.serial}} </td>
          	<td>{{x.so}}</td>
          	<td>{{x.capacidad}} </td>
          	<td>{{x.companiia}} </td>
          	<td>{{x.placa}} </td>
          	<td>{{x.tipoacta}} </td>
          	<td>{{x.fecha}} </td>
          </tr>
          </tbody> 
      </table>

      </div>








      <div class="container">
  <h2>asiganacion de  elementos</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
    <form class="actausuarios"> 
<div class="form-group row">
  
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> usuarios</label>
  <div class="col-10">
    <select class="form-control" name="id_usuarios">
    <option value="">seleccione</option>
     <?php  foreach($usu  as  $u){ ?>

    <option value="<?php echo $u['idusuarios']; ?>"><?php  echo $u['nombres'];?></option>

<?php }?>
    </select>
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">elementos</label>
  <div class="col-10">
    <select class="form-control" name="idinventario">
 <?php  foreach($nv  as  $v){ ?>

    <option value="<?php echo  $v['id_inventariocarge']; ?>"><?php  echo  $v['elementos'];?></option>

<?php }?>
    </select>
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> ubicacionpiso</label>
  <div class="col-10">
    <input class="form-control" name="ubicacionpiso" type="text" value="" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> nombreequipo</label>
  <div class="col-10">
    <input class="form-control" name="nombreequipo" type="text" value="" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> nocaso</label>
  <div class="col-10">
    <input class="form-control" name="nocaso" type="text" value="" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> codigoacta</label>
  <div class="col-10">
    <input class="form-control" name="codigoacta" type="text" value="CIBCX658" id="example-text-input" disabled="tru">
  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> tipoacta</label>
  <div class="col-10">
    <select class="form-control" name="tipoacta">
    <option value="asiganacion">asignacion</option>
    <option value="devolucion">devolucion</option>
    <option value="cambio">cambio</option>
    <option value="prestamo">prestamo</option>
    	
    
    </select> 
  </div>
</div>


<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> fecha</label>
  <div class="col-10">
    <input class="form-control" name="fecha" type="text" value="" id="example-text-input">
  </div>
</div>

</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" ng-click="guardarelementos()">Save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>