<?php include 'includes/header.php';

// Conectar la BD con mysqli

$db = new mysqli('localhost', 'root', 'esteban123', 'bienesraices_crud');
/* var_dump($db); */
// Creamos el query
$query = "SELECT titulo FROM propiedades";


// sentencia normal
$resultado = $db->query($query);

while($row = $resultado->fetch_assoc()) {
	var_dump($row);
}


// -------     sentencia preparada -------------
// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";
// Lo preparamos
$statement = $db->prepare($query);
// Lo ejecutamos
$statement->execute();
// Creamos la variable
$statement->bind_result($titulo, $imagen);
// Asignamos el resultado
$statement->fetch();	

// Imprimir resultado 
var_dump($titulo);
var_dump($imagen);

// Imprimir varios resultados
while ($statement->fetch()):
	var_dump($titulo);
endwhile;

/* var_dump($resultado->fetch_assoc()); */

include 'includes/footer.php';
?>
