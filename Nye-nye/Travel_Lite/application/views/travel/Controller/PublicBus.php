<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicBus extends CI_Controller {

    public function view($page = 'publicBus')
    {
        $this->load->helper('url');
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page);
        $this->load->view('templates/footer');
    }

}
