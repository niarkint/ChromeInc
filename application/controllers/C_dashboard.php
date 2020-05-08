<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index()
	{
		// $data['extra_script'] = array(
		// 	'<script src="'.base_url().'assets/controllers/dashboard.js"></script>',
		// 	'<script src="'.base_url().'assets/plugins/chart.js/Chart.min.js"></script>'
		// );
		// $this->load->view('include/header');
		$this->load->view('dashboard/index');
		// $this->load->view('include/footer',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */