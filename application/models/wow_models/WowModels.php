<?php

	class WowModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data produk wow
		function get_data_wow()
		{
			
			$query = $this->db->query("SELECT * FROM `wow`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		//Menambah data youth WOW
		function add_data_wow($data_wow)
		{
			$this->db->insert('wow', $data_wow);
		}
		
		//Menghapus data  wow
		function delete_wow($id_wow)
		{
			$this->db->where('id_wow',$id_wow);
			$this->db->delete('wow');
		}

		//Select data WOW by id wow
		function select_by_id_wow($id_wow)
		{
			$this->db->select('*');
			$this->db->from('wow');
			$this->db->where('id_wow',$id_wow);

			return $this->db->get();
		}


		
		//Mengambil data shopping yang butuh validasi
		function get_data_produk_pend()
		{
			$query = $this->db->query("SELECT * FROM `shopping` WHERE status='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

		//Menghapus data  produk shopping
		function setuju_produk($id_produk)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_produk',$id_produk);
			$this->db->update('shopping',$data);
		}
		
		//Menghapus data  produk shopping
		function delete_produk($id_produk)
		{
			$this->db->where('id_produk',$id_produk);
			$this->db->delete('shopping');
		}

	}
