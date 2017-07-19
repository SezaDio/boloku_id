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
		$this->load->model('artikel_models/ArtikelModels');
		$data['listArtikel'] = $this->ArtikelModels->get_data_artikel();
			
		$this->load->view('skin/admin/header_admin');
		$this->load->view('skin/admin/nav_kiri');
		$this->load->view('content_admin/kelola_artikel', $data);
		$this->load->view('skin/admin/footer_admin');
	}

	function tambah_artikel_check() {
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
		
	}

	//Fungsi melakukan update pada database
	public function edit_artikel($id_artikel) 
	{
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
	}

	//Fungsi untuk delete ajax artikel
	public function delete_artikel()//$id_produk
	{
		$id_artikel = $_POST['id_artikel'];
		$this->load->model('artikel_models/ArtikelModels');
		$this->ArtikelModels->delete_artikel($id_artikel);

		$this->index();
	}
}