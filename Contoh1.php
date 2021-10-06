<?php

class Contoh1 extends CI_controller

{
	public function index()
	{
		echo "<h1>Introduce myself</h1>";
		//$this->load->view('view-latihan');	
	}
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_practice');
         
         $data['nilai1'] = $n1;
         $data['nilai2'] = $n2;
         $data['hasil'] = $this->Model_practice->jumlah($n1, $n2);
         
         $this->load->view('view-latihan', $data);

	}
}