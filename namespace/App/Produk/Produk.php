<?php

// main class
// class yang bertujuan untuk menjual produk produk
Abstract class Produk{
	// kumpulan property
	// dan mengisi nilainya sehingga
	// menjadi nilai default
	protected $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	// method adalah function yang ada di dalam class
	// fungsi ini akan dijalankan setiap kita panggil
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	

	// setter method
	public function setJudul($judul){
		// validasi jdudul
		if(!is_string($judul)){
			throw new Exception("Judul Harus String");
			
		}

		$this->judul = $judul;
	}
	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setHarga($harga){
		$this->harga = $harga;
	}

	public function getLabel(){

		// memanggil variabel di luar fungsi untuk class/method
		// harus menggunakan keyword $this->naamvariabel tanpa $
		return "$this->penulis, $this->penerbit";
	}

	// digunakan karena visibility $harga private
	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	// method set diskon
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function gerDiskon(){
		return $this->diskon;
	}


	abstract public function getInfo();

	
}