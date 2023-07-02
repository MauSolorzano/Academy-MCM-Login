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

    function insertarCurso(){
        //var_dump($_POST);
        if ($this->model->insertarCurso($_POST)){
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
        $this->view->render('cursos/detalle');
    }
}

?>