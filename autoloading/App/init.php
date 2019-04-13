<?php  

// init.php untuk menginisialisasi semua class yang ada

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// spl = standar php library


spl_autoload_register(function($class){
	require_once __DIR__ . '/Produk/' . $class . '.php';
});