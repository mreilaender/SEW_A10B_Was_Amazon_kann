<?php
class TKFabrik extends Fabrik {
	public function __construct() {
		$this->fabrikArt = "Elektronikprodukte";
	}
	public function erzeuge($produkt) {
		if(strcmp($produkt, "TK-Spinat") == 0) {
			new TKSpinat();
		}
		if(strcmp($produkt, "TK-Maronireis") == 0) {
			return new TKMaronireis();
		}
		return null;
	}
}