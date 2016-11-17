<?php

class rental_transaction extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->model('rental_database');
    }

    public function privateBus()
    {
    	$data = array();
    	$data['dept_result'] = $this->rental_database->getDeptOptionsData();
    	$data['arr_result'] = $this->rental_database->getArrOptionsData();

        $this->load->view('templates/transac');
		$this->load->view('travel/privateBus', $data);
        $this->load->view('templates/footer');
    }


    public function privateBus_invoice()
    {
        $this->load->view('templates/transac');
		$this->load->view('travel/privateBus_invoice');
        $this->load->view('templates/footer');	
    }
}

?>