<?php

	class ChallengeModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data challenge challenge
		function get_data_challenge()
		{
			$query = $this->db->query("SELECT * FROM `challenge`");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}		
		
		function get_nama_challenge()
		{
			$query = $this->db->query("SELECT * FROM `nama_challenge` WHERE id_nama_challenge=(SELECT max(id_nama_challenge) FROM `nama_challenge`)");
			
			return $query->row_array();
		}
		
		//Mempublish challenge
		function publish_challenge($id_challenge)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_challenge',$id_challenge);
			$this->db->update('challenge',$data);
		}
		
		//Me unpublish challenge
		function unpublish_challenge($id_challenge)
		{
			$data = array(
				'status' => 2	
			);
			$this->db->where('id_challenge',$id_challenge);
			$this->db->update('challenge',$data);
		}
		
		//Menghapus data  challenge challenge
		function delete_challenge($id_challenge)
		{
			$this->db->where('id_challenge',$id_challenge);
			$this->db->delete('challenge');
		}

		//Select challenge by id challenge
		function select_by_id_challenge($id_challenge)
		{
			$this->db->select('*');
			$this->db->from('challenge');
			$this->db->where('id_challenge',$id_challenge);

			return $this->db->get();
		}
		
		//Menambah data youth challenge
		function add_data_challenge($data_challenge)
		{
			$this->db->insert('challenge', $data_challenge);
		}
	}
