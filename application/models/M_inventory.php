<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventory extends CI_Model {

	protected $TABLE = "inventory";

	public function get($id = null)
	{
		if ($id == null) {
			$query = $this->db->get($this->TABLE)->result();
		}else {
			$this->db->where('id_inventory', $id);
			$query = $this->db->get($this->TABLE)->result();
		}
		return $query;
	}

	public function insert($object)
	{
		$query = $this->db->insert($this->TABLE, $object);
		return $query;
	}

	public function update($id,$object)
	{
		$this->db->where('id_inventory', $id);
		$query = $this->db->update($this->TABLE, $object);
		return $query;
	}

	public function delete($id)
	{
		$this->db->where('id_inventory', $id);
		$query = $this->db->delete($this->TABLE);
		return $query;
	}

}

/* End of file M_inventory.php */
/* Location: ./application/models/M_inventory.php */