<?php

	class PendaftarModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data pendaftar
		function get_data_event_gratis(){
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='1' and pendaftaran='1' and jenis_event='1'");
		
			return $query;
		}
		
		function get_data_event_bayar(){
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='1' and pendaftaran='1' and jenis_event='0'");
		
			return $query;
		}
		
		function get_event($id_event){
			$this->db->select('*');
			$this->db->from('coming');
			$this->db->where('id_coming',$id_event);

			$query = $this->db->get();
			return $query->row_array();
		}
		
		
		function get_data_pendaftar($id_event)
		{
			$this->db->select('*');
			$this->db->from('pendaftar');
			$this->db->where('id_event',$id_event);

			$query = $this->db->get();
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_jumlah_pendaftar($id_event)
		{
			$this->db->select('*');
			$this->db->from('pendaftar');
			$this->db->where('id_event',$id_event);

			$query = $this->db->get();
		
			
		
			return $query->num_rows();
		}
		
		function verifikasi_bayar_check($id_pendaftar)
		{
			$data = array(
				'status_bayar' => 2
				
			);
			$this->db->where('id_pendaftar',$id_pendaftar);
			$this->db->update('pendaftar',$data);
		}
		
		//Mengambil data pendaftar yang butuh validasi
		function get_data_pendaftar_pend()
		{
			$query = $this->db->query("SELECT * FROM `pendaftar` WHERE status='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

		//Menyetujui data pendaftar
		function setuju_pendaftar($id_pendaftar)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_pendaftar',$id_pendaftar);
			$this->db->update('pendaftar',$data);
		}
		
		//Menghapus data pendaftar
		function delete_pendaftar($id_pendaftar)
		{
			$this->db->where('id_pendaftar',$id_pendaftar);
			$this->db->delete('pendaftar');
		}

		//Select pendaftar by id pendaftar
		function select_by_id_pendaftar($id_pendaftar)
		{
			$this->db->select('*');
			$this->db->from('pendaftar');
			$this->db->where('id_pendaftar',$id_pendaftar);

			return $this->db->get();
		}
		
		//Menambah data youth pendaftar
		function add_data_pendaftar($data_pendaftar)
		{
			$this->db->insert('pendaftar', $data_pendaftar);
		}
	}
