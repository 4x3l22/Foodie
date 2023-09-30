<?php

    include('../librerias/conexion.php');
    $conexion = new conexion();

    $sqlPersona= " SELECT personaId,
            tipoDocumentoId,
            personaNumeroDocumento,
            personaNombres,
            personaPrimerApellido,
            personaSegundoApellido,
            personaFechaNacimiento,
            personaTelefono,
            personaEmail,
            personaMunicipioResidencia,
            personaMunicipioNacimiento
        FROM persona;";
        
    $consultaPersona= $conexion->consulta($sqlPersona);

    foreach($consultaPersona as $datosPersona){
        $resultadoPersona[] =
        array(
            "personaId"=>$datosPersona['personaId'] ,
            "personaNumeroDocumento"=>$datosPersona['personaNumeroDocumento'] ,
            "personaNombres"=> $datosPersona['personaNombres'],
            "personaPrimerApellido"=>$datosPersona['personaPrimerApellido'],
            "personaSegundoApellido"=> $datosPersona['personaSegundoApellido'],
            "personaEmail"=> $datosPersona['personaEmail']
        );
    }


    header("Content-type:application/json");
    echo json_encode($resultadoPersona);

?>