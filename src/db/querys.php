<?php 
require('./connection.php');
 
 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $email = $_POST['email'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 

 $frutal_tree = $_POST['frutal_tree'];
 $cantidad_frutal = $_POST['cantidad_frutal'];
 $timber_tree = $_POST['timber_tree'];
 $cantidad_maderable = $_POST['cantidad_maderable'];
 $garden_tree = $_POST['garden_tree'];
 $cantidad_jardin = $_POST['cantidad_jardin'];
 
 
 $seguro_radio_stacked = $_POST['seguro-radio-stacked'];
 $pago_radio_stacked = $_POST['pago-radio-stacked'];
 $complementos = $_POST['complementos'];

 for ($i=0; $i < count($complementos); $i++) { 
     $complementos[$i];
 }

/*
    id
	nombre
	apellidos
	email
	direccion
	telefono

	fecha
	arbol_frutal
	arbol_frutal_cantidad
	arbol_maderable	arbol_maderable_cantidad
	arbol_jardin
	arbol_jardin_cantidad
	seguro_vida	seguro_vida_precio
	forma_pago
	entrega
    suplementos_extra
	suplementos_extra_precio
	subtotal
	descuento
	interes
	total
*/
$sql = "INSERT INTO compras VALUES(
    null,
    $nombre,
    $apellidos,
    $email,
    $direccion,
    $telefono,
    
    )";
// $result = $conn->query($sql);

?>