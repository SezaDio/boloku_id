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

		//Select tiket by id coming
		function select_tiket_by_id_coming($id_coming)
		{
			$this->db->select('*');
			$this->db->from('tiket');
			$this->db->where('id_event',$id_coming);

			return $this->db->get();
		}
		
		//Menambah data youth coming
		function add_data_coming($data_coming)
		{
			$this->db->insert('coming', $data_coming);
		}
		
		//Mempublish coming
		function top_event($id_coming)
		{
			$data = array(
				'top_event' => 1	
			);
			$this->db->where('id_coming',$id_coming);
			$this->db->update('coming',$data);
		}
		
		//Me unpublish coming
		function untop_event($id_coming)
		{
			$data = array(
				'top_event' => 2	
			);
			$this->db->where('id_coming',$id_coming);
			$this->db->update('coming',$data);
		}

		function kota_lokasi()
		{
			$query = $this->db->query("SELECT * FROM `inf_lokasi` WHERE lokasi_propinsi!=0 AND lokasi_kabupatenkota!=0 AND lokasi_kecamatan=0 AND lokasi_kelurahan=0 ORDER BY lokasi_nama ASC");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$row['lokasi_kode']] = $row;
			}
		
			return $result;
		}

		function select_by_id_kota($lokasi_kode)
		{
			$this->db->select('*');
			$this->db->from('inf_lokasi');
			$this->db->where('lokasi_kode',$lokasi_kode);
			$namaKota = $this->db->get()->row();
			return $namaKota->lokasi_nama;
		}
		
		function jumlah_top()
		{
			$query = $this->db->where('top_event',1)->get('coming');
				
			return $query->num_rows();
		}

	}