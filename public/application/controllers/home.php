<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data=array();
		$this->template->load('template', 'home/index_view', $data);
	}
	public function track($home=NULL,$destiny=NULL)
	{
		$data['home']=$home;
		$data['destiny']=$destiny;
		$this->load->view('home/track', $data);
	}
	public function show($home=NULL,$destiny=NULL)
	{
		$data['home']=$home;
		$data['destiny']=$destiny;
		$this->load->view('home/show', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */