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
                'date_fin' => $this->input->post('date_fin'),
            );
            
            $this->location_model->insertLocation($data);
            redirect('location');
        } else {
            $this->load->view('location/add_location');
        }
    }

    public function edit($id)
    {
        $data['location'] = $this->location_model->getLocation($id);
        $data['id'] = $id;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('matricule', 'ID Taxi', 'required');
            $this->form_validation->set_rules('ID_client', 'ID Client', 'required');
            $this->form_validation->set_rules('ID_agence', 'ID Agence', 'required');
            $this->form_validation->set_rules('date_debut', 'Date début', 'required');
            $this->form_validation->set_rules('date_fin', 'Date fin', 'required');

            if ($this->form_validation->run() == TRUE) {
                $dataToUpdate = array(
                    'matricule' => $this->input->post('matricule'),
                    'ID_client' => $this->input->post('ID_client'),
                    'ID_agence' => $this->input->post('ID_agence'),
                    'date_debut' => $this->input->post('date_debut'),
                    'date_fin' => $this->input->post('date_fin'),
                );

                $status = $this->location_model->updateLocation($dataToUpdate, $id);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('location/edit/' . $id));
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

    public function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->location_model->deleteLocation($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('location/index/'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('location/index/'));
            }
        }
    }
}
?>
