<?php

	class NewsModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data news
		/*function get_data_news_sm()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='1'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_news_youthers()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_news_rekomendasi()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='3'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_news_komunitas()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='4'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_news_coming()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='5'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_news_youth()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='1' AND jenis_news='6'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		
		//Mengambil data news yang butuh validasi
		function get_data_pendnews_youthers()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='2' AND jenis_news='2'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		function get_data_pendnews_komunitas()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='2' AND jenis_news='4'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
		
		function get_data_pendnews_coming()
		{
			$query = $this->db->query("SELECT * FROM `news` WHERE status='2' AND jenis_news='5'");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}*/

		//Menyetujui data news
		function setuju_news($id_news)
		{
			$data = array(
				'status' => 1	
			);
			$this->db->where('id_news',$id_news);
			$this->db->update('news',$data);
		}
		//Menghapus data news sesuai dengan event nya
		function delete_news($id_event)
		{
			$this->db->where('id_event',$id_event);
			$this->db->delete('news');
		}

		//Menghapus data news sesuai dengan event nya
		function delete_news2($id_news)
		{
			$this->db->where('id_news',$id_news);
			$this->db->delete('news');
		}

		//Select news by id_news
		function select_by_id_news($id_news)
		{
			$this->db->select('*');
			$this->db->from('news');
			$this->db->where('id_news',$id_news);

			return $this->db->get();
		}

		//Select news press release
		function select_by_id_press($id_coming)
		{
			$this->db->select('*');
			$this->db->from('news');
			$this->db->where('id_event',$id_coming);

			return $this->db->get();
		}

		//Get data testimoni by ID
		function get_testimoni_by_id($id_coming)
		{
			$this->db->select('*');
			$this->db->from('testimoni');
			$this->db->where('id_event',$id_coming);

			return $this->db->get();
		}

		//Menghapus data Testimoni
		function delete_testimoni($id_testimoni)
		{
			$this->db->where('id_testimoni',$id_testimoni);
			$this->db->delete('testimoni');
		}

		//Mengambil data news
		function get_data_news()
		{
			
			//$query = $this->db->query("SELECT * FROM `news`");
		    $query = $this->db->limit(5)->order_by('waktu_posting','DESC')->select('*')->get('news');
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}
	}