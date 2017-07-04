<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_Wow extends CI_Controller {

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

      $this->load->view('skin/front_end/header_menu_front_end', $select);
      $this->load->view('content_front_end/wow_page');
      $this->load->view('skin/front_end/footer_front_end');
   }
}