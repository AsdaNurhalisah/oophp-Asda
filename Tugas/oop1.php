<?php
Class Orang {
	public $nama = 'Asda';
	public $jenisKelamin;

	public function makan() {
		return $this->nama. ' sedang tidur <br>';
	}
}

$saya = new Orang;
$saya->nama = 'Aze';
echo $saya->makan();

$saya->nama = 'Nonok';
echo $saya->makan();