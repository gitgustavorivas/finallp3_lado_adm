<?php
    class agendaController {
        private $model;
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(MODEL_PATH.'agendaModel.php');
            $this->model = new agendaModel();
        }

        public function insert($fecha,$hora,$idCliente,$telefono,$idServicio){
            $id = $this->model->insertar($fecha,$hora,$idCliente,$telefono,$idServicio);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }
        
        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }
        
        public function update($id,$fecha,$hora,$idCliente,$telefono,$idServicio){
            return ($this->model->actualizar($id,$fecha,$hora,$idCliente,$telefono,$idServicio) != false) ? header('location: ./index.php') : header('location: ./edit.php?id='.$id);
        }
        
        public function delete($id){
            return ($this->model->eliminar($id)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }
        
        public function search($id){
            return ($this->model->buscar($id) != false) ? $this->model->buscar($id) : header('location: ./index.php');
        }

        public function combolistCliente(){
            return ($this->model->cargarDesplegableCliente()) ? $this->model->cargarDesplegableCliente() : false;
        }

        public function combolistServicio(){
            return ($this->model->cargarDesplegableServicio()) ? $this->model->cargarDesplegableServicio() : false;
        }

       
        //agregar funciones faltantes
    }