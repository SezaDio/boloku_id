<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_Faq extends CI_Controller {

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
      $data['active']=4;

      $this->load->view('skin/front_end/header_front_end',$data);
      $this->load->view('content_front_end/faq_page', $data);
      $this->load->view('skin/front_end/footer_front_end');
   }
}