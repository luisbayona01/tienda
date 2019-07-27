<!DOCTYPE html lang="es">
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">

<script src=" <?php echo base_url('public/js/jquery.min.js') ?>"></script>
<script src=" <?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/angular.min.js') ?>"></script>
<script src=" <?php echo base_url('public/js/app.js') ?>"></script>

</head>
<body ng-app="myApp" ng-controller="myCtrl">





  <nav class="navbar navbar-inverse" style="
    background-color: white;
">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <img src="<?php echo base_url('public/img/carrito.jpg')  ?>" height="100" width="100">
    </ul>
	
  </div>
  <table class="table" id="table">
  <thead>
  <tr>
  <th>producto</th>
  <th>cantidad </th>
  <th> precio</th> 
  </tr>
  </thead>
  <tbody>
  <tr ng-repeat="cart in cart">
  <td>{{cart.nombre}} </td>
  <td>{{cart.cantidad}} <input type="number" name="qty" value="{{cart.cantidad}}" min="1" ng-model="cantidad1"  placeholder="Qty" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" required="">	 <button ng-click="actualizarcantidad(cart.ordenproducto,cantidad1)" class="btn btn-info"> actualizar cantidad</button>  </td>
  <td>{{cart.precio}}</td>
  </tr>
  </tbody>
  
  </table>
</nav>




    <div class="form-group">
      <label for="pwd">CATEGORIA</label>
      <select name="CATEGORIA" class="form-control" ng-model="idcategoria" ng-change="categoriastipo(idcategoria)">
      <option value="">seleccione una categoria</option>  
      <option ng-repeat="C in categoria" value="{{C.idcategorias}}">{{C.nombre}}</option>  
      </select>
   </div>
</select>
<div class="container"> 
 

  <div class="col-sm-6 col-md-4" ng-repeat=" p in products">
    <div class="thumbnail">
      <img src="http://localhost/tienda/{{p.imagen}}" alt="...">
      <div class="caption">
        <h3>{{p.nombre}}</h3>
        <p>{{p.descripcion}}</p>
		<p>{{p.precio}}</p>
			
        <p><button type="button" class="btn btn-primary" ng-click="addCarrito(cantidad, p.idproductos)">Agregra a carrito</button> 
		<p>
		<input type="number" name="qty"  min="1" ng-model="cantidad"  placeholder="Qty" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" required="">	 
		</p>
      </div>
    </div>
  </div>






</div>


</body>
</html>