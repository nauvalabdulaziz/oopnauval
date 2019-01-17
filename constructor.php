<?php 

// jualan produk
// komik
// game
class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

		 public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0"){
		   $this->judul = $judul;
		   $this->penulis = $penulis;
		   $this->penerbit = $penerbit;
		   $this->harga = $harga;
		 }

		 public function getlabel() {
		 	return "$this->penulis, $this->penerbit";
		 }
}
 

$produk1 = new produk("Naruto", "Masashi kishimoto", "shonen jump", "30000");

$produk2 = new produk("Boruto", "Masashi kishimoto", "shonen jump", "35000");

$produk3 = new produk("sinchan");

echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);




