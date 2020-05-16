<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_detail_transaksi','detail_transaksi');
	}

	public function index($id)
	{
		$data['detail_transaksi'] = $this->detail_transaksi->get();
		$this->load->view('include/header');
		$this->load->view('detail_transaksi/index',$data);
		$this->load->view('include/footer');
	}

}

/* End of file C_detail_transaksi.php */
/* Location: ./application/controllers/C_detail_transaksi.php */