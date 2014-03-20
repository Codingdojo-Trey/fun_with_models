<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Countries extends CI_Controller {

	
	public function index()
	{
		$this->load->model('country');
		$view_data['countries'] = $this->country->get_countries();
		$this->load->view('index_view', $view_data);
	}

	public function search($name)
	{
		$this->load->model('country');
		$countries = $this->country->get_country($name);
		var_dump($countries);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */