<?php

require_once 'App/init.php';

// instansiasi produk
// $produk1 = new Komik("Naruto Shippuden" , "Masasi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";
// 


// usulan pengunaan namespace

// namespace Vendor\Namespace\SubNamespace;
// cara embuat alias digunakan ketika namespace sangat panjang
// gunakan keyword use namespace
// dan gunakan as untuk alias jika ada nama class dalam namespace yang sama

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();

echo "<br>";

new ProdukUser();