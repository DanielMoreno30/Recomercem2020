<?php

session_start();

function errorMessage($e)
{
    if (!empty($e->errorInfo[1])) 
    {
        switch ($e->errorInfo[1]) {
            case 1062:
                $mensaje = 'Registro duplicado';
                break;
            case 1451:
                $mensaje = 'Registro con elementos relacionados';
                break;
            
            default:
                $mensaje = $e->errorInfo[1].' - '.$e->errorInfo[2];
                break;
        }
    }
    else
    {
        switch ($e->getCode()) {
            case 1044:
                $mensaje = 'Usuario y/o password incorrecto';
                break;
            case 1049:
                $mensaje = 'Base de datos desconocida';
                break;
            case 2002:
                $mensaje = 'No se encuentra el servidor';
                break;
            default:
                $mensaje = $e->getCode().' - '. $e->getMessage();
                break;
        }
    }

    return $mensaje;

}




function openBd(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    
    $conexion = new PDO("mysql:host=$servername;dbname=recomencem", $username, $password);
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
function selectOfertasRestaurante()
{
    $conexion = openBd();
    $sentenciaText = "select ofertas_restaurante.id_restaurante, ofertas.id_oferta,ofertas.nombre,ofertas.puntos,ofertas.codigo from ofertas, ofertas_restaurante where ofertas.id_oferta = ofertas_restaurante.id_oferta";
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
function insertOferta($id_restaurante,$id_oferta,$nombre,$puntos,$codigo)
{
    try
    {

        $conexion = openBd();

        $sentenciaText = "insert into ofertas_restaurante(id_oferta,id_restaurante) values(:id_oferta,:id_restaurante)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_restaurante', $id_restaurante);
        $sentencia->bindParam(':id_oferta', $id_oferta);
        $sentencia->execute();

        $conexion = closeBd();

        $conexion = openBd();

        $sentenciaText = "insert into ofertas(id_oferta,nombre,puntos,codigo) values(:id_oferta,:nombre,:puntos,:codigo)";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':id_oferta', $id_oferta);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':puntos', $puntos);
        $sentencia->bindParam(':codigo', $codigo);
        
        $sentencia->execute();

        $_SESSION['mensaje']= 'Registro insertado correctamente';

        
    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
    }
    $conexion = closeBd();
}
function deleteOferta($id_restaurante,$id_oferta)
{
    try
    {
    $conexion = openBd();

    $sentenciaText = "delete from ofertas where id_oferta = $id_oferta; delete from ofertas_restaurante where id_oferta = $id_oferta AND id_restaurante = $id_restaurante";
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia->execute();

    $_SESSION['mensaje']= 'Registro borrado correctamente';

    }
    catch(PDOException $e)
    {
        $_SESSION['error']= errorMessage($e);
    }

    $conexion = closeBd();
   

}
?>