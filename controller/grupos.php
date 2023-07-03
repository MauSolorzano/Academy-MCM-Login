<?php
class Grupos extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Listado de Grupos";
        $this->view->mensajeResultado = "";        
    }
    function render(){
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }  
        $datos = $this->model->getGrupos();               
        $this->view->datos = $datos;
        $this->view->render('grupos/index');
    }

    function crear(){   //para ver la vista   
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }                  
        $this->view->datos = [];
        $this->view->mensaje = "Crear Grupos";
        $this->view->render('grupos/crear');
    }

    function insertargrupo(){
        //var_dump($_POST);
        if ($this->model->insertargrupo($_POST)){
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){ 
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }                       
        $this->view->datos = [];
        $this->view->mensaje = "Detalles del Cursos";
        $this->view->render('grupos/detalle');
    }
    function vergrupos( $param = null ){   
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }     
        $id = $param[0];
        $datos = $this->model->vergrupos($id);        
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle grupo";
        $this->view->render('grupos/detalle');
    }
    function actualizargrupo(){
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }
        //var_dump($_POST);actualizargrupo
        if ($this->model->actualizargrupo($_POST)){

            $datos = new classGrupos();

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualizacion de Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se actualizo el Registro
                </div>';
        }
        // $this->view->datos = $datos;
        // $this->view->mensaje = "Detalle Grupo";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }    
    function eliminargrupo( $param = null ){   
        if (!parent::sesionIniciada()) {
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }
        $id = $param[0];
        if ($this->model->eliminargrupo($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }
}

?>