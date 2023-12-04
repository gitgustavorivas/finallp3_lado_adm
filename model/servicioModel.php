<?php
    class servicioModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($nombre,$importe) {
            $sql = 'INSERT INTO servicios VALUES (0,:nombre,:importe)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':importe',$importe);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idServicio,$nombre,$importe) {
            $sql = 'UPDATE servicios SET nombre=:nombre,importe=:importe WHERE idServicio=:idServicio';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':importe',$importe);
            $statement->bindParam(':idServicio',$idServicio);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idServicio) {
            $sql = 'DELETE FROM servicios WHERE idServicio=:idServicio';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idServicio',$idServicio);
            return ($statement->execute()) ? true : false;
        }

        public function listar() {
            $sql = 'SELECT idServicio,nombre,importe
            FROM servicios ORDER BY idServicio';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idServicio) {
            $sql = 'SELECT idServicio,nombre,importe FROM servicios WHERE idServicio = :idServicio';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idServicio',$idServicio);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }