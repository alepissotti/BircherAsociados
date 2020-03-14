<?php

function verJugadores($nombre,$pais) {
    $db = $db = new PDO('mysql:host=localhost;dbname=joins_multitabla', 'root', '');
    $consulta = $db->prepare('SELECT * FROM joinpersonas WHERE 
    nombre LIKE :nombre  OR pais = :pais ');
    $consulta->bindValue(':nombre',"%{$nombre}%");
    $consulta->bindValue(':pais',$pais);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    return $resultado;
}

//$jugadores = verJugadores('leonel','Centrocampista','Uruguay');
//foreach($jugadores as $jugador) {
    //echo $jugador['nombre'] . " " . $jugador['puesto'] . " " . $jugador['pais'] . "<br/>";
//}



?>