<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_NgertiRak extends CI_Controller {

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
      $select=3;
	  
	   $this->load->model('home_models/HomeModels');
      $data['listNgertiRak'] = $this->HomeModels->get_ngerti_rak();
      $this->load->view('skin/front_end/header_front_end');
      $this->load->view('content_front_end/ngerti_rak_page',$data);
      $this->load->view('skin/front_end/footer_front_end');
   }
}