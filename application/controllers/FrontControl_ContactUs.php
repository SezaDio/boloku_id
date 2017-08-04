<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_ContactUs extends CI_Controller {

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
      $data['active']=5;

      $this->load->view('skin/front_end/header_front_end',$data);
      $this->load->view('content_front_end/contact_us_page', $data);
      $this->load->view('skin/front_end/footer_front_end');
   }

   //fungsi kirim pesan hubungi kami
   function kirim_pesan_hubungi_kami() 
   {
      $this->load->model('contactUs_models/ContactUsModels');
      $this->load->library('form_validation');
      $tambah = $this->input->post('submit');
      if ($tambah == 1) 
      {
         $this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('telepon', 'Telepon', 'required');
         $this->form_validation->set_rules('subject', 'Subject', 'required');
         $this->form_validation->set_rules('pesan', 'Pesan', 'required');

         //value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
         if (($this->form_validation->run() == TRUE))
         {
            $data_pesan=array(
               'nama_lengkap'=>$this->input->post('nama_lengkap'),
               'email'=>$this->input->post('email'),
               'telepon'=>$this->input->post('telepon'),
               'subject'=>$this->input->post('subject'),
               'pesan'=>$this->input->post('pesan')
            );
            $data['dataPesan'] = $data_pesan;
            
            $this->db->insert('hubungi_kami', $data_pesan);

            $this->session->set_flashdata('msg_berhasil', 'Pesan telah terkirim, mohon tunggu balasan dari kami melalui email anda.');
            redirect('FrontControl_ContactUs');
         }
         else
         {
            $this->session->set_flashdata('msg_gagal', 'Pesan gagal terkirim');
            $this->kirim_pesan_hubungi_kami();
         }
      }
      else
      {
         $data['active']=4;
         $this->load->view('skin/front_end/header_front_end');
         $this->load->view('content_front_end/contact_us_page');
         $this->load->view('skin/front_end/footer_front_end');
      }
   }
}