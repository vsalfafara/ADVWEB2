<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	 public function view($page = 'admin_page')
	{
		$this->load->helper('url');
        $this->load->model('rental_database');
        $this->load->library('session');

		if ( !file_exists('application/views/travel/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['page'] = "About ";

		if ($this->session->userdata['logged_in']['type'] == 1)
		{
			$data['invoices'] = $this->rental_database->getInvoice($this->session->userdata['logged_in']['username']);
		}
		else
		{
			$data['invoices'] = $this->rental_database->getAllInvoice();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('travel/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
