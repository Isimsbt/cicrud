<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taxi_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fonction pour récupérer les taxis par agence
    public function get_taxis_by_agence($id_agence) {
        $this->db->where('id_agence', $id_agence);
        $query = $this->db->get('taxi');
        return $query->result_array();
    }
}
?>
