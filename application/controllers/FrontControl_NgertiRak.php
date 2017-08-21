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

   public function ngertirak()
   {
      $this->load->helper('url');
      $this->load->library('pagination');

      $data['active']=3;

      $this->load->model('wow_models/WowModels');

      //Paginasi halaman event page
      $jumlah_data = $this->WowModels->jumlah_data_ngerti_rak();
      $config['base_url'] = site_url('ngertirak/');
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 9;
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
      $data['listNgertiRak'] = $this->WowModels->get_ngerti_rak($config['per_page'], $data['page']);

      //create links pagination
      $data['pagination'] = $this->pagination->create_links();
	  
      $this->load->view('skin/front_end/header_front_end',$data);
      $this->load->view('content_front_end/ngerti_rak_page',$data);
      $this->load->view('skin/front_end/footer_front_end');
   }
}