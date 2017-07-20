<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_Home extends CI_Controller {

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
		$this->load->model('home_models/HomeModels');
		$data['listSlider'] = $this->HomeModels->get_data_slider();
		$data['listTopEvent'] = $this->HomeModels->get_top_event();
		$data['listNewEvent'] = $this->HomeModels->get_new_event();
		$data['listNgertiRak'] = $this->HomeModels->get_ngerti_rak();
		$data['namaChallenge'] = $this->HomeModels->get_nama_challenge();
		$data['listChallenge'] = $this->HomeModels->get_challenge();
		$data['listArtikel'] = $this->HomeModels->get_artikel();
		$this->load->view('skin/front_end/welcome', $data);
	}
	
	public function tambah_pepak()//$id_produk
	{
		$data_pepak=array(
			'jawa'=>$_POST['jawa'],
			'indonesia'=>$_POST['indonesia'],
			'deskripsi_jawa'=>$_POST['deskripsi'],
			'status'=>2
		);
		$this->db->insert('pepak', $data_pepak);

	}
}