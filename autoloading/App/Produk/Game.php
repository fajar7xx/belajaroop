<?php
// child class dari produk (inheritance)
class Game extends Produk implements InfoProduk{

	public $waktuMain;

	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
		
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo(){
		// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

	public function getInfoProduk(){
		$str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam.";

		return $str;
	}

	
}