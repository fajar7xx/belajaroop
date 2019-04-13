<?php  
// jual produk
// komik
// game

// class yang bertujuan untuk menjual produk produk
class Produk{

	// kumpulan property
	// dan mengisi nilainya sehingga
	// menjadi nilai default
	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

	// method adalah function yang ada di dalam class
	// public function sayHello(){
	// 	return "Hello World!";
	// }
	// 
	// fungsi ini akan dijalankan setiap kita panggil
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}
	
	public function getLabel(){

		// memanggil variabel di luar fungsi untuk class/method
		// harus menggunakan keyword $this->naamvariabel tanpa $
		return "$this->penulis, $this->penerbit";
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
class Komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

		return $str;
	}
}




// child class dari produk (inheritance)
class Game extends Produk{
	public function getInfoProduk(){
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

		return $str;
	}
}

// contoh object type
class CetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}


$produk1 = new Komik("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);


// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
// game : uncharted | neil druckmann, sony computer (250000) - 50 jam
// 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>