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

	public function add()
	{
		$this->load->view('add_view');
	}

	public function process()
	{
		var_dump($this->input->post());
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'name', 'required|alpha|is_unique[country.name]|matches[confirm_name]');
		$this->form_validation->set_rules('population', 'populizzle', 'required|numeric');
		$this->form_validation->set_rules('government_form', 'government fizzle', 'required');
		if($this->form_validation->run())
		{
			//you would now call a model and do the necessary database jargon
			$this->session->set_flashdata('message', 'successfully added a country!');
			redirect(base_url('/countries/index'));	
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('/countries/add'));
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */