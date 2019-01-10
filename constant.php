<?php
 // Define & Const 
define('NAMA', 'Asda Nurhalisah');
echo NAMA;

echo "<br>";

const UMUR = 16;
echo UMUR;

echo "<br>";
echo "<br>";

class Coba {
const NAMA = 'Asda';
}

echo Coba::NAMA;

echo "<br>";
echo "<br>";


// Magic Constant
echo __FILE__;

echo "<br>";
echo "<br>";

function coba() {
 	return __FUNCTION__;
}

echo coba();

echo "<br>";
echo "<br>";


class rplb{
	public $kelas = __CLASS__;
}

$obj = new rplb;
echo $obj->kelas;