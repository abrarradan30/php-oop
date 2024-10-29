<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo! " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka."\n";
// echo ContohStatic::halo()."\n";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh;
echo $obj->halo()."\n"; 
echo $obj->halo()."\n"; 

echo "----------------\n";

$obj2 = new Contoh ;
echo $obj2->halo()."\n";
echo $obj2->halo();