var app = angular.module("myApp", []);
var urlglobal="http://localhost/tienda/index.php/"
app.controller("myCtrl", function($scope,$http) {

$("#table").hide()
 $scope.categorias=function(){
   var url=urlglobal+"ProductosController/Getcategorias"
  $http.get(url)
  .then(function(response) {
     $scope.categoria=response.data; 
	 
     //console.log(response.data)
  });

}



$scope.cantidad=1;

$scope.productos= function(){

var  url = urlglobal+"ProductosController/Productos";
 var  parametros=$.param({"categoria":""});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
   //console.log(response);
   $scope.products=response;    
  
})  



}
$scope.categoriastipo=function(idcategoria){
	var  url = urlglobal+"ProductosController/Productos";
 var  parametros=$.param({"categoria":idcategoria});
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, 
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   
 }).success(function(response){
   
   $scope.products=response;    
  
})  
}

$scope.actualisarcantidad=function(){
	
}

$scope.addCarrito=function(cantidad,idproductos){
var  url = urlglobal+"ProductosController/addcart";
var  parametros=$.param({"cantidad":cantidad,"idproductos":idproductos });
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, 
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   
 }).success(function(response){
  if(response.length!=0){
	  $scope.cart=response;
	  //console.log(response);
$("#table").fadeIn();
  }
   
   //$scope.products=response;    
  
})

}

$scope.actualizarcantidad=function(ordenproducto,cantidad){
	
var  url = urlglobal+"ProductosController/addcart";
var  parametros=$.param({"cantidad":cantidad,"idproductos":ordenproducto });
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, 
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   
 }).success(function(response){
  if(response.length!=0){
	  $scope.cart=response;
	  //console.log(response);
$("#table").fadeIn();
  }
   
   //$scope.products=response;    
  
})
	
	
	
	
}
$scope.categorias();
$scope.productos();
 })
