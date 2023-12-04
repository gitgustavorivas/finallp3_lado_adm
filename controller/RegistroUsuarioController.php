<?php
    class RegistroUsuarioController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(MODEL_PATH.'ModelRegistroUsuario.php');
            $this->model = new ModelRegistroUsuario();
        }

        public function search($id){
            return ($this->model->buscar($id) != false) ? $this->model->buscar($id) : false;
        }

        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        } 

        
        public function combolist(){
            return ($this->model->cargarDesplegable()) ? $this->model->cargarDesplegable() : false;
        }

        public function insert($alias,$clave,$idRol){
            $id = $this->model->insertar($alias,$clave,$idRol);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }

        public function delete($id){
            return ($this->model->eliminar($id)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }

        public function update($id,$alias,$clave,$idRol){
            return ($this->model->actualizar($id,$alias,$clave,$idRol) != false) ? header('location: ./index.php') : header('location: ./edit.php?id='.$id);
        }
    }
?>