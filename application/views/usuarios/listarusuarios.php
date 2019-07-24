

<table class='table' datatable="ng"  dt-options="dtOptions">
          <thead>
          <tr>
            <th>nombres</th>
            <th>apellidos</th>
              <th>email</th>
            <th>extenciondel usuario</th>
            <th>tipo funcionario</th>
            <th>editar</th>
            <th>eliminar</th>
          </tr>  
          </thead>
          <tbody>
            <tr ng-repeat="x in usuarios">
            <td>{{x.nombres}} </td>
            <td>{{x.apellidos}} </td>
            <td>{{x.email}} </td>
            <td>{{x.ExtensiondelUsuario}}</td>
            <td>{{x.Tipofuncionario}}</td>
            <td><button type="button" class="btn btn-warning" ng-click="editarU(x.idusuarios)">editar</button> </td>
            <td><button type="button" class="btn btn-danger" ng-click="eliminarU(x.idusuarios)">eliminar</button> </td>


            </tr>
          </tbody> 
      </table> 




<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agregar funcionario</button>


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Funcionarios</h4>
      </div>
      <div class="modal-body">
       
      <div class="contenido"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" ng-click="savecambios()">Guardar cambios</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gestion de funcionarios</h4>
      </div>
      <div class="modal-body">
       

<form class="registrarusuarios"> 

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Nombres</label>
  <div class="col-10">
    <input class="form-control" name="nombres" type="text" value="" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Apellidos</label>
  <div class="col-10">
    <input class="form-control" name="apellidos" type="text" value="" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Email</label>
  <div class="col-10">
    <input class="form-control" name="email" type="text" value="" id="example-text-input">
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> ExtensiondelUsuario</label>
  <div class="col-10">
    <input class="form-control" name="ExtensiondelUsuario" type="text" value="" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Tipofuncionario</label>
  <div class="col-10">
    <input class="form-control" name="Tipofuncionario" type="text" value="" id="example-text-input">

  </div>
</div>


</form> 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" ng-click="guardarUsuario()">ingresar funcionario</button>
      </div>
    </div>

  </div>
</div>