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

	public function home()
	{	
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('home_models/HomeModels');

		$jumlah_data = $this->HomeModels->jumlah_data_new_event();
		$config['base_url'] = site_url('home/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$config['uri_segment'] = 2;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);

		//configuration for bootsrap pagination class
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		//panggil model get daftar new event data		
		$data['listNewEvent'] = $this->HomeModels->get_new_event($config['per_page'], $data['page']);

		//create links pagination
		$data['pagination'] = $this->pagination->create_links();

		//$data['listNewEvent'] = $this->HomeModels->get_new_event();

		$data['active'] = 1;

		$data['listSlider'] = $this->HomeModels->get_data_slider();
		$data['listTopEvent'] = $this->HomeModels->get_top_event();
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
	
	function logout_member(){
		$this->session->sess_destroy();
		$this->index();
	}
}