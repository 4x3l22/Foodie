<?php

    include('../conex/conex.php');

    $conex = new conexion();

    $codigo = mt_rand(2000, 9999);

    $values = array(
        ':nombre'=> $_POST['nombre'],
        ':apellido'=> $_POST['apellido'],
        ':identificacion'=> $_POST['identificacion'],
        ':email'=> $_POST['email'],
        ':telefono'=> $_POST['telefono'],
        ':municipio'=> $_POST['municipio'],
        ':contrasena'=> $_POST['contrasena'],
        ':codigo' => $codigo
    );

    $sql_persona = "INSERT INTO public.persona(
                                per_codigo, 
                                per_nombre, 
                                per_apellido, 
                                per_identificacion, 
                                per_email, 
                                per_contrasena, 
                                per_fechacreo,
                                per_telefono,
                                per_municipio)
                        VALUES (:codigo, 
                                ':nombre', 
                                ':apellido', 
                                :identificacion, 
                                ':email',
                                ':contrasena',
                                NOW(),
                                :telefono, 
                                :municipio);";

    $conex->ejecutar($sql_persona,$values);
    header('Location:http://localhost/webturismo/public');

?>