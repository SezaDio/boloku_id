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
		$data['headNews'] = $this->HomeModels->get_head_news();
		$data['headComming'] = $this->HomeModels->get_head_comming();
		$data['headShopping'] = $this->HomeModels->get_head_shopping();
		$data['newsYouther'] = $this->HomeModels->get_news_youther();
		$data['newsRecommend'] = $this->HomeModels->get_news_recommend();
		$data['newsCommunity'] = $this->HomeModels->get_news_community();
		$data['newsSM'] = $this->HomeModels->get_news_SM();
		$this->load->view('skin/front_end/welcome',$data);
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