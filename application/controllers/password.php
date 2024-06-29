<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('password_model');
    }

    public function index() {
        $this->load->view('password_view');
    }

    public function reset() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'L\'adresse e-mail doit être valide.');
            $this->load->view('password_view');
        } else {
            $email = $this->input->post('email');
            // Vérifiez si l'e-mail existe
            if ($this->password_model->check_email($email)) {
                // Code pour envoyer l'e-mail de réinitialisation du mot de passe
                $this->session->set_flashdata('success', 'Un e-mail de réinitialisation a été envoyé.');
            } else {
                $this->session->set_flashdata('error', 'Cette adresse e-mail n\'existe pas.');
            }
            redirect('password');
        }
    }
}
?>
