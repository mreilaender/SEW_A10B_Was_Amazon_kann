<?php 
class TKSpinat extends TiefkuehlProdukt {
	public function __construct($nummer=1, $bezeichnung="Spinat (tiefgekühlt)", $preis=1.49,$menge=250, $einheit=Einheiten::G) {
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$einheit);
	}
}
?>