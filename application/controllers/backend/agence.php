<?php
class Agence extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('agence_model');
    }

    public function index()
    {
        $data['agences'] = $this->agence_model->getAllAgences();
        $this->load->view('backend/agence/list_agence_view', $data); 
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'nom' => $this->input->post('nom'),
                'adresse' => $this->input->post('adresse'),
                'telephone' => $this->input->post('telephone'),
                'email' => $this->input->post('email'),
            );
            
            $this->agence_model->insertAgence($data);
            redirect('backend/agence/list_agence_view');  // Redirige vers la page index après ajout
        } else {
            $this->load->view('backend/agence/add_agence_view');
        }
    }

    public function edit($id)
    {
        $data['agence'] = $this->agence_model->getAgence($id);
        $data['id'] = $id;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('nom', 'Nom', 'required');
            $this->form_validation->set_rules('adresse', 'Adresse', 'required');
            $this->form_validation->set_rules('telephone', 'Téléphone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == TRUE) {
                $nom = $this->input->post('nom');
                $adresse = $this->input->post('adresse');
                $telephone = $this->input->post('telephone');
                $email = $this->input->post('email');
                $dataToUpdate = array(
                    'nom' => $nom,
                    'adresse' => $adresse,
                    'telephone' => $telephone,
                    'email' => $email,
                );

                $status =  $this->agence_model->updateAgence($dataToUpdate, $id);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('agence/edit/'.$id));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('backend/agence/edit_agence_view', $data);
                }
            } else {
                $this->load->view('backend/agence/edit_agence_view', $data);
            }
        } else {
            $this->load->view('backend/agence/edit_agence_view', $data);
        }
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status = $this->agence_model->deleteAgence($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('backend/agence/list_agence_view'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('backend/agence/list_agence_view'));
            }
        }
    }
}
?>
