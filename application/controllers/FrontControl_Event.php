<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontControl_Event extends CI_Controller {

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
      $select=2;
	  $this->load->model('home_models/HomeModels');
	  $data['listEvent'] = $this->HomeModels->get_event();
	 
      $this->load->view('skin/front_end/header_front_end');
      $this->load->view('content_front_end/event_page',$data);
      $this->load->view('skin/front_end/footer_front_end');
   }

   public function event_click($id_event)
   {
	  $this->load->model('home_models/HomeModels');
	  $event = $this->HomeModels->get_event_byid($id_event);
	  
	  $hits = $event['hits'] + 1;
	  $data_hits = array('hits' => $hits);
	  $where = array('id_coming' => $id_event);
	  $this->HomeModels->update_hits($where, $data_hits, 'coming');

	  $data['id_event'] = $event['id_coming'];
	  $data['nama_event'] = $event['nama_coming'];
	  $data['deskripsi_event'] = $event['deskripsi_coming'];
	  $data['posted_by'] = $event['posted_by'];
	  $data['institusi'] = $event['institusi'];
	  $data['telepon'] = $event['telepon'];
	  $data['email'] = $event['email'];
	  $data['tanggal_posting'] = $event['tanggal_posting'];
	  $data['path_gambar'] = $event['path_gambar'];
	  $data['kategori_event'] = $event['kategori_coming'];
	  $data['tipe_event'] = $event['tipe_event'];
	  $data['tgl_mulai'] = $event['tgl_mulai'];
	  $data['jam_mulai'] = $event['jam_mulai'];
	  $data['tgl_selesai'] = $event['tgl_selesai'];
	  $data['jam_selesai'] = $event['jam_selesai'];
	  $data['pendaftaran'] = $event['pendaftaran'];
	  $data['jenis_event'] = $event['jenis_event'];
	  $data['seat'] = $event['seat'];

	  $data['hits'] = $hits;
	  $data['like'] = $event['like'];
	  $data['jumlah_seat'] = $event['jumlah_seat'];
	  $data['harga'] = $event['harga'];
	  $data['kota_lokasi'] = $event['kota_lokasi'];
	  
	  $data['jumlahTestimoni'] = $this->HomeModels->jumlah_testimoni($id_event);
	  $data['listPressRelease'] = $this->HomeModels->get_press_release($id_event);
	  $data['listTestimoni'] = $this->HomeModels->get_testimoni($id_event);
	  
      $this->load->view('skin/front_end/header_front_end');
      $this->load->view('content_front_end/event_click_page',$data);
      $this->load->view('skin/front_end/footer_front_end');
   }

   public function update_like($id_event)
   {
   		$this->load->model('home_models/HomeModels');
   		$event = $this->HomeModels->get_event_byid($id_event);
   		$data['like'] = $event['like'];

   		$like = $data['like'] + 1;
	    $data_like = array('like' => $like);
	    $where = array('id_coming' => $id_event);
	    $this->HomeModels->update_like($where, $data_like, 'coming');
   }
}