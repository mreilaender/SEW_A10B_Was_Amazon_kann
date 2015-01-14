<?php 
 class TKMaronireis extends TiefkuehlProdukt {
	public function __construct($nummer=2, $bezeichnung="Maronireis", $preis=0.99,$menge=250, $einheit=Einheiten::G) {
		parent::__construct($nummer,$bezeichnung,$preis,$menge,$einheit);
	}
}
?>