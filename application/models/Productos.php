<?php  
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Productos extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }



public  function Categorias(){

$query=$this->db->get('categorias');
$data=array();
foreach ($query->result() as $row)
{
    $data[]=$row;   
}

return  $data;
}

public  function  productos($categoria){

if($categoria!=""){
$queryproductos = $this->db->get_where('productos', array('categoriaid' => $categoria));	
}else{
$queryproductos=$this->db->get('productos');
}


$data=array();
foreach ($queryproductos->result() as $row)
{
    $data[]=$row;   
}

return  $data;
}

public function addcarrito($id,$cantidad){


$cantidadT="0";
$query=$this->db->get_where("ordenesproductos",array("ordenproducto"=>$id));
$productosorden= $query->row();
//var_dump($productosorden);

 if(isset($productosorden)){
	 $cantidadT=$productosorden->cantidad;
	 $this->modificarcantidad($id,$cantidad,$cantidadT);
 }else{
$insert=array("idproducto"=>$id,"cantidad"=> $cantidad);
$this->db->insert("ordenes",$insert);		
}
$queryorderproducto= $this->db->get('ordenesproductos');
$data=array();
foreach ($queryorderproducto->result() as $row)
{
    $data[]=$row;   
}

return  $data;

}

public   function modificarcantidad($id,$cantidad,$cantidadT){
    $cantidades=$cantidadT + $cantidad;
	$update= array("cantidad"=> $cantidades);
	$this->db->where("idproducto",$id);
	$this->db->update("ordenes",$update);
	
}




}