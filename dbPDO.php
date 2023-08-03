<?php

// Conectar a la DB con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'password' );

$query = "SELECT titulo,wc FROM propiedades";

//Consultar la DB

$propiedades = $db ->query($query)->fetch();

/* var_dump($propiedades); */

// Setencia preparada

//Preparar la sentencia
$statement = $db->prepare($query);
//Ejecutar el statement
$statement->execute();
// Recoger el resultado
$resultado = $statement->fetchAll( PDO::FETCH_ASSOC );
//Iterar el resultado
foreach ($resultado as $propiedad ): 
	echo $propiedad['titulo'];
	echo '<br>';
	echo $propiedad['wc'];
endforeach;



?>
