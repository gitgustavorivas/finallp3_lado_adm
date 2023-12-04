<?php
    class agendaModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($fecha,$hora,$idCliente,$telefono,$idServicio) {
            $sql = 'INSERT INTO agendas VALUES (0,:fecha,:hora,:idCliente,:telefono,:idServicio)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':fecha',$fecha);
            $statement->bindParam(':hora',$hora);
            $statement->bindParam(':idCliente',$idCliente);
            $statement->bindParam(':telefono',$telefono);
            $statement->bindParam(':idServicio',$idServicio);
            
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idAgenda,$fecha,$hora,$idCliente,$telefono,$idServicio) {
            $sql = 'UPDATE agendas SET fecha=:fecha,hora=:hora,idCliente=:idCliente,telefono=:telefono,idServicio=:idServicio
            WHERE idAgenda=:idAgenda';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':fecha',$fecha);
            $statement->bindParam(':hora',$hora);
            $statement->bindParam(':idCliente',$idCliente);
            $statement->bindParam(':telefono',$telefono);
            $statement->bindParam(':idServicio',$idServicio);
           
            $statement->bindParam(':idAgenda',$idAgenda);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idAgenda) {
            $sql = 'DELETE FROM agendas WHERE idAgenda=:idAgenda';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idAgenda',$idAgenda);
            return ($statement->execute()) ? true : false;
        }

        public function listar() {
            $sql = 'SELECT a.idAgenda,a.fecha,a.hora,a.idCliente,a.telefono,a.idServicio,
            c.nombre cliente,i.nombre servicio 
            FROM agendas a JOIN clientes c ON a.idCliente = c.idCliente
            JOIN servicios i ON a.idServicio = i.idServicio
            ORDER BY idAgenda DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idAgenda) {
            $sql = 'SELECT a.idAgenda,a.fecha,a.hora,a.idCliente,a.telefono,a.idServicio,
            c.nombre cliente,i.nombre servicio 
            FROM agendas a JOIN clientes c ON a.idCliente = c.idCliente
            JOIN servicios i ON a.idServicio = i.idServicio
           
            WHERE idAgenda = :idAgenda';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idAgenda',$idAgenda);
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function cargarDesplegableCliente() {
            $sql = 'SELECT idCliente,nombre FROM clientes ORDER BY idCliente';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargarDesplegableServicio() {
            $sql = 'SELECT idServicio,nombre FROM servicios ORDER BY idServicio';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

       
    }