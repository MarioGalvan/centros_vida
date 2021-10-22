<?php
require_once("modelo/index.php");
class modeloController
{
	private $model;
	public function __construct()
	{
		$this->model = new Modelo();
	}
	// MOSTRAR
	static function index()
	{
		$producto 	=	new Modelo();
		$dato       =  $producto->mostrar("productos", "1");
		require_once("vista/login.php");
	}


	//nuevo
	static function nuevo()
	{
		require_once("vista/nuevo.php");
	}

	





	//principal almuerzos
	static function indexalmuerzo()
	{
		$almuerzos 	=	new Modelo();
		$dato       =  $almuerzos->mostrar("almuerzos", "1");
		require_once("vista/almuerzos/index.php");
	}

	static function nuevoalmuerzo()
	{
		require_once("vista/almuerzos/nuevo.php");
	}

	//guardar almuerzo
	static function guardaralmuerzo()
	{
		$nombre 	=	$_REQUEST['nombre'];
		$data       =   "'" . $nombre . "'";
		$almuerzo	=	new Modelo();
		$dato 		=	$almuerzo->insertar("almuerzos", $data);
		header("location:" . urlsite . '/index.php?m=indexalmuerzo');
	}

	//eliminar almuerzos
	static function eliminaralmuerzos()
	{
		$id 		= 	$_REQUEST['id'];
		$condicion  =   "id=" . $id;
		$almuerzo 	=	new Modelo();
		$dato 		=	$almuerzo->eliminar("almuerzos", $condicion);
		header("location:" . urlsite . '/index.php?m=indexalmuerzo');
	}

	//actualizar almuerzos
	static function actualizaralmuerzo()
	{
		$id 		= 	$_REQUEST['id'];
		$condicion  =   "id=" . $id;
		$nombre =	$_REQUEST['nombre'];
		$data       =   "nombre='" . $nombre . "'";
		$almuerzo 	=	new Modelo();
		$dato 		=	$almuerzo->actualizar("almuerzos", 	$data, $condicion);
		header("location:" . urlsite . '/index.php?m=indexalmuerzo');
	}


	//editar almuerzos
	static function editaralmuerzo()
	{
		$id = $_REQUEST['id'];
		$almuerzo 	=	new Modelo();
		$dato = $almuerzo->mostrar("almuerzos", "id=" . $id);
		require_once(getcwd() . '/vista/almuerzos/editar.php');
	}








	/////////////////CENTROS VIDA////////////////


	//principal centro_vida
	static function indexcentrovida()
	{
		$almuerzos 	=	new Modelo();
		$dato       =  $almuerzos->mostrar("centro_vida", "1");
		require_once("vista/centros_vida/index.php");
	}

	static function nuevocentrovida()
	{
		require_once("vista/centros_vida/nuevo.php");
	}

	//guardar centro_vida
	static function guardarcentrovida()
	{
		$nombre 	=	$_REQUEST['nombre'];
		$data       =   "'" . $nombre . "'";
		$almuerzo	=	new Modelo();
		$dato 		=	$almuerzo->insertar("centro_vida", $data);
		header("location:" . urlsite . '/index.php?m=indexcentrovida');
	}

	//eliminar centro_vida
	static function eliminarcentrovida()
	{
		$id 		= 	$_REQUEST['id'];
		$condicion  =   "id=" . $id;
		$almuerzo 	=	new Modelo();
		$dato 		=	$almuerzo->eliminar("centro_vida", $condicion);
		header("location:" . urlsite . '/index.php?m=indexcentrovida');
	}

	//actualizar centro_vida
	static function actualizarcentrovida()
	{
		$id 		= 	$_REQUEST['id'];
		$condicion  =   "id=" . $id;
		$nombre =	$_REQUEST['nombre'];
		$data       =   "nombre='" . $nombre . "'";
		$centro_vida 	=	new Modelo();
		$dato 		=	$centro_vida->actualizar("centro_vida", 	$data, $condicion);
		header("location:" . urlsite . '/index.php?m=indexcentrovida');
	}


	//editar centro_vida
	static function editarcentrovida()
	{
		$id = $_REQUEST['id'];
		$centro_vida 	=	new Modelo();
		$dato = $centro_vida->mostrar("centro_vida", "id=" . $id);
		require_once(getcwd() . '/vista/centros_vida/editar.php');
	}








	//guardar
	static function guardar()
	{
		$nombre 	=	$_REQUEST['nombre'];
		$precio 	=	$_REQUEST['precio'];
		$data       =   "'" . $nombre . "'," . $precio;
		$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos", $data);
		header("location:" . urlsite);
	}
	//editar
	static function editar()
	{
		$id = $_REQUEST['id'];
		$producto 	=	new Modelo();
		$dato = $producto->mostrar("productos", "id=" . $id);
		require_once("vista/editar.php");
	}
	//actualizar
	static function actualizar()
	{
		$id 		= 	$_REQUEST['id'];
		$nombre 	=	$_REQUEST['nombre'];
		$precio 	=	$_REQUEST['precio'];
		$data       =   "nombre='" . $nombre . "',precio=" . $precio;
		$condicion  =   "id=" . $id;
		$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos", $data, $condicion);
		header("location:" . urlsite);
	}

	// ELIMINAR
	static function eliminar()
	{
		$id 		= 	$_REQUEST['id'];
		$condicion  =   "id=" . $id;
		$producto 	=	new Modelo();
		$dato 		=	$producto->eliminar("productos", $condicion);
		header("location:" . urlsite);
	}

	 // LOGIN
	 static function login(){		
		$username 		= 	$_REQUEST['username'];    	
        $password       =   $_REQUEST['password'];
		if($username=="" || $password==""){
           $error="Ingrese sus credenciales";
		   require_once("vista/login.php");
		}else{
		$condicion= "username='" . $username . "' AND password= '". $password."'";		
		$producto 	=	new Modelo();        
		$dato 		=	$producto->mostrar("usuarios",$condicion);
		if($dato){
			self::dashboard();
		}else{
			$error="Usuario o contraseña incorrecta";
			require_once("vista/login.php");
		}		
		}	
    	
	}

	//principal almuerzos
	static function indexusuario()
	{
		$usuarios	=	new Modelo();
		$dato       =  $usuarios->mostrar("usuarios", "1");	
		require_once("vista/usuarios/index.php");
	}

	static function dashboard()
	{		
		require_once("vista/dashboard.php");
	}
}
