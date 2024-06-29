
<?php
class Form_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function insert_data($data) {
        return $this->db->insert('client', $data);
    }




}

