<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
// Dans le modèle Password_model

public function send_reset_email($email) {
    $this->load->library('email');
    $this->email->from('your@example.com', 'Your Name');
    $this->email->to($email);
    $this->email->subject('Password Reset');
    $this->email->message('Cliquez sur le lien pour réinitialiser votre mot de passe.');
    return $this->email->send();
}

    // Ajouter d'autres fonctions pour gérer la réinitialisation du mot de passe ici
}
?>
