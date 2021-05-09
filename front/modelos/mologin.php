<?php
	require "../config/conexion.php";

Class Usuario
{
	public function __construct(){}

	public function insertar($nombre,$apellidos,$email,$password){

		$sql="INSERT INTO usuario(nombre,apellidos,email,contraseña,tipo_usuario)
		VALUES ('$nombre','$apellidos','$email','$password','1')";
		/*$idusuario = ejecutarConsulta_retornarID($sql);
		$sql2="INSERT INTO detalles_perfil (idusuario) values ('$idusuario')";*/
		return ejecutarConsulta($sql)?1:0;
	}


	public function verificar($login,$clave){
		$sql="SELECT * FROM usuario WHERE (login='$login' OR email='$login')  AND password='$clave'";
		return ejecutarConsulta($sql);
	}

	public function restablecer_password($idusuario,$clave,$token){
		$sql = "SELECT * FROM usuario WHERE idusuario=$idusuario AND token='$token'";
		$resp =ejecutarConsulta($sql);
		$fetch= $resp->fetch_object();
		if(isset($fetch)){
			$sql= "UPDATE usuario SET password='$clave', token='' where idusuario=$idusuario";
			return ejecutarConsulta($sql);
		}else{
			return 0;
		}
	}

	public function validar_token($idusuario,$token){
		$sql = "SELECT * FROM usuario WHERE idusuario=$idusuario AND token='$token' AND fecha_token > now()
		 ";
		return ejecutarConsulta($sql);
	}

	public function validar_email($emailr){
		$sql ="SELECT * FROM usuario WHERE email='$emailr'";
		$resp = ejecutarConsulta($sql);
		$fetch=$resp->fetch_object();
		if (isset($fetch)){
			$token = $this->getToken();
			$sql = "UPDATE usuario SET token='$token',fecha_token=DATE_ADD(now(), INTERVAL +1 HOUR) where idusuario=$fetch->idusuario";
			ejecutarConsulta($sql);
			$asunto= "Para restablecer su contraseña ingrese en el siguiente enlace </br>
			<a href='https://mujer-es.com/front/vistas/vilogin.php?id=$fetch->idusuario&token=$token'> Cambiar Contrasena</a>";
			return $this->enviar_email($emailr,$asunto);

		} else {
			return "Email no valido";
		}
	}

	public function getToken(){
		$alpha = "123qwertyuiopa456sdfghjklzxcvbnm789";
		$qrrand="";
		$longitud=20;
		for($i=0;$i<$longitud;$i++){
		    $qrrand .= $alpha[rand(0, strlen($alpha)-1)];
		}
		return $qrrand;
	}

	public function enviar_email($emailr, $asunto){
		$emailadmin="recupera@mujer-es.com";
		$to = $emailr;
		$from = $emailadmin;
		$fromName = 'Recuperación de Password';
		$subject = 'Recuperación de Password';
		$htmlContent =$asunto;
		$headers = "From: $fromName"." <".$from.">";
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
		$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
		$message .= "--{$mime_boundary}--";
		$returnpath = "-f" . $from;
		$mail=mail($to, $subject, $message, $headers, $returnpath);
		echo "Email enviado";
	}

	public function verificarusuario($login){
		$sql="SELECT idusuario FROM usuario WHERE login='$login'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function verificaremail($email){
		$sql="SELECT idusuario FROM usuario WHERE email='$email'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function verificartelefono($telefono){
		$sql="SELECT idusuario FROM usuario WHERE telefono='$telefono'";
		return ejecutarConsultaSimpleFila($sql);
	}

}
?>
