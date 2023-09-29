<?php

    class conexion{
        private $dsn;
        private $server;
        private $usuario;
        private $baseDatos;
        private $password;

        public function __construct(){
            $this->server="localhost";
            $this->usuario="postgres";
            $this->baseDatos="turismo";
            $this->password="123456";
        }

        public function conectar(){
            $this->dsn = 'pgsql:host='.$this->server.';port=5432;dbname='.$this->baseDatos.'';
            try {
                $conexion = new PDO($this->dsn, $this->usuario, $this->password);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error al conectar a la base de datos: " . $e->getMessage();
            }
            return $conexion;
        }
        
        public function consulta($querysql){
            $conexion=$this->conectar();
            $consulta = $conexion->query($querysql);
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $resultados[] = $fila;
            }
            return $resultados;
        }

        public function ejecutar($querysql,$values){
            $conexion=$this->conectar();
            $queryEjecutar = $conexion->prepare($querysql);
            $queryEjecutar->execute($values);
        }

        
        public function consultaValor($querysql,$values){
            $conexion=$this->conectar();
            $consulta=$conexion->prepare($querysql);
            $consulta->execute($values);
            while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $resultados[] = $fila;
            }
            return $resultados;
        }

    }

?>