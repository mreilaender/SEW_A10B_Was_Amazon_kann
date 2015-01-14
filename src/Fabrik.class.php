<?php
abstract class Fabrik {
	private $bezahlt;
	private $verpackt;
	private $verschickt;
	protected $fabrikArt;
	private $einkaufsWagen;
	/**
	 * Konstruktor
	 */
	public function __construct() {
		$this->einkaufsWagen = array();
		$this->bezahlt = false;
		$this->verpackt = false;
		$this->verschickt = false;
		$this->fabrikArt = "";
	}
	public function erzeuge($produkt) {
		return null;
	}
	/**
	 * Produkte bezahlen
	 */
	public function bezahlen() {
		$this->bezahlt = true;
	}
	/**
	 * Fügt ein Produkt zum Einkaufswagen dazu
	 * @param produkt Das Produkt, dass in den Einkaufswagen kommen soll
	 */
	public function add(Artikel $produkt) {
		$this->einkaufsWagen[] = $produkt;
	}
	/**
	 * Produkte verpacken
	 */
	public function verpacken() {
		$this->verpackt = true;
	}
	/**
	 * Produkte verschicken
	 */
	public function verschicken() {
		$this->verschickt = true;
	}
	/*
	 * Gibt alle Elemente des Einkaufswagens aus
	 */
	public function zeigeEinkaufswagen() {
		$size = sizeof ( $this->einkaufsWagen );
		$out = "Der Einkaufswagen enthaelt: " . $size . " Produkte<br/>";
		if ($size > 0) {
// 			echo "test";
			$kosten = 0.0;
			// Einkaufswagen durchgehen
			foreach ($this->einkaufsWagen as $artikel) {
				$kosten += $artikel->getPreis();
				$out .= "Kategorie: " . $artikel->getKategorie() . ": " . $artikel->getNummer ()
				  . " | " . $artikel->getMenge() . $artikel->getEinheit()
				  . " | " . $artikel->getBezeichnung()
				  . " | Preis: " . $artikel->getPreis()
				. "<br/>";
// 				echo "test";
			}
			$out .= "Gesamtkosten: " . $kosten . "<br/>";
			if (!($this->bezahlt))
				$out .= "Die Produkte wurden noch nicht bezahlt<br/>";
			else
				$out .= "Die Produkte wurden bezahlt<br>";
			if (!($this->verpackt))
				$out .= "Die Produkte wurden noch nicht verpackt";
			else
				$out .= "Die Produkte wurden verpackt";
			if (!($this->verschickt))
				$out .= "Die Produkte wurden noch nicht verschickt";
			else
				$out .= "Die Produkte wurden verschickt";
			
			$out .= "<br/><br/><br/>";
		}
		return $out;
	}
}
?>