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
	{
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_coming', $data);
		$this->load->view('skin/admin/footer_admin');
		
	}

	//Delete Data
	public function delete_coming()//$id_produk
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_produk($id_coming);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_coming($id_coming)//
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');

		//Ambil id_agenda yang akan diedit
		$data['id_coming'] = $this->ComingModels->select_by_id_coming($id_coming)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_coming', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi coming
	public function validasi_coming()
	{
		$this->load->model('coming_models/ComingModels');
		$data['listComing'] = $this->ComingModels->get_data_coming_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_coming', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui coming
	public function setuju_coming()
	{
		$id_coming = $_POST['id_coming'];
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth coming telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_coming();
	}
	
	//Setujui coming
	public function setuju_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->setuju_coming($id_coming);
		$sub_setuju = "Youth coming";
		$msg_setuju = "Posting yang anda masukan di Youth Coming Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
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
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_coming();
	}
	
	//Tolak Data
	public function tolak_detail_coming($id_coming)
	{
		$this->load->model('coming_models/ComingModels');
		$this->ComingModels->delete_coming($id_coming);
		$sub_tolak = "Youth coming";
		$msg_tolak = "Posting yang anda masukan di Youth Coming Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
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
	{
		$this->load->model('coming_models/ComingModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_coming');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_coming_check() {
        $this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_coming = array('Coming Soon Sains'=>'Coming Soon Sains',
                              'Coming Soon Teknologi'=>'Coming Soon Teknologi',
                              'Coming Soon Sejarah'=>'Coming Soon Sejarah',
                              'Coming Soon Politik'=>'Coming Soon Politik',
                              'Coming Soon Fiksi'=>'Coming Soon Fiksi',
                              'Coming Soon Rekomendasi'=>'Coming Soon Rekomendasi',
                              'Coming Soon Komunitas'=>'Coming Soon Komunitas',
                              'Coming Soon Lain-Lain'=>'Coming Soon Lain-Lain'
                              );
		$data['kategori_coming']= $kategori_coming;

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_coming', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_coming', 'Deskripsi', 'required');

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
						'kategori_coming'=>$this->input->post('kategori'),
						'deskripsi_coming'=>$this->input->post('deskripsi_coming'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL,
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
					$this->session->set_flashdata('msg_berhasil', 'Data Youth Coming Soon berhasil ditambahkan');
					redirect('KelolaComing');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth Coming Soon gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_coming', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth Coming Soon gagal ditambahkan');
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
		
	}

	//Fungsi melakukan update pada database
	public function edit_comming_soon($id_coming) 
	{
		$this->load->model('coming_models/ComingModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		$kategori_coming = array('Coming Soon Sains'=>'Coming Soon Sains',
                              'Coming Soon Teknologi'=>'Coming Soon Teknologi',
                              'Coming Soon Sejarah'=>'Coming Soon Sejarah',
                              'Coming Soon Politik'=>'Coming Soon Politik',
                              'Coming Soon Fiksi'=>'Coming Soon Fiksi',
                              'Coming Soon Rekomendasi'=>'Coming Soon Rekomendasi',
                              'Coming Soon Komunitas'=>'Coming Soon Komunitas',
                              'Coming Soon Lain-Lain'=>'Coming Soon Lain-Lain'
                              );
		$data['kategori_coming']= $kategori_coming;
		if (isset($_POST['save']))
		{
			$id_coming = $this->input->post('id_coming');

			$this->form_validation->set_rules('nama_coming', 'Judul', 'required');
			$this->form_validation->set_rules('kategori_coming', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_coming', 'Deskripsi', 'required');
			$this->form_validation->set_rules('posted_by', 'Posted', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_coming/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_coming=array(
							'nama_coming'=>$this->input->post('nama_coming'),
							'kategori_coming'=>$this->input->post('kategori_coming'),
							'deskripsi_coming'=>$this->input->post('deskripsi_coming'),
							'posted_by'=>$this->input->post('posted_by'),
							'path_gambar'=>NULL
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
						$this->session->set_flashdata('msg_gagal', 'Data Youth Comming Soon gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('coming', $data_coming, array('id_coming'=>$id_coming));
					$this->session->set_flashdata('msg_berhasil', 'Data Youth Comming Soon berhasil diperbaharui');
					redirect('KelolaComing');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth Comming Soon gagal diperbaharui');
				//$this->edit_comming_soon();
			}
		}
		else
		{
			$data['coming'] = $this->ComingModels->select_by_id_coming($id_coming)->row();

			$data_coming=array(
							'nama_coming'=>$data['coming']->nama_coming,
							'kategori_coming'=>$data['coming']->kategori_coming,
							'deskripsi_coming'=>$data['coming']->deskripsi_coming,
							'posted_by'=>$data['coming']->posted_by,
							'path_gambar'=> $data['coming']->path_gambar
							);
			$data['dataComing'] = $data_coming;


		}
		$data['idComing'] = $id_coming;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_comming', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	function crop($img,$filename){
		$name = $img;
		$myImage = imagecreatefromjpeg($name);
		list($width, $height) = getimagesize($name);
		//Create the zoom_out and cropped image
		$myImageCrop =  imagecreatetruecolor(900, 550);
		 
		// Fill the two images
		$b=imagecopyresampled($myImageCrop,$myImage,0,0,0,291 ,$width,$height,$width,$height);	
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		imagejpeg( $myImageCrop,"./asset/upload_img_coming/".$fileName );
	}
}
