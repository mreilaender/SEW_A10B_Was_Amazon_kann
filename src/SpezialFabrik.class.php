<?php
class TKFabrik extends Fabrik {
	public function __construct() {
		$this->fabrikArt = "Fabrik für alle Produkte";
	}
	public function erzeuge($produkt) {
		return new $produkt();
	}
}