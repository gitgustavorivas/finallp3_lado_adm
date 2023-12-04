<?php
    class servicioController {
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(MODEL_PATH.'servicioModel.php');
            $this->model = new servicioModel();
        }

        public function insert($nombre,$importe){
            $id = $this->model->insertar($nombre,$importe);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }
        
        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }
        
        public function update($id,$nombre,$importe){
            return ($this->model->actualizar($id,$nombre,$importe) != false) ? header('location: ./index.php') : header('location: ./edit.php?id='.$id);
        }
        
        public function delete($id){
            return ($this->model->eliminar($id)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }
        
        public function search($id){
            return ($this->model->buscar($id) != false) ? $this->model->buscar($id) : header('location: ./index.php');
        }
        
    }