<?php

Class Rental_Database extends CI_Model {

	public function getBus() {

		$condition = 'vehicle_type = "bus"';
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
				return $query->result();
		} else {
				return false;
		}
	}

	public function getVan() {

		$condition = 'vehicle_type = "van"';
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
				return $query->result();
		} else {
				return false;
		}
	}

	public function getVehicleName($data) {

		$condition = "vehicleid = " . $data;
		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
				return $query->row();
		} else {
				return false;
		}
	}

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

    public function receipt2()
    {
	    $this->db->select('*');
	    $this->db->from('invoice');
	    $this->db->order_by("invoiceid", "desc");
	    $this->db->limit(1);

	    $result = $this->db->get();

        return $result->row();
    	
    }

    public function getDate($depname)
    {
        $condition = "dep_name = " . "'" . $depname . "'";
        $this->db->select('date');
        $this->db->from('departure_area');
        $this->db->where($condition);

        $result = $this->db->get();

        if ($result->num_rows() >= 1)
            return $result->row();
        else
            return false;
    }

    public function getCost($depname)
    {
        $condition = "dep_name = " . "'" . $depname . "'";
        $this->db->select('*');
        $this->db->from('departure_area');
        $this->db->where($condition);

        $result = $this->db->get();

        if ($result->num_rows() >= 1)
            return $result->row();
        else
            return false;
    }

    public function getPublicCost($depname, $arrname)
    {
        $condition = "dep_name = " . "'" . $depname . "'";
        $this->db->select('*');
        $this->db->from('departure_area');
        $this->db->where($condition);

        $result = $this->db->get();

        if ($result->num_rows() >= 1)
            return $result->row();
        else
            return false;
    }

	public function updateSeaters($quantity,$id)
	{
		$condition = "vehicleid = " . $id;
		$this->db->set('seaters_available', 'seaters_available-intval($quantity)');
		$this->db->where($condition);
		$this->db->update('vehicle');

		$this->db->select('*');
		$this->db->from('vehicle');
		$this->db->where('vehicleid = ' . $id);

		$result = $this->db->get();

		if ($result->num_rows() >= 1)
		    return $result->row();
		else
		    return false;
	}

	public function getInvoice($username)
	{
		$condition = "created_by = " . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('invoice');
		$this->db->where($condition);

		$result = $this->db->get();

		if ($result->num_rows() >= 1)
			return $result->result();
		else
			return false;
	}

	public function getAllInvoice()
	{
		$this->db->select('*');
		$this->db->from('invoice');

		$result = $this->db->get();

		if ($result->num_rows() >= 1)
			return $result->result();
		else
			return false;
	}

	public function getInvoiceNumber($invoice)
	{
		$condition = "invoiceid = " . $invoice;
		$this->db->select('*');
		$this->db->from('invoice');
		$this->db->where($condition);

		$result = $this->db->get();

		if ($result->num_rows() >= 1)
			return $result->row();
		else
			return false;

	}
}
?>
