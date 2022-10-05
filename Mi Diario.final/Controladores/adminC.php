<?php  //Controladores/adminC.php
class AdminC{
    public function IngresoC(){
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");



        if(isset($_POST["usuarioI"])){

            $contraseñaingreso=$_POST["claveI"];
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);

            $tablaBD = "user";


            $pagina = AdminM::VerIngresoM($datosC, $tablaBD);

            if(password_verify($contraseñaingreso,$pagina["password"])){
                session_start();

                $_SESSION['id']=$pagina["id"];
                $_SESSION['username']=$pagina["username"];
                $_SESSION['correo']=$pagina["correo"];
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            


            }else{
                echo "ERROR AL INGRESAR";
            }
        }
    }

    public function registrarUsuarioC(){
        if(isset($_POST['nombre'])){


            if($_POST['contra1']==$_POST['contra2']){
                
                    $datosC =array();
                    $datosC['nombre'] = $_POST['nombre'];
                    $datosC['contra'] = $_POST['contra1'];
                    $datosC['email'] = $_POST['email'];
                    $datosC['pregunta'] = $_POST['pregunta'];
                    $datosC['respuesta'] = $_POST['respuesta'];
                    

                    $tablaBD = 'user';
                    
                    $pagina = AdminM::registrarUsuarioM($datosC, $tablaBD);
                  
    
               

            }else {echo "Las Contraseñas No Son Iguales";}


           

        }
    }

    public function recuperarUsuarioC(){
        if(isset($_POST['nombre'])){

                    $datosC =array();
                    $datosC['nombre'] = $_POST['nombre'];
                  
 
                    $tablaBD = 'user';
                    
                    $result = AdminM::recuperarUsuarioM($datosC, $tablaBD);
                    
                    $id=$result["id"];
                if(isset($id)){
                    header("location: index.php?ruta=recuperarfin&id=$id");
                }else{echo "El Nombre De Usuario No Existe";}

        }
    }

    public function RecuperarVerC(){


        if(isset($_GET['id'])){

            $datosC = array('id'=>$_GET['id']);
            $tablaBD = 'user';
            $pagina =  AdminM::recuperarVerM($datosC, $tablaBD);
            return $pagina;
        }

        
    }

    public function recuperarfinUsuarioC(){
       
        if(isset($_POST["id"])){

            if($_POST['contraseña']==$_POST['contraseña1']){
                
                $datosC =array();
                $datosC['id'] = $_POST['id'];
                $datosC['respuesta'] = $_POST['respuesta'];
                $datosC['correo'] = $_POST['correo'];
                $datosC['contra'] = $_POST['contraseña'];
            

            $tablaBD = "user";


            $pagina = AdminM::recuperarfinUsuarioM($datosC, $tablaBD);

            $id=$pagina["respuesta"];
                if(isset($id)){

                    $pagina = AdminM::RecuUsuarioM($datosC, $tablaBD);
                    header("location: index.php?ruta=ingreso");
                    
                }else{echo "Error Los Campos No Coinciden";}

            

           

        }else {echo "Las Contraseñas No Son Iguales";}

            
        }
    }
    

    public function salirC(){
        session_destroy();
        header("location:index.php?=ingreso");
    }
}
?>