<?php

/* Damit alle Errors angezeigt werden */
ini_set ( 'display_errors', TRUE );
ini_set ( 'display_startup_errors', TRUE );
error_reporting ( E_ALL );
function __autoload($class_name) {
	include $class_name . '.class.php';
}
$fabrik = new TKFabrik();
$fabrik->add($fabrik->erzeuge("TK-Spinat"));
echo $fabrik->erzeuge("TK-Spinat")->getEinheit();
$fabrik->add($fabrik->erzeuge("TK-Maronireis"));
$fabrik->add($fabrik->erzeuge("TK-Spinat"));

$fabrik2 = new ElektronikFabrik();
$fabrik2->add($fabrik2->erzeuge("USB_Stick"));

$fabrik2->bezahlen();
$fabrik2->verpacken();
$fabrik2->verschicken();

$fabrik->bezahlen();
$fabrik->verpacken();
$fabrik->verschicken();


echo "Tiefkühl Fabrik: <br/>" . $fabrik->zeigeEinkaufswagen();
echo "Elektronik Fabrik: " . $fabrik2->zeigeEinkaufswagen();
?>