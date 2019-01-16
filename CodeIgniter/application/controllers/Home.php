<?php
	class Home extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			//load to file HomeModel.php in folder Model
			$this->load->model('HomeModel');
		}
		public function index() {
			//get data from database and put in var array $data
			$data['images'] = $this->HomeModel->getImages();
			// load view and pass data
			$this->load->view('templates/Header',$data);
			$this->load->view('HomeView',$data);
			$this->load->view('templates/Footer',$data);
		}
	}
?>
