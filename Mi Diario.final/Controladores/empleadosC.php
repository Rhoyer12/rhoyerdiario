<?php  // Controladores/empleadosC.php
class EmpleadosC {
    function __construct(){
        $this->empleadosM = new EmpleadosM();
    }

    public function registrarEmpleadosC(){
        if(isset($_POST['titulo'])){

            $fecha=$_POST['fecha'];
            
            $date="$fecha $hora";

            $datosC =array();
            $datosC['titulo'] = $_POST['titulo'];
           
            $datosC['contenido'] = $_POST['contenido'];
            $datosC['fecha'] = $date;
            $datosC['estado'] = $_POST['estado'];

            $tablaBD = 'notas';

            $pagina = EmpleadosM::registrarEmpleadosM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
           

        }
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        $tablaBD = 'notas';
        $pagina = $this->empleadosM->mostrarEmpleadosM($tablaBD);
        return $pagina;
    }

    public function mostrarEmpleadosfC(){
        $tablaBD = 'notas';
        $pagina = $this->empleadosM->mostrarEmpleadosfM($tablaBD);
        return $pagina;
    }

    public function mostrarEmpleadosaC(){
        $tablaBD = 'notas';
        $pagina = $this->empleadosM->mostrarEmpleadosaM($tablaBD);
        return $pagina;
    }


    //editar empleados
    public function editarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id'=>$_GET['id']);
            $tablaBD = 'notas';
            $pagina = $this->empleadosM->editarEmpleadoM($datosC, $tablaBD);
            return $pagina;
        }
    }

    //actualizar empleados
    public function actualizarEmpleadoC(){
        if(isset($_POST['id'])){
            
            $datosC = array(    'estado'=>$_POST['estado'],
                                'contenido'=>$_POST['contenido'],
                                'id'=>$_POST['id'],
                                
                            );
            $tablaBD = 'notas';
            $pagina = $this->empleadosM->actualizarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
            return $pagina;
        }
        
    }

    //borrar empleado
    public function borrarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id' => $_GET['id']);
            $tablaBD = 'notas';
            $this->empleadosM->borrarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
        }
    }

    public function descarchivarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id' => $_GET['id']);
            $tablaBD = 'notas';
            $this->empleadosM->desarchivarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=notasa');
        }
    }
}
?>