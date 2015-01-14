<?php
class USB_Computermaus_laser extends ComputerProdukt {
	public function __construct($nummer=2, $bezeichnung="USB-Computermaus laserabgetastet", $preis=29.99,$menge=1,$einheit=Einheiten::STK) {
		parent::__construct($nummer, $bezeichnung,$preis,$menge,$einheit);
	}
}
?>