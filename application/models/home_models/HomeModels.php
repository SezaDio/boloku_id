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
			$query = $this->db->query("SELECT * FROM `slider` WHERE status='1'");
		
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
