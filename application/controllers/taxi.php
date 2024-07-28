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
        $this->load->view('taxi/index', $data);
		
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'matricule' => $this->input->post('matricule'),
                'marque' => $this->input->post('marque'),
                'modele' => $this->input->post('modele'),
                'disponibilite' => $this->input->post('disponibilite')
            );

            $this->taxi_model->insertTaxi($data);
            redirect('taxi');
        } else {
            $this->load->view('taxi/add_taxi');
        }
    }

    public function edit($matricule)
    {
        $data['taxi'] = $this->taxi_model->getTaxi($matricule);
        $data['matricule'] = $matricule;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('marque', 'Marque', 'required');
            $this->form_validation->set_rules('modele', 'Modèle', 'required');
            $this->form_validation->set_rules('disponibilite', 'Disponibilité', 'required');

            if ($this->form_validation->run() == TRUE) {
                $marque = $this->input->post('marque');
                $modele = $this->input->post('modele');
                $disponibilite = $this->input->post('disponibilite');
                $dataToUpdate = array(
                    'marque' => $marque,
                    'modele' => $modele,
                    'disponibilite' => $disponibilite
                );

                $status = $this->taxi_model->updateTaxi($dataToUpdate, $matricule);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('taxi'));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('taxi/edit_taxi', $data);
                }
            } else {
                $this->load->view('taxi/edit_taxi', $data);
            }
        } else {
            $this->load->view('taxi/edit_taxi', $data);
        }
    }

    function delete($matricule)
    {
        if (is_numeric($matricule)) {
            $status = $this->taxi_model->deleteTaxi($matricule);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('taxi'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('taxi'));
            }
        }
    }
}
?>
