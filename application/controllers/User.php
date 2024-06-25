<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['users'] = $this->user_model->getAllUsers();
        $this->load->view('user/index', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
				'ID_client' => $this->input->post('ID_client'),
                'Nom_client' => $this->input->post('Nom_client'),
                'email' => $this->input->post('email'),
                'adresse' => $this->input->post('adresse'),
                'telephone' => $this->input->post('telephone'),
                'nationalite' => $this->input->post('nationalite'),
                'gender' => $this->input->post('gender')
            );

            $this->user_model->insertUser($data);
            redirect('user');
        } else {
            $this->load->view('user/add_user');
        }
    }

    public function edit($ID_client)
    {
        $data['client'] = $this->user_model->getUser($ID_client);
        $data['ID_client'] = $ID_client;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('Nom_client', 'Nom', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('adresse', 'Adresse', 'required');
            $this->form_validation->set_rules('telephone', 'Téléphone', 'required');
            $this->form_validation->set_rules('nationalite', 'Nationalité', 'required');
            $this->form_validation->set_rules('gender', 'Genre', 'required');

            if ($this->form_validation->run() == TRUE) {
                $dataToUpdate = array(
                    'Nom_client' => $this->input->post('Nom_client'),
                    'email' => $this->input->post('email'),
                    'adresse' => $this->input->post('adresse'),
                    'telephone' => $this->input->post('telephone'),
                    'nationalite' => $this->input->post('nationalite'),
                    'gender' => $this->input->post('gender')
                );

                $status = $this->user_model->updateUser($dataToUpdate, $ID_client);
                if ($status) {
                    $this->session->set_flashdata('success', 'Mise à jour réussie');
                    redirect(base_url('user'));
                } else {
                    $this->session->set_flashdata('error', 'Erreur lors de la mise à jour');
                    $this->load->view('user/edit_user', $data);
                }
            } else {
                $this->load->view('user/edit_user', $data);
            }
        } else {
            $this->load->view('user/edit_user', $data);
        }
    }
	public function delete($ID_client)
	{
		if (is_numeric($ID_client)) {
			$status = $this->user_model->deleteUser($ID_client);
			if ($status == true) {
				$this->session->set_flashdata('deleted', 'Supprimé avec succès');
			} else {
				$this->session->set_flashdata('error', 'Erreur lors de la suppression');
			}
		} else {
			$this->session->set_flashdata('error', 'ID client invalide');
		}
		redirect(base_url('user/index'));
	}
	

	


}
?>
