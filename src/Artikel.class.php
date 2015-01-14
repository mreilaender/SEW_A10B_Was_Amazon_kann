<?php 
abstract class Artikel {
	private  $nummer;
	protected  $kategorie;
	private $bezeichnung;
	private  $preis;
	private  $gewicht;
	private  $einheit;
	private $menge;
	public function __construct($nummer, $bezeichnung, $preis, $menge=1, $einheit=null, $gewicht=1){
		$this->nummer=$nummer;
		$this->kategorie="";
		$this->bezeichnung=$bezeichnung;
		$this->preis=$preis;
		$this->einheit=$einheit;
		$this->menge=$menge;
		$this->gewicht=$gewicht;
	}
	/* Nummer */
	public function getNummer() {
		return $this->nummer;
	}
	public function setNummer($nummer) {
		$this->nummer = $nummer;
	}
	/* kategorie */
	public function getKategorie() {
		return $this->kategorie;
	}
	/* bezeichnung */
	public function getBezeichnung() {
		return $this->bezeichnung;
	}
	public function setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}
	/* preis */
	public function getPreis() {
		return $this->preis;
	}
	public function setPreis($preis) {
		$this->preis = $preis;
	}
	/* gewicht */
	public function getGewicht() {
		return $this->gewicht;
	}
	public function  setGewicht($gewicht) {
		$this->gewicht = $gewicht;
	}
	/* mengenEinheit */
	public function getEinheit() {
		return $this->mengenEinheit;
	}
	public function setEinheit(Einheiten $einheit) {
		$this->einheit = $einheit;
	}
	/* menge */
	public function getMenge() {
		return $this->menge;
	}
	public function setMenge($menge) {
		$this->menge = $menge;
	}
}
?>