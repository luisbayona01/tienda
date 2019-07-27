<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class ProductosController extends CI_Controller { 
  function __construct() {
        parent::__construct();
        //comunicación con el modelo
        $this->load->model('Productos');
    } 

public function index(){

$this->load->view('index');
}

public  function GetCategorias(){
$categorias = $this->Productos->Categorias();
 echo  json_encode($categorias);
}

public function Productos(){
$categoria=$this->input->post('categoria');
$productos=$this->Productos->productos($categoria);
echo  json_encode($productos);
}


public  function  total(){
	
echo $this->Productos->totaldata();	
	
}
public   function  addcart(){
$cantidad=$this->input->post('cantidad');

$idproductos=$this->input->post('idproductos');

echo  json_encode($this->Productos->addcarrito($idproductos,$cantidad));	
	
	
}

public   function  get_cart(){
	
echo  json_encode($this->Productos->getcart());	
	
	
}

}

?>