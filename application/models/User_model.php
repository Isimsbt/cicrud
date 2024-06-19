<?php
class User_model extends CI_Model
{
    public function getAllUsers()
    {
        $query = $this->db->get('client');
        return $query->result_array();
    }

    public function getUser($id)
    {
        $this->db->where('ID_client', $id);
        $query = $this->db->get('client');
        return $query->row_array();
    }

    
	public function insertUser($data)
	 {
		
		return $this->db->insert('client', $data);
	}

	

	public function updateUser($data, $id) {
        $this->db->where('ID_client', $id);
        return $this->db->update('client', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('ID_client', $id);
        return $this->db->delete('client');
    }
}
