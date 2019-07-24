


<table class='table' datatable="ng"  dt-options="dtOptions">
          <thead>
          <tr>
            <th>elementos </th>
          	<th>marca</th>
          	<th>modelo</th>
          	<th>serial</th>
          	<th>placa</th>
            <th>sistema operativo</th>
          	<th>capacidad</th>
            <th>compañia</th>

            <th>editar</th>
            <th>eliminar</th>
          </tr>  
          </thead>
          <tbody>
          	<tr ng-repeat="x in inventario">
            
          	<td>{{x.elementos}} </td>
          	<td>{{x.marca}} </td>
          	<td>{{x.modelo}} </td>
          	<td>{{x.serial}} </td>
            <td>{{x.so}}</td>
          	<td>{{x.placa}} </td>
          	<td>{{x.capacidad}} </td>
            <td>{{x.companiia}} </td>
            


            <td> <button type="button"  class="btn btn-warning cargo"  ng-click="Editar(x.id_inventariocarge)" >Editar</button>  </td>
            <td> <button type="button"  class="btn btn-danger" ng-click="Eliminar(x.id_inventariocarge)">Eliminar</button>  </td>
           </tr>
          </tbody> 
      </table>

<!--  [{"id_inventariocarge":"1","elementos":"portatil","marca":"samsung","modelo":"2017","serial":"58741","so":"windows8","capacidad":null,"companiia":"hj","placa":"as"}, -->






<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
 <div class="contenido"></diV>


  
    
   </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" ng-click="Save()" >Guardar cambios</button>
        </div>
      </div>
      
    </div>
  </div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  agregar elementos al inventario
</button>

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gestion inventario</h4>
        </div>
        <div class="modal-body">
         

     <form class="registrarinventario"> 

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Elementos</label>
  <div class="col-10">
    <input type="text" name="elementos" class="form-control" value="">
      
    </select> 
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Marca</label>
  <div class="col-10">
     <input type="text" name="marca" class="form-control" value="">
       
     </select> 
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"> Modelo</label>
  <div class="col-10">
    <input type="text" name="modelo" class="form-control" value="">
   
  </div>
</div><div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Serial</label>
  <div class="col-10">
    <input type="text" name="serial" class="form-control" value="">
     </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Placa</label>
  <div class="col-10">
   <input type="text" name="placa" class="form-control" value="">

  </div>
</div>


<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Sistema operativo </label>
  <div class="col-10">
   <input type="text" name="so" class="form-control" value="">

  </div>
</div>

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Capacidad </label>
  <div class="col-10">
   <input type="text" name="capacidad" class="form-control" value="">

  </div>
</div>


<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Compañia </label>
  <div class="col-10">
   <input type="text" name="companiia" class="form-control" value="">

  </div>
</div>


</form>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" ng-click="Guardar()">Registrar</button>
        </div>
      </div>
      
    </div>
  </div>
       


 





    

