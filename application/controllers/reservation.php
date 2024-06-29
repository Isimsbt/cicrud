<?php
class Reservation extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('reservation_model');
    }

    public function index()
    {
        $data['reservations'] = $this->reservation_model->getAllReservations();
        $this->load->view('reservation/index', $data); 
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'ID_client' => $this->input->post('ID_client'),
                'matricule' => $this->input->post('matricule'),
                'date_debut' => $this->input->post('date_debut'),
                'date_fin' => $this->input->post('date_fin'),
                'etat' => $this->input->post('etat'),
            );
            
            $this->reservation_model->insertReservation($data);
            redirect('reservation');  // Redirige vers la page index des réservations après ajout
        } else {
            $this->load->view('reservation/add_reservation');
        }
    }

	public function edit($id)
	{
		$data['reservation'] = $this->reservation_model->getReservation($id);
		$data['id'] = $id;
	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
					redirect(base_url('reservation/edit/' . $id));
				} else {
					$this->session->set_flashdata('error', 'Erreur');
					$this->load->view('reservation/edit_reservation', $data);
				}
			} else {
				$this->load->view('reservation/edit_reservation', $data);
			}
		} else {
			$this->load->view('reservation/edit_reservation', $data);
		}
	}
	
	public function delete($id)
	{
		if (is_numeric($id)) {
			$status = $this->reservation_model->deleteReservation($id);
			if ($status == true) {
				$this->session->set_flashdata('deleted', 'Supprimé avec succès');
				redirect(base_url('reservation/index/'));
			} else {
				$this->session->set_flashdata('error', 'Erreur');
				redirect(base_url('reservation/index/'));
			}
		}
	}
	
}
?>
