<?php

	class PepakModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data pepak
		function get_data_pepak()
		{
			$query = $this->db->query("SELECT * FROM `pepak` WHERE status='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		//Mengambil data pepak yang butuh validasi
		function get_data_pepak_pend()
		{
			$query = $this->db->query("SELECT * FROM `pepak` WHERE status='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

		//Menyetujui data pepak
		function setuju_pepak($id_pepak)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_pepak',$id_pepak);
			$this->db->update('pepak',$data);
		}
		
		//Menghapus data pepak
		function delete_pepak($id_pepak)
		{
			$this->db->where('id_pepak',$id_pepak);
			$this->db->delete('pepak');
		}

		//Select pepak by id pepak
		function select_by_id_pepak($id_pepak)
		{
			$this->db->select('*');
			$this->db->from('pepak');
			$this->db->where('id_pepak',$id_pepak);

			return $this->db->get();
		}
		
		//Menambah data youth pepak
		function add_data_pepak($data_pepak)
		{
			$this->db->insert('pepak', $data_pepak);
		}
	}
