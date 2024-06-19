<?php
class Taxi_model extends CI_Model
{
    public function getAllTaxis()
    {
        $query = $this->db->get('taxi');
        return $query->result();
    }

    public function insertTaxi($data)
    {
        return $this->db->insert('taxi', $data);
    }

    public function getTaxi($matricule)
    {
        $query = $this->db->get_where('taxi', array('matricule' => $matricule));
        return $query->row();
    }

    public function updateTaxi($data, $matricule)
    {
        $this->db->where('matricule', $matricule);
        return $this->db->update('taxi', $data);
    }

    public function deleteTaxi($matricule)
    {
        $this->db->where('matricule', $matricule);
        return $this->db->delete('taxi');
    }
}
?>
