<?php
class Reservation_model extends CI_Model
{
    public function getAllReservations()
    {
        $this->db->select('r.*, c.Nom_client, t.matricule, ch.ID_chauffeur');
        $this->db->from('réservation r');
        $this->db->join('client c', 'r.ID_client = c.ID_client', 'left');
        $this->db->join('taxi t', 'r.matricule = t.matricule', 'left');
        $this->db->join('chauffeur ch', 'r.ID_chauffeur = ch.ID_chauffeur', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getReservation($id)
    {
        $this->db->select('r.*, c.Nom_client, t.matricule, ch.ID_chauffeur');
        $this->db->from('réservation r');
        $this->db->join('client c', 'r.ID_client = c.ID_client', 'left');
        $this->db->join('taxi t', 'r.matricule = t.matricule', 'left');
        $this->db->join('chauffeur ch', 'r.ID_chauffeur = ch.ID_chauffeur', 'left');
        $this->db->where('r.ID_reservation', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertReservation($data)
    {
        return $this->db->insert('réservation', $data);
    }

    public function updateReservation($data, $id)
    {
        $this->db->where('ID_reservation', $id);
        return $this->db->update('réservation', $data);
    }

    public function deleteReservation($id)
    {
        $this->db->where('ID_reservation', $id);
        return $this->db->delete('réservation');
    }
}
?>
