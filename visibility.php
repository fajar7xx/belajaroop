<?php  
// jual produk
// komik
// game

// main class
// class yang bertujuan untuk menjual produk produk
class Produk{

	// kumpulan property
	// dan mengisi nilainya sehingga
	// menjadi nilai default
	public 	$judul,
			$penulis,
			$penerbit;

	// hanya dapat digunakan oleh class dan turunannya
	protected $diskon = 0;

	// hanya dapat digunakan oleh classnya sendiri atau class tertenru
	private $harga;

	// method adalah function yang ada di dalam class
	// public function sayHello(){
	// 	return "Hello World!";
	// }
	// 
	// fungsi ini akan dijalankan setiap kita panggil
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
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


	public function getInfoProduk(){
		// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		// if($this->tipe == "komik"){
		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		// }
		// elseif($this->tipe == "game"){
		// 	$str .= " - {$this->waktuMain} Jam. ";
		// }

		return $str;

	}
}


// class komik di perbolehkan untuk memperbolehkan isi apappaun dari
// class parent produk nya 
// ditandai dengan nama class baru extends parent class nya
// child class dari produk (inheritance)
// class Komik extends Produk{
// 	public function getInfoProduk(){
// 		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

// 		return $str;
// 	}
// }


// child class dari kelas produk
// overriding
// parent digunakan untuk mengambil kelas yang sama pada parent class nya 
class Komik extends Produk{
	public $jmlHalaman;

	// cara memanggil construct parentnya
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

		return $str;
	}
}

// child class dari produk (inheritance)
class Game extends Produk{

	public $waktuMain;

	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
		
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	// public function getHarga(){
	// 	return $this->harga;
	// }

	public function getInfoProduk(){
		$str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";

		return $str;
	}

	// method set diskon
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
}

// contoh object type
class CetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}


$produk1 = new Komik("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
// game : uncharted | neil druckmann, sony computer (250000) - 50 jam
// 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
?>