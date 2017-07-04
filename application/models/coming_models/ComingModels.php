<?php

	class ComingModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data coming coming
		function get_data_coming()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		//Mengambil data coming yang butuh validasi
		function get_data_coming_pend()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

		//Menyetujui data  coming coming
		function setuju_coming($id_coming)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_coming',$id_coming);
			$this->db->update('coming',$data);
		}
		
		//Menghapus data  coming coming
		function delete_coming($id_coming)
		{
			$this->db->where('id_coming',$id_coming);
			$this->db->delete('coming');
		}

		//Select coming by id coming
		function select_by_id_coming($id_coming)
		{
			$this->db->select('*');
			$this->db->from('coming');
			$this->db->where('id_coming',$id_coming);

			return $this->db->get();
		}
		
		//Menambah data youth coming
		function add_data_coming($data_coming)
		{
			$this->db->insert('coming', $data_coming);
		}
	}
