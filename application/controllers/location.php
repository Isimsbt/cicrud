<?php
class Location extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('location_model');
    }

    public function index()
    {
        $data['locations'] = $this->location_model->getAllLocations();
        $this->load->view('location/index', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'matricule' => $this->input->post('matricule'),
                'ID_client' => $this->input->post('ID_client'),
                'ID_agence' => $this->input->post('ID_agence'),
                'date_debut' => $this->input->post('date_debut'),
                'date_fin' => $this->input->post('date_fin')
            );

            $this->location_model->insertLocation($data);
            redirect('location');
        } else {
            $this->load->view('location/add_location');
        }
    }

    public function edit($ID_location)
    {
        $data['location'] = $this->location_model->getLocation($ID_location);
        $data['ID_location'] = $ID_location;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('matricule', 'matricule', 'required');
            $this->form_validation->set_rules('ID_client', 'ID Client', 'required');
            $this->form_validation->set_rules('ID_agence', 'ID Agence', 'required');
            $this->form_validation->set_rules('date_debut', 'Date début', 'required');
            $this->form_validation->set_rules('date_fin', 'Date fin', 'required');

            if ($this->form_validation->run() == TRUE) {
                $ID_taxi = $this->input->post('matricule');
                $ID_client = $this->input->post('ID_client');
                $ID_agence = $this->input->post('ID_agence');
                $date_debut = $this->input->post('date_debut');
                $date_fin = $this->input->post('date_fin');
                $dataToUpdate = array(
                    'matricule' => $matricule,
                    'ID_client' => $ID_client,
                    'ID_agence' => $ID_agence,
                    'date_debut' => $date_debut,
                    'date_fin' => $date_fin
                );

                $status = $this->location_model->updateLocation($dataToUpdate, $ID_location);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('location'));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('location/edit_location', $data);
                }
            } else {
                $this->load->view('location/edit_location', $data);
            }
        } else {
            $this->load->view('location/edit_location', $data);
        }
    }

    function delete($ID_location)
    {
        if (is_numeric($ID_location)) {
            $status = $this->location_model->deleteLocation($ID_location);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('location'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('location'));
            }
        }
    }
}
?>
