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
		return "$this->penulis, $this->penerbit";
	}

}

// contoh object type
class CetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $str;
	}
}


$produk1 = new Produk("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
$CetakInfoProduk1 =  $infoProduk1->cetak($produk1);

echo "<br>";
echo "<br>";
echo $CetakInfoProduk1;

?>