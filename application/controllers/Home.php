<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->event->auth();
	}

	public function index(){
		if(isAuth('admin')){
			$data = $this->model->dashboardAdmin();
			$this->event->view('admin/dashboard', $data);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */