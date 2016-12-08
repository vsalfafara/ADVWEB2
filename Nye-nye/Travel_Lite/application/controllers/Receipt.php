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

        $this->form_validation->set_rules('vehicle', 'Vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('departing', 'Depart', 'trim|required|xss_clean');
        $this->form_validation->set_rules('arriving', 'Arrive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('journey', 'Journey', 'trim|required|xss_clean');

        if ($this->input->post('vehicle') == null || $this->input->post('departing') == null || $this->input->post('arriving') == null ||
        $this->input->post('time') == null || $this->input->post('journey') == null)
        {
          $data = array();
          $data['vehicles'] = $this->rental_database->getVehicle();
          $data['departure_data'] = $this->rental_database->getDeptOptionsData();
          $data['arrival_data'] = $this->rental_database->getArrOptionsData();
          $data['error'] = "Please fill up the form!";

          $this->load->view('templates/transac');
          $this->load->view('travel/privateBus', $data);
          $this->load->view('templates/footer');
        }

        if ($this->input->post('departing') == $this->input->post('arrival'))
        {
            $data = array();
            $data['vehicles'] = $this->rental_database->getVehicle();
            $data['departure_data'] = $this->rental_database->getDeptOptionsData();
            $data['arrival_data'] = $this->rental_database->getArrOptionsData();
            $data['error'] = "Do not choose same departure and arrival!";

            $this->load->view('templates/transac');
            $this->load->view('travel/privateBus', $data);
            $this->load->view('templates/footer');
        }

        $date = $this->rental_database->getDate($this->input->post('departing'));
        $vehicle = $this->rental_database->getVehicleName($this->input->post('vehicle'));

        if ($this->input->post('submit') == 'Cash')
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Bus",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Private",
            'type' => $this->input->post('journey'),
            'quantity' => 1,
            'payment_type' => $this->input->post('submit'),
            'paid' => 'Not yet paid. Please present the invoice number to the cashier.');
        }
        else
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Bus",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Private",
            'type' => $this->input->post('journey'),
            'quantity' => 1,
            'payment_type' => $this->input->post('submit'),
            'paid' => 'PAID');
        }

        $result['invoice'] = $this->rental_database->receipt($data);

        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page, $result);
        $this->load->view('templates/footer');
    }

    public function view_publicBus($page = 'receipt')
    {
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->form_validation->set_rules('vehicle', 'Vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('departing', 'Depart', 'trim|required|xss_clean');
        $this->form_validation->set_rules('arriving', 'Arrive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('journey', 'Journey', 'trim|required|xss_clean');
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|xss_clean');

        if ($this->input->post('vehicle') == null || $this->input->post('departing') == null || $this->input->post('arriving') == null ||
        $this->input->post('time') == null || $this->input->post('journey') == null)
        {
          $data = array();
          $data['vehicles'] = $this->rental_database->getVehicle();
          $data['departure_data'] = $this->rental_database->getDeptOptionsData();
          $data['arrival_data'] = $this->rental_database->getArrOptionsData();
          $data['error'] = "Please fill up the form!";

          $this->load->view('templates/transac');
          $this->load->view('travel/publicBus', $data);
          $this->load->view('templates/footer');
        }

        if ($this->input->post('departing') == $this->input->post('arrival'))
        {
            $data = array();
            $data['vehicles'] = $this->rental_database->getVehicle();
            $data['departure_data'] = $this->rental_database->getDeptOptionsData();
            $data['arrival_data'] = $this->rental_database->getArrOptionsData();
            $data['error'] = "Do not choose same departure and arrival!";

            $this->load->view('templates/transac');
            $this->load->view('travel/publicBus', $data);
            $this->load->view('templates/footer');
        }

        $date = $this->rental_database->getDate($this->input->post('departing'));
        $vehicle = $this->rental_database->getVehicleName($this->input->post('vehicle'));
        $seaters = $this->rental_database->updateSeaters(intval($this->input->post('quantity')),$this->input->post('vehicle'));

        if ($seaters->vehicle_seaters == 0)
        {
            $data = array();
            $data['vehicles'] = $this->rental_database->getVehicle();
            $data['departure_data'] = $this->rental_database->getDeptOptionsData();
            $data['arrival_data'] = $this->rental_database->getArrOptionsData();
            $data['error'] = "No more seats!";

            $this->load->view('templates/transac');
            $this->load->view('travel/publicBus', $data);
            $this->load->view('templates/footer');
        }



        if ($this->input->post('submit') == 'Cash')
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Bus",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Public",
            'type' => $this->input->post('journey'),
            'quantity' => $this->input->post('quantity'),
            'payment_type' => $this->input->post('submit'),
            'paid' => 'Not yet paid. Please present the invoice number to the cashier.');
        }
        else
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Bus",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Public",
            'type' => $this->input->post('journey'),
            'quantity' => $this->input->post('quantity'),
            'payment_type' => $this->input->post('submit'),
            'paid' => 'PAID');
        }

        $result['invoice'] = $this->rental_database->receipt($data);

        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page, $result);
        $this->load->view('templates/footer');
    }

    public function view_privateVan($page = 'receipt')
    {
        if ( !file_exists('application/views/travel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->form_validation->set_rules('vehicle', 'Vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('departing', 'Depart', 'trim|required|xss_clean');
        $this->form_validation->set_rules('arriving', 'Arrive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('time', 'Time', 'trim|required|xss_clean');
        $this->form_validation->set_rules('journey', 'Journey', 'trim|required|xss_clean');

        if ($this->input->post('vehicle') == null || $this->input->post('departing') == null || $this->input->post('arriving') == null ||
        $this->input->post('time') == null || $this->input->post('journey') == null)
        {
          $data = array();
          $data['vehicles'] = $this->rental_database->getVehicle();
          $data['departure_data'] = $this->rental_database->getDeptOptionsData();
          $data['arrival_data'] = $this->rental_database->getArrOptionsData();
          $data['error'] = "Please fill up the form!";

          $this->load->view('templates/transac');
          $this->load->view('travel/privateBus', $data);
          $this->load->view('templates/footer');
        }

        if ($this->input->post('departing') == $this->input->post('arrival'))
        {
            $data = array();
            $data['vehicles'] = $this->rental_database->getVehicle();
            $data['departure_data'] = $this->rental_database->getDeptOptionsData();
            $data['arrival_data'] = $this->rental_database->getArrOptionsData();
            $data['error'] = "Do not choose same departure and arrival!";

            $this->load->view('templates/transac');
            $this->load->view('travel/privateBus', $data);
            $this->load->view('templates/footer');
        }

        $date = $this->rental_database->getDate($this->input->post('departing'));
        $vehicle = $this->rental_database->getVehicleName($this->input->post('vehicle'));

        if ($this->input->post('submit') == 'Cash')
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Van",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Private",
            'type' => $this->input->post('journey'),
            'quantity' => 1,
            'payment_type' => $this->input->post('submit'),
            'paid' => 'Not yet paid. Please present the invoice number to the cashier.');
        }
        else
        {
          $data = array(
            'created_by' => $this->session->userdata['logged_in']['username'],
            'departure' => $this->input->post('departing'),
            'arrival' => $this->input->post('arriving'),
            'time' => $this->input->post('time'),
            'date' => $date->date,
            'vehicle' => "Van",
            'vehicleid' => $this->input->post('vehicle'),
            'vehicle_name' => $vehicle->vehicle_name,
            'plate_num' => $vehicle->plate_num,
            'vehicle_type' => "Private",
            'type' => $this->input->post('journey'),
            'quantity' => 1,
            'payment_type' => $this->input->post('submit'),
            'paid' => 'PAID');
        }

        $result['invoice'] = $this->rental_database->receipt($data);

        $this->load->view('templates/transac');
        $this->load->view('travel/'.$page, $result);
        $this->load->view('templates/footer');
    }
}
