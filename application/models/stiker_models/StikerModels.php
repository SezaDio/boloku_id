<?php

	class StikerModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data stiker stiker
		function get_data_stiker()
		{
			$query = $this->db->query("SELECT * FROM `stiker`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}		
		
		function get_nama_stiker()
		{
			$query = $this->db->query("SELECT * FROM `nama_stiker` WHERE id_nama_stiker=(SELECT max(id_nama_stiker) FROM `nama_stiker`)");
			
			return $query->row_array();
		}
		
		//Mempublish stiker
		function publish_stiker($id_stiker)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_stiker',$id_stiker);
			$this->db->update('stiker',$data);
		}
		
		//Me unpublish stiker
		function unpublish_stiker($id_stiker)
		{
			$data = array(
				'status' => 2	
			);
			$this->db->where('id_stiker',$id_stiker);
			$this->db->update('stiker',$data);
		}
		
		//Menghapus data  stiker stiker
		function delete_stiker($id_stiker)
		{
			$this->db->where('id_stiker',$id_stiker);
			$this->db->delete('stiker');
		}

		//Select stiker by id stiker
		function select_by_id_stiker($id_stiker)
		{
			$this->db->select('*');
			$this->db->from('stiker');
			$this->db->where('id_stiker',$id_stiker);

			return $this->db->get();
		}
		
		//Menambah data youth stiker
		function add_data_stiker($data_stiker)
		{
			$this->db->insert('stiker', $data_stiker);
		}
	}
