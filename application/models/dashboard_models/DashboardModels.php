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

		//Mengambil data coming coming terdekat
		function get_data_coming_terdekat()
		{
			$query = $this->db->query("SELECT * FROM `coming` WHERE status='1' limit 5");
		
			$indeks = 0;
			$result = array();
			
			foreach ($query->result_array() as $row)
			{
				$result[$indeks++] = $row;
			}
		
			return $result;
		}

		//Mengambil data jumlah member untuk grafik
		function get_data_jumlah_member()
		{
			
		    $query =$this->db->query("SELECT count(tahun) as jumlah FROM prestasi group by tahun");

		    $bln = array();
		    $bln['name'] = 'tahun';
		    $rows['name'] = 'Jumlah';
		    while ($r = mysql_fetch_array($result)) {
		        $bln['data'][] = $r['tahun'];
		        $rows['data'][] = $r['jumlah'];
		    }

			$rslt = array();

			array_push($rslt, $bln);
			array_push($rslt, $rows);
			print json_encode($rslt, JSON_NUMERIC_CHECK);
		}	
	}