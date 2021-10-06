<?php
class Model_practice extends CI_Model 
{
	//membuat variable untuk menampung nilai 
	public $nilai1, $nilai2, $hasil;
	//method penjumlahaan 
	public function jumlah($n1 = null, $n2 = null)
	{
		 $this->nilai1 = $nil1;
		 $this->nilai2 = $nil2;
		 $this->hasil = $this->nilai1 + $this->nilai2;
		 return $this->hasil;
 	}

}
