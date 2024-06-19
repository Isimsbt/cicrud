<?php
class Paiement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('paiement_model');
    }

    public function index()
    {
        $data['paiements'] = $this->paiement_model->getAllPaiements();
        $this->load->view('paiement/index', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
				'ID_paiement' => $this->input->post('ID_paiement'),
                'ID_reservation' => $this->input->post('ID_reservation'),
                'montant' => $this->input->post('montant'),
                'date' => $this->input->post('date'),
                'mode_paiement' => $this->input->post('mode_paiement')
            );

            $this->paiement_model->insertPaiement($data);
            redirect('paiement');
        } else {
            $this->load->view('paiement/add_paiement');
        }
    }

    public function edit($ID_paiement)
    {
        $data['paiement'] = $this->paiement_model->getPaiement($ID_paiement);
        $data['ID_paiement'] = $ID_paiement;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->form_validation->set_rules('ID_paiement', 'ID_paiement', 'required');
            $this->form_validation->set_rules('ID_reservation', 'ID Reservation', 'required');
            $this->form_validation->set_rules('montant', 'Montant', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('mode_paiement', 'Mode de Paiement', 'required');

            if ($this->form_validation->run() == TRUE) {
				$ID_paiement = $this->input->post('ID_paiement');
                $ID_reservation = $this->input->post('ID_reservation');
                $montant = $this->input->post('montant');
                $date = $this->input->post('date');
                $mode_paiement = $this->input->post('mode_paiement');
                $dataToUpdate = array(
					'ID_paiement' => $ID_paiement,
                    'ID_reservation' => $ID_reservation,
                    'montant' => $montant,
                    'date' => $date,
                    'mode_paiement' => $mode_paiement
                );

                $status = $this->paiement_model->updatePaiement($dataToUpdate, $ID_paiement);
                if ($status == true) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('paiement'));
                } else {
                    $this->session->set_flashdata('error', 'Erreur');
                    $this->load->view('paiement/edit_paiement', $data);
                }
            } else {
                $this->load->view('paiement/edit_paiement', $data);
            }
        } else {
            $this->load->view('paiement/edit_paiement', $data);
        }
    }

    function delete($ID_paiement)
    {
        if (is_numeric($ID_paiement)) {
            $status = $this->paiement_model->deletePaiement($ID_paiement);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('paiement'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('paiement'));
            }
        }
    }
}
?>
