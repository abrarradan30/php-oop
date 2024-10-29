<?php

// define('NAMA', 'Leo');
// echo NAMA;

// echo "\n";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Leo';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>