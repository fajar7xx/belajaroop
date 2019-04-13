<?php  
// jual produk
// komik
// game'
// 
// satu class untuk satu file

interface InfoProduk{
	public function getInfoProduk();
}


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


// instansiasi produk
$produk1 = new Komik("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

// $tes = new Produk;
?>