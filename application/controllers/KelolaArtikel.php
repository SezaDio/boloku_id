<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaArtikel extends CI_Controller {

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
		$this->load->model('artikel_models/ArtikelModels');
		$data['listArtikel'] = $this->ArtikelModels->get_data_artikel();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_artikel', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	function tambah_artikel_check() {
		if($this->session->userdata('admin_logged_in')){
        $this->load->model('artikel_models/ArtikelModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_wow = array('Seni'=>'Seni',
                              'Travel dan Outdoor'=>'Travel dan Outdoor',
                              'Bisnis'=>'Bisnis',
                              'Science dan Teknologi'=>'Science dan Teknologi',
                              'Sprirituality'=>'Sprirituality',
                              'Musik'=>'Musik',
                              'Keluarga dan Pendidikan'=>'Keluarga dan Pendidikan',
                              'Hobi'=>'Hobi',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$data['kategori_wow']= $kategori_wow;

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_artikel', 'Judul', 'required');
			$this->form_validation->set_rules('penulis_artikel', 'Penulis', 'required');
			$this->form_validation->set_rules('isi_artikel', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_artikel/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_artikel=array(
						'judul_artikel'=>$this->input->post('judul_artikel'),
						'penulis_artikel'=>$this->input->post('penulis_artikel'),
						'isi_artikel'=>$this->input->post('isi_artikel'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL
					);
					$data['dataArtikel'] = $data_artikel;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$this->crop($gbr['full_path'],$gbr['file_name']);
					$data_artikel['path_gambar'] = $gbr['file_name'];

					$this->db->insert('artikel', $data_artikel);
					$this->session->set_flashdata('msg_berhasil', 'Data Artikel baru berhasil ditambahkan');
					redirect('KelolaArtikel');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Artikel baru gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_artikel', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Artikel baru gagal ditambahkan');
				$this->tambah_artikel_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_artikel',$data);
			$this->load->view('skin/admin/footer_admin');
		}     
		} else {
			redirect(site_url('Account'));
		}
		
	}

	//Fungsi melakukan update pada database
	public function edit_artikel($id_artikel) 
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('artikel_models/ArtikelModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		if (isset($_POST['save']))
		{
			$id_artikel = $this->input->post('id_artikel');

			$this->form_validation->set_rules('judul_artikel', 'Judul', 'required');
			$this->form_validation->set_rules('penulis_artikel', 'Penulis', 'required');
			$this->form_validation->set_rules('isi_artikel', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_artikel/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_artikel=array(
							'judul_artikel'=>$this->input->post('judul_artikel'),
							'penulis_artikel'=>$this->input->post('penulis_artikel'),
							'isi_artikel'=>$this->input->post('isi_artikel'),
							);
			$data['dataArtikel'] = $data_artikel;

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
						$data_artikel['path_gambar'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Artikel gagal diedit');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('artikel', $data_artikel, array('id_artikel'=>$id_artikel));
					$this->session->set_flashdata('msg_berhasil', 'Data Artikel berhasil diedit');
					redirect('KelolaArtikel');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Artikel gagal diedit');
				$this->tambah_artikel_check();
			}
		}
		else
		{
			$data['artikel'] = $this->ArtikelModels->select_by_id_artikel($id_artikel)->row();

			$data_artikel=array(
							'judul_artikel'=>$data['artikel']->judul_artikel,
							'penulis_artikel'=>$data['artikel']->penulis_artikel,
							'isi_artikel'=>$data['artikel']->isi_artikel,
							'tanggal_posting'=>$data['artikel']->tanggal_posting,
							'path_gambar'=> $data['artikel']->path_gambar
							);
			$data['dataArtikel'] = $data_artikel;
		}
		$data['idArtikel'] = $id_artikel;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_artikel', $data);
		$this->load->view('skin/admin/footer_admin');
		} else{
			redirect(site_url('Account'));
		}
	}

	//Fungsi untuk delete ajax artikel
	public function delete_artikel()//$id_produk
	{
		$id_artikel = $_POST['id_artikel'];
		$this->load->model('artikel_models/ArtikelModels');
		$this->ArtikelModels->delete_artikel($id_artikel);

		$this->index();
	}

	//Fungsi Baca artikel di halaman front end
	public function halaman_baca_artikel($id_artikel)
	{
	  $this->load->model('news_models/newsModels');
	  $this->load->model('artikel_models/ArtikelModels');
	  $this->load->model('home_models/HomeModels');
	  
	  $data['listnews'] = $this->newsModels->get_data_news();
	  $artikel = $this->ArtikelModels->select_by_id_artikel($id_artikel)->row_array();
	  
	  $hits = $artikel['hits'] + 1;
	  $tanggal = $artikel['tanggal_posting'];
	  $data_hits = array(
	  					'hits' => $hits,
	  					'tanggal_posting' => $tanggal
	  					);
	  $where = array('id_artikel' => $id_artikel);
	  $this->db->update('artikel', $data_hits, $where);
	  
	  $data['id_artikel'] = $artikel['id_artikel'];
	  $data['judul_artikel'] = $artikel['judul_artikel'];
	  $data['penulis_artikel'] = $artikel['penulis_artikel'];
	  $data['isi_artikel'] = $artikel['isi_artikel'];
	  $data['path_gambar'] = $artikel['path_gambar'];
	  $data['tanggal_posting'] = $artikel['tanggal_posting'];
	  $data['hits'] = $artikel['hits'];

	  $data['listArtikel'] = $this->ArtikelModels->get_data_artikel();
	  $data['jumlahKomentar'] = $this->HomeModels->jumlah_Komentar($id_artikel);
	  $data['listKomentar'] = $this->HomeModels->get_komentar($id_artikel);
	  $data['listnews'] = $this->newsModels->get_data_news();
	  
      $this->load->view('skin/front_end/header_front_end');
      $this->load->view('content_front_end/artikel_read_page',$data);
      $this->load->view('skin/front_end/footer_front_end');
	}
	
	function crop($img,$filename){
		
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
			
			$percent85 = 85/$width;
			$newwidth85 = $width * $percent85;
			$newheight85 = $height * $percent85;
			if($newheight85<85){
				$percent85b = 85/$newheight85;
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
			
			$percent85 = 85/$height;
			$newwidth85 = $width * $percent85;
			$newheight85 = $height * $percent85;
			if($newwidth85<85){
				$percent85b = 85/$newwidth85;
				$newwidth85 = $newwidth85 * $percent85b;
				$newheight85 = $newheight85 * $percent85b;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$thumb85 = imagecreatetruecolor($newwidth85, $newheight85);
		imagecopyresized($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagecopyresized($thumb85, $myImage85, 0, 0, 0, 0, $newwidth85, $newheight85, $width, $height);
		imagejpeg($thumb,"./asset/upload_img_artikel/resize_".$filename);
		imagejpeg($thumb85,"./asset/upload_img_artikel/resize85_".$filename);
		
		// crop thumb
		$imgThumb = './asset/upload_img_artikel/resize_'.$filename;
		$imgThumb85 = './asset/upload_img_artikel/resize85_'.$filename;
		$myThumb = imagecreatefromjpeg($imgThumb);
		$myThumb85 = imagecreatefromjpeg($imgThumb85);
		list($width, $height) = getimagesize($imgThumb);
		list($width85, $height85) = getimagesize($imgThumb85);
		$myThumbCrop =  imagecreatetruecolor(800,550);
		$myThumbCrop85 =  imagecreatetruecolor(85, 85);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		imagecopyresampled($myThumbCrop85,$myThumb85,0,0,0,0 ,$width85,$height85,$width85,$height85);
		unlink('./asset/upload_img_artikel/resize_'.$filename);
		unlink('./asset/upload_img_artikel/resize85_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		$fileName85="thumb85_".$filename;
		imagejpeg( $myThumbCrop,"./asset/upload_img_artikel/".$fileName );
		imagejpeg( $myThumbCrop85,"./asset/upload_img_artikel/".$fileName85 );
		
	}
	
	function tambah_komentar($id_member){
		$data_komentar=array(
			'id_member'=>$id_member,
			'id_artikel'=>$this->input->post('id_artikel'),
			'isi_komentar'=>$this->input->post('isi_komentar'),
			
		);
		$this->db->insert('komentar', $data_komentar);
		$this->session->set_flashdata('msg_berhasil', 'Komentar baru berhasil ditambahkan');
		redirect('KelolaArtikel/halaman_baca_artikel/'.$this->input->post('id_artikel'));	
	}
	
	function tambah_komentar_liputan($id_member){
		$data_komentar=array(
			'id_member'=>$id_member,
			'id_artikel'=>$this->input->post('id_news'),
			'isi_komentar'=>$this->input->post('isi_komentar'),
			
		);
		$this->db->insert('komentar', $data_komentar);
		$this->session->set_flashdata('msg_berhasil', 'Komentar baru berhasil ditambahkan');
		redirect('KelolaNews/halaman_baca_artikel_pra_event/'.$this->input->post('id_news'));	
	}

	function kelola_komentar($id_artikel)
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('artikel_models/ArtikelModels');
		$data['listKomentar'] = $this->ArtikelModels->get_komentar($id_artikel);

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_komentar_artikel', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	//delete komentar artikel
	public function delete_komentar()
	{
		$id_komentar = $_POST['id_komentar'];
		$this->load->model('artikel_models/ArtikelModels');
		$this->ArtikelModels->delete_komentar($id_komentar);
	}
}