<?php
class ElektronikFabrik extends Fabrik {
	public function __construct() {
		$this->fabrikArt = "Elektronikprodukte";
	}
	public function erzeuge($produkt) {
		if (strcmp($produkt, "USB_Stick") == 0) {
			return new USB_Stick ( 1, "USB_16_GB", 9.99 );
		}
		if (strcmp($produkt, "USB-Computertastatur 102 Tasten")) {
			return new USB_Computertastatur_102Tasten();
		}
		if (strcmp($produkt, "USB-Computermaus laserabgetastet")) {
			return new USB-Computermaus_laser();
		}
		return $tmp;
	}
}
?>