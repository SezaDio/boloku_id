<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaMember extends CI_Controller {

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
		$this->load->model('member_models/MemberModels');
		$data['listMember'] = $this->MemberModels->get_data_member();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_member', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data
	public function delete_member()//$id_produk
	{
		$id_member = $_POST['id_member'];
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->delete_member($id_member);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_member($id_member)//
	{
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->delete_member($id_member);


		redirect(site_url('KelolaMember'));
	}
	
	//Lihat detail produk
	public function lihat_detail_member($id_member)
	{
		$this->load->model('member_models/MemberModels');

		//Ambil id_agenda yang akan diedit
		
		$member=$this->MemberModels->select_by_id_member($id_member);
		$data['id_member'] = $member['id_member'];
		$data['nama_member'] = $member['nama_member'];
		$data['username'] = $member['username'];
		$data['email'] = $member['email'];
		$data['telepon'] = $member['telepon'];
		$data['status'] = $member['status'];
		$data['date_join'] = $member['date_join'];
		$data['path_foto'] = $member['path_foto'];
		
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_member', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi member
	public function validasi_member()
	{
		$this->load->model('member_models/MemberModels');
		$data['listMember'] = $this->MemberModels->get_data_member_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_member', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui member
	public function setuju_member()
	{
		$id_member = $_POST['id_member'];
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->setuju_member($id_member);
		$sub_setuju = "Youth member";
		$msg_setuju = "Posting yang anda masukan di Youth member telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_member();
	}
	
	//Setujui member
	public function setuju_detail_member($id_member)
	{
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->setuju_member($id_member);
		$sub_setuju = "Youth member";
		$msg_setuju = "Posting yang anda masukan di Youth member Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_member();
	}
	
	//Tolak Data
	public function tolak_member()
	{
		$id_member = $_POST['id_member'];
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->delete_member($id_member);
		$sub_tolak = "Youth member";
		$msg_tolak = "Posting yang anda masukan di Youth member Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_member();
	}
	
	//Tolak Data
	public function tolak_detail_member($id_member)
	{
		$this->load->model('member_models/MemberModels');
		$this->MemberModels->delete_member($id_member);
		$sub_tolak = "Youth member";
		$msg_tolak = "Posting yang anda masukan di Youth member Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_member();
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
	
	//tambah member soon
	public function tambah_member()
	{
		$this->load->model('member_models/MemberModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_member');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_member_check() {
        $this->load->model('member_models/MemberModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_member', 'Nama Member', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');

			/*if ($this->form_validation->run() == TRUE)
			{*/		$data_member=array(
						'username'=>$this->input->post('username'),
						'nama_member'=>$this->input->post('nama_member'),
						'password'=>md5($this->input->post('nama_member')),
						'email'=>$this->input->post('email'),
						'date_join'=>date("Y-m-d h:i:sa"),
						'telepon'=>$this->input->post('telelpon'),
						'path_foto'=>0,
						'status'=>1
					);
					$data['dataMember'] = $data_member;
				if($this->db->insert('member', $data_member))
				{
					$this->session->set_flashdata('msg_berhasil', 'Selamat, kowe wis dadi boloku ndes. Monggo LOGIN');
					redirect('KelolaMember');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data member gagal ditambahkan');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_member', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			/*}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth member gagal ditambahkan');
				$this->tambah_member_check();
			}*/
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_member');
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}
	
	function cari_kata($kata) {
		$kata=str_replace('%20',' ',$kata);
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_kata=$this->db->like('jawa',$this->db->escape_like_str($kata))->get('member');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<kosakata>';
        if ($get_kata->num_rows()>0) {
            foreach ($get_kata->result() as $row_kata) {
                $xml_out .= '<kata ';
                $xml_out .= 'id="' . xml_convert($row_kata->id_member) . '" ';
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
	public function edit_member($id_member) 
	{
		$this->load->model('member_models/MemberModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');
		

		if (isset($_POST['save']))
		{
			if($this->input->post('passwordbaru')==NULL){
				$password=$this->input->post('passwordlama');
			} else{
				$password=md5($this->input->post('passwordbaru'));
			}
			$id_member = $this->input->post('id_member');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_member', 'Nama_Member', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_member/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data['username'] = $this->input->post('username');
			$data['nama_member'] = $this->input->post('nama_member');
			$data['email'] = $this->input->post('email');
			$data['telepon'] = $this->input->post('telepon');
			$data['password'] = $password;
			
			$data_member=array(
							'username'=>$this->input->post('username'),
							'nama_member'=>$this->input->post('nama_member'),
							'email'=>$this->input->post('email'),
							'telepon'=>$this->input->post('telepon'),
							'password'=>$password
							);
			

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

						$data_member['path_foto'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data member gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('member', $data_member, array('id_member'=>$id_member));
					$this->session->set_flashdata('msg_berhasil', 'Data member berhasil diperbaharui');
					redirect('KelolaMember');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data member gagal diperbaharui');
				//$this->edit_member();
			}
		}
		else
		{
			$member = $this->MemberModels->select_by_id_member($id_member);
			$data['username'] = $member['username'];
			$data['nama_member'] = $member['nama_member'];
			$data['email'] = $member['email'];
			$data['telepon'] = $member['telepon'];
			$data['password'] = $member['password'];
			$data['path_foto'] = $member['path_foto'];
			/*$data_member=array(
							'username'=>$data['member']->username,
							'nama_member'=>$data['member']->nama_member,
							'email'=>$data['member']->email,
							'password'=>$data['member']->password,
							'path_foto'=> $data['member']->path_foto
							);
			$data['dataMember'] = $data_member;*/


		}
		$data['idMember'] = $id_member;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_member', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Masuk ke halaman registrasi
	public function registrasi_member_baru()
	{
		$this->load->view('skin/front_end/header_front_end');
        $this->load->view('content_front_end/register_member_page');
        $this->load->view('skin/front_end/footer_front_end');
	}
	
	function member_baru_check() {
        $this->load->model('member_models/MemberModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_member', 'Nama Member', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
			$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');

			/*if ($this->form_validation->run() == TRUE)
			{*/		$data_member=array(
						'username'=>$this->input->post('username'),
						'nama_member'=>$this->input->post('nama_member'),
						'password'=>md5($this->input->post('password')),
						'email'=>$this->input->post('email'),
						'telepon'=>$this->input->post('telepon'),
						'pertanyaan_rahasia'=>$this->input->post('pertanyaan'),
						'jawaban_rahasia'=>$this->input->post('jawaban'),
						'date_join'=>date("Y-m-d h:i:sa"),
						'path_foto'=>0,
						'status'=>2
					);
					$data['dataMember'] = $data_member;
				if($this->db->insert('member', $data_member))
				{
					$this->session->set_flashdata('msg_berhasil', 'Data member berhasil ditambahkan');
					redirect('FrontControl_Home');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data member gagal ditambahkan');
					
					$this->load->view('skin/front_end/header_front_end');
					$this->load->view('content_front_end/register_member_page',$data);
					$this->load->view('skin/front_end/footer_front_end');
				}
			/*}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth member gagal ditambahkan');
				$this->tambah_member_check();
			}*/
		}
		else
		{
			$this->load->view('skin/front_end/header_front_end');
			$this->load->view('content_front_end/register_member_page');
			$this->load->view('skin/front_end/footer_front_end');
		}     
		
	}
	
	public function reset_password_member()
	{
		$this->load->view('skin/front_end/header_front_end');
        $this->load->view('content_front_end/reset_password_member');
        $this->load->view('skin/front_end/footer_front_end');
	}

	//Masuk ke dashboard member
	public function dashboard_member()
	{
		if($this->session->userdata('is_logged_in')){
		$id_member = $this->session->userdata('id_member');
		$this->load->model('member_models/MemberModels');
		$this->load->model('home_models/HomeModels');
		
		$member=$this->MemberModels->select_by_id_member($id_member);
		$data['id_member'] = $member['id_member'];
		$data['nama_member'] = $member['nama_member'];
		$data['username'] = $member['username'];
		$data['email'] = $member['email'];
		$data['telepon'] = $member['telepon'];
		$data['path_foto'] = $member['path_foto'];
		$data['password'] = $member['password'];
		
		$kategori_coming = array(
							  'Seni'=>'Seni',
                              'Travel dan Outdoor'=>'Travel dan Outdoor',
                              'Bisnis'=>'Bisnis',
                              'Science dan Teknologi'=>'Science dan Teknologi',
                              'Sprirituality'=>'Sprirituality',
                              'Musik'=>'Musik',
                              'Keluarga dan Pendidikan'=>'Keluarga dan Pendidikan',
                              'Hobi'=>'Hobi',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$tipe_event = array(
							  'Attraction'=>'Attraction',
                              'Class'=>'Class',
                              'Conference'=>'Conference',
                              'Expo'=>'Expo',
                              'Festival'=>'Festival',
                              'Game'=>'Game',
                              'Party'=>'Party',
                              'Performance'=>'Performance',
                              'Seminar'=>'Seminar',
                              'Tour'=>'Tour',
                              'Lain-Lain'=>'Lain-Lain'
                              );

		$data_coming_tambah=array(
						'nama_coming'=>'',
						'jenis_event'=>'',
						'pendaftaran'=>'',
						'kategori_coming'=>'',
						'tipe_event'=>'',
						'deskripsi_coming'=>'',
						'tanggal_posting'=>'',
						'posted_by'=>'',
						'institusi'=>'',
						'telepon'=>'',
						'email'=>'',
						'tgl_mulai'=>'',
						'tgl_selesai'=>'',
						'jam_mulai'=>'',
						'jam_selesai'=>'',
						'path_gambar'=> NULL,
						'status'=>1
					);

		$jam_event=array();
		for ($i=0; $i<24; $i++) 
		{ 
	 		for ($j=0; $j<=45; $j=$j+15)
	 		{
	 			if ($i<=9) 
	 			{
	 				if ($j==0) 
	 				{
	 					$jam_event["0".$i.":".$j."0"]="0".$i.":".$j."0";
	 				}
	 				else
	 				{
	 					$jam_event["0".$i.":".$j.""]="0".$i.":".$j."";
	 				}
	 			}
	 			else
	 			{
	 				if ($j==0) 
	 				{
	 					$jam_event["".$i.":".$j."0"]="".$i.":".$j."0";
	 				}
	 				else
	 				{
	 					$jam_event["".$i.":".$j.""]="".$i.":".$j."";
	 				}
	 			}
	 		}
		}

		$data['kategori_coming']= $kategori_coming;
		$data['tipe_event']= $tipe_event;
		$data['jam_event']= $jam_event;
		
		$data['listEvent'] = $this->MemberModels->event_by_id_member($id_member);
		//$data['jumlahTestimoni'] = $this->HomeModels->jumlah_testimoni();

		$this->load->view('skin/front_end/header_front_end');
        $this->load->view('content_front_end/member_area_dashboard',$data);
        $this->load->view('skin/front_end/footer_front_end');
		} else {
			redirect(site_url());
		}
	}
	
	function tambah_event() {
        $this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_coming = array(
							  'Seni'=>'Seni',
                              'Travel dan Outdoor'=>'Travel dan Outdoor',
                              'Bisnis'=>'Bisnis',
                              'Science dan Teknologi'=>'Science dan Teknologi',
                              'Sprirituality'=>'Sprirituality',
                              'Musik'=>'Musik',
                              'Keluarga dan Pendidikan'=>'Keluarga dan Pendidikan',
                              'Hobi'=>'Hobi',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$tipe_event = array(
							  'Attraction'=>'Attraction',
                              'Class'=>'Class',
                              'Conference'=>'Conference',
                              'Expo'=>'Expo',
                              'Festival'=>'Festival',
                              'Game'=>'Game',
                              'Party'=>'Party',
                              'Performance'=>'Performance',
                              'Seminar'=>'Seminar',
                              'Tour'=>'Tour',
                              'Lain-Lain'=>'Lain-Lain'
                              );

		$data_coming_tambah=array(
						'nama_coming'=>'',
						'jenis_event'=>'',
						'pendaftaran'=>'',
						'kategori_coming'=>'',
						'tipe_event'=>'',
						'deskripsi_coming'=>'',
						'tanggal_posting'=>'',
						'posted_by'=>'',
						'institusi'=>'',
						'telepon'=>'',
						'email'=>'',
						'tgl_mulai'=>'',
						'tgl_selesai'=>'',
						'jam_mulai'=>'',
						'jam_selesai'=>'',
						'path_gambar'=> NULL,
						'status'=>1
					);

		$jam_event=array();
		for ($i=0; $i<24; $i++) 
		{ 
	 		for ($j=0; $j<=45; $j=$j+15)
	 		{
	 			if ($i<=9) 
	 			{
	 				if ($j==0) 
	 				{
	 					$jam_event["0".$i.":".$j."0"]="0".$i.":".$j."0";
	 				}
	 				else
	 				{
	 					$jam_event["0".$i.":".$j.""]="0".$i.":".$j."";
	 				}
	 			}
	 			else
	 			{
	 				if ($j==0) 
	 				{
	 					$jam_event["".$i.":".$j."0"]="".$i.":".$j."0";
	 				}
	 				else
	 				{
	 					$jam_event["".$i.":".$j.""]="".$i.":".$j."";
	 				}
	 			}
	 		}
		}

		$data['kategori_coming']= $kategori_coming;
		$data['tipe_event']= $tipe_event;
		$data['jam_event']= $jam_event;
		$data['dataComing'] = $data_coming_tambah;
		
		$seat=$this->input->post('seat');
		if($seat==1){
			$jumlah_seat=$this->input->post('jumlah_seat');
		} else{
			$jumlah_seat=0;
		}
		
		$jenis_event=$this->input->post('jenis_event');
		if($jenis_event==0){
			$harga=$this->input->post('harga');
		} else{
			$harga=0;
		}

			$this->form_validation->set_rules('judul_coming', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('nama_member', 'Penulis', 'required');
			$this->form_validation->set_rules('institusi', 'Institusi', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('jenis_event', 'Jenis', 'required');
			$this->form_validation->set_rules('institusi', 'Institusi', 'required');
			$this->form_validation->set_rules('pendaftaran', 'Pendaftaran', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('tipe', 'Tipe', 'required');
			$this->form_validation->set_rules('tgl_event', 'Tanggal', 'required');
			$this->form_validation->set_rules('jam_mulai', 'Jam', 'required');
			$this->form_validation->set_rules('jam_selesai', 'Jam', 'required');
			$this->form_validation->set_rules('deskripsi_coming', 'Deskripsi', 'required');
			$this->form_validation->set_rules('seat', 'Seat', 'required');
			$this->form_validation->set_rules('kota', 'Kota Lokasi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_coming/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_coming=array(
						'id_member'=>$this->input->post('id_member'),
						'nama_coming'=>$this->input->post('judul_coming'),
						'jenis_event'=>$this->input->post('jenis_event'),
						'harga'=>$harga,
						'pendaftaran'=>$this->input->post('pendaftaran'),
						'kategori_coming'=>$this->input->post('kategori'),
						'tipe_event'=>$this->input->post('tipe'),
						'deskripsi_coming'=>$this->input->post('deskripsi_coming'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'posted_by'=>$this->input->post('nama_member'),
						'institusi'=>$this->input->post('institusi'),
						'telepon'=>$this->input->post('telepon'),
						'email'=>$this->input->post('email'),
						'tgl_mulai'=>$this->input->post('tgl_mulai'),
						'tgl_selesai'=>$this->input->post('tgl_selesai'),
						'jam_mulai'=>$this->input->post('jam_mulai'),
						'jam_selesai'=>$this->input->post('jam_selesai'),
						'kota_lokasi'=>$this->input->post('kota'),
						'alamat'=>$this->input->post('alamat'),
						'path_gambar'=> NULL,
						'seat'=> $seat,
						'jumlah_seat'=> $jumlah_seat,
						'top_event'=> 2,
						'status'=>2
					);
					$data['dataComing'] = $data_coming;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$this->crop($gbr['full_path'],$gbr['file_name']);

					$data_coming['path_gambar'] = $gbr['file_name'];

					$this->db->insert('coming', $data_coming);
					$this->session->set_flashdata('msg_berhasil', 'Data Event kamu berhasil disimpan, Admin kami akan melakukan verifikasi terhadap data event mu dalam kurun waktu 1 x 24 jam.');
					redirect('KelolaMember/dashboard_member');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Event baru gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/front_end/header_front_end');
					$this->load->view('content_front_end/member_area_dashboard',$data);
					$this->load->view('skin/front_end/footer_front_end');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Event baru gagal ditambahkan');
				$this->tambah_event();
			}
		
		
	}
	
	public function edit_member_area($id_member) 
	{
		$this->load->model('member_models/MemberModels');
		$this->load->library('form_validation');
	
		if($this->input->post('edit_password')==NULL){
			$password=$this->input->post('passwordlama');
		} else{
			$password=md5($this->input->post('edit_password'));
		}
			
		
		//Mengambil filename gambar untuk disimpan
		$nmfile = "file_".time();
		$config['upload_path'] = './asset/upload_img_member/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '4000'; //kb
		$config['file_name'] = $nmfile;

		$data_member=array(
			'username'=>$this->input->post('edit_username'),
			'nama_member'=>$this->input->post('edit_nama_member'),
			'email'=>$this->input->post('edit_email'),
			'telepon'=>$this->input->post('edit_telepon'),
			'password'=>$password
			);
		$data['dataMember'] = $data_member;

		$gbr = NULL;
		$iserror = false;
		if ((!empty($_FILES['filefoto']['name']))) {
			
			$this->load->library('upload', $config);
			if($this->upload->do_upload('filefoto'))
			{
				//echo "Masuk";
				$gbr = $this->upload->data();
				$this->crop_member($gbr['full_path'],$gbr['file_name']);
				$data_member['path_foto'] = $gbr['file_name'];

				
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data member gagal diperbaharui');
				$iserror = true;
			}

		}
			$this->db->update('member', $data_member, array('id_member'=>$id_member));
			
			$this->session->set_flashdata('msg_berhasil', 'Data member berhasil diperbaharui');
			redirect('KelolaMember/dashboard_member');
		
			
	}
	
	function validate_passlama(){
		if(isset($_POST['password2'])){

		echo md5($_POST['password2']);
		
		}
		
	}
	
	function validate_username(){
		if(isset($_POST['username'])){
		$username = $_POST['username'];
		$query = $this->db->where('username',$username)->get('member');
		$check = sizeof($query->row_array());
		echo $check;
		}
		
	}
	
	function get_pertanyaan(){
		if(isset($_POST['username'])){
		$username = $_POST['username'];
		$query = $this->db->select('pertanyaan_rahasia, jawaban_rahasia')->where('username',$username)->get('member');
		echo json_encode($query->row_array());
		}
		
	}
	
	function reset_password(){
		if(isset($_POST['password_baru'])&&isset($_POST['username'])){
			$password_baru = md5($_POST['password_baru']);
			$username = $_POST['username'];
			$data = array (
				'password' => $password_baru
			);
			if($this->db->update('member',$data,array('username' => $username))){
				echo TRUE;
			} else {
				echo FALSE;
			}
		}
		
	}
	
	
	function crop($img,$filename){
		
		$name = $img;
		$myImage = imagecreatefromjpeg($name);
		$myImage83 = imagecreatefromjpeg($name);
		list($width, $height) = getimagesize($name);
		//get percent to resize to 900x550
		if($width<=$height){
			$percent = 800/$width;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newheight<550){
				$percent2 = 550/$newheight;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent83 = 83/$width;
			$newwidth83 = $width * $percent83;
			$newheight83 = $height * $percent83;
			if($newheight83<83){
				$percent83b = 83/$newheight83;
				$newwidth83 = $newwidth83 * $percent83b;
				$newheight83 = $newheight83 * $percent83b;
			}
			
		} else {
			$percent = 550/$height;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newwidth<800){
				$percent2 = 800/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent83 = 83/$height;
			$newwidth83 = $width * $percent83;
			$newheight83 = $height * $percent83;
			if($newwidth83<83){
				$percent83b = 83/$newwidth83;
				$newwidth83 = $newwidth83 * $percent83b;
				$newheight83 = $newheight83 * $percent83b;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$thumb83 = imagecreatetruecolor($newwidth83, $newheight83);
		imagecopyresized($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagecopyresized($thumb83, $myImage83, 0, 0, 0, 0, $newwidth83, $newheight83, $width, $height);
		imagejpeg($thumb,"./asset/upload_img_coming/resize_".$filename);
		imagejpeg($thumb83,"./asset/upload_img_coming/resize83_".$filename);
		
		// crop thumb
		$imgThumb = './asset/upload_img_coming/resize_'.$filename;
		$imgThumb83 = './asset/upload_img_coming/resize83_'.$filename;
		$myThumb = imagecreatefromjpeg($imgThumb);
		$myThumb83 = imagecreatefromjpeg($imgThumb83);
		list($width, $height) = getimagesize($imgThumb);
		list($width83, $height83) = getimagesize($imgThumb83);
		$myThumbCrop =  imagecreatetruecolor(800, 550);
		$myThumbCrop83 =  imagecreatetruecolor(83,83);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		imagecopyresampled($myThumbCrop83,$myThumb83,0,0,0,0 ,$width83,$height83,$width83,$height83);
		unlink('./asset/upload_img_coming/resize_'.$filename);
		unlink('./asset/upload_img_coming/resize83_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		$fileName83="thumb83_".$filename;
		imagejpeg( $myThumbCrop,"./asset/upload_img_coming/".$fileName );
		imagejpeg( $myThumbCrop83,"./asset/upload_img_coming/".$fileName83 );
		
	}
	
	function crop_member($img,$filename){
		
		$name = $img;
		$myImage85 = imagecreatefromjpeg($name);
		$myImage = imagecreatefromjpeg($name);
		list($width, $height) = getimagesize($name);
		//get percent to resize to 900x550
		if($width<=$height){
			$percent = 800/$width;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newheight<550){
				$percent2 = 550/$newheight;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent85 = 300/$width;
			$newwidth85 = $width * $percent85;
			$newheight85 = $height * $percent85;
			if($newheight85<300){
				$percent85b = 300/$newheight85;
				$newwidth85 = $newwidth85 * $percent85b;
				$newheight85 = $newheight85 * $percent85b;
			}
		} else {
			$percent = 550/$height;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newwidth85<800){
				$percent2 = 800/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent85 = 300/$height;
			$newwidth85 = $width * $percent85;
			$newheight85 = $height * $percent85;
			if($newwidth85<300){
				$percent85b = 300/$newwidth85;
				$newwidth85 = $newwidth85 * $percent85b;
				$newheight85 = $newheight85 * $percent85b;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$thumb85 = imagecreatetruecolor($newwidth85, $newheight85);
		imagecopyresized($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagecopyresized($thumb85, $myImage85, 0, 0, 0, 0, $newwidth85, $newheight85, $width, $height);
		imagejpeg($thumb,"./asset/upload_img_member/resize_".$filename);
		imagejpeg($thumb85,"./asset/upload_img_member/resize85_".$filename);
		
		// crop thumb
		$imgThumb = './asset/upload_img_member/resize_'.$filename;
		$imgThumb85 = './asset/upload_img_member/resize85_'.$filename;
		$myThumb = imagecreatefromjpeg($imgThumb);
		$myThumb85 = imagecreatefromjpeg($imgThumb85);
		list($width, $height) = getimagesize($imgThumb);
		list($width85, $height85) = getimagesize($imgThumb85);
		$myThumbCrop =  imagecreatetruecolor(800,550);
		$myThumbCrop85 =  imagecreatetruecolor(300, 300);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		imagecopyresampled($myThumbCrop85,$myThumb85,0,0,0,0 ,$width85,$height85,$width85,$height85);
		unlink('./asset/upload_img_member/resize_'.$filename);
		unlink('./asset/upload_img_member/resize85_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		$fileName85="thumb85_".$filename;
		imagejpeg( $myThumbCrop,"./asset/upload_img_member/".$fileName );
		imagejpeg( $myThumbCrop85,"./asset/upload_img_member/".$fileName85 );
		
	}

}
