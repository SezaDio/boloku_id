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

   public function event_page()
   {
   	  $this->load->helper('url');
	  $this->load->library('pagination');
      $data['active']=2;
	  $this->load->model('home_models/HomeModels');
	  $this->load->model('coming_models/ComingModels');

	  //Paginasi halaman event page
	  	$jumlah_data = $this->HomeModels->jumlah_data_new_event();
		$config['base_url'] = site_url('event_page/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
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
		$data['listEvent'] = $this->HomeModels->get_event($config['per_page'], $data['page']);

		//create links pagination
		$data['pagination'] = $this->pagination->create_links();
	 
	 	$data['kotaLokasi'] = $this->ComingModels->kota_lokasi();

      	$this->load->view('skin/front_end/header_front_end',$data);
      	$this->load->view('content_front_end/event_page',$data);
      	$this->load->view('skin/front_end/footer_front_end');
   }

   public function event_click($id_event)
   {
   	  $data['active']=2;
	  $this->load->model('home_models/HomeModels');
	  
	  $event = $this->HomeModels->get_event_byid($id_event);
	  
	  $tanggal_posting = $event['tanggal_posting'];
	  $hits = $event['hits'] + 1;
	  $data_hits = array('hits' => $hits, 'tanggal_posting' => $tanggal_posting);
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
	  $data['kota_lokasi'] = $event['id_lokasi'];
	  $data['alamat'] = $event['alamat'];
	  
	  $data['jumlahTestimoni'] = $this->HomeModels->jumlah_testimoni($id_event);
	  $data['listPressRelease'] = $this->HomeModels->get_press_release($id_event);
	  $data['listTestimoni'] = $this->HomeModels->get_testimoni($id_event);
	  
      $this->load->view('skin/front_end/header_front_end',$data);
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
   
   function get_labelvalue(){
		if(isset($_POST['label']) && isset($_POST['value'])){
		$label = $_POST['label'];
		$value = $_POST['value'];
		$this->session->set_userdata('label',$label);
		$this->session->set_userdata('value',$value);
		}
   }
   
   function hapus_session_label(){
		$this->session->sess_destroy('label');
		$this->session->sess_destroy('value');
   }
}