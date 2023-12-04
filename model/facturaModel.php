<?php
    class facturaModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }
       
        public function listar() {
            $sql = 'SELECT f.numero,f.fecha,concat(c.nombre," ",c.apellido)cliente,c.ci,SUM(d.cantidad*d.importe) total 
            FROM facturas f JOIN detallefacturas d ON f.numero=d.numero 
            JOIN clientes c ON f.idCliente=c.idCliente WHERE f.anulada=0 GROUP BY f.numero ORDER BY f.numero DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }        

        public function listarServicios() {
            $sql = 'SELECT * FROM servicios ORDER BY idServicio';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($factura) {
            $sql = 'SELECT * FROM facturas WHERE numero=:numero';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':numero',$factura);        
            return ($statement->execute()) ? $statement->fetch() : false;
        } 
        
        public function insertar($fecha,$idUsuario,$idCliente,$idFormaPago) {
            $sql = 'INSERT INTO facturas VALUES (0,:CURRENT_DATE(),:idUsuario,:idCliente,:idFormaPago,0)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idUsuario',$idUsuario);
            $statement->bindParam(':idCliente',$idCliente);
            $statement->bindParam(':idFormaPago',$idFormaPago);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }
        public function insertarDetalle($numero,$idServicio,$cantidad,$importe) {
            $sql = 'INSERT INTO detallefacturas VALUES (:numero,:idServicio,:cantidad,:importe)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':numero',$numero);
            $statement->bindParam(':idServicio',$idServicio);
            $statement->bindParam(':cantidad',$cantidad);
            $statement->bindParam(':importe',$importe);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($numero) {
            $sql = 'UPDATE facturas SET anulada=1 WHERE numero=:numero';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':numero',$numero);
            return ($statement->execute()) ? true : false;
        }

        public function cargarDesplegableCliente() {
            $sql = 'SELECT c.idCliente,concat(c.nombre,"  ",c.apellido)cliente,c.ci 
            FROM clientes c ORDER BY c.nombre';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargarClientesID($idCliente) {
            $sql = 'SELECT c.idCliente,concat(c.nombre," ",c.apellido)razonsocial,c.ci, i.nombre ciudad 
            FROM clientes c JOIN ciudades i ON c.idCiudad = i.idCiudad 
            WHERE c.idCliente = :idCliente ORDER BY c.nombre';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idCliente',$idCliente);            
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function cargarFormPagos() {
            $sql = 'SELECT f.idFormaPago,f.descripcion FROM formapagos f ORDER by f.idFormaPago';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

    }
?>