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
			$waktuMain,
			$tipe;

	// method adalah function yang ada di dalam class
	// public function sayHello(){
	// 	return "Hello World!";
	// }
	// 
	// fungsi ini akan dijalankan setiap kita panggil
	public function __construct($judul = "Judul", $penulis= "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}
	
	public function getLabel(){

		// memanggil variabel di luar fungsi untuk class/method
		// harus menggunakan keyword $this->naamvariabel tanpa $
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if($this->tipe == "komik"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		}
		elseif($this->tipe == "game"){
			$str .= " - {$this->waktuMain} Jam. ";
		}

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


$produk1 = new Produk("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "game");


// komik : naruto | mashashi kishimoto, shonen jump (rp. 30000) - 100 halman
// game : uncharted | neil druckmann, sony computer (250000) - 50 jam
// 
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>