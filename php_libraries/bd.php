<?php

function openBd(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    
    $conexion = new PDO("mysql:host=$servername;dbname=recomercem", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    
    return $conexion;
}

function closeBd(){
    return null;
}

function selectAllOfertas(){

    $conexion = openBd();
    $sentenciaText = "select * from ofertas";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();
    return $resultado;
}


function selectOfertaByRestaurante($id){

    $conexion = openBd();
    $sentenciaText = "select * from ofertas 
    where id_oferta IN (SELECT id_oferta FROM ofertas_restaurante where id_restaurante = $id)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $ofertas = $sentencia->fetchAll();
    $conexion = closeBd();

  

    


    return $ofertas;
}

function insertUsuario($nombre, $mail, $contr){

    $conexion = openBd();

    $sentenciaText = "insert into usuarios (nom_usuario, contr, mail) values (:nom_usuario, :contr, :mail)";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->bindParam(':nom_usuario', $nombre);
    $sentencia->bindParam(':contr', $contr);
    $sentencia->bindParam(':mail', $mail);
    

    $sentencia->execute();

    $conexion = closeBd();


}
?>