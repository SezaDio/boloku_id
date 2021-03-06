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
		if($this->session->userdata('admin_logged_in')){
		$this->load->model('pendaftar_models/PendaftarModels');
		$data['listEventGratis'] = $this->PendaftarModels->get_data_event_gratis();
		$data['listEventBayar'] = $this->PendaftarModels->get_data_event_bayar();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	//List pendaftar
	public function list_pendaftar($id_event)
	{	if($this->session->userdata('admin_logged_in')){
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
		} else {
			redirect(site_url('Account'));
		}
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
		if($this->session->userdata('admin_logged_in')){
		$this->load->model('pendaftar_models/PendaftarModels');

		//Ambil id_agenda yang akan diedit
		$data['id_pendaftar'] = $this->PendaftarModels->select_by_id_pendaftar($id_pendaftar)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_pendaftar', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
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
   function kirim_email($sub, $msg, $email) {
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'mail.boloku.id'; //change this
      $config['smtp_port'] = '465';
      $config['smtp_user'] = 'info@boloku.id'; //change this
      $config['smtp_pass'] = 'cz431081994'; //change this
      $config['mailtype'] = 'html';
      $config['charset'] = 'iso-8859-1';
      $config['smtp_crypto'] = 'ssl';
      $config['wordwrap'] = TRUE;
      $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
      $this->load->library('email'); // load email library
      $this->email->initialize($config);
      $this->email->from('info@boloku.id', 'boloku.id');
      $this->email->to($email);
      $this->email->subject($sub);
      $this->email->message($msg);
      if ($this->email->send()){
         $this->session->set_flashdata('msg_berhasil', 'Pesan balasan telah terkirim.');
         //redirect('FrontControl_ContactUs/kelola_message');
         }
      else{
         show_error($this->email->print_debugger());}
    }
	
	//tambah pendaftar soon
	public function tambah_pendaftar()
	{
		if($this->session->userdata('admin_logged_in')){
		$this->load->model('pendaftar_models/PendaftarModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_pendaftar');
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function tambah_pendaftar_check() {
		if($this->session->userdata('admin_logged_in')){
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
		} else {
			redirect(site_url('Account'));
		}
	}

	function tambah_pendaftar_check_front($id_event) 
	{
		$data['active']=2;
        $this->load->model('pendaftar_models/PendaftarModels');
        $this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		$seat = $this->input->post('seat');
		$event = $this->ComingModels->select_by_id_coming($id_event)->row();
		$nama_event=$event->nama_coming;
		
		if ($tambah == 1)
		{
			$this->form_validation->set_rules('nama_pendaftar', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('tipe_tiket', 'Tipe Tiket', 'required');

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE))
			{   
			    if($this->input->post('tipe_tiket')=="0"){
					$nama_tiket = "Gratis";
					$harga = 0;
				} else {
					$tipe_tiket = explode(":",$this->input->post('tipe_tiket'));
					$nama_tiket = $tipe_tiket[0];
					$harga = $tipe_tiket[1];
					$id_jenis_tiket = $tipe_tiket[2];
				}
				$seat=$this->input->post('seat');
				$no_pendaftar = $this->PendaftarModels->get_jumlah_pendaftar($id_event) + 1;
				if($no_pendaftar<10){
					$no_pendaftar = '00000'.$no_pendaftar;
				} elseif($no_pendaftar<100){
					$no_pendaftar = '0000'.$no_pendaftar;
				} elseif($no_pendaftar<1000){
					$no_pendaftar = '000'.$no_pendaftar;
				} elseif($no_pendaftar<10000){
					$no_pendaftar = '00'.$no_pendaftar;
				} else{
					$no_pendaftar = '0'.$no_pendaftar;
				}
				$kode = substr(md5($this->input->post('nama_pendaftar')), 0, 4);
				$nama_pendaftar = $this->input->post('nama_pendaftar');
				$metode_pembayaran = $this->input->post('metode_pembayaran');
				$data_pendaftar=array(
					'id_event'=>$id_event,
					'nama_pendaftar'=>$this->input->post('nama_pendaftar'),
					'email'=>$this->input->post('email'),
					'telepon'=>$this->input->post('telepon'),
					'alamat'=>$this->input->post('alamat'),
					'nama_tiket'=>$nama_tiket,
					'harga'=>$harga,
					'status_bayar'=>0,
					'metode_pembayaran'=>$metode_pembayaran,
					'no_pendaftar'=>$id_event.'-'.$no_pendaftar.'-'.strtoupper($kode)
				);

				if ($metode_pembayaran == 1) 
				{
					$data['dataPendaftar'] = $data_pendaftar;
				
					$this->db->insert('pendaftar', $data_pendaftar);

					if ($tipe_tiket == 0)
					{
						$seat = $seat-1;
						$this->db->update('coming', array('jumlah_seat'=>$seat), array('id_coming'=>$id_event));
						$sub = 'Pendaftaran Peserta '.$nama_event;
						$msg = 'Terimakasih telah melalukan pendaftaran pada event '.$nama_event;
						$msg .= '<br/> Nomor peserta Anda adalah '.$id_event.'-'.$no_pendaftar.'-'.strtoupper($kode).'. Harap simpan dengan baik nomor peserta Anda'; 
						$email = $this->input->post('email');
						//$this->kirim_email($sub,$msg,$email);
						$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
						redirect('FrontControl_Event/event_click/'.$id_event);
					}
					else
					{
					    $tiket = $this->ComingModels->select_tiket_by_id_tiket($id_jenis_tiket)->row();
					    $seat = $tiket->seat;
					    if ($seat == NULL)
					    {
					        $sub = 'Pendaftaran Peserta '.$nama_event;
	    					$msg = 'Terimakasih telah melalukan pendaftaran pada event '.$nama_event;
	    					$msg .= '<br/> Nomor peserta Anda adalah '.$id_event.'-'.$no_pendaftar.'-'.strtoupper($kode).'.'; 
	    					$msg .= '<br/> Jenis Tiket : '.$nama_tiket.'';
	    					$msg .= '<br/> Harga Tiket : '.$harga.'';
	    					$msg .= '<br/> Harap simpan dengan baik data pendaftaran Kamu';
	    					$email = $this->input->post('email');
	    					//$this->kirim_email($sub,$msg,$email);
	    					$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
	    					redirect('FrontControl_Event/event_click/'.$id_event);
					    }
					    else
					    {
					        $seat = $seat-1;
						    $this->db->update('tiket', array('seat'=>$seat), array('id_jenis_tiket'=>$id_jenis_tiket));
					        
					        $sub = 'Pendaftaran Peserta '.$nama_event;
	    					$msg = 'Terimakasih telah melalukan pendaftaran pada event '.$nama_event;
	    					$msg .= '<br/> Nomor peserta Anda adalah '.$id_event.'-'.$no_pendaftar.'-'.strtoupper($kode).'.'; 
	    					$msg .= '<br/> Jenis Tiket : '.$nama_tiket.'';
	    					$msg .= '<br/> Harga Tiket : '.$harga.'';
	    					$msg .= '<br/> Harap simpan dengan baik data pendaftaran Kamu';
	    					$email = $this->input->post('email');
	    					//$this->kirim_email($sub,$msg,$email);
	    					$this->session->set_flashdata('msg_berhasil', 'Terima kasih telah mendaftar pada event ini, silahkan cek email anda.');
	    					redirect('FrontControl_Event/event_click/'.$id_event);
					    }
					    
					}
				}
				else
				{
					//data POST ke DOKU
					$total_harga = $harga*1;
					$no_pendaftaran = $id_event.'-'.$no_pendaftar.'-'.strtoupper($kode);
					$date_sekarang = date('d-M-Y'); 
					$data_payment_doku = array(
										 'mallid'=>5040,
										 'chainmerchant'=>'NA',
										 'amount'=>$harga.'.00',
										 'purchase_amount'=>$total_harga.'.00',
										 'transidmerchant'=>$id_event.''.$no_pendaftar.''.strtoupper($kode),
										 'words'=>$total_harga.'5040WoL1yQ3At72k'.$no_pendaftaran,
										 'requestdatetime'=>$date_sekarang,
										 'currency'=>360,
										 'purchase_currency'=>360,
										 'session_id'=>0,
										 'name'=>$nama_pendaftar,
										 'email'=>$this->input->post('email'),
										 'basket'=>'Tiket "'.$nama_event.'",'.$harga.'.00,1,'.$total_harga.'.00'
										 );
					$data['data_payment_doku'] = $data_payment_doku;

					//Proses data_payment_doku ke halaman waiting_page_doku
					$this->load->view('skin/front_end/header_menu_front_end');
					$this->load->view('content_front_end/waiting_page_doku', $data);
					$this->load->view('skin/front_end/footer_menu_front_end');
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
		$this->load->model('coming_models/ComingModels');

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
		$data['kota_lokasi'] = $ikutEvent['id_lokasi'];
		$data['alamat'] = $ikutEvent['alamat'];
		$data['jenis_event'] = $ikutEvent['jenis_event'];
		$data['harga'] = $ikutEvent['harga'];
		$data['seat'] = $ikutEvent['seat'];
		$data['jumlah_seat'] = $ikutEvent['jumlah_seat'];

		$data['namaKota'] = $this->ComingModels->select_by_id_kota($data['kota_lokasi']);
        $data['tiket'] = $this->HomeModels->get_tiket_byid($id_event);
		$this->load->view('skin/front_end/header_front_end', $data);
      	$this->load->view('content_front_end/mendaftar_ikut_event_page', $data);
      	$this->load->view('skin/front_end/footer_front_end');
	}
	
	function upload_bukti_bayar()
	{
	    $data['active']=6;
	    
		$this->load->model('pendaftar_models/PendaftarModels');
		
		$this->load->view('skin/front_end/header_front_end', $data);
      	$this->load->view('content_front_end/upload_bukti_bayar');
      	$this->load->view('skin/front_end/footer_front_end');
	}
	
	function validate_no_peserta(){
		$data = array();
		if(isset($_POST['no_peserta'])){
		$no_pendaftar = $_POST['no_peserta'];
		$query = $this->db->where('no_pendaftar',$no_pendaftar)->get('pendaftar');
		foreach ($query->result() as $row){
			$data += array('id_pendaftar' => $row->id_pendaftar,
							'nama_pendaftar' => $row->nama_pendaftar,
							'email' => $row->email,
							'telepon' => $row->telepon,
							'nama_tiket' => $row->nama_tiket,
							'harga' => $row->harga,
							'alamat' => $row->alamat
			);
		}
		$query2 = $this->db->select('id_event')->where('no_pendaftar',$no_pendaftar)->get('pendaftar');
		foreach ($query2->result() as $row2){
			$query3 = $this->db->select('nama_coming, harga, tgl_mulai, tgl_selesai')->where('id_coming',$row2->id_event)->get('coming');
			foreach ($query3->result() as $row3){
			$tgl_mulai=date('d-F-Y', strtotime($row3->tgl_mulai));
            $tgl_selesai=date('d-F-Y', strtotime($row3->tgl_selesai));
			$data += array('nama_event' => $row3->nama_coming,
							'harga' => $row3->harga,
							'tgl_mulai' => $tgl_mulai,
							'tgl_selesai' => $tgl_selesai
			);
			
		}
		}
		
		
		$data += array('check' => sizeof($query->row_array())
		);
		echo json_encode($data);
		}
		
	}
	
	function upload_bukti() {
        
		$this->load->library('form_validation');


			$this->form_validation->set_rules('no_peserta', 'No Peserta', 'required');
			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_pembayaran/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_bukti=array(
						'no_peserta'=>$this->input->post('no_peserta'),
						'tanggal_upload'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL
					);
					$data['dataBukti'] = $data_bukti;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					

					$data_bukti['path_gambar'] = $gbr['file_name'];
					$this->db->insert('pembayaran', $data_bukti);
					$data = array(
						'status_bayar' => 1
						
					);
					$this->db->where('no_pendaftar',$this->input->post('no_peserta'));
					$this->db->update('pendaftar',$data);
					$this->session->set_flashdata('msg_berhasil', 'Bukti pembayaran kamu berhasil diupload, Admin kami akan melakukan verifikasi terhadap bukti pembayaran dalam kurun waktu 1 x 24 jam.');
					redirect(site_url());
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Event baru gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/front_end/header_front_end');
					$this->load->view('content_front_end/upload_bukti_bayar');
					$this->load->view('skin/front_end/footer_front_end');
				}
			}
			else
			{
				$error = validation_errors('<div class="error">','</div>');
				$this->session->set_flashdata('msg_gagal', $error);
				redirect('KelolaMember/dashboard_member');
			}
		
		
	}

	public function export_excel_respon($id_event)
	{
		$this->load->helper('export_xlsx_helper');
		$this->load->model('pendaftar_models/PendaftarModels');

		$event = $this->PendaftarModels->get_event($id_event);
		$nama_event = $event['nama_coming'];
		$jenis_event = $event['jenis_event'];
		$data['listPendaftar'] = $this->PendaftarModels->get_data_pendaftar($id_event);
	
		do_export_xlsx($data['listPendaftar'], $nama_event, $jenis_event);
	}

}
