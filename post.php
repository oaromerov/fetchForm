<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
header('Content-Type: application/json');

if($usuario === '' || $pass=== ''){
    //Guardamos los datos en un array
    $datos = array(
        'estado' => 'error',
    );    
}else{
    $datos = array(
        'estado' => 'ok',
        'usuario' => $usuario, 
        'pass' => $pass
    );
    //echo json_encode('Correcto: <br>Usuario:'.$usuario.'<br>Pass:'.$pass);
}

//Devolvemos el array pasado a JSON como objeto
echo json_encode($datos, JSON_FORCE_OBJECT);