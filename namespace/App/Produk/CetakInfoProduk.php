<?php

// contoh object type
class CetakInfoProduk{

	// array tipe baru
	public $daftarProduk = [];

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "Daftar Produk <br>";

		foreach($this->daftarProduk as $p){
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}