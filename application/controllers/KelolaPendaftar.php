<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolapendaftar extends CI_Controller {

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
		$this->load->model('pendaftar_models/PendaftarModels');
		$data['listEventGratis'] = $this->PendaftarModels->get_data_event_gratis();
		$data['listEventBayar'] = $this->PendaftarModels->get_data_event_bayar();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//List pendaftar
	public function list_pendaftar($id_event)
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$data['idEvent'] = $id_event;
		$event = $this->PendaftarModels->get_event($id_event);
		$data['jenis_event'] = $event['jenis_event'];
		$data['nama_event'] = $event['nama_coming'];
		$data['listPendaftar'] = $this->PendaftarModels->get_data_pendaftar($id_event);
		
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/list_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data detail produk
	public function delete_detail_pendaftar($id_pendaftar)//
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->delete_pendaftar($id_pendaftar);


		$this->index();
	}
	
	//Verifikasi Pembayaran
	function verifikasi_bayar($id_pendaftar){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_pendaftar=$this->db->where("id_pendaftar",$id_pendaftar)->get('pendaftar');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<pendaftars>';
        if ($get_pendaftar->num_rows()>0) {
            foreach ($get_pendaftar->result() as $row_pendaftar) {
                $xml_out .= '<pendaftar ';
                $xml_out .= 'id_pendaftar="' . xml_convert($row_pendaftar->id_pendaftar) . '" ';
                $xml_out .= 'id_event="' . xml_convert($row_pendaftar->id_event) . '" ';
                $xml_out .= 'nama_pendaftar="' . xml_convert($row_pendaftar->nama_pendaftar) . '" ';
                $xml_out .= 'email="' . xml_convert($row_pendaftar->email) . '" ';
                $xml_out .= 'telepon="' . xml_convert($row_pendaftar->telepon) . '" ';
                $xml_out .= 'alamat="' . xml_convert($row_pendaftar->alamat) . '" ';
                $xml_out .= 'no_pendaftar="' . xml_convert($row_pendaftar->no_pendaftar) . '" ';
				
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</pendaftars>';
		
        echo $xml_out;
	}
	
	//Get Pembayaran
	function get_pembayaran($no_pendaftar){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $data_pembayaran=$this->db->where("no_peserta",$no_pendaftar)->get('pembayaran');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<pembayarans>';
        if ($data_pembayaran->num_rows()>0) {
            foreach ($data_pembayaran->result() as $row_pembayaran) {
                $xml_out .= '<pembayaran ';
                $xml_out .= 'bukti_pembayaran="' . xml_convert($row_pembayaran->path_gambar) . '" ';
				
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</pembayarans>';
		
        echo $xml_out;
	}
	
	function verifikasi_bayar_check($id_pendaftar){
		$id_pendaftar = $_POST['id_pendaftar'];
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->verifikasi_bayar_check($id_pendaftar);
	}
	
	//Lihat detail produk
	public function lihat_detail_pendaftar($id_pendaftar)
	{
		$this->load->model('pendaftar_models/PendaftarModels');

		//Ambil id_agenda yang akan diedit
		$data['id_pendaftar'] = $this->PendaftarModels->select_by_id_pendaftar($id_pendaftar)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi pendaftar
	public function validasi_pendaftar()
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$data['listpendaftar'] = $this->PendaftarModels->get_data_pendaftar_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui pendaftar
	public function setuju_pendaftar()
	{
		$id_pendaftar = $_POST['id_pendaftar'];
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->setuju_pendaftar($id_pendaftar);
		$sub_setuju = "Youth pendaftar";
		$msg_setuju = "Posting yang anda masukan di Youth pendaftar telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_pendaftar();
	}
	
	//Setujui pendaftar
	public function setuju_detail_pendaftar($id_pendaftar)
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->setuju_pendaftar($id_pendaftar);
		$sub_setuju = "Youth pendaftar";
		$msg_setuju = "Posting yang anda masukan di Youth pendaftar Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_pendaftar();
	}
	
	//Tolak Data
	public function tolak_pendaftar()
	{
		$id_pendaftar = $_POST['id_pendaftar'];
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->delete_pendaftar($id_pendaftar);
		$sub_tolak = "Youth pendaftar";
		$msg_tolak = "Posting yang anda masukan di Youth pendaftar Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_pendaftar();
	}
	
	//Tolak Data
	public function tolak_detail_pendaftar($id_pendaftar)
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->PendaftarModels->delete_pendaftar($id_pendaftar);
		$sub_tolak = "Youth pendaftar";
		$msg_tolak = "Posting yang anda masukan di Youth pendaftar Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_pendaftar();
	}
	
	//kirim email
	function kirim_email($sub,$msg) {
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'youthsuaramerdeka@gmail.com'; //change this
		$config['smtp_pass'] = 'suaramerdeka'; //change this
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
		$this->load->library('email'); // load email library
		$this->email->initialize($config);
		$this->email->from('youthsuaramerdeka@gmail.com', 'admin');
		$this->email->to('abdulazies.k@gmail.com');
		$this->email->subject($sub);
		$this->email->message($msg);
		if ($this->email->send())
			echo "Mail Sent!";
		else
			show_error($this->email->print_debugger());
    }
	
	//tambah pendaftar soon
	public function tambah_pendaftar()
	{
		$this->load->model('pendaftar_models/PendaftarModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_pendaftar');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_pendaftar_check() {
        $this->load->model('pendaftar_models/pendaftarModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('nama_pendaftar', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE))
			{
				
					$data_pendaftar=array(
						'id_event'=>$id_event,
						'nama_pendaftar'=>$this->input->post('nama_pendaftar'),
						'email'=>$this->input->post('email'),
						'telepon'=>$this->input->post('telepon'),
						'alamat'=>$this->input->post('alamat'),
						'no_pendaftar'=>12312
					);
					$data['dataPendaftar'] = $data_pendaftar;
					
					$this->db->insert('pendaftar', $data_pendaftar);
					redirect('KelolaPendaftar');
				
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data pendaftar gagal ditambahkan');
				$this->tambah_pendaftar_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_pendaftar');
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}

	function tambah_pendaftar_check_front($id_event) 
	{
		$data['active']=2;
        $this->load->model('pendaftar_models/pendaftarModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		$seat = $this->input->post('seat');
		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('nama_pendaftar', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE))
			{
				$seat=$this->input->post('seat');
				$data_pendaftar=array(
					'id_event'=>$id_event,
					'nama_pendaftar'=>$this->input->post('nama_pendaftar'),
					'email'=>$this->input->post('email'),
					'telepon'=>$this->input->post('telepon'),
					'alamat'=>$this->input->post('alamat'),
					'no_pendaftar'=>12312
				);
				$data['dataPendaftar'] = $data_pendaftar;
				
				$this->db->insert('pendaftar', $data_pendaftar);

				if ($seat != 0)
				{
					$seat = $seat-1;
					$this->db->update('coming', array('jumlah_seat'=>$seat), array('id_coming'=>$id_event));
					$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
					redirect('FrontControl_Event/event_click/'.$id_event);
				}
				else
				{
					$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
					redirect('FrontControl_Event/event_click/'.$id_event);
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data pendaftar gagal ditambahkan');
				$this->tambah_pendaftar_check_front();
			}
		}
		else
		{
			$this->load->view('skin/front_end/header_front_end',$data);
			$this->load->view('content_front_end/mendaftar_ikut_event_page');
			$this->load->view('skin/front_end/footer_front_end');
		}     
		
	}
	
	function cari_kata($kata) {
		$kata=str_replace('%20',' ',$kata);
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_kata=$this->db->like('jawa',$this->db->escape_like_str($kata))->get('pendaftar');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<kosakata>';
        if ($get_kata->num_rows()>0) {
            foreach ($get_kata->result() as $row_kata) {
                $xml_out .= '<kata ';
                $xml_out .= 'id="' . xml_convert($row_kata->id_pendaftar) . '" ';
                $xml_out .= 'jawa="' . xml_convert($row_kata->jawa) . '" ';
                $xml_out .= 'indonesia="' . xml_convert(($row_kata->indonesia)) . '" ';
                $xml_out .= 'deskripsi_jawa="' . xml_convert(($row_kata->deskripsi_jawa)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</kata>';
		
        echo $xml_out;
		
    }
	//Fungsi melakukan update pada database
	public function edit_pendaftar($id_pendaftar) 
	{
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');
		

		if (isset($_POST['save']))
		{
			if($this->input->post('passwordbaru')==NULL){
				$password=$this->input->post('passwordlama');
			} else{
				$password=md5($this->input->post('passwordbaru'));
			}
			$id_pendaftar = $this->input->post('id_pendaftar');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_pendaftar', 'Nama_pendaftar', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_pendaftar/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_pendaftar=array(
							'username'=>$this->input->post('username'),
							'nama_pendaftar'=>$this->input->post('nama_pendaftar'),
							'email'=>$this->input->post('email'),
							'password'=>$password
							);
			$data['datapendaftar'] = $data_pendaftar;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE))
			{
				$gbr = NULL;
				$iserror = false;
				if ((!empty($_FILES['filefoto']['name']))) {
					
					$this->load->library('upload', $config);
					if($this->upload->do_upload('filefoto'))
					{
						//echo "Masuk";
						$gbr = $this->upload->data();

						$data_pendaftar['path_foto'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data pendaftar gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('pendaftar', $data_pendaftar, array('id_pendaftar'=>$id_pendaftar));
					$this->session->set_flashdata('msg_berhasil', 'Data pendaftar berhasil diperbaharui');
					redirect('Kelolapendaftar');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data pendaftar gagal diperbaharui');
				//$this->edit_pendaftar();
			}
		}
		else
		{
			$data['pendaftar'] = $this->PendaftarModels->select_by_id_pendaftar($id_pendaftar)->row();

			$data_pendaftar=array(
							'username'=>$data['pendaftar']->username,
							'nama_pendaftar'=>$data['pendaftar']->nama_pendaftar,
							'email'=>$data['pendaftar']->email,
							'password'=>$data['pendaftar']->password,
							'path_foto'=> $data['pendaftar']->path_foto
							);
			$data['datapendaftar'] = $data_pendaftar;


		}
		$data['idPendaaftar'] = $id_pendaftar;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//tambah pendaftar soon
	public function mendaftar_event($id_event)
	{
		$data['active']=2;
		$this->load->model('pendaftar_models/PendaftarModels');
		$this->load->model('home_models/HomeModels');
	  	$ikutEvent = $this->HomeModels->get_event_byid($id_event);

	  	if ($ikutEvent['pendaftaran']==0)
	  	{
	  		show_404();
	  		return;
	  	}


	  	$data['id_event'] = $ikutEvent['id_coming'];
	  	$data['nama_event'] = $ikutEvent['nama_coming'];
		$data['tgl_mulai'] = $ikutEvent['tgl_mulai'];
		$data['jam_mulai'] = $ikutEvent['jam_mulai'];
		$data['tgl_selesai'] = $ikutEvent['tgl_selesai'];
		$data['jam_selesai'] = $ikutEvent['jam_selesai'];
		$data['kota_lokasi'] = $ikutEvent['kota_lokasi'];
		$data['alamat'] = $ikutEvent['alamat'];
		$data['jenis_event'] = $ikutEvent['jenis_event'];
		$data['harga'] = $ikutEvent['harga'];
		$data['seat'] = $ikutEvent['seat'];
		$data['jumlah_seat'] = $ikutEvent['jumlah_seat'];

		$this->load->view('skin/front_end/header_front_end', $data);
      	$this->load->view('content_front_end/mendaftar_ikut_event_page', $data);
      	$this->load->view('skin/front_end/footer_front_end');
	}

}
