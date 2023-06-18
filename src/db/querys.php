<?php 
require('./connection.php');
 
 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $email = $_POST['email'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 

 $frutal_tree = $_POST['frutal_tree'] or 0;
 $cantidad_frutal = $_POST['cantidad_frutal'] or 0;
 $timber_tree = $_POST['timber_tree'] or 0;
 $cantidad_maderable = $_POST['cantidad_maderable'] or 0;
 $garden_tree = $_POST['garden_tree'] or 0;
 $cantidad_jardin = $_POST['cantidad_jardin'] or 0;
 

 
 $seguro_radio_stacked = $_POST['seguro-radio-stacked'];
 $seguros = array("sin_seguro" => 0,"un_mes" => 40,"dos_mes" => 70,"tres_mes" => 100,"cuatro_mes" => 120, "cinco_mes" =>150);
 $seguro_vida_precio = (array_key_exists($seguro_radio_stacked, $seguros)) ? $seguros[$seguro_radio_stacked] : 0;
 
 $pago_radio_stacked = $_POST['pago-radio-stacked'];
 $entrega_radio_stacked = $_POST['entrega-radio-stacked'];


 $complementos = $_POST['complementos'];
 $fecha = date('y-m-d');
 

$complementos_string = implode(", ",$complementos);




$subtotal = ($frutal_tree * $cantidad_frutal) + ($timber_tree * $cantidad_maderable) + ($garden_tree * $cantidad_jardin);

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
	arbol_maderable	
	arbol_maderable_cantidad
	arbol_jardin
	arbol_jardin_cantidad
	seguro_vida	
	seguro_vida_precio
	forma_pago
	entrega
    suplementos_extra
	suplementos_extra_precio
	subtotal
	descuento
	interes
	total
*/
$sql = 'INSERT INTO compras VALUES(
    null,
    "' . $nombre . '",
    "' . $apellidos . '",
    "' . $email . '",
    "' . $direccion . '",
    "' . $telefono . '",
    "' . $fecha . '",
	"' . $frutal_tree . '",
	"' . $cantidad_frutal . '",
	"' . $timber_tree . '",
	"' . $cantidad_maderable . '",
	"' . $garden_tree . '",
	"' . $cantidad_jardin . '",
	"' . $seguro_radio_stacked . '",
	"' . $seguro_vida_precio .'",
	"' . $pago_radio_stacked . '",
	"' . $entrega_radio_stacked . '",
	"' . $complementos_string . '",
	15,
	15,
	15,
	15,
	15
)';
$result = $conn->query($sql);


?>