<?php 

// jualan produk
// komik
// game
class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = "0";

		 public function getlabel() {
		 	return "$this->penulis, $this->penerbit";
		 }
}
 
// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Boruto";
// $produk2->tambahProperty = "ayeaye";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = "30000";


$produk4 = new produk();
$produk4->judul = "Boruto";
$produk4->penulis = "masashi kishimoto";
$produk4->penerbit = "shonen jump";
$produk4->harga = "35000";

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();




