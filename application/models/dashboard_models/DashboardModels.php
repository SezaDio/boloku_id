<?php

	class DashboardModels extends CI_Model
	{
		function construct()
		{
			parent::_construct();
		}

		//Mengambil data jumlah approved event
		function get_jumlah_approved_event()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='1'");
		
			$result = $query->num_rows();
			
			return $result;
		}

		//Mengambil data jumlah pending event
		function get_jumlah_pending_event()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='2'");
		
			$result = $query->num_rows();
			
			return $result;
		}

		//Mengambil data jumlah pending event
		function get_jumlah_pending_pepak()
		{
			$query = $this->db->query("SELECT * FROM `pepak` WHERE status='2'");
		
			$result = $query->num_rows();
			
			return $result;
		}
	}