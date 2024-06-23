<?php
class Paiement_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPaiements()
    {
        return $this->db->get('paiements')->result_array();
    }

    public function insertPaiement($data)
    {
        return $this->db->insert('paiements', $data);
    }

    public function getPaiement($id_paiement)
    {
        return $this->db->get_where('paiements', array('id_paiement' => $id_paiement))->row_array();
    }

    public function updatePaiement($data, $id_paiement)
    {
        $this->db->where('id_paiement', $id_paiement);
        return $this->db->update('paiements', $data);
    }

    public function deletePaiement($id_paiement)
    {
        return $this->db->delete('paiements', array('id_paiement' => $id_paiement));
    }
}
?>
