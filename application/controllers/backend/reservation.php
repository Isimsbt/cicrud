<?php
class Reservation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('reservation_model');
    }

    public function index()
    {
        $data['reservations'] = $this->reservation_model->getAllReservations();
        $this->load->view('backend/reservation/list_reservation_view', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('ID_client', 'ID Client', 'required');
            $this->form_validation->set_rules('matricule', 'ID Taxi', 'required');
            $this->form_validation->set_rules('date_debut', 'Date début', 'required');
            $this->form_validation->set_rules('date_fin', 'Date fin', 'required');
            $this->form_validation->set_rules('etat', 'État', 'required');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'ID_client' => $this->input->post('ID_client'),
                    'matricule' => $this->input->post('matricule'),
                    'date_debut' => $this->input->post('date_debut'),
                    'date_fin' => $this->input->post('date_fin'),
                    'etat' => $this->input->post('etat'),
                );

                $this->reservation_model->insertReservation($data);
                redirect('backend/reservation/list_reservation_view');
            } else {
                $this->load->view('backend/reservation/add_reservation_view');
            }
        } else {
            $this->load->view('backend/reservation/add_reservation_view');
        }
    }

    public function edit($id)
    {
        $data['reservation'] = $this->reservation_model->getReservation($id);
        $data['id'] = $id;

        if ($this->input->post()) {
            $this->form_validation->set_rules('ID_client', 'ID Client', 'required');
            $this->form_validation->set_rules('matricule', 'ID Taxi', 'required');
            $this->form_validation->set_rules('date_debut', 'Date début', 'required');
            $this->form_validation->set_rules('date_fin', 'Date fin', 'required');
            $this->form_validation->set_rules('etat', 'État', 'required');

            if ($this->form_validation->run() == TRUE) {
                $dataToUpdate = array(
                    'ID_client' => $this->input->post('ID_client'),
                    'matricule' => $this->input->post('matricule'),
                    'date_debut' => $this->input->post('date_debut'),
                    'date_fin' => $this->input->post('date_fin'),
                    'etat' => $this->input->post('etat'),
                );

                $status = $this->reservation_model->updateReservation($dataToUpdate, $id);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('backend/reservation/list_reservation_view' . $id));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('backend/reservation/edit_reservation_view', $data);
                }
            } else {
                $this->load->view('backend/reservation/edit_reservation_view', $data);
            }
        } else {
            $this->load->view('backend/reservation/edit_reservation_view', $data);
        }
    }

    public function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->reservation_model->deleteReservation($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
            } else {
                $this->session->set_flashdata('error', 'Erreur');
            }
        }
        redirect(base_url('backend/reservation/list_reservation_view'));
    }
}
?>
