<?php 

// jualan produk
// komik
// game
class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain,
		   $tipe;

		 public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
		 	$jmlHalaman = 0,$waktumain = 0, $tipe){

		   $this->judul = $judul;
		   $this->penulis = $penulis;
		   $this->penerbit = $penerbit;
		   $this->harga = $harga;
		   $this->jmlHalaman = $jmlHalaman;
		   $this->waktumain = $waktumain;
		   $this->tipe = $tipe;
		 }

		 public function getInfolengkap() {
		 	// komik : Naruto | Masashimoto, shonen jump (Rp. 30000) - 100 halaman
		 	$str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga
		 	})";
		 	if( $this->tipe == "komik") {
		 		$str .= " - {$this->jmlHalaman} Halaman.";

		 	} else if( $this->tipe == "Game" ) {
		 		$str .= " ~ {$this->waktumain} jam.";
		 	}
		 	return $str;
		 }
		 public function getlabel() {
		 	return "$this->penulis, $this->penerbit";
		 }
}
class CetakInfoProduk {
	public function cetak (Produk $produk) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}
 

$produk1 = new Produk("Naruto", "Masashi kishimoto", "shonen jump", 30000, 100, 0,"komik");

$produk2 = new Produk("Boruto", "Masashi kishimoto", "shonen jump", 35000, 0, 50, "Game");

echo$produk1->getInfolengkap();
echo"<br>";
echo $produk2->getInfolengkap(); 

















