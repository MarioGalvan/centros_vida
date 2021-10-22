<?php
require_once("modelo/index.php");
class modeloController{
	private $model;
	public function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    static function index(){
    	$producto 	=	new Modelo();
		$dato       =  $producto->mostrar("productos","1");
		require_once("vista/login.php");
    }

    //nuevo
    static function nuevo(){
    	require_once("vista/nuevo.php");	    	    	
    }
	//guardar
    static function guardar(){
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "'".$nombre."',".$precio;
    	$producto 	=	new Modelo();
        $dato 		=	$producto->insertar("productos",$data);
		header("location:".urlsite);
    }
    //editar
    static function editar(){
    	$id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	$dato=$producto->mostrar("productos","id=".$id);    	
    	require_once("vista/editar.php");
    }
	//actualizar
    static function actualizar(){
    	$id 		= 	$_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
        $data       =   "nombre='".$nombre."',precio=".$precio;
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$data,$condicion);
        header("location:".urlsite);
	}

    // ELIMINAR
	static function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite);
	}
}
