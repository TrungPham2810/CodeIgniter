<?php
	class HomeModel extends CI_Model
	{
		public function __construct()
		{
			// load  database to take method 
			$this->load->database();
		}

		public function getImages()
		{	
			// get data from table images from database
			$query = $this->db->get('images');
			if ($query->num_rows() > 0) {
				$result = $query->result_array();
				return $result;
			} else {
				return false;
			}
		}
	}
?>
