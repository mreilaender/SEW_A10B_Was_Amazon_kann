<?php 
class USB_Stick extends ComputerProdukt {
	public function __construct($nummer=1, $bezeichnung="USB-Stick 64 GB schwarz", $preis=9.99,$menge=1,$einheit=Einheiten::STK) {
		parent::__construct($nummer, $bezeichnung,$preis,$menge,$einheit);
	}
}
?>