<?php

	class ContactUsModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}		

		//Menambah data youth pendaftar
		function kirim_pesan($data_pesan)
		{
			$this->db->insert('hubungi_kami', $data_pesan);
		}
	}
