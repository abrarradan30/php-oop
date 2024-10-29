<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "dota";
// $produk2->tambahProperpty = "zonk";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi";
$produk3->penerbit = "Shonen";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Godof";
$produk4->penulis = "Neil";
$produk4->penerbit = "Sony";
$produk4->harga = 25000;

// echo "Komik : $produk3->penulis, $produk3->penerbit\n";
echo "Komik : ".$produk3->getLabel()."\n";
echo "Game : ".$produk4->getLabel();