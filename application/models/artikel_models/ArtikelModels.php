<?php

	class ArtikelModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data produk wow
		function get_data_artikel()
		{
			
			$query = $this->db->query("SELECT * FROM `artikel`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		//Menambah data youth WOW
		function add_data_artikel($data_artikel)
		{
			$this->db->insert('artikel', $data_artikel);
		}
		
		//Menghapus data  wow
		function delete_artikel($id_artikel)
		{
			$this->db->where('id_artikel',$id_artikel);
			$this->db->delete('artikel');
		}

		//Select data artikel by id wow
		function select_by_id_artikel($id_artikel)
		{
			$this->db->select('*');
			$this->db->from('artikel');
			$this->db->where('id_artikel',$id_artikel);

			return $this->db->get();
		}

		//Select data komentar by id artikel
		function select_komentar_by_id_artikel($id_artikel)
		{
			$this->db->select('*');
			$this->db->from('komentar');
			$this->db->where('id_artikel',$id_artikel);

			return $this->db->get();
		}

		//Menghapus data komentar
		function delete_komentar($id_komentar)
		{
			$this->db->where('id_komentar',$id_komentar);
			$this->db->delete('komentar');
		}

		function get_komentar($id_artikel)
		{
			$query = $this->db->select('komentar.id_komentar, komentar.id_member, komentar.isi_komentar, komentar.tgl_posting, komentar.id_artikel, member.nama_member, member.path_foto')->join('member','komentar.id_member = member.id_member','left')->where('komentar.id_artikel',$id_artikel)->get('komentar');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
	}