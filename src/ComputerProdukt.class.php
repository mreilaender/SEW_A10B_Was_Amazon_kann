<?php 
abstract class ComputerProdukt extends Artikel {
	public function __construct($nummer, $bezeichnung, $preis, $menge, $einheit) {
		parent::__construct($nummer, $bezeichnung, $preis, $menge, $einheit);
		$this->kategorie="Computerprodukte";
	}
}
?>