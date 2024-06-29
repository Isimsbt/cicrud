<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Form_model');
    }

    public function index() {
        $this->load->view('form_view');
    }

    public function submit() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('identification', 'Identification', 'required');
        $this->form_validation->set_rules('prenom', 'Nom', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Adresse', 'required');
        $this->form_validation->set_rules('gender', 'Genre', 'required');
        $this->form_validation->set_rules('phone', 'Téléphone', 'required|numeric');
        $this->form_validation->set_rules('nationalite', 'Nationalité', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|callback_password_check');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_view');
        } else {
            $data = array(
                'ID_client' => $this->input->post('identification'),
                'Nom_client' => $this->input->post('prenom'),
                'email' => $this->input->post('email'),
                'adresse' => $this->input->post('address'),
                'gender' => $this->input->post('gender'),
                'telephone' => $this->input->post('phone'),
                'nationalite' => $this->input->post('nationalite'),
                'password' => $this->input->post('password'), 
            );

            if ($this->Form_model->insert_data($data)) {
                echo "Data successfully inserted!";
            } else {
                echo "Failed to insert data.";
            }
        }
    }

    // Custom callback function to check password strength
    public function password_check($password) {
        if (preg_match('/[A-Z]/', $password) && preg_match('/[0-9]/', $password)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_check', 'The {field} field must contain at least one uppercase letter and one number.');
            return FALSE;
        }
    }
}
