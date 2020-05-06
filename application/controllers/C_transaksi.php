<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi','transaksi');
	}

	public function index()
	{
		$data['transaksi'] = $this->transaksi->get();
		$this->load->view('include/header');
		$this->load->view('transaksi/index',$data);
		$this->load->view('include/footer');
	}

}

/* End of file C_transaksi.php */
/* Location: ./application/controllers/C_transaksi.php */