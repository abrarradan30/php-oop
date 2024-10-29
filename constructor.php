<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis ="penulis", 
        $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Naruto", "Masashi", "Shonen", 30000);
$produk2 = new Produk("Godof", "Neil", "Sony", 25000);
$produk3 = new Produk("Rumble");

echo "Komik : ".$produk1->getLabel()."\n";
echo "Game : ".$produk2->getLabel()."\n";
echo "Game ke2 : ".$produk3->getLabel();
// var_dump($produk3);