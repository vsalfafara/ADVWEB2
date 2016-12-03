<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt extends CI_Controller {

    var $dep = '';

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

    public function view_privateBus($page = 'receipt')
    {
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->form_validation->set_rules('departing', 'Depart', 'trim|required|xss_clean');
        $this->form_validation->set_rules('arriving', 'Arrive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('journey', 'Journey', 'trim|required|xss_clean');

        if ($this->input->post('submit') == "Cash")
        {
          $numbers = '0123456789';
          $numbersLength = strlen($numbers);
          $characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);

          $plateNum = '';

          for ($i = 0; $i < 8; $i++)
          {
            if ($i == 3)
            {
              $plateNum .= '-';
            }
            else if ($i < 3)
            {
              $plateNum .= $characters[rand(0,$charactersLength - 1)];
            }
            else
            {
              $plateNum .= $numbers[rand(0, $numbersLength - 1)];
            }
          }
          
          $data = array(
                    'departure' => $this->input->post('departing'),
                    'arrival' => $this->input->post('arriving'),
                    'time' => $this->input->post('time'),
                    'vehicle' => "Bus",
                    'plate_num' => $plateNum,
                    'vehicle_type' => "Private",
                    'type' => $this->input->post('journey'),
                    'payment_type' => $this->input->post('submit'),
                    'paid' => 'Not yet paid');
        }
        else
        {
            $data = array(
                    'departure' => $this->input->post('departing'),
                    'arrival' => $this->input->post('arriving'),
                    'time' => $this->input->post('time'),
                    'vehicle' => "Bus",
                    'vehicle_type' => "Private",
                    'type' => $this->input->post('journey'),
                    'payment_type' => $this->input->post('submit'),
                    'paid' => 'PAID');
        }

        $result['invoice'] = $this->rental_database->receipt($data);

        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page, $result);
        $this->load->view('templates/footer');
    }
}
