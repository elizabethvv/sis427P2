<?php 
require_once "global.php";
$conexion = pg_connect("host=".DB_HOST." dbname=".DB_NAME." user=".DB_USERNAME." password=".DB_PASSWORD) or die("Falló conexión a la base de datos:\n".pg_last_error());

if (!function_exists('ejecutarConsulta'))
{
	function ejecutarConsulta($sql)
	{
		global $conexion;
		$query = pg_query($conexion, $sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql)
	{
		global $conexion;
		$query = pg_query($conexion, $sql);
		$row = pg_fetch_assoc ($query);
		return $row;
	}
	/*

	function ejecutarConsulta_retornarID($sql)
	{
		global $conexion;
		$query = pg_query($conexion, $sql);
		return $conexion->insert_id;			
	}

	function limpiarCadena($str)
	{
		global $conexion;
		$str = mysqli_real_escape_string($conexion,trim($str));
		return htmlspecialchars($str);
	}*/
}

?>