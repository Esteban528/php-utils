<?php include 'includes/header.php';

// Conectar a la BD con Mysqli.
$db = new mysqli('localhost', 'root', '', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen from propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($titulo, $imagen);

// imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';