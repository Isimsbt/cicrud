<?php
class Taxi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('taxi_model');
    }

    public function index()
    {
        $data['taxis'] = $this->taxi_model->getAllTaxis();
        $this->load->view('backend/taxi/list_taxi_view', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            // Set validation rules
            $this->form_validation->set_rules('matricule', 'Matricule', 'required');
            $this->form_validation->set_rules('marque', 'Marque', 'required');
            $this->form_validation->set_rules('modele', 'Modèle', 'required');
            $this->form_validation->set_rules('disponibilite', 'Disponibilité', 'required');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'matricule' => $this->input->post('matricule'),
                    'marque' => $this->input->post('marque'),
                    'modele' => $this->input->post('modele'),
                    'disponibilite' => $this->input->post('disponibilite')
                );

                $this->taxi_model->insertTaxi($data);
                redirect('backend/taxi/list_taxi_view');
            } else {
                $this->load->view('backend/taxi/add_taxi_view');
            }
        } else {
            $this->load->view('backend/taxi/add_taxi_view');
        }
    }

    public function edit($matricule)
    {
        $data['taxi'] = $this->taxi_model->getTaxi($matricule);
        $data['matricule'] = $matricule;

        if ($this->input->post()) {
            $this->form_validation->set_rules('marque', 'Marque', 'required');
            $this->form_validation->set_rules('modele', 'Modèle', 'required');
            $this->form_validation->set_rules('disponibilite', 'Disponibilité', 'required');

            if ($this->form_validation->run() == TRUE) {
                $dataToUpdate = array(
                    'marque' => $this->input->post('marque'),
                    'modele' => $this->input->post('modele'),
                    'disponibilite' => $this->input->post('disponibilite')
                );

                $status = $this->taxi_model->updateTaxi($dataToUpdate, $matricule);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('backend/taxi/index'));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('backend/taxi/edit_taxi_view', $data);
                }
            } else {
                $this->load->view('backend/taxi/edit_taxi_view', $data);
            }
        } else {
            $this->load->view('backend/taxi/edit_taxi_view', $data);
        }
    }

    function delete($matricule)
    {
        if ($this->taxi_model->deleteTaxi($matricule)) {
            $this->session->set_flashdata('deleted', 'Supprimé avec succès');
        } else {
            $this->session->set_flashdata('error', 'Erreur');
        }
        redirect(base_url('backend/taxi/list_taxi_view'));
    }
}
?>
