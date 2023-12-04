<?php
    class ModelRegistroUsuario {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }
        
        public function listar() {
            $sql = 'SELECT u.idUsuario,u.alias,u.clave,u.idRol FROM usuarios u 
            JOIN roles r ON u.idRol = r.idRol ORDER BY idUsuario';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idUsuario) {
            $sql = 'SELECT * FROM usuarios WHERE alias=:alias';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idUsuario',$idUsuario);        
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function insertar($alias,$clave,$idRol) {
            $sql = 'INSERT INTO usuarios VALUES (0,:alias,:clave,:idRol)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':alias',$alias);
            $statement->bindParam(':clave',$clave);
            $statement->bindParam(':idRol',$idRol);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        
        public function eliminar($idUsuario) {
            $sql = 'DELETE FROM usuarios WHERE idUsuario=:idUsuario';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idUsuario',$idUsuario);
            return ($statement->execute()) ? true : false;
        }
      

        public function actualizar($idUsuario,$alias,$clave,$idRol) {
            $sql = 'UPDATE usuarios SET alias=:alias,clave=:clave,idRol=:idRol 
            WHERE idUsuario=:idUsuario';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':alias',$alias);
            $statement->bindParam(':clave',$clave);
            $statement->bindParam(':idRol',$idRol);
            $statement->bindParam(':idUsuario',$idUsuario);
            return ($statement->execute()) ? true : false;
        }
        
        public function cargarDesplegable() {
            $sql = 'SELECT idRol,nombre FROM roles ORDER BY idRol ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

    }
?>