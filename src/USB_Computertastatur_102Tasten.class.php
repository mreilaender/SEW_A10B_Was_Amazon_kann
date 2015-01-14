<?php
class USB_Computertastatur_102Tasten extends ComputerProdukt {
	public function __construct($nummer=2, $bezeichnung="USB-Computertastatur 102 Tasten", $preis=29.99,$menge=1,$einheit=Einheiten::STK) {
		parent::__construct($nummer, $bezeichnung,$preis,$menge,$einheit);
	}
}
?>