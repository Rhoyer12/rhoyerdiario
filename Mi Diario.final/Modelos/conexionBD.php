<?php  //Modelos/conexcionBD.php
class ConexionBD{
    static public function cBD(){
        $cbd = new mysqli('localhost','root','','diariofinal');
        return $cbd;
    }
}
?>