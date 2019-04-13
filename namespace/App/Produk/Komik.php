<?php
// class komik di perbolehkan untuk memperbolehkan isi apappaun dari
// class parent produk nya 
// ditandai dengan nama class baru extends parent class nya
// child class dari produk (inheritance)
// class Komik extends Produk{
// child class dari kelas produk
// overriding
// parent digunakan untuk mengambil kelas yang sama pada parent class nya 
class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;

	// cara memanggil construct parentnya
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo(){
		// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;

	}

	public function getInfoProduk(){
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";

		return $str;
	}
}