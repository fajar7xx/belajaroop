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
			$harga;

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
		return "$this->judul ,$this->penulis, $this->penerbit";
	}

}


$produk1 = new Produk("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
echo "<br>";
echo "Komik : " . $produk3->getLabel();
?>