<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class EmpleadosM extends ConexionBD{
 
    public function registrarEmpleadosM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        $nombre = $datosC['titulo'];
        $apellido = $datosC['contenido'];
        $email = $datosC['fecha'];
        $salario = $datosC['estado'];

        $id=$_SESSION['id'];
        $query = "INSERT INTO $tablaBD VALUES 
            (Null,'$id', '$nombre', '$apellido', '$email', '$salario')";
        echo "$query ";
        $result = $cbd->query($query);

        return $result;
    }

    public function mostrarEmpleadosM($tablaBD){
        $cbd = ConexionBD::cBD();
        $id=$_SESSION['id'];
        $query = "SELECT *
                FROM $tablaBD where idusuario=$id and estado<=2";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarEmpleadosaM($tablaBD){
        $cbd = ConexionBD::cBD();
        $id=$_SESSION['id'];
        $query = "SELECT *
                FROM $tablaBD where idusuario=$id and estado=3";
        $result = $cbd->query($query);
        return $result;
    }

    public function mostrarEmpleadosfM($tablaBD){
        $cbd = ConexionBD::cBD();
        $id=$_SESSION['id'];
        $query = "SELECT *
                FROM $tablaBD where idusuario=$id and estado=1";
        $result = $cbd->query($query);
        return $result;
    }

    public function editarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        $id = $datosC['id'];
        $query = "SELECT * FROM $tablaBD WHERE idnota='$id'";
        $result = $cbd->query($query);
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        return $rows;
    }

    public function actualizarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE $tablaBD
            SET 
            estado='$estado', 
            contenido='$contenido' 
            
            WHERE idnota='$id'";
        echo $query;
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function borrarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE $tablaBD SET estado='3' WHERE idnota='$id'";
        $resultado = $cbd->query($query);
    }

    public function desarchivarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE $tablaBD SET estado='2' WHERE idnota='$id'";
        $resultado = $cbd->query($query);
    }
} 
?>