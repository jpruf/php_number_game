<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->session->set_userdata('answer',rand(1,100));

		$data = array(
			'answer' => $this->session->userdata('answer')
			);

		$this->load->view('index', $data);
	}
	public function process()
	{
		$guess = $this->input->post('guess');
		$answer = $this->session->userdata('answer');
		

		if($guess < $answer)
		{
			$this->session->set_userdata('message', 'Too low.');
		}
		if($guess > $answer)
		{
			$this->session->set_userdata('message', 'Too high.');
		}
		if($guess == $answer)
		{
			$this->session->set_userdata('message', 'Correct. '.$answer." was the number.");
		}	

		$data = array(
			'message' => $this->session->userdata('message'),
			'answer' => $this->session->userdata('answer')
			);

		$this->load->view('index', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */