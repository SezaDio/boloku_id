<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaComing extends CI_Controller {

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
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming();
		$data['jumlahTop'] = $this->ComingModels->jumlah_top();	
		
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_coming', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
		
	}

	//Delete Data Coming + data news dan testimoni dari halaman kelola event
	public function delete_coming()//$id_produk
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->load->model('news_models/NewsModels');

		$this->ComingModels->delete_coming($id_coming);
		$this->NewsModels->delete_news($id_coming);

		$this->index();
	}

	//Hapus berita
	public function delete_news()//$id_produk
	{
		$id_news = $_POST['id_news'];
		$this->load->model('news_models/NewsModels');
		$this->NewsModels->delete_news2($id_news);
	}

	//delete testimoni from deatail coming
	public function delete_testimoni()
	{
		$id_testimoni = $_POST['id_testimoni'];
		$this->load->model('news_models/NewsModels');
		$this->NewsModels->delete_testimoni($id_testimoni);
	}

	//Delete Data Coming + data news dan testimoni dari halaman Lihat Detail
	public function delete_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->load->model('news_models/NewsModels');

		$this->ComingModels->delete_coming($id_coming);
		$this->NewsModels->delete_news($id_coming);

		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_coming($id_coming)
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('coming_models/ComingModels');
		$this->load->model('news_models/NewsModels');
		$this->load->model('home_models/HomeModels');

		//Ambil id_event
		$data['id_coming'] = $this->ComingModels->select_by_id_coming($id_coming)->row();
		$data['dataNews'] = $this->NewsModels->select_by_id_press($id_coming);
		$data['dataTestimoni'] = $this->HomeModels->get_testimoni($id_coming);

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_coming', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	//Validasi coming
	public function validasi_coming()
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_coming', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	//Setujui coming
	public function setuju_coming()
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth coming telah disetujui";
		//$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_coming();
	}
	
	//Setujui coming
	public function setuju_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth Coming Soon telah disetujui";
		//$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_coming();
	}
	
	//Tolak Data
	public function tolak_coming()
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);
		$sub_tolak = "Youth coming";
		$msg_tolak = "Posting yang anda masukan di Youth Coming Soon telah ditolak";
		//$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_coming();
	}
	
	//Tolak Data
	public function tolak_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);
		$sub_tolak = "Youth coming";
		$msg_tolak = "Posting yang anda masukan di Youth Coming Soon telah ditolak";
		//$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_coming();
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
	
	//tambah coming soon
	public function tambah_coming()
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('coming_models/ComingModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_coming');
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function tambah_coming_check() {
		if($this->session->userdata('admin_logged_in')){
        $this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_coming = array(
							  'Seni'=>'Seni',
                              'Travel dan Outdoor'=>'Travel dan Outdoor',
                              'Bisnis'=>'Bisnis',
                              'Science dan Teknologi'=>'Science dan Teknologi',
                              'Spirituality'=>'Spirituality',
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
		$data['kotaLokasi'] = $this->ComingModels->kota_lokasi();
		$data['kategori_coming']= $kategori_coming;
		$data['tipe_event']= $tipe_event;
		$data['jam_event']= $jam_event;
		$data['dataComing'] = $data_coming_tambah;
		
		$seat=$this->input->post('seat');
		if($seat==1){
			$jumlah_seat=0;//$this->input->post('jumlah_seat');
		} else{
			$jumlah_seat=0;
		}
		
		$jenis_event=$this->input->post('jenis_event');
	
		$jenis_event=$this->input->post('jenis_event');
		if($jenis_event==0){
			$harga=$this->input->post('harga');
		} else{
			$harga=0;
		}

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_coming', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('posted_by', 'Penulis', 'required');
			$this->form_validation->set_rules('institusi', 'Institusi', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('jenis_event', 'Jenis', 'required');
			$this->form_validation->set_rules('pendaftaran', 'Pendaftaran', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('tipe', 'Tipe', 'required');
			$this->form_validation->set_rules('tgl_event', 'Tanggal', 'required');
			$this->form_validation->set_rules('jam_mulai', 'Jam', 'required');
			$this->form_validation->set_rules('jam_selesai', 'Jam', 'required');
			$this->form_validation->set_rules('deskripsi_coming', 'Deskripsi', 'required');
			$this->form_validation->set_rules('seat', 'Seat', 'required');
			$this->form_validation->set_rules('kota', 'Lokasi Kota', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');

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
						'nama_coming'=>$this->input->post('judul_coming'),
						'jenis_event'=>$this->input->post('jenis_event'),
						'harga'=>0,//$harga,
						'pendaftaran'=>$this->input->post('pendaftaran'),
						'kategori_coming'=>$this->input->post('kategori'),
						'tipe_event'=>$this->input->post('tipe'),
						'deskripsi_coming'=>$this->input->post('deskripsi_coming'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'posted_by'=>$this->input->post('posted_by'),
						'institusi'=>$this->input->post('institusi'),
						'telepon'=>$this->input->post('telepon'),
						'email'=>$this->input->post('email'),
						'tgl_mulai'=>$this->input->post('tgl_mulai'),
						'tgl_selesai'=>$this->input->post('tgl_selesai'),
						'jam_mulai'=>$this->input->post('jam_mulai'),
						'jam_selesai'=>$this->input->post('jam_selesai'),
						'path_gambar'=> NULL,
						'seat'=> $seat,
						'jumlah_seat'=> $jumlah_seat,
						'top_event'=> 2,
						'id_lokasi'=>$this->input->post('kota'),
						'alamat'=>$this->input->post('alamat'),
						'status'=>1
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
					
					$nama_tiket = $this->input->post('nama_tiket');
					$harga = $this->input->post('harga');
					
					if($this->input->post('jenisqty')=='open'){
						$qty = 0;
					} else {
						$qty = $this->input->post('qty')+1;
					}
					
					$id_event = $this->db->insert_id();
					$status = 1;
					$data_tiket = array();

					foreach ($nama_tiket as $key => $value) 
					{
						$data_tiket[] = array(
						'nama_tiket' => $value,
						'harga' => $harga[$key],
						'seat' => $qty[$key],
						'id_event' => $id_event,
						'status' => 1
						);
					}

					$this->db->insert_batch('tiket', $data_tiket);
					$this->session->set_flashdata('msg_berhasil', 'Data Event baru berhasil ditambahkan');
					redirect('KelolaComing');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Event baru gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_coming', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Event baru gagal ditambahkan');
				$this->tambah_coming_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_coming',$data);
			$this->load->view('skin/admin/footer_admin');
		}     
		} else {
			redirect(site_url('Account'));
		}
	}

	//Fungsi melakukan update pada database
	public function edit_comming_soon($id_coming) 
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		$kategori_coming = array(
							  'Seni'=>'Seni',
                              'Travel dan Outdoor'=>'Travel dan Outdoor',
                              'Bisnis'=>'Bisnis',
                              'Science dan Teknologi'=>'Science dan Teknologi',
                              'Spirituality'=>'Spirituality',
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
		$data['kotaLokasi'] = $this->ComingModels->kota_lokasi();
		$data['kategori_coming']= $kategori_coming;
		$data['tipe_event']= $tipe_event;
		$data['jam_event']= $jam_event;

		if (isset($_POST['save']))
		{
			$id_coming = $this->input->post('id_coming');

			$this->form_validation->set_rules('nama_coming', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('tipe', 'Tipe', 'required');
			$this->form_validation->set_rules('tgl_event', 'Tanggal', 'required');
			$this->form_validation->set_rules('jam_mulai', 'Jam', 'required');
			$this->form_validation->set_rules('jam_selesai', 'Jam', 'required');
			$this->form_validation->set_rules('deskripsi_coming', 'Deskripsi', 'required');
			$this->form_validation->set_rules('posted_by', 'Posted', 'required');
			$this->form_validation->set_rules('institusi', 'Institusi', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('kota', 'Kota Lokasi', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_coming/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;
			
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
			
			$data_coming=array(
							'nama_coming'=>$this->input->post('nama_coming'),
							'jenis_event'=>$this->input->post('jenis_event'),
							'harga'=>$harga,
							'kategori_coming'=>$this->input->post('kategori'),
							'tipe_event'=>$this->input->post('tipe'),
							'institusi'=>$this->input->post('institusi'),
							'telepon'=>$this->input->post('telepon'),
							'email'=>$this->input->post('email'),
							'tgl_mulai'=>$this->input->post('tgl_mulai'),
							'tgl_selesai'=>$this->input->post('tgl_selesai'),
							'jam_mulai'=>$this->input->post('jam_mulai'),
							'jam_selesai'=>$this->input->post('jam_selesai'),
							'deskripsi_coming'=>$this->input->post('deskripsi_coming'),
							'pendaftaran'=>$this->input->post('pendaftaran'),
							'seat'=>$seat,
							'jumlah_seat'=>$jumlah_seat,
							'id_lokasi'=>$this->input->post('kota'),
							'alamat'=>$this->input->post('alamat'),							
							//'path_gambar'=>NULL,
							'posted_by'=>$this->input->post('posted_by')
							);
			$data['dataComing'] = $data_coming;

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
						$this->crop($gbr['full_path'],$gbr['file_name']);
						$data_coming['path_gambar'] = $gbr['file_name'];
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Event gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('coming', $data_coming, array('id_coming'=>$id_coming));
					$this->session->set_flashdata('msg_berhasil', 'Data Event berhasil diperbaharui');
					redirect('KelolaComing');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Event gagal diperbaharui');
				//$this->edit_comming_soon();
			}
		}
		else
		{
			$data['coming'] = $this->ComingModels->select_by_id_coming($id_coming)->row();

			$data_coming=array(
							'nama_coming'=>$data['coming']->nama_coming,
							'kategori_coming'=>$data['coming']->kategori_coming,
							'tipe_event'=>$data['coming']->tipe_event,
							'harga'=>$data['coming']->harga,
							'jenis_event'=>$data['coming']->jenis_event,
							'institusi'=>$data['coming']->institusi,
							'telepon'=>$data['coming']->telepon,
							'email'=>$data['coming']->email,
							'tgl_mulai'=>$data['coming']->tgl_mulai,
							'tgl_selesai'=>$data['coming']->tgl_selesai,
							'jam_mulai'=>$data['coming']->jam_mulai,
							'jam_selesai'=>$data['coming']->jam_selesai,
							'deskripsi_coming'=>$data['coming']->deskripsi_coming,
							'posted_by'=>$data['coming']->posted_by,
							'seat'=>$data['coming']->seat,
							'jumlah_seat'=>$data['coming']->jumlah_seat,
							'id_lokasi'=>$data['coming']->id_lokasi,
							'alamat'=>$data['coming']->alamat,
							'top_event'=>$data['coming']->top_event,
							'pendaftaran'=>$data['coming']->pendaftaran,
							'path_gambar'=> $data['coming']->path_gambar
							);
			$data['dataComing'] = $data_coming;


		}
		$data['idComing'] = $id_coming;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_comming', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	public function edit_event() 
	{	
		$this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		
			$id_coming = $this->input->post('edit_id_event');

			$this->form_validation->set_rules('edit_nama_event', 'Judul', 'required');
			$this->form_validation->set_rules('edit_kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('edit_tipe', 'Tipe', 'required');
			$this->form_validation->set_rules('edit_tgl_mulai', 'Tanggal Mulai', 'required');
			$this->form_validation->set_rules('edit_tgl_selesai', 'Tanggal Selesai', 'required');
			$this->form_validation->set_rules('edit_jam_mulai', 'Jam', 'required');
			$this->form_validation->set_rules('edit_jam_selesai', 'Jam', 'required');
			$this->form_validation->set_rules('edit_deskripsi_coming', 'Deskripsi', 'required');
			$this->form_validation->set_rules('nama_member', 'Posted', 'required');
			$this->form_validation->set_rules('edit_institusi', 'Institusi', 'required');
			//$this->form_validation->set_rules('edit_kota', 'Kota Lokasi', 'required');
			//$this->form_validation->set_rules('edit_telepon', 'Telepon', 'required');
			//$this->form_validation->set_rules('edit_email', 'Email', 'required');
			$this->form_validation->set_rules('edit_alamat', 'Alamat', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_coming/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;
			
			$seat=$this->input->post('edit_seat');
			if($seat==1){
				$jumlah_seat=$this->input->post('edit_jumlah_seat');
			} else{
				$jumlah_seat=0;
			}
			
			$jenis_event=$this->input->post('edit_jenis_event');
			if($jenis_event==0){
				$harga=$this->input->post('edit_harga');
			} else{
				$harga=0;
			}
			
			$data_coming=array(
							'nama_coming'=>$this->input->post('edit_nama_event'),
							'jenis_event'=>$this->input->post('edit_jenis_event'),
							'harga'=>$harga,
							'kategori_coming'=>$this->input->post('edit_kategori'),
							'tipe_event'=>$this->input->post('edit_tipe'),
							'institusi'=>$this->input->post('edit_institusi'),
							'telepon'=>$this->input->post('edit_telepon'),
							'email'=>$this->input->post('edit_email'),
							'tgl_mulai'=>$this->input->post('edit_tgl_mulai'),
							'tgl_selesai'=>$this->input->post('edit_tgl_selesai'),
							'jam_mulai'=>$this->input->post('edit_jam_mulai'),
							'jam_selesai'=>$this->input->post('edit_jam_selesai'),
							'deskripsi_coming'=>$this->input->post('edit_deskripsi_coming'),
							'pendaftaran'=>$this->input->post('edit_pendaftaran'),
							'id_lokasi'=>$this->input->post('edit_kota'),
							'alamat'=>$this->input->post('edit_alamat'),
							'seat'=>$seat,
							'jumlah_seat'=>$jumlah_seat,
							//'path_gambar'=>NULL,
							'posted_by'=>$this->input->post('posted_by')
							);
			$data['dataComing'] = $data_coming;

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
						$this->crop($gbr['full_path'],$gbr['file_name']);
						$data_coming['path_gambar'] = $gbr['file_name'];
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Event gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('coming', $data_coming, array('id_coming'=>$id_coming));
					$this->session->set_flashdata('msg_berhasil', 'Data Event berhasil diperbaharui');
					redirect(site_url('KelolaMember/dashboard_member'));
				}
			}
			else
			{
				echo validation_errors();
				$this->session->set_flashdata('msg_gagal', 'Data Event gagal diperbaharui');
				//redirect(site_url('KelolaMember/dashboard_member'));
			}
		
	}
	
	function crop($img,$filename){
		
		$name = $img;
		if(preg_match("/.jpg/i", "$name")){
		$myImage = imagecreatefromjpeg($name);
		$myImage83 = imagecreatefromjpeg($name);
		}
		if(preg_match("/.jpeg/i", "$name")){
		$myImage = imagecreatefromjpeg($name);
		$myImage83 = imagecreatefromjpeg($name);
		}
		if(preg_match("/.jpeg/i", "$name")){
		$myImage = Imagecreatefromjpeg($name);
		$myImage83 = Imagecreatefromjpeg($name);
		}
		if(preg_match("/.png/i", "$name")){
		$myImage = imagecreatefrompng($name);
		$myImage83 = imagecreatefrompng($name);
		
		}
		if(preg_match("/.gif/i", "$name")){
		$myImage = imagecreatefromgif($name);
		$myImage83 = imagecreatefromgif($name);
		}
		
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
		
		if(preg_match("/.jpg/i", "$name")){
		imagejpeg($thumb,"./asset/upload_img_coming/resize_".$filename);
		imagejpeg($thumb83,"./asset/upload_img_coming/resize83_".$filename);
		}
		if(preg_match("/.jpeg/i", "$name")){
		imagejpeg($thumb,"./asset/upload_img_coming/resize_".$filename);
		imagejpeg($thumb83,"./asset/upload_img_coming/resize83_".$filename);
		}
		if(preg_match("/.png/i", "$name")){
		imagepng($thumb,"./asset/upload_img_coming/resize_".$filename);
		imagepng($thumb83,"./asset/upload_img_coming/resize83_".$filename);
		}
		
		
		
		// crop thumb
		$imgThumb = './asset/upload_img_coming/resize_'.$filename;
		$imgThumb83 = './asset/upload_img_coming/resize83_'.$filename;
		
		if(preg_match("/.jpg/i", "$name")){
		$myThumb = imagecreatefromjpeg($imgThumb);
		$myThumb83 = imagecreatefromjpeg($imgThumb83);
		}
		if(preg_match("/.jpeg/i", "$name")){
		$myThumb = imagecreatefromjpeg($imgThumb);
		$myThumb83 = imagecreatefromjpeg($imgThumb83);
		}
		if(preg_match("/.png/i", "$name")){
		$myThumb = imagecreatefrompng($imgThumb);
		$myThumb83 = imagecreatefrompng($imgThumb83);
		}
		
		
		list($width, $height) = getimagesize($imgThumb);
		list($width83, $height83) = getimagesize($imgThumb83);
		$myThumbCrop =  imagecreatetruecolor(800, 550);
		$myThumbCrop83 =  imagecreatetruecolor(83,83);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		imagecopyresampled($myThumbCrop83,$myThumb83,0,0,0,0 ,$width83,$height83,$width83,$height83);
		
		if(preg_match("/.png/i", "$name")){
		imagesavealpha($myThumbCrop, true);
		imagesavealpha($myThumbCrop83, true);
		$color = imagecolorallocatealpha($myThumbCrop, 0, 0, 0, 127);
		$color83 = imagecolorallocatealpha($myThumbCrop83, 0, 0, 0, 127);
		imagefill($myThumbCrop, 0, 0, $color);
		imagefill($myThumbCrop83, 0, 0, $color83);
		}
		unlink('./asset/upload_img_coming/resize_'.$filename);
		unlink('./asset/upload_img_coming/resize83_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		$fileName83="thumb83_".$filename;
		
		if(preg_match("/.jpg/i", "$name")){
		imagejpeg( $myThumbCrop,"./asset/upload_img_coming/".$fileName );
		imagejpeg( $myThumbCrop83,"./asset/upload_img_coming/".$fileName83 );
		}
		if(preg_match("/.jpeg/i", "$name")){
		imagejpeg( $myThumbCrop,"./asset/upload_img_coming/".$fileName );
		imagejpeg( $myThumbCrop83,"./asset/upload_img_coming/".$fileName83 );
		}
		if(preg_match("/.png/i", "$name")){
		imagepng( $myThumbCrop,"./asset/upload_img_coming/".$fileName );
		imagepng( $myThumbCrop83,"./asset/upload_img_coming/".$fileName83 );
		}
		
		
	}
	
	
	
	
	//Publish
	public function top_event()
	{
		$id_coming = $_POST['idComing'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->top_event($id_coming);


		$this->index();
	}
	
	//Unpublish
	public function untop_event()
	{
		$id_coming = $_POST['idComing'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->untop_event($id_coming);


		$this->index();
	}
	
	function by_label(){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        $label=$_POST['label'];
        $value=$_POST['value'];
		$label=str_replace('%20',' ',$label);
		$value=str_replace('%20',' ',$value);
        //var_dump($search_term); exit();
		$data = array($label.' =' => $this->db->escape_like_str($value), 'status =' => 1 );
        $get_event=$this->db->where($data)->order_by('tgl_mulai','DESC')->get('coming');
			
        $this->load->helper('xml');
		$xml_out = '<events>';
        if ($get_event->num_rows()>0) {
            foreach ($get_event->result() as $row_event) {
				
	            $tanggal = date("j", strtotime($row_event->tgl_mulai));
	            $bulan = date("M", strtotime($row_event->tgl_mulai));
				$deskripsi=strip_tags($row_event->deskripsi_coming);
				$deskripsi=substr($deskripsi,0,400);
				
                $xml_out .= '<event ';
                $xml_out .= 'id_event="' . xml_convert($row_event->id_coming) . '" ';
                $xml_out .= 'nama_event="' . xml_convert($row_event->nama_coming) . '" ';
                $xml_out .= 'deskripsi_event="' . xml_convert(($deskripsi)) . '" ';
                $xml_out .= 'posted_by="' . xml_convert(($row_event->posted_by)) . '" ';
                $xml_out .= 'tanggal_posting="' . xml_convert(($row_event->tanggal_posting)) . '" ';
                $xml_out .= 'kategori_event="' . xml_convert(($row_event->kategori_coming)) . '" ';
                $xml_out .= 'tipe_event="' . xml_convert(($row_event->tipe_event)) . '" ';
                $xml_out .= 'jenis_event="' . xml_convert(($row_event->jenis_event)) . '" ';
                $xml_out .= 'tanggal="' . xml_convert(($tanggal)) . '" ';
                $xml_out .= 'bulan="' . xml_convert(($bulan)) . '" ';
                $xml_out .= 'path_gambar="' . xml_convert(($row_event->path_gambar)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</events>';
		
        echo $xml_out;
	}
	
	function cari_event(){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        $nama=$_POST['nama'];
        $lokasi=$_POST['lokasi'];
        $kategori=$_POST['kategori'];
        $tipe=$_POST['tipe'];
        $date=$_POST['date'];
        $harga=$_POST['harga'];
		
		$data = '';
		$data .= 'status = 1';
		$today = date('y-m-d');
		$date=str_replace('%20',' ',$date);
		
			if($date=='Today'){$data .= ' AND tgl_mulai = "'.$today.'"';}
			if($date=='Tomorrow'){$data .= ' AND tgl_mulai = curdate() + INTERVAL 1 DAY';}
			if($date=='This Week'){$data .= ' AND YEARWEEK(`tgl_mulai`)=YEARWEEK(NOW())';}
			if($date=='Next Week'){$data .= ' AND YEARWEEK(`tgl_mulai`)=(YEARWEEK(NOW()) + 1)';}
			if($date=='This Month'){$data .= ' AND MONTH(`tgl_mulai`)=(MONTH(NOW()))';}
		
		$nama=str_replace('%20',' ',$nama);
		if($nama!=''){$data .= ' AND nama_coming LIKE "%'.$this->db->escape_like_str($nama).'%"';}
		$lokasi=str_replace('%20',' ',$lokasi);
		if($lokasi!='All'){$data .= ' AND id_lokasi = "'.$lokasi.'"';}
		$kategori=str_replace('%20',' ',$kategori);
		if($kategori!='All'){$data .= ' AND kategori_coming = "'.$kategori.'"';}
		$tipe=str_replace('%20',' ',$tipe);
		if($tipe!='All'){$data .= ' AND tipe_event = "'.$tipe.'"';}
		
		$harga=str_replace('%20',' ',$harga);
		if($harga!='All'){$data .= ' AND jenis_event = "'.$harga.'"';}
        //var_dump($search_term); exit();
		
		//print_r($data);
        $get_event=$this->db->where($data)->order_by('tgl_mulai','DESC')->get('coming');
        //$get_event=$this->db->query('SELECT * FROM `coming` WHERE '.$data.' ORDER BY tgl_mulai DESC');
		$this->load->model('coming_models/ComingModels');
        $this->load->helper('xml');
		$xml_out = '<events>';
        if ($get_event->num_rows()>0) {
            foreach ($get_event->result() as $row_event) {
				$tanggal = date("j", strtotime($row_event->tgl_mulai));
	            $bulan = date("M", strtotime($row_event->tgl_mulai));
				$deskripsi=strip_tags($row_event->deskripsi_coming);
				$deskripsi=substr($deskripsi,0,400);
								
                $xml_out .= '<event ';
                $xml_out .= 'id_event="' . xml_convert($row_event->id_coming) . '" ';
                $xml_out .= 'nama_event="' . xml_convert($row_event->nama_coming) . '" ';
                $xml_out .= 'deskripsi_event="' . xml_convert(($deskripsi)) . '" ';
                $xml_out .= 'posted_by="' . xml_convert(($row_event->posted_by)) . '" ';
                $xml_out .= 'tanggal_posting="' . xml_convert(($row_event->tanggal_posting)) . '" ';
                $xml_out .= 'tgl_mulai="' . xml_convert(($row_event->tgl_mulai)) . '" ';
                $xml_out .= 'kategori_event="' . xml_convert(($row_event->kategori_coming)) . '" ';
                $xml_out .= 'tipe_event="' . xml_convert(($row_event->tipe_event)) . '" ';
                $xml_out .= 'jenis_event="' . xml_convert(($row_event->jenis_event)) . '" ';
				$xml_out .= 'tanggal="' . xml_convert(($tanggal)) . '" ';
                $xml_out .= 'bulan="' . xml_convert(($bulan)) . '" ';
                $xml_out .= 'id_lokasi="' . xml_convert(($row_event->id_lokasi)) . '" ';
                $xml_out .= 'path_gambar="' . xml_convert(($row_event->path_gambar)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</events>';
		
        echo $xml_out;
	}
	
	function get_data_event(){
		if(isset($_POST['id_event'])){
		$id_event = $_POST['id_event'];
		$query = $this->db->select('*')->where('id_coming',$id_event)->get('coming');
		echo json_encode($query->row_array());
		}
		
	}
	
	function update_event(){
		if(isset($_POST['id_event'])){
		$id_event = $_POST['id_event'];
			if(isset($_POST['dataEvent'])){
				$data_event = $_POST['dataEvent'];
				$this->db->where('id_coming',$id_event);
				$this->db->update('coming',$data_event);
				echo "data berhasil di update";
			}
		
		}
		
	}
	
	function tambah_testimoni($id_member){
		$deskripsi = htmlspecialchars($this->input->post('isi_testimoni'));
		preg_match_all('~:(.*?):~', $deskripsi, $deskripsi2);
		$jml = count($deskripsi2[0]);
		for($i=0;$i<$jml;$i++){
			$deskripsi = str_replace($deskripsi2[0][$i],htmlspecialchars('<span class="stiker" kode="'.$deskripsi2[1][$i].'"></span>'),$deskripsi);
		}
		$data_testimoni=array(
			'id_member'=>$id_member,
			'id_event'=>$this->input->post('id_event'),
			'isi_testimoni'=>$deskripsi,
			
		);
		if($this->db->insert('testimoni', $data_testimoni)){
			$this->session->set_flashdata('msg_berhasil', 'Testimoni baru berhasil ditambahkan');
			redirect('FrontControl_Event/event_click/'.$this->input->post('id_event'));
			
		}
			
	}
	
	
}
