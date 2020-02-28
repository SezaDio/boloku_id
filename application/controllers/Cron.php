<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

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
		$this->load->model('coming_models/ComingModels');
		$this->load->model('pendaftar_models/PendaftarModels');

		//Ambil data pendaftar yang tanggal bayarnya udh expired dan status nya bukan 9999
		$dataPendaftar_all = $this->PendaftarModels->get_data_pendaftar_expired()->result();
	
		//Lakukan looping pembaca data pendaftar
		foreach ($dataPendaftar_all as $dataPendaftar_expired) 
		{
			// Ambil data tiket
			$dataTiket = $this->ComingModels->select_tiket_by_id_tiket($dataPendaftar_expired->id_tiket)->row();
			$jumlah_seat_tiket = $dataTiket->seat;

			//update tabel pendaftar untuk mengubah status bayar menjadi expired (5509)
			$dataPendaftar_expired->status_bayar = 5509;
			$this->db->update('pendaftar', array('status_bayar'=>$dataPendaftar_expired->status_bayar), array('no_pendaftar'=>$dataPendaftar_expired->no_pendaftar));

			// Kondisional untuk update seat pada tiket
			if ($jumlah_seat_tiket != NULL) // Jika jumlah seat not NULL
			{
				//Tambah +1 jumlah seat tiket
				$jumlah_seat_tiket = $jumlah_seat_tiket + 1;

				//update tabel tiket untuk mengurangi jumlah seat
				$this->db->update('tiket', array('seat'=>$jumlah_seat_tiket), array('id_jenis_tiket'=>$dataPendaftar_expired->id_tiket));
			}
		}
	}
}