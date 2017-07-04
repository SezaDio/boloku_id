<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaNews extends CI_Controller {

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
		$this->load->model('news_models/NewsModels');
		$data['listNewsSm'] = $this->NewsModels->get_data_news_sm();
		$data['listNewsYouthers'] = $this->NewsModels->get_data_news_youthers();
		$data['listNewsRekomendasi'] = $this->NewsModels->get_data_news_rekomendasi();
		$data['listNewsKomunitas'] = $this->NewsModels->get_data_news_komunitas();
		$data['listNewsComming'] = $this->NewsModels->get_data_news_coming();
		$data['listNewsYouth'] = $this->NewsModels->get_data_news_youth();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_news',$data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Tambah berita baru
	public function tambah_news()
	{
		$this->load->model('news_models/NewsModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_news');
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Hapus berita
	public function delete_news()//$id_produk
	{
		$id_news = $_POST['id_news'];
		$this->load->model('news_models/NewsModels');
		$this->NewsModels->delete_news($id_news);

		$this->index();
	}
	
	//Prose tambah berita
	function tambah_news_check() 
	{
        $this->load->model('news_models/NewsModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$jenis_berita = $this->input->post('jenis_berita');

		$kategori_news = array('Sains'=>'Sains',
                              'Teknologi'=>'Teknologi',
                              'Sejarah'=>'Sejarah',
                              'Politik'=>'Politik',
                              'Fiksi'=>'Fiksi',
                              'Rekomendasi'=>'Rekomendasi',
                              'Komunitas'=>'Komunitas',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$data['kategori_news']= $kategori_news;

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_news', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_news', 'Deskripsi', 'required');


			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_news/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_news=array(
						'judul_news'=>$this->input->post('judul_news'),
						'posted_by'=>$this->input->post('posted_by'),
						'kategori_news'=>$this->input->post('kategori'),
						'isi_news'=>$this->input->post('deskripsi_news'),
						'status'=>$tambah,
						'jenis_news'=>$jenis_berita,
						//'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'gambar_news'=> NULL
					);
					$data['dataNews'] = $data_news;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$this->crop($gbr['full_path'],$gbr['file_name']);
					$data_news['gambar_news'] = $gbr['file_name'];

					$this->db->insert('news', $data_news);
					$this->session->set_flashdata('msg_berhasil', 'Data Youth News berhasil ditambahkan');
					redirect('KelolaNews');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth News gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_news', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth News gagal ditambahkan');
				$this->tambah_news_check();
			}
		}
		else
		{
			$data['jenis'] = $jenis_berita;

			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_news',$data);
			$this->load->view('skin/admin/footer_admin');
		}     	
	}

	//Fungsi melakukan update pada database
	public function edit_news($id_news) 
	{
		$this->load->model('news_models/NewsModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');
		$jenis_berita = $this->input->post('jenis_berita');

		$kategori_news = array('Sains'=>'Sains',
                              'Teknologi'=>'Teknologi',
                              'Sejarah'=>'Sejarah',
                              'Politik'=>'Politik',
                              'Fiksi'=>'Fiksi',
                              'Rekomendasi'=>'Rekomendasi',
                              'Komunitas'=>'Komunitas',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$data['kategori_news']= $kategori_news;
		if (isset($_POST['save']))
		{
			$id_news = $this->input->post('id_news');
			
			$this->form_validation->set_rules('judul_news', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_news', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_news/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_news=array(
						'judul_news'=>$this->input->post('judul_news'),
						'posted_by'=>$this->input->post('posted_by'),
						'kategori_news'=>$this->input->post('kategori'),
						'isi_news'=>$this->input->post('deskripsi_news'),
						'status'=>$edit,
						'jenis_news'=>$jenis_berita
						//'tanggal_posting'=>date("Y-m-d h:i:sa"),
						//'gambar_news'=> NULL
					);
					$data['dataNews'] = $data_news;
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

						$data_news['gambar_news'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Youth News gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('news', $data_news, array('id_news'=>$id_news));
					$this->session->set_flashdata('msg_berhasil', 'Data Youth News berhasil diperbaharui');
					redirect('KelolaNews');
					
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth News gagal diperbaharui');
				$this->tambah_wow_check();
			}
		}
		else
		{
			$data['news'] = $this->NewsModels->select_by_id_news($id_news)->row();

			$data_news=array(
						'judul_news'=>$data['news']->judul_news,
						'posted_by'=>$data['news']->posted_by,
						'kategori_news'=>$data['news']->kategori_news,
						'isi_news'=>$data['news']->isi_news,
						'status'=>$data['news']->status,
						'jenis_news'=>$jenis_berita,
						//'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'gambar_news'=> $data['news']->gambar_news,
					);
			$data['dataNews'] = $data_news;
		}
		$data['idNews'] = $id_news;
		$data['jenis'] = $jenis_berita;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_news', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi news
	public function validasi_news()
	{
		$this->load->model('news_models/NewsModels');
		$data['listNewsYouthers'] = $this->NewsModels->get_data_pendnews_youthers();
		$data['listNewsKomunitas'] = $this->NewsModels->get_data_pendnews_komunitas();
		$data['listNewsComming'] = $this->NewsModels->get_data_pendnews_coming();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_news', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui coming
	public function setuju_news()
	{
		$this->load->model('news_models/NewsModels');

		$id_news = $_POST['id_news'];
		$this->NewsModels->setuju_news($id_news);
		$sub_setuju = "Youth News";
		$msg_setuju = "Posting yang anda masukan di Youth News telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_news();
	}
	
	//Setujui coming
	public function setuju_detail_news($id_news)
	{
		$this->load->model('news_models/NewsModels');

		$this->NewsModels->setuju_news($id_news);
		$sub_setuju = "Youth News";
		$msg_setuju = "Posting yang anda masukan di Youth News telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_news();
	}
	
	//Tolak Data
	public function tolak_news()
	{
		$this->load->model('news_models/NewsModels');

		$id_news = $_POST['id_news'];
		$this->NewsModels->delete_news($id_news);
		$sub_tolak = "Youth News";
		$msg_tolak = "Posting yang anda masukan di Youth News telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_news();
	}
	
	//Tolak Data
	public function tolak_detail_news($id_news)
	{
		$this->load->model('news_models/NewsModels');

		$this->NewsModels->delete_news($id_news);
		$sub_tolak = "Youth News";
		$msg_tolak = "Posting yang anda masukan di Youth News telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_news();
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
	
	function crop($img,$filename){
		
		$name = $img;
		$myImage = imagecreatefromjpeg($name);
		list($width, $height) = getimagesize($name);
		//get percent to resize to 900x550
		if($width<=$height){
			$percent = 900/$width;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newheight<550){
				$percent2 = 550/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
		} else {
			$percent = 550/$height;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newwidth<900){
				$percent2 = 550/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresized($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagejpeg($thumb,"./asset/upload_img_news/resize_".$filename);
		
		// crop thumb
		$imgThumb = './asset/upload_img_news/resize_'.$filename;
		$myThumb = imagecreatefromjpeg($imgThumb);
		list($width, $height) = getimagesize($imgThumb);
		$myThumbCrop =  imagecreatetruecolor(900, 550);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		unlink('./asset/upload_img_news/resize_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		imagejpeg( $myThumbCrop,"./asset/upload_img_news/".$fileName );
		
	}
}
