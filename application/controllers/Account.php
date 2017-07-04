<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller 
{
	public function _construct()
	{
		parent::_construct();
		$this->load->model('account/userModel');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('input');
		$this->load->library('form_validation');
		$this->load->library('session');

	}

	// Menampilkan halaman login
	public function index()
	{
		$this->load->view('account/form_login');
	}

	//Memeriksa keberadaan akun 
	public function login()
	{
		$this->load->library('form_validation');
		$this->load->model('account/userModel');

		//Baca inputan username dan password
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password','true');

		$temp_account = $this->userModel->check_user_account($username, $password)->row();

		//Cek account
		$num_account = count($temp_account);

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('account/form_login');
		}
		else
		{
			if($num_account > 0)
			{
				//Jika akun ditemukan, set session
				$array_items = array(
									'id_user' => $temp_account->id_user,
									'username' => $temp_account->username,
									'logged_in' => true
								);
				$this->session->set_userdata($array_items);

				redirect(site_url('account/halaman_sukses'));
			}
			else
			{
				//Jika akun tidak dittemukan, kembali ke halaman login
				$this->session->set_flashdata('notification','Username dan Password tidak ditemukan');

				redirect(site_url('account'));
			}
		}

	}

	//Menampilkan halaman sukses login
	public function halaman_sukses()
	{
		$logged_in = $this->session->userdata('logged_in');
		if(!$logged_in)
		{
			redirect(site_url('account'));
		}

		$this->load->view('skin/admin/welcome');
	}

	//Keluar dari sistem
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('account'));
	}
}