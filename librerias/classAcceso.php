<?php

    class AccesoPersona{

        private $usuario;
        private $contraseña;

        public function SetUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function SetContraseña($contraseña){
            $this->contraseña = $contraseña;
        }

        public function getContraseña(){
            return $this->contraseña;
        }
    }
?>