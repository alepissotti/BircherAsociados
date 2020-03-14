<?php

include('jugadores.php');
if (isset($_GET['buscar'])) {
    $nombre = $_GET['nombre'];
    $pais = $_GET['pais'];


$jugadores = verJugadores($nombre,$pais);

if (empty($jugadores)) {
?>

<h2>No existen coincidendencias con la busqueda.</h2>    

<?php } 
else { 
?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Posicion</th>
                <th scope="col">Pais</th>
            </tr>
        </thead>
    <tbody>
    
    <?php
    foreach ($jugadores as $jugador) {
    ?>
            <tr>
                <td><?php echo $jugador['nombre'] ?></td>
                <td><?php echo $jugador['apellido'] ?></td>
                <td><?php echo $jugador['puesto'] ?></td>
                <td><?php echo $jugador['pais'] ?></td>
            </tr>
    </tbody>
    </table>
    <?php
    }
    }

//header('location: index.php'); 
}
?>