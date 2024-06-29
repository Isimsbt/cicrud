<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agence_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fonction pour récupérer toutes les agences
    public function get_agences() {
        $query = $this->db->get('agence');
        return $query->result_array();
    }
}
?>
