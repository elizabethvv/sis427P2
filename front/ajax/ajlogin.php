<?php
    session_start();
    require_once '../modelos/mologin.php';
    $usuario = new Usuario();

    $idusuario=isset($_SESSION["idusuario"])? $_SESSION["idusuario"]:"";
    $nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
    $apellidos=isset($_POST["apellidos"])? limpiarCadena($_POST["apellidos"]):"";
    $email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
    $clave=isset($_POST["clave1"])? limpiarCadena($_POST["clave1"]):"";
    $tipo_usuario=isset($_POST["tipo_usuario"])? limpiarCadena($_POST["tipo_usuario"]):"";

    switch($_GET['op']){
        case 'guardaryeditar_usuario':
            $clavehash=hash("SHA256",$clave);
            $password=$clavehash;
            if (empty($idusuario)){
                $rspta=$usuario->insertar($nombre,$apellidos,$email,$password);
                echo $rspta ? "Usuario registrado" : "No se pudieron registrar todos los datos del usuario";
            }
          /* else {
                $rspta=$usuario->editar($idusuario,$nombre,$apellidos,$telefono,$clavehash,$residencia);
                echo $rspta ? "Usuario actualizado" : "Usuario no se pudo actualizar";
            }*/
        break;

        case 'verificar':

            $logina=$_POST['logina'];
            $clavea=$_POST['clavea'];
            $clavehash=hash("SHA256",$clavea);
            $rspta=$usuario->verificar($logina, $clavehash);
            $fetch=$rspta->fetch_object();

            if (isset($fetch))
            {

                $_SESSION['idusuario']=$fetch->idusuario;
                $_SESSION['nombre']=$fetch->nombre;
                $_SESSION['login']=$fetch->login;
                $_SESSION['email']=$fetch->email;
                $_SESSION['telefono']=$fetch->telefono;
                $_SESSION['imagen']=$fetch->imagen;
                $_SESSION['tipo_usuario']=$fetch->tipo_usuario;

            }
            echo json_encode($fetch);
        break;

        case 'enviaremail':
            $emailr=isset($_POST["emailr"])? limpiarCadena($_POST["emailr"]):"";
            echo $usuario->validar_email($emailr);

        break;

        case 'restablecerpassword':
            $id = isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
            $token = isset($_POST["token"])? limpiarCadena($_POST["token"]):"";
            $claver = isset($_POST["claver"])? limpiarCadena($_POST["claver"]):"";
            $clavehash=hash("SHA256",$claver);
            $resp = $usuario->restablecer_password($id,$clavehash,$token);
             echo $resp? "Contraseña restablecida": "No se pudo restablecer contraseña";

        break;

        case 'validartoken':
            $id = isset($_POST["idv"])? limpiarCadena($_POST["idv"]):"";
            $token = isset($_POST["tokenv"])? limpiarCadena($_POST["tokenv"]):"";
            $resp = $usuario->validar_token($id,$token);
            $fetch= $resp->fetch_object();
            echo json_encode($fetch);
        break;

        case 'salir':
            session_unset();
            session_destroy();
            header("Location: ../../index.php");
        break;

       case 'verificarusuario':
            $login=$_POST['data'];
            $rspta=$usuario->verificarusuario($login);
            echo isset($rspta['idusuario']) ? 1:0;
        break;

        case 'verificaremail':
            $email=$_POST['data'];
            $rspta=$usuario->verificaremail($email);
            echo isset($rspta['idusuario']) ? 1:0;
        break;

        case 'verificartelefono':
            $telefono=$_POST['data'];
            $rspta=$usuario->verificartelefono($telefono);
            echo isset($rspta['idusuario']) ? 1:0;
        break;

        }
?>
