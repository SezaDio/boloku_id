<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaStiker extends CI_Controller {

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
		$this->load->model('stiker_models/stikerModels');
		$data['listStiker'] = $this->stikerModels->get_data_stiker();
	
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_stiker', $data);
		$this->load->view('skin/admin/footer_admin');
		} else{
			redirect(site_url('Account'));
		}
	}

	//Delete Data
	public function delete_stiker($id_stiker)//$id_produk
	{
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->delete_stiker($id_stiker);


		$this->index();
	}
	
	//Publish
	public function publish_stiker()//$id_produk
	{
		$id_stiker = $_POST['idStiker'];
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->publish_stiker($id_stiker);


		$this->index();
	}
	
	//Unpublish
	public function unpublish_stiker()//$id_produk
	{
		$id_stiker = $_POST['idStiker'];
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->unpublish_stiker($id_stiker);


		$this->index();
	}
	
	//Publish
	public function ubah_nama_stiker()//$id_produk
	{
		$nama_stiker = $_POST['namaBaru'];
		$data = array(
			'nama_stiker' => $nama_stiker
		);

		$this->db->insert('nama_stiker', $data);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_stiker($id_stiker)//
	{
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->delete_stiker($id_stiker);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_stiker($id_stiker)
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('stiker_models/stikerModels');

		//Ambil id_agenda yang akan diedit
		$data['id_stiker'] = $this->stikerModels->select_by_id_stiker($id_stiker)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_stiker', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	//Validasi stiker
	public function validasi_stiker()
	{
		
		$this->load->model('stiker_models/stikerModels');
		$data['listStiker'] = $this->stikerModels->get_data_stiker_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_stiker', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui stiker
	public function setuju_stiker()
	{
		$id_stiker = $_POST['id_stiker'];
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->setuju_stiker($id_stiker);
		$sub_setuju = "Youth stiker";
		$msg_setuju = "Posting yang anda masukan di Youth stiker telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_stiker();
	}
	
	//Setujui stiker
	public function setuju_detail_stiker($id_stiker)
	{
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->setuju_stiker($id_stiker);
		$sub_setuju = "Youth stiker";
		$msg_setuju = "Posting yang anda masukan di Youth stiker Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_stiker();
	}
	
	//Tolak Data
	public function tolak_stiker()
	{
		$id_stiker = $_POST['id_stiker'];
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->delete_stiker($id_stiker);
		$sub_tolak = "Youth stiker";
		$msg_tolak = "Posting yang anda masukan di Youth stiker Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_stiker();
	}
	
	//Tolak Data
	public function tolak_detail_stiker($id_stiker)
	{
		$this->load->model('stiker_models/stikerModels');
		$this->stikerModels->delete_stiker($id_stiker);
		$sub_tolak = "Youth stiker";
		$msg_tolak = "Posting yang anda masukan di Youth stiker Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_stiker();
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
	
	//tambah stiker soon
	public function tambah_stiker()
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('stiker_models/stikerModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_stiker');
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function tambah_stiker_check() {
		if($this->session->userdata('admin_logged_in')){
        $this->load->model('stiker_models/stikerModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('nama_stiker', 'nama', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = $this->input->post('nama_stiker');
			$config['upload_path'] = './asset/upload_img_stiker/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_stiker=array(
						'nama_stiker'=>$this->input->post('nama_stiker'),
						'kode_stiker'=>$this->input->post('kode_stiker'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL,
						'status'=>1
					);
					$data['dataStiker'] = $data_stiker;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$this->resize($gbr['full_path'],$gbr['file_name']);
					$data_stiker['path_gambar'] = $gbr['file_name'];
					$this->db->insert('stiker', $data_stiker);
					$this->session->set_flashdata('msg_berhasil', $data_stiker['path_gambar']);
					redirect('Kelolastiker');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth stiker Soon gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_stiker', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth stiker Soon gagal ditambahkan');
				$this->tambah_stiker_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_stiker');
			$this->load->view('skin/admin/footer_admin');
		}     
		} else {
			redirect(site_url('Account'));
		}
	}

	//Fungsi melakukan update pada database
	public function edit_stiker($id_stiker) 
	{
		if($this->session->userdata('admin_logged_in')){
		$this->load->model('stiker_models/stikerModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');
		$data['idStiker'] = $id_stiker;
		if (isset($_POST['save']))
		{
			$id_stiker = $this->input->post('id_stiker');

			$this->form_validation->set_rules('nama_stiker', 'nama', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = $this->input->post('nama_stiker');
			$config['upload_path'] = './asset/upload_img_stiker/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_stiker=array(
							'nama_stiker'=>$this->input->post('nama_stiker'),
							'kode_stiker'=>$this->input->post('kode_stiker'),
							'deskripsi'=>$this->input->post('deskripsi'),
							'path_gambar'=>NULL
							);
			$data['dataStiker'] = $data_stiker;

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
						$this->resize($gbr['full_path'],$gbr['file_name']);
						$data_stiker['path_gambar'] = $gbr['file_name'];

					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data konten stiker gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('stiker', $data_stiker, array('id_stiker'=>$id_stiker));
					$this->session->set_flashdata('msg_berhasil', 'Data konten stiker berhasil diperbaharui');
					redirect('Kelolastiker');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data konten stiker gagal diperbaharui');
				//$this->edit_comming_soon();
			}
		}
		else
		{
			$data['stiker'] = $this->stikerModels->select_by_id_stiker($id_stiker)->row();

			$data_stiker=array(
							'nama_stiker'=>$data['stiker']->nama_stiker,
							'kode_stiker'=>$data['stiker']->kode_stiker,
							'deskripsi'=>$data['stiker']->deskripsi,
							'path_gambar'=> $data['stiker']->path_gambar
							);
			$data['dataStiker'] = $data_stiker;


		}
		$data['idStiker'] = $id_stiker;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_stiker', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function resize($img,$filename){
		
		$name = $img;
		if(preg_match("/.jpg/i", "$name")){
		$myImage = imagecreatefromjpeg($name);
		$myImage40 = imagecreatefromjpeg($name);
		}
		if(preg_match("/.jpeg/i", "$name")){
		$myImage = imagecreatefromjpeg($name);
		$myImage40 = imagecreatefromjpeg($name);
		}
		if(preg_match("/.jpeg/i", "$name")){
		$myImage = Imagecreatefromjpeg($name);
		$myImage40 = Imagecreatefromjpeg($name);
		}
		if(preg_match("/.png/i", "$name")){
		$myImage = imagecreatefrompng($name);
		$myImage40 = imagecreatefrompng($name);
		
		}
		if(preg_match("/.gif/i", "$name")){
		$myImage = imagecreatefromgif($name);
		$myImage40 = imagecreatefromgif($name);
		}
		
		list($width, $height) = getimagesize($name);
		//get percent to resize to 900x100
		if($width<=$height){
			$percent = 100/$width;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newheight<100){
				$percent2 = 100/$newheight;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent40 = 40/$width;
			$newwidth40 = $width * $percent40;
			$newheight40 = $height * $percent40;
			if($newheight40<40){
				$percent40b = 40/$newheight40;
				$newwidth40 = $newwidth40 * $percent40b;
				$newheight40 = $newheight40 * $percent40b;
			}
			
		} else {
			$percent = 100/$height;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newwidth<100){
				$percent2 = 100/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
			
			$percent40 = 40/$height;
			$newwidth40 = $width * $percent40;
			$newheight40 = $height * $percent40;
			if($newwidth40<40){
				$percent40b = 40/$newwidth40;
				$newwidth40 = $newwidth40 * $percent40b;
				$newheight40 = $newheight40 * $percent40b;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$thumb40 = imagecreatetruecolor($newwidth40, $newheight40);
		imagecopyresampled($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagecopyresampled($thumb40, $myImage40, 0, 0, 0, 0, $newwidth40, $newheight40, $width, $height);
		
		if(preg_match("/.jpg/i", "$name")){
		imagejpeg($thumb,"./asset/upload_img_stiker/".$filename);
		imagejpeg($thumb40,"./asset/upload_img_stiker/kecil_".$filename);
		}
		if(preg_match("/.jpeg/i", "$name")){
		imagejpeg($thumb,"./asset/upload_img_stiker/".$filename);
		imagejpeg($thumb40,"./asset/upload_img_stiker/kecil_".$filename);
		}
		if(preg_match("/.png/i", "$name")){
		imagesavealpha($thumb, true);
		imagesavealpha($thumb40, true);
		$color = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
		$color40 = imagecolorallocatealpha($thumb40, 0, 0, 0, 127);
		imagefill($thumb, 0, 0, $color);
		imagefill($thumb40, 0, 0, $color40);
		imagepng($thumb,"./asset/upload_img_stiker/".$filename,0);
		imagepng($thumb40,"./asset/upload_img_stiker/kecil_".$filename,0);
		}
		
		
		
	}
	
	function cari_stiker($stiker) {
		$stiker=str_replace('%20',' ',$stiker);
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_stiker=$this->db->like('deskripsi',$this->db->escape_like_str($stiker))->get('stiker');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<stikers>';
        if ($get_stiker->num_rows()>0) {
            foreach ($get_stiker->result() as $row_stiker) {
                $xml_out .= '<stiker ';
                $xml_out .= 'id_stiker="' . xml_convert($row_stiker->id_stiker) . '" ';
                $xml_out .= 'nama_stiker="' . xml_convert($row_stiker->nama_stiker) . '" ';
                $xml_out .= 'kode_stiker="' . xml_convert($row_stiker->kode_stiker) . '" ';
                $xml_out .= 'deskripsi="' . xml_convert(($row_stiker->deskripsi)) . '" ';
                $xml_out .= 'status="' . xml_convert(($row_stiker->status)) . '" ';
                $xml_out .= 'path_gambar="' . xml_convert(($row_stiker->path_gambar)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</stiker>';
		
        echo $xml_out;
		
    }
}
