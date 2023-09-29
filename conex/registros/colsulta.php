<?php
    include('../conex/conex.php');
    class Rsconsultas extends conexion{

        public function municipios(){
            $sql_municipios="SELECT mun_codigo, mun_descripcion
                                FROM public.municipios;";


            $conexion =$this->consulta($sql_municipios);
            return $conexion;
        }
    }

?>