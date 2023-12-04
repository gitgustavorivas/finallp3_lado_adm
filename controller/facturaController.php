<?php
    class facturaController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(MODEL_PATH.'facturaModel.php');
            $this->model = new facturaModel();
        }

        public function search($factura){
            return ($this->model->buscar($factura) != false) ? $this->model->buscar($factura) : false;
                
        }
        public function select(){
            return ($this->model->listar() != false) ? $this->model->listar() : false;
        }

        public function listservicios(){
            return ($this->model->listarServicios() != false) ? $this->model->listarServicios() : false;
        }
        
        public function combolistclientes(){
            return ($this->model->cargarDesplegableCliente() != false) ? $this->model->cargarDesplegableCliente() : false;
        }
        public function listclientes($idCliente){
            return ($this->model->cargarClientesID($idCliente) != false) ? $this->model->cargarClientesID($idCliente) : false;
        }

        public function combolistformapagos(){
            return ($this->model->cargarFormPagos()!= false) ? $this->model->cargarFormPagos() : false;
        }
        public function insert($fecha,$idUsuario,$idCliente,$idFormaPago){
            $id = $this->model->insertar($fecha,$idUsuario,$idCliente,$idFormaPago);
            return ($id != false) ? $id : false;
        }
        public function insertdetail($numero,$idServicio,$cantidad,$importe){
            $id = $this->model->insertarDetalle($numero,$idServicio,$cantidad,$importe);
            return ($id != false) ? $id : false;
        }
        public function update($numero){
            return ($this->model->actualizar($numero) != false) ? header('location: ./index.php') : false;
        }
    }
?>