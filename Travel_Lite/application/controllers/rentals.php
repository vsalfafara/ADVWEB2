<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentals extends CI_Controller {

    public function view($page = 'rentals')
    {
        $this->load->helper('url');
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if (isset($this->session->userdata['logged_in']))
        {
            $this->load->view('templates/transac');
            $this->load->view('travel/'.$page);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('travel/login_form');
        }
    }
}
