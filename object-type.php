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
class CetakInfoProduk {
	public function cetak (produk $produk) {
		$str = "$produk->judul  | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}
 

$produk1 = new produk("Naruto", "Masashi kishimoto", "shonen jump", "30000");

$produk2 = new produk("Boruto", "Masashi kishimoto", "shonen jump", "35000");


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";

$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);





