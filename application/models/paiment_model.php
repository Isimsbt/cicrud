<?php
class Paiement_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPaiements()
    {
        return $this->db->get('paiement')->result_array();
    }

    public function insertPaiement($data)
    {
        return $this->db->insert('paiement', $data);
    }

    public function getPaiement($ID_paiement)
    {
        return $this->db->get_where('paiement', array('ID_paiement' => $ID_paiement))->row_array();
    }

    public function updatePaiement($data, $ID_paiement)
    {
        $this->db->where('ID_paiement', $ID_paiement);
        return $this->db->update('paiement', $data);
    }

    public function deletePaiement($ID_paiement)
    {
        return $this->db->delete('paiement', array('ID_paiement' => $ID_paiement));
    }
}
?>
