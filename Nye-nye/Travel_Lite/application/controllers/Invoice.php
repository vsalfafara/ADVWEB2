<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->load->library('session');

        $this->load->model('rental_database');

        $this->load->helper('security');

        $this->load->helper('url');
    }

    public function get($page = 'receipt')
    {
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->form_validation->set_rules('invoice', 'Invoice', 'trim|required|xss_clean');

        if ($this->input->post('invoice') != null)
        {
            $result['invoice'] = $this->rental_database->getInvoiceNumber($this->input->post('invoice'));

            $this->load->view('templates/transac');
            $this->load->view('travel/'.$page, $result);
            $this->load->view('templates/footer');
        }
        else
        {
            $result['error'] = "Please choose an invoice!";
            $result['invoices'] = $this->rental_database->getInvoice($this->session->userdata['logged_in']['username']);

            $this->load->view('templates/transac');
            $this->load->view('travel/admin_page', $result);
            $this->load->view('templates/footer');
        }
    }
}

?>