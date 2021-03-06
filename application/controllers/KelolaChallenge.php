<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaChallenge extends CI_Controller {

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
		$this->load->model('challenge_models/ChallengeModels');
		$data['listChallenge'] = $this->ChallengeModels->get_data_challenge();
		$namaChallenge= $this->ChallengeModels->get_nama_challenge();
		$data['nama_challenge'] = $namaChallenge['nama_challenge'];
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_challenge', $data);
		$this->load->view('skin/admin/footer_admin');
		} else{
			redirect(site_url('Account'));
		}
	}

	//Delete Data
	public function delete_challenge($id_challenge)//$id_produk
	{
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->delete_challenge($id_challenge);


		$this->index();
	}
	
	//Publish
	public function publish_challenge()//$id_produk
	{
		$id_challenge = $_POST['idChallenge'];
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->publish_challenge($id_challenge);


		$this->index();
	}
	
	//Unpublish
	public function unpublish_challenge()//$id_produk
	{
		$id_challenge = $_POST['idChallenge'];
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->unpublish_challenge($id_challenge);


		$this->index();
	}
	
	//Publish
	public function ubah_nama_challenge()//$id_produk
	{
		$nama_challenge = $_POST['namaBaru'];
		$data = array(
			'nama_challenge' => $nama_challenge
		);

		$this->db->insert('nama_challenge', $data);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_challenge($id_challenge)//
	{
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->delete_challenge($id_challenge);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_challenge($id_challenge)
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('challenge_models/ChallengeModels');

		//Ambil id_agenda yang akan diedit
		$data['id_challenge'] = $this->ChallengeModels->select_by_id_challenge($id_challenge)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_challenge', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}

	//Validasi challenge
	public function validasi_challenge()
	{	
		$this->load->model('challenge_models/ChallengeModels');
		$data['listChallenge'] = $this->ChallengeModels->get_data_challenge_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_challenge', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui challenge
	public function setuju_challenge()
	{
		$id_challenge = $_POST['id_challenge'];
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->setuju_challenge($id_challenge);
		$sub_setuju = "Youth challenge";
		$msg_setuju = "Posting yang anda masukan di Youth challenge telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_challenge();
	}
	
	//Setujui challenge
	public function setuju_detail_challenge($id_challenge)
	{
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->setuju_challenge($id_challenge);
		$sub_setuju = "Youth challenge";
		$msg_setuju = "Posting yang anda masukan di Youth challenge Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_challenge();
	}
	
	//Tolak Data
	public function tolak_challenge()
	{
		$id_challenge = $_POST['id_challenge'];
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->delete_challenge($id_challenge);
		$sub_tolak = "Youth challenge";
		$msg_tolak = "Posting yang anda masukan di Youth challenge Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_challenge();
	}
	
	//Tolak Data
	public function tolak_detail_challenge($id_challenge)
	{
		$this->load->model('challenge_models/ChallengeModels');
		$this->ChallengeModels->delete_challenge($id_challenge);
		$sub_tolak = "Youth challenge";
		$msg_tolak = "Posting yang anda masukan di Youth challenge Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_challenge();
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
	
	//tambah challenge soon
	public function tambah_challenge()
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('challenge_models/ChallengeModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_challenge');
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function tambah_challenge_check() {
        if($this->session->userdata('admin_logged_in')){
		$this->load->model('challenge_models/ChallengeModels');
		$this->load->library('form_validation');
		$tambah = $this->input->post('submit');
		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_challenge', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_challenge/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_challenge=array(
						'judul_challenge'=>$this->input->post('judul_challenge'),
						'deskripsi'=>$this->input->post('deskripsi'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL,
						'status'=>1
					);
					$data['dataChallenge'] = $data_challenge;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();
					$this->crop($gbr['full_path'],$gbr['file_name']);
					$data_challenge['path_gambar'] = $gbr['file_name'];
					$this->db->insert('challenge', $data_challenge);
					$this->session->set_flashdata('msg_berhasil', $data_challenge['path_gambar']);
					redirect('KelolaChallenge');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth challenge Soon gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_challenge', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth challenge Soon gagal ditambahkan');
				$this->tambah_challenge_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_challenge');
			$this->load->view('skin/admin/footer_admin');
		}     
		} else {
			redirect(site_url('Account'));
		}
	}

	//Fungsi melakukan update pada database
	public function edit_challenge($id_challenge) 
	{	if($this->session->userdata('admin_logged_in')){
		$this->load->model('challenge_models/ChallengeModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');
		$data['idChallenge'] = $id_challenge;
		if (isset($_POST['save']))
		{
			$id_challenge = $this->input->post('id_challenge');

			$this->form_validation->set_rules('judul_challenge', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_challenge/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_challenge=array(
							'judul_challenge'=>$this->input->post('judul_challenge'),
							'deskripsi'=>$this->input->post('deskripsi')
							);
			$data['dataChallenge'] = $data_challenge;

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
						$data_challenge['path_gambar'] = $gbr['file_name'];

					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data konten challenge gagal diperbaharui');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('challenge', $data_challenge, array('id_challenge'=>$id_challenge));
					$this->session->set_flashdata('msg_berhasil', 'Data konten challenge berhasil diperbaharui');
					redirect('KelolaChallenge');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data konten challenge gagal diperbaharui');
				//$this->edit_comming_soon();
			}
		}
		else
		{
			$data['challenge'] = $this->ChallengeModels->select_by_id_challenge($id_challenge)->row();

			$data_challenge=array(
							'judul_challenge'=>$data['challenge']->judul_challenge,
							'deskripsi'=>$data['challenge']->deskripsi,
							'path_gambar'=> $data['challenge']->path_gambar
							);
			$data['dataChallenge'] = $data_challenge;


		}
		$data['idchallenge'] = $id_challenge;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_challenge', $data);
		$this->load->view('skin/admin/footer_admin');
		} else {
			redirect(site_url('Account'));
		}
	}
	
	function crop($img,$filename){
		
		$name = $img;
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
		} else {
			$percent = 550/$height;
			$newwidth = $width * $percent;
			$newheight = $height * $percent;
			if($newwidth<800){
				$percent2 = 800/$newwidth;
				$newwidth = $newwidth * $percent2;
				$newheight = $newheight * $percent2;
			}
		}
		
		
		// resize image
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresized($thumb, $myImage, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
		imagejpeg($thumb,"./asset/upload_img_challenge/resize_".$filename);
		
		// crop thumb
		$imgThumb = './asset/upload_img_challenge/resize_'.$filename;
		$myThumb = imagecreatefromjpeg($imgThumb);
		list($width, $height) = getimagesize($imgThumb);
		$myThumbCrop =  imagecreatetruecolor(800, 550);
		imagecopyresampled($myThumbCrop,$myThumb,0,0,0,0 ,$width,$height,$width,$height);
		unlink('./asset/upload_img_challenge/resize_'.$filename);
		 
		// Save the two images created
		$fileName="thumb_".$filename;
		imagejpeg( $myThumbCrop,"./asset/upload_img_challenge/".$fileName );
		
	}
	
	function cari_challenge($challenge) {
		$challenge=str_replace('%20',' ',$challenge);
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_challenge=$this->db->like('deskripsi',$this->db->escape_like_str($challenge))->get('challenge');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<challenges>';
        if ($get_challenge->num_rows()>0) {
            foreach ($get_challenge->result() as $row_challenge) {
                $xml_out .= '<challenge ';
                $xml_out .= 'id_challenge="' . xml_convert($row_challenge->id_challenge) . '" ';
                $xml_out .= 'judul_challenge="' . xml_convert($row_challenge->judul_challenge) . '" ';
                $xml_out .= 'deskripsi="' . xml_convert(($row_challenge->deskripsi)) . '" ';
                $xml_out .= 'status="' . xml_convert(($row_challenge->status)) . '" ';
                $xml_out .= 'path_gambar="' . xml_convert(($row_challenge->path_gambar)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</challenge>';
		
        echo $xml_out;
		
    }
}
