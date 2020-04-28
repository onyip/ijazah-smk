<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijazah extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->f_construct();

		$controller = 'ijazah';

		if($this->session->userdata('controller') != $controller){
			$this->session->unset_userdata('keyword');
			// $this->session->unset_userdata('order');
			// $this->session->unset_userdata('per_page');
			$this->session->set_userdata(array('controller' => $controller));
		}
		$this->id_group = $this->session->userdata('id_group');
		$this->access = $this->m_permission->get_permission($this->id_group, $controller);
		if ($this->access == null) {
			$this->err();
		}
	}
	//end fun


	public function index()
	{
		$this->load->model('student/m_student');
		$were = ['nis' => $this->session->userdata('username')];
		$data['main'] = $this->m_student->id($were)->row();
		// echo json_encode($data); die();
		$this->render('index', $data);
	}

	public function ijz_down($ijz = NULL)
	{
		$this->load->helper('download');
		// force_download ("./assets/skl/".$ijz,  NULL);
		$data = file_get_contents("./assets/ijazah/".$ijz);
		force_download($ijz, $data);
	}

	public function skl_down($skl = NULL)
	{
		$this->load->helper('download');
		// force_download ("./assets/skl/".$skl,  NULL);
		$data = file_get_contents("./assets/skl/".$skl);
		force_download($skl, $data);
	}

}