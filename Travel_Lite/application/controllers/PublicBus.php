<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicBus extends CI_Controller {

    public function view($page = 'publicBus')
    {
        $this->load->model('rental_database');

        $this->load->helper('url');
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data = array();
        $data['vehicles'] = $this->rental_database->getBus();
        $data['departure_data'] = $this->rental_database->getDeptOptionsData();
        $data['arrival_data'] = $this->rental_database->getArrOptionsData();

        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page, $data);
        $this->load->view('templates/footer');
    }

}
