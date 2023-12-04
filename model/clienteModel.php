<?php
    class clienteModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($nombre,$apellido,$edad,$idCiudad,$ci) {
            $sql = 'INSERT INTO clientes VALUES (0,:nombre,:apellido,:edad,:idCiudad,:ci)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':edad',$edad);
            $statement->bindParam(':idCiudad',$idCiudad);
            $statement->bindParam(':ci',$ci);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idCliente,$nombre,$apellido,$edad,$idCiudad,$ci) {
            $sql = 'UPDATE clientes SET nombre=:nombre,apellido=:apellido,edad=:edad,idCiudad=:idCiudad,ci=:ci WHERE idCliente=:idCliente';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':edad',$edad);
            $statement->bindParam(':idCiudad',$idCiudad);
            $statement->bindParam(':ci',$ci);
            $statement->bindParam(':idCliente',$idCliente);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idCliente) {
                $sql = 'DELETE FROM clientes WHERE idCliente=:idCliente';
                $statement = $this->PDO->prepare($sql);
                $statement->bindParam(':idCliente',$idCliente);
                return ($statement->execute()) ? true : false;
        }
        public function listar() {
            $sql = 'SELECT e.idCliente,e.nombre,e.apellido,e.edad,e.idCiudad,e.ci,c.nombre ciudad FROM clientes e JOIN ciudades c ON e.idCiudad = c.idCiudad ORDER BY idCliente DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        
        public function cargarDesplegable() {
            $sql = 'SELECT idCiudad,nombre FROM ciudades ORDER BY idCiudad ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idCliente) {
            $sql = 'SELECT e.idCliente,e.nombre,e.apellido,e.edad,e.idCiudad,e.ci,c.nombre ciudad FROM clientes e JOIN ciudades c ON e.idCiudad = c.idCiudad WHERE idCliente = :idCliente';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idCliente',$idCliente);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
}
?>