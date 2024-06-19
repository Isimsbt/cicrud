<?php
class Agence_model extends CI_Model
{
    public function getAllAgences()
    {
        $query = $this->db->get('agence');
        return $query->result_array();
    }

    public function getAgence($id)
    {
        $this->db->where('ID_agence', $id);
        $query = $this->db->get('agence');
        return $query->row_array();
    }

    public function insertAgence($data)
    {
        return $this->db->insert('agence', $data);
    }

    public function updateAgence($data, $id)
    {
        $this->db->where('ID_agence', $id);
        return $this->db->update('agence', $data);
    }

    public function deleteAgence($id)
    {
        $this->db->where('ID_agence', $id);
        return $this->db->delete('agence');
    }
}
?>
