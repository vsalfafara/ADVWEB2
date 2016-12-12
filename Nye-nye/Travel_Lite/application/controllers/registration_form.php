<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ken Ferrer
 * Date: 11/2/2016
 * Time: 6:52 PM
 */
class registration_form extends CI_Controller {

    public function view($page = 'registration_form')
    {
       $this->load->helper('url');
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('travel/'.$page);
        $this->load->view('templates/footer');
    }

}