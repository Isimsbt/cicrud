<?php
class User_model extends CI_Model
{
    public function getAllUsers()
    {
        $query = $this->db->get('client');
        return $query->result();
    }

    public function getUser($ID_client)
    {
        $this->db->where('ID_client', $ID_client);
        $query = $this->db->get('client');
        return $query->row();
    }

    public function insertUser($data)
    {
        return $this->db->insert('client', $data);
    }

    public function updateUser($data, $ID_client)
    {
        $this->db->where('ID_client', $ID_client);
        return $this->db->update('client', $data);
    }

    public function deleteUser($ID_client)
    {
        $this->db->where('ID_client', $ID_client);
        return $this->db->delete('client');
    }
}
?>
