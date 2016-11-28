<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller {
	
	 public function view($page = 'credit')
	{
		$this->load->helper('url');
		if ( !file_exists('application/views/travel/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['page'] = "Home ";

		$this->load->view('templates/transac', $data);
		$this->load->view('travel/'.$page);
		$this->load->view('templates/footer');
	}
	
}
