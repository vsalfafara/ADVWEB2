<?php

public function template($data)
{
	$this->load->view('templates/header', $header_data);
	$this->load->view('travel/'.$page);
	$this->load->view('templates/footer');
}
?>