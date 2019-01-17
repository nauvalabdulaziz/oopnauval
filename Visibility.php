<?php 

// jualan produk
// komik
// game
class produk {
	public $judul,
		   $penulis,
		   $penerbit;
		protected $diskon = 0;
		private $harga;
		  

		 public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){

		   $this->judul = $judul;
		   $this->penulis = $penulis;
		   $this->penerbit = $penerbit;
		   $this->harga = $harga;
		 }
		 public function setDiskon($diskon) {
		 	$this->diskon = $diskon;
		 }
		 public function getHarga() {
		 	return $this->harga - ($this->harga  * $this->diskon/100);
		 }

		 public function getlabel() {
		 	return "$this->penulis, $this->penerbit";
		 }
		 public function getInfoProduk() {
		 	$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
		 	return $str;
		 }
}


class komik extends produk {
	public $jmlHalaman;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ,$jmlHalaman = 0){
		parent ::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

}

class Game extends produk{
	public $waktumain;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ,$jmlHalaman = 0){
		parent ::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktumain = $waktumain;
	}

	public function setDiskon ( $diskon) {
		$this->diskon = $diskon;
	}
	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . "~ {$this->waktumain} jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	 
	}
}
 

$produk1 = new Produk("Naruto", "Masashi kishimoto", "shonen jump", 30000, 100, 0,"komik");

$produk2 = new Produk("Boruto", "Masashi kishimoto", "shonen jump", 35000, 0, 50, "Game");

echo$produk1->getInfoProduk();
echo"<br>";
echo $produk2->getInfoProduk(); 
echo"<br>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
?>