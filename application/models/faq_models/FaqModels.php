<?php

	class FaqModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data produk wow
		function get_data_faq()
		{
			
			$query = $this->db->query("SELECT * FROM `faq`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		//Menambah data youth WOW
		function add_data_faq($data_faq)
		{
			$this->db->insert('faq', $data_faq);
		}
		
		//Menghapus data  wow
		function delete_faq($id_faq)
		{
			$this->db->where('id_faq',$id_faq);
			$this->db->delete('faq');
		}

		//Select data artikel by id wow
		function select_by_id_faq($id_faq)
		{
			$this->db->select('*');
			$this->db->from('faq');
			$this->db->where('id_faq',$id_faq);

			return $this->db->get();
		}
		
	}