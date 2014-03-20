<?php 
	class Country extends CI_Model
	{
		public function get_countries()
		{
			$query = "SELECT * FROM country";
			return $this->db->query($query)->result_array();
		}


		public function get_country($string)
		{
			
			$query = "SELECT * FROM country WHERE country.name LIKE '%{$string}%'";
			return $this->db->query($query)->result_array();
		}
	}



 ?>