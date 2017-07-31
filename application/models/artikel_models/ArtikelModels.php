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
		
	}