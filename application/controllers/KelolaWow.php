<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaWow extends CI_Controller {

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
		$this->load->model('wow_models/WowModels');
		$data['listWow'] = $this->WowModels->get_data_wow();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_wow', $data);
		$this->load->view('skin/admin/footer_admin');
	}
	
	public function tambah_wow()
	{
		$this->load->model('wow_models/WowModels');

		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/tambah_wow');
		$this->load->view('skin/admin/footer_admin');
	}
	
	function tambah_wow_check() {
        $this->load->model('wow_models/WowModels');
		$this->load->library('form_validation');

		$tambah = $this->input->post('submit');
		$kategori_wow = array('Wow Sains'=>'Wow Sains',
                              'Wow Teknologi'=>'Wow Teknologi',
                              'Wow Sejarah'=>'Wow Sejarah',
                              'Wow Politik'=>'Wow Politik',
                              'Wow Fiksi'=>'Wow Fiksi',
                              'Wow Rekomendasi'=>'Wow Rekomendasi',
                              'Wow Komunitas'=>'Wow Komunitas',
                              'Wow Lain-Lain'=>'Wow Lain-Lain'
                              );
		$data['kategori_wow']= $kategori_wow;

		if ($tambah == 1) 
		{
			$this->form_validation->set_rules('judul_wow', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_wow', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_wow/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			//value id_koridor berisi beberapa data, sehingga dilakukan split dengan explode
			if (($this->form_validation->run() == TRUE) AND (!empty($_FILES['filefoto']['name'])))
			{
				$gbr = NULL;

					$data_wow=array(
						'judul_wow'=>$this->input->post('judul_wow'),
						'kategori_wow'=>$this->input->post('kategori'),
						'deskripsi'=>$this->input->post('deskripsi_wow'),
						'tanggal_posting'=>date("Y-m-d h:i:sa"),
						'path_gambar'=> NULL
					);
					$data['dataWow'] = $data_wow;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('filefoto'))
				{
					//echo "Masuk";
					$gbr = $this->upload->data();

					$data_wow['path_gambar'] = $gbr['file_name'];

					$this->db->insert('wow', $data_wow);
					$this->session->set_flashdata('msg_berhasil', 'Data Youth Wow berhasil ditambahkan');
					redirect('KelolaWow');
				}
				else
				{
					$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal ditambahkan, cek type file dan ukuran file yang anda upload');
					
					$this->load->view('skin/admin/header_admin');
					$this->load->view('skin/admin/nav_kiri');
					$this->load->view('content_admin/tambah_wow', $data);
					$this->load->view('skin/admin/footer_admin');
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal ditambahkan');
				$this->tambah_wow_check();
			}
		}
		else
		{
			$this->load->view('skin/admin/header_admin');
			$this->load->view('skin/admin/nav_kiri');
			$this->load->view('content_admin/tambah_wow',$data);
			$this->load->view('skin/admin/footer_admin');
		}     
		
	}
	
	//Fungsi melakukan update pada database
	public function edit_wow($id_wow) 
	{
		$this->load->model('wow_models/WowModels');
		$this->load->library('form_validation');

		$edit = $this->input->post('save');

		$kategori_wow = array('Wow Sains'=>'Wow Sains',
                              'Wow Teknologi'=>'Wow Teknologi',
                              'Wow Sejarah'=>'Wow Sejarah',
                              'Wow Politik'=>'Wow Politik',
                              'Wow Fiksi'=>'Wow Fiksi',
                              'Wow Rekomendasi'=>'Wow Rekomendasi',
                              'Wow Komunitas'=>'Wow Komunitas',
                              'Wow Lain-Lain'=>'Wow Lain-Lain'
                              );
		$data['kategori_wow']= $kategori_wow;
		if (isset($_POST['save']))
		{
			$id_wow = $this->input->post('id_wow');


			
			$this->form_validation->set_rules('judul_wow', 'Judul', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('deskripsi_wow', 'Deskripsi', 'required');

			//Mengambil filename gambar untuk disimpan
			$nmfile = "file_".time();
			$config['upload_path'] = './asset/upload_img_wow/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '4000'; //kb
			$config['file_name'] = $nmfile;

			$data_wow=array(
							'judul_wow'=>$this->input->post('judul_wow'),
							'kategori_wow'=>$this->input->post('kategori'),
							'deskripsi'=>$this->input->post('deskripsi_wow'),
							'tanggal_posting'=>date("Y-m-d h:i:sa")
							
							);
			$data['dataWow'] = $data_wow;
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

						$data_wow['path_gambar'] = $gbr['file_name'];

						
					}
					else
					{
						$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal diedit');
						$iserror = true;
					}

				}
				if (!$iserror) {
					$this->db->update('wow', $data_wow, array('id_wow'=>$id_wow));
					$this->session->set_flashdata('msg_berhasil', 'Data Youth Wow berhasil diedit');
					redirect('KelolaWow');
					
				}
			}
			else
			{
				$this->session->set_flashdata('msg_gagal', 'Data Youth Wow gagal diedit');
				$this->tambah_wow_check();
			}
		}
		else
		{
			$data['wow'] = $this->WowModels->select_by_id_wow($id_wow)->row();

			$data_wow=array(
							'judul_wow'=>$data['wow']->judul_wow,
							'kategori_wow'=>$data['wow']->kategori_wow,
							'deskripsi'=>$data['wow']->deskripsi,
							'tanggal_posting'=>$data['wow']->tanggal_posting,
							'path_gambar'=> $data['wow']->path_gambar
							);
			$data['dataWow'] = $data_wow;


		}
		$data['idWow'] = $id_wow;
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/edit_wow', $data);
		$this->load->view('skin/admin/footer_admin');
	}


	public function delete_wow()//$id_produk
	{
		$id_wow = $_POST['id_wow'];
		$this->load->model('wow_models/WowModels');
		$this->WowModels->delete_wow($id_wow);


		$this->index();
	}
		
}