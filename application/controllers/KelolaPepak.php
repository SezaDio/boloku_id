<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaPepak extends CI_Controller {

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
		$this->load->model('pepak_models/PepakModels');
		$data['listPepak'] = $this->PepakModels->get_data_pepak();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_pepak', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data
	public function delete_pepak()//$id_produk
	{
		$id_pepak = $_POST['id_pepak'];
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->delete_pepak($id_pepak);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_pepak($id_pepak)//
	{
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->delete_pepak($id_pepak);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_pepak($id_pepak)
	{
		$this->load->model('pepak_models/PepakModels');

		//Ambil id_agenda yang akan diedit
		$data['id_pepak'] = $this->PepakModels->select_by_id_pepak($id_pepak)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_pepak', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi pepak
	public function validasi_pepak()
	{
		$this->load->model('pepak_models/PepakModels');
		$data['listPepak'] = $this->PepakModels->get_data_pepak_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_pepak', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui pepak
	public function setuju_pepak()
	{
		$id_pepak = $_POST['id_pepak'];
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->setuju_pepak($id_pepak);
		$sub_setuju = "Youth pepak";
		$msg_setuju = "Posting yang anda masukan di Youth pepak telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_pepak();
	}
	
	//Setujui pepak
	public function setuju_detail_pepak($id_pepak)
	{
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->setuju_pepak($id_pepak);
		$sub_setuju = "Youth pepak";
		$msg_setuju = "Posting yang anda masukan di Youth pepak Soon telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_pepak();
	}
	
	//Tolak Data
	public function tolak_pepak()
	{
		$id_pepak = $_POST['id_pepak'];
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->delete_pepak($id_pepak);
		$sub_tolak = "Youth pepak";
		$msg_tolak = "Posting yang anda masukan di Youth pepak Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_pepak();
	}
	
	//Tolak Data
	public function tolak_detail_pepak($id_pepak)
	{
		$this->load->model('pepak_models/PepakModels');
		$this->PepakModels->delete_pepak($id_pepak);
		$sub_tolak = "Youth pepak";
		$msg_tolak = "Posting yang anda masukan di Youth pepak Soon telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_pepak();
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
	
	//tambah pepak soon
	public function tambah_pepak()
	{
		$this->load->model('pepak_models/PepakModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_pepak');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_pepak_check() {
        $this->load->model('pepak_models/PepakModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('kata_jawa', 'Kata Jawa', 'required');
			$this->form_validation->set_rules('kata_indonesia', 'Kata Indonesia', 'required');
			$this->form_validation->set_rules('deskripsi_jawa', 'Deskripsi', 'required');

			/*if ($this->form_validation->run() == TRUE)
			{*/		$data_pepak=array(
						'jawa'=>$this->input->post('kata_jawa'),
						'indonesia'=>$this->input->post('kata_indonesia'),
						'deskripsi_jawa'=>$this->input->post('deskripsi_jawa'),
						'status'=>1
					);
					$data['datapepak'] = $data_pepak;
				if($this->db->insert('pepak', $data_pepak))
				{
					$this->session->set_flashdata('msg_berhasil', 'Data Youth pepak berhasil ditambahkan');
					redirect('KelolaPepak');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth pepak Soon gagal ditambahkan');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_pepak', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			/*}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth pepak gagal ditambahkan');
				$this->tambah_pepak_check();
			}*/
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_pepak');
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}
	
	function cari_kata($kata) {
		$kata=str_replace('%20',' ',$kata);
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/xml');
        
        //var_dump($search_term); exit();
        $get_kata=$this->db->like('jawa',$this->db->escape_like_str($kata))->get('pepak');
        
		
        
        
        $this->load->helper('xml');
		$xml_out = '<kosakata>';
        if ($get_kata->num_rows()>0) {
            foreach ($get_kata->result() as $row_kata) {
                $xml_out .= '<kata ';
                $xml_out .= 'id="' . xml_convert($row_kata->id_pepak) . '" ';
                $xml_out .= 'jawa="' . xml_convert($row_kata->jawa) . '" ';
                $xml_out .= 'indonesia="' . xml_convert(($row_kata->indonesia)) . '" ';
                $xml_out .= 'deskripsi_jawa="' . xml_convert(($row_kata->deskripsi_jawa)) . '" ';
                $xml_out .= '/>';
            }
        }
		
		$xml_out .= '</kata>';
		
        echo $xml_out;
		
    }
}
