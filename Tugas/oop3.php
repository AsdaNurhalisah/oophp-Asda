<?php

Class OrangTua {
	public $nama = 'Asda';
	public $jenisKelamin = 'Perempuan';

	public function setData($nm ='Andi', $jk = 'laki-laki') {
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

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
$anak->setData('Aze', 'Perempuan');
echo $anak->biodata();
echo $anak->makan();