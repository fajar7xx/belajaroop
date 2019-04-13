<?php  

// // contoh constan
// // tulis constanta dengan huruf besar semua
// define('NAMA', 'Fajar Setiawan Siagian');

// // untuk mengaksenya
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Fajar';
// }

// echo Coba::NAMA;

// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>
