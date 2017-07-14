<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('input');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('dashboard_models/DashboardModels');

		$data['jum_approve_event'] = $this->DashboardModels->get_jumlah_approved_event();
		$data['jum_pending_event'] = $this->DashboardModels->get_jumlah_pending_event();
		$data['jum_pending_pepak'] = $this->DashboardModels->get_jumlah_pending_pepak();

		$this->load->view('skin/admin/welcome', $data);
	}


}
