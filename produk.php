<?php  
// jual produk
// komik
// game

// class yang bertujuan untuk menjual produk produk
class Produk{

	// kumpulan property
	// dan mengisi nilainya sehingga
	// menjadi nilai default
	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	// method adalah function yang ada di dalam class
	// public function sayHello(){
	// 	return "Hello World!";
	// }
	
	public function getLabel(){

		// memanggil variabel di luar fungsi untuk class/method
		// harus menggunakan keyword $this->naamvariabel tanpa $
		return "$this->penulis, $this->penerbit";
	}

}

// ini instance
// $produk1 = new Produk();
// // menimpa property yang ada
// $produk1->judul = "Naruto Shippuden";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "COD 4 Warfare";

// // menambah properti di luar class
// $produk2->tambahProperty = "hahahahah";

// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 25000;
// var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// cara memanggil method
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmen";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 450000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>