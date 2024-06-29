<?php
class Agence_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getAllAgences() {
        $query = $this->db->select('ID_agence, nom, adresse, telephone, email')
                          ->get('agence');
        return $query->result_array();
    }

    public function insertAgence($data) {
        return $this->db->insert('agence', $data);
    }

    public function getAgence($id) {
        $query = $this->db->get_where('agence', array('ID_agence' => $id));
        return $query->row_array();
    }

    public function updateAgence($data, $id) {
        $this->db->where('ID_agence', $id);
        return $this->db->update('agence', $data);
    }

    public function deleteAgence($id) {
        $this->db->where('ID_agence', $id);
        return $this->db->delete('agence');
    }
}
?>
