<?php

	class ShoppingModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data produk shopping
		function get_data_produk()
		{
			$query = $this->db->query("SELECT * FROM `shopping` WHERE status='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
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

		//Select produk by id produk
		function select_by_id_shopping($id_produk)
		{
			$this->db->select('*');
			$this->db->from('shopping');
			$this->db->where('id_produk',$id_produk);

			return $this->db->get();
		}
	}
