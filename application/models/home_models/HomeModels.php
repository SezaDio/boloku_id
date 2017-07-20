<?php

	class HomeModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data slider slider
		function get_data_slider()
		{
			$query = $this->db->query("SELECT * FROM `header` WHERE status='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}	

		function get_top_event()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE top_event='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}	

		function get_new_event(){
			$query = $this->db->order_by('id_coming','DESC')->select('*')->where('status',1)->get('coming');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_ngerti_rak(){
			$query = $this->db->order_by('id_wow','DESC')->select('*')->get('wow');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_nama_challenge(){
			$query = $this->db->query("SELECT * FROM `nama_challenge` WHERE id_nama_challenge=(SELECT max(id_nama_challenge) FROM `nama_challenge`)");
		
			return $query;
		}
		
		function get_challenge(){
			$query = $this->db->order_by('id_challenge','DESC')->select('*')->get('challenge');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_artikel(){
			$query = $this->db->limit(5)->order_by('id_artikel','DESC')->select('*')->get('artikel');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_head_news()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE id_news=(SELECT max(id_news) FROM `news`)");
		
			return $query;
		}

		function get_head_comming()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE id_coming=(SELECT max(id_coming) FROM `coming`)");
		
			return $query;
		}	

		function get_head_shopping()
		{
			$query = $this->db->query("SELECT * FROM `shopping` WHERE id_produk=(SELECT max(id_produk) FROM `shopping`)");
		
			return $query;
		}

		function get_news_youther()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE id_news=(SELECT max(id_news) FROM `news` WHERE jenis_news='2')");
			
			return $query;
		}

		function get_news_recommend()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE id_news=(SELECT max(id_news) FROM `news` WHERE jenis_news='3')");
			
			return $query;
		}
		
		function get_news_community()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE id_news=(SELECT max(id_news) FROM `news` WHERE jenis_news='4')");
			
			return $query;
		}
		
		function get_news_SM()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE id_news=(SELECT max(id_news) FROM `news` WHERE jenis_news='6')");
			
			return $query;
		}
	}
