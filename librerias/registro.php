<?php

    include('./conexion.php');

    $conexion = new conexion();

    $codigo = mt_rand(2000, 9999);

    $values = array(
        ':codigo' => $codigo,
        ':nombre'=> $_POST['nombre'],
        ':apellido'=> $_POST['apellido'],
        ':identificacion'=> $_POST['identificacion'],
        ':email'=> $_POST['email'],
        ':telefono'=> $_POST['telefono'],
        ':municipio'=> $_POST['municipio'],
        ':contrasena'=> $_POST['contrasena']
        
    );

    $sql_persona = "INSERT INTO `turismo`.`persona`( 
                                `personaCodigo`, 
                                `personaNombre`, 
                                `personaApellido`, 
                                `personaIdentificacion`, 
                                `personaEmail`, 
                                `personaTelefono`, 
                                `personaMunicipio`, 
                                `personaContrasena`, 
                                `personaFechacreo`)
                        VALUES (:codigo, 
                                :nombre, 
                                :apellido, 
                                :identificacion, 
                                :email, 
                                :telefono, 
                                :municipio, 
                                :contrasena, 
                                NOW())";

    $conexion->ejecutar($sql_persona,$values);
    header('Location:http://localhost/turismo/');

?>