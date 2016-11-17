<?php

Class Rental_Database extends CI_Model {

	public function getDeptOptionsData() {

        $this->db->select('*');
        $this->db->from('departure_area');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
	}

	public function getArrOptionsData()
	{
        $this->db->select('*');
        $this->db->from('arrival_area');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }

	}
}
?>