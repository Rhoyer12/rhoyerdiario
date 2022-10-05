<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        static public function VerIngresoM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            
            $query = "SELECT * FROM $tablaBD 
                WHERE username='$usuario'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
        }

        static public function IngresoM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            $clave = $datosC['clave'];
            $query = "SELECT usuario, clave FROM $tablaBD 
                WHERE usuario='$usuario' AND clave='$clave'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
        }

        static public function registrarUsuarioM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $nombre = $datosC['nombre'];
            $contra = $datosC['contra'];
            $email = $datosC['email'];
            $pregunta = $datosC['pregunta'];
            $respuesta = $datosC['respuesta'];
    
            $password = password_hash($contra, PASSWORD_DEFAULT);
    
            $query = "INSERT INTO $tablaBD VALUES 
                (Null,'$nombre', '$password', '$email', '$pregunta', '$respuesta')";
    
            $result = $cbd->query($query);
    
            return $result;
        }

        static public function recuperarUsuarioM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $nombre = $datosC['nombre'];
    
           

            $query = "SELECT * FROM $tablaBD 
                WHERE username='$nombre'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
    
        }

        public function recuperarVerM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $id = $datosC['id'];
            
            $query = "SELECT *
                    FROM $tablaBD where id=$id";
            $result = $cbd->query($query);
            return $result;
        }

        static public function recuperarfinUsuarioM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $id = $datosC['id'];
            $respuesta = $datosC['respuesta'];
            $correo = $datosC['correo'];
            
    
            $query = "SELECT * FROM $tablaBD WHERE id='$id' and correo='$correo' and respuesta='$respuesta'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
    
        }

        static public function RecuUsuarioM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
           
            $contra = $datosC['contra'];
            $id = $datosC['id'];
            
    
            $password = password_hash($contra, PASSWORD_DEFAULT);

            
    
            $query = "UPDATE `user` SET password='$password' WHERE id='$id'";
    
            $result = $cbd->query($query);
    
            return $result;
        }
    }

    
?>