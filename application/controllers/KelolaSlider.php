<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaSlider extends CI_Controller {

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
		$this->load->model('slider_models/SliderModels');
		$data['listSlider'] = $this->SliderModels->get_data_slider();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_slider', $data);
		$this->load->view('skin/admin/footer_admin');
		
	}

	//Delete Data
	public function delete_slider($id_slider)//$id_produk
	{
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->delete_slider($id_slider);


		$this->index();
	}
	
	//Publish
	public function publish_slider()//$id_produk
	{
		$id_slider = $_POST['idSlider'];
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->publish_slider($id_slider);


		$this->index();
	}
	
	//Unpublish
	public function unpublish_slider()//$id_produk
	{
		$id_slider = $_POST['idSlider'];
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->unpublish_slider($id_slider);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_slider($id_slider)//
	{
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->delete_slider($id_slider);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_slider($id_slider)
	{
		$this->load->model('slider_models/SliderModels');

		//Ambil id_agenda yang akan diedit
		$data['id_slider'] = $this->SliderModels->select_by_id_slider($id_slider)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_slider', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi slider
	public function validasi_slider()
	{
		$this->load->model('slider_models/SliderModels');
		$data['listSlider'] = $this->SliderModels->get_data_slider_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_slider', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui slider
	public function setuju_slider()
	{
		$id_slider = $_POST['id_slider'];
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->setuju_slider($id_slider);
		$sub_setuju = "Youth slider";
		$msg_setuju = "Posting yang anda masukan di Youth slider telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_slider();
	}
	
	//Setujui slider
	public function setuju_detail_slider($id_slider)
	{
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->setuju_slider($id_slider);
		$sub_setuju = "Youth slider";
		$msg_setuju = "Posting yang anda masukan di Youth slider Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_slider();
	}
	
	//Tolak Data
	public function tolak_slider()
	{
		$id_slider = $_POST['id_slider'];
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->delete_slider($id_slider);
		$sub_tolak = "Youth slider";
		$msg_tolak = "Posting yang anda masukan di Youth slider Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_slider();
	}
	
	//Tolak Data
	public function tolak_detail_slider($id_slider)
	{
		$this->load->model('slider_models/SliderModels');
		$this->SliderModels->delete_slider($id_slider);
		$sub_tolak = "Youth slider";
		$msg_tolak = "Posting yang anda masukan di Youth slider Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_slider();
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
	
	//tambah slider soon
	public function tambah_slider()
	{
		$this->load->model('slider_models/SliderModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_slider');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_slider_check() {
        $this->load->model('slider_models/SliderModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_slider', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_slider/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_slider=array(
						'judul_slider'=>$this->input->post('judul_slider'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL,
						'status'=>1
					);
					$data['dataSlider'] = $data_slider;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$data_slider['path_gambar'] = $gbr['file_name'];
					$this->db->insert('slider', $data_slider);
					$this->session->set_flashdata('msg_berhasil', $data_slider['path_gambar']);
					redirect('KelolaSlider');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth slider Soon gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_slider', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth slider Soon gagal ditambahkan');
				$this->tambah_slider_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_slider');
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}

	//Fungsi melakukan update pada database
	public function edit_slider($id_slider) 
	{
		$this->load->model('slider_models/SliderModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		if (isset($_POST['save']))
		{
			$id_slider = $this->input->post('id_slider');

			$this->form_validation->set_rules('judul_slider', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_slider/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_slider=array(
							'judul_slider'=>$this->input->post('judul_slider'),
							'deskripsi'=>$this->input->post('deskripsi'),
							'path_gambar'=>NULL
							);
			$data['dataSlider'] = $data_slider;

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
						$data_slider['path_gambar'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data konten slider gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('slider', $data_slider, array('id_slider'=>$id_slider));
					$this->session->set_flashdata('msg_berhasil', 'Data konten slider berhasil diperbaharui');
					redirect('Kelolaslider');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data konten slider gagal diperbaharui');
				//$this->edit_comming_soon();
			}
		}
		else
		{
			$data['slider'] = $this->SliderModels->select_by_id_slider($id_slider)->row();

			$data_slider=array(
							'judul_slider'=>$data['slider']->judul_slider,
							'deskripsi'=>$data['slider']->deskripsi,
							'path_gambar'=> $data['slider']->path_gambar
							);
			$data['dataSlider'] = $data_slider;


		}
		$data['idSlider'] = $id_slider;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_slider', $data);
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
		imagejpeg( $myImageCrop,"./asset/upload_img_slider/".$fileName );
	}
}
