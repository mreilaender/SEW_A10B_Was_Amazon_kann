<?php 
 class FrischerSalat extends FrischesProdukt {
	public function __construct($nummer=1, $bezeichnung="Frischer Salat", $preis=1.99,$menge=250, $einheit=Einheiten::G) {
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$einheit);
	}
}
?>