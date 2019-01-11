<?php 

Class OrangTua {
	public $nama= 'Asda';
	public $jenisKelamin = 'Perempuan';

	public function makan() {
		return "{$this->nama} sedang tidur <br>";
	}
}

Class AnakOrang extends OrangTua {
	public function biodata() {
		return "Nama : {$this->nama} <br>".
			   "Jenis Kelamin : {$this->jenisKelamin} <br>".
			   "=====================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama = "Asda Nurhalisah";
$anak->jenisKelamin = "Perempuan";
echo $anak->biodata();
echo $anak->makan();