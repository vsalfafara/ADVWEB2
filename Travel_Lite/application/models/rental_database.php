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

    public function receipt($data)
    {
        $this->db->insert('invoice', $data);

        if ($this->db->affected_rows() > 0) 
        {
            $this->db->select('*');
            $this->db->from('invoice');
            $this->db->order_by("invoiceid", "desc");
            $this->db->limit(1);
            
            $result = $this->db->get();

            return $result->row();
        }
        else
        {
            return false;
        }
    }

    public function getDate($date)
    {
        $condition = "dep_name = " . "'" . $date . "'";
        $this->db->select('date');
        $this->db->from('departure_area');
        $this->db->where($condition);

        $result = $this->db->get();

        if ($result->num_rows() >= 1)
            return $result->row();
        else
            return false;

    }
}
?>