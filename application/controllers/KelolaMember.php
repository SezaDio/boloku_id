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


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_member($id_member)
	{
		$this->load->model('member_models/MemberModels');

		//Ambil id_agenda yang akan diedit
		$data['id_member'] = $this->MemberModels->select_by_id_member($id_member)->row();

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

			/*if ($this->form_validation->run() == TRUE)
			{*/		$data_member=array(
						'username'=>$this->input->post('username'),
						'nama_member'=>$this->input->post('nama_member'),
						'password'=>md5($this->input->post('nama_member')),
						'email'=>$this->input->post('email'),
						'date_join'=>date("Y-m-d h:i:sa"),
						'poin'=>0,
						'path_foto'=>0,
						'status'=>1
					);
					$data['dataMember'] = $data_member;
				if($this->db->insert('member', $data_member))
				{
					$this->session->set_flashdata('msg_berhasil', 'Data member berhasil ditambahkan');
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
			$id_member = $this->input->post('id_member');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('nama_member', 'Nama_Member', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_member/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_member=array(
							'username'=>$this->input->post('username'),
							'nama_member'=>$this->input->post('nama_member'),
							'email'=>$this->input->post('email'),
							'path_foto'=>NULL
							);
			$data['dataMember'] = $data_member;

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
			$data['member'] = $this->MemberModels->select_by_id_member($id_member)->row();

			$data_member=array(
							'username'=>$data['member']->username,
							'nama_member'=>$data['member']->nama_member,
							'email'=>$data['member']->email,
							'path_foto'=> $data['member']->path_foto
							);
			$data['dataMember'] = $data_member;


		}
		$data['idMember'] = $id_member;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_member', $data);
		$this->load->view('skin/admin/footer_admin');
	}

}
