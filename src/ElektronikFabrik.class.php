<?php
class ElektronikFabrik extends Fabrik {
	public function __construct() {
		$this->fabrikArt = "Elektronikprodukte";
	}
	public function erzeuge($produkt) {
		if (strcmp ( $produkt, "USB_Stick" ) == 0) {
			return new USB_Stick ( 1, "USB_16_GB", 9.99 );
		}
		if (strcmp ( $produkt, "USB-Computertastatur_102Tasten" )) {
			// TODO
		}
		if (strcmp ( $produkt, "USB-Computermaus_laserabgetastet" )) {
			// TODO
		}
		return $tmp;
	}
}
?>