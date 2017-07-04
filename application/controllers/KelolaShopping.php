<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaShopping extends CI_Controller {

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
		$this->load->model('shopping_models/ShoppingModels');
		$data['listProduk'] = $this->ShoppingModels->get_data_produk();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Delete Data
	public function delete_produk()//$id_produk
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);


		$this->index();
	}

	//Delete Data detail produk
	public function delete_detail_produk($id_produk)//
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);


		$this->index();
	}
	
	//Lihat detail produk
	public function lihat_detail_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');

		//Ambil id_agenda yang akan diedit
		$data['id_produk'] = $this->ShoppingModels->select_by_id_shopping($id_produk)->row();

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/detail_produk_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Fungsi melakukan update pada database
	public function edit_shopping($id_shopping) 
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		$kategori_shopping = array('Fashion'=>'Fashion',
                              'Elektronik'=>'Elektronik',
                              'Lain-Lain'=>'Lain-Lain'
                              );
		$data['kategori_shopping']= $kategori_shopping;
		if (isset($_POST['save']))
		{
			$id_shopping = $this->input->post('id_shopping');
	
			$this->form_validation->set_rules('nama_produk', 'Nama', 'required');
			$this->form_validation->set_rules('jenis_produk', 'Jenis', 'required');
			$this->form_validation->set_rules('harga_produk', 'Harga', 'required');
			$this->form_validation->set_rules('posted_by', 'Penjual', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone', 'required');
			$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_shopping/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_shopping=array(
							'nama_produk'=>$this->input->post('nama_produk'),
							'jenis_produk'=>$this->input->post('jenis_produk'),
							'harga_produk'=>$this->input->post('harga_produk'),
							'posted_by'=>$this->input->post('posted_by'),
							'phone_number'=>$this->input->post('phone_number'),
							'deskripsi_produk'=>$this->input->post('deskripsi_produk'),
							'path_gambar'=>NULL,
							'tanggal_posting'=>date("Y-m-d h:i:sa")
							);
			$data['dataShopping'] = $data_shopping;
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

						$data_shopping['path_gambar'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Produk gagal diedit');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('shopping', $data_shopping, array('id_produk'=>$id_shopping));
					$this->session->set_flashdata('msg_berhasil', 'Data Produk berhasil diedit');
					redirect('KelolaShopping');
					
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Produk gagal diedit');
				//$this->tambah_wow_check();
			}
		}
		else
		{
			$data['shopping'] = $this->ShoppingModels->select_by_id_shopping($id_shopping)->row();

			$data_shopping=array(
							'nama_produk'=>$data['shopping']->nama_produk,
							'jenis_produk'=>$data['shopping']->jenis_produk,
							'harga_produk'=>$data['shopping']->harga_produk,
							'posted_by'=>$data['shopping']->posted_by,
							'phone_number'=>$data['shopping']->phone_number,
							'deskripsi_produk'=>$data['shopping']->deskripsi_produk,
							'path_gambar'=>$data['shopping']->path_gambar,
							'tanggal_posting'=>date("Y-m-d h:i:sa")
							);
			$data['dataShopping'] = $data_shopping;


		}
		$data['idShopping'] = $id_shopping;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	//Validasi Shopping
	public function validasi_shopping()
	{
		$this->load->model('shopping_models/ShoppingModels');
		$data['listProduk'] = $this->ShoppingModels->get_data_produk_pend();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/validasi_shopping', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	//Setujui Shopping
	public function setuju_produk()
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->setuju_produk($id_produk);
		$sub_setuju = "Youth Shopping";
		$msg_setuju = "Posting yang anda masukan di Youth Shopping telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_shopping();
	}
	
	//Setujui Shopping
	public function setuju_detail_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->setuju_produk($id_produk);
		$sub_setuju = "Youth Shopping";
		$msg_setuju = "Posting yang anda masukan di Youth Shopping telah disetujui";
		$this->kirim_email($sub_setuju,$msg_setuju);
		$this->validasi_shopping();
	}
	
	//Tolak Data
	public function tolak_produk()
	{
		$id_produk = $_POST['id_produk'];
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);
		$sub_tolak = "Youth Shopping";
		$msg_tolak = "Posting yang anda masukan di Youth Shopping telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_shopping();
	}
	
	//Tolak Data
	public function tolak_detail_produk($id_produk)
	{
		$this->load->model('shopping_models/ShoppingModels');
		$this->ShoppingModels->delete_produk($id_produk);
		$sub_tolak = "Youth Shopping";
		$msg_tolak = "Posting yang anda masukan di Youth Shopping telah ditolak";
		$this->kirim_email($sub_tolak,$msg_tolak);
		$this->validasi_shopping();
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
}
