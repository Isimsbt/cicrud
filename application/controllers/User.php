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

public function add() {
    if ($this->input->post()) {
        $data = array(
			'ID_client' => $this->input->post('ID_client'),
			'Nom_client' => $this->input->post('Nom_client'),
			'email' => $this->input->post('email'),
			'adresse' => $this->input->post('adresse'),
			'telephone' => $this->input->post('telephone'),
			'nationalite' => $this->input->post('nationalite')
		);
		
        $this->user_model->insertUser($data);
        redirect('user');
    } else {
        $this->load->view('user/add_user');
    }
}



public function edit($id)
{
    $data['client'] = $this->user_model->getUser($id);
    $data['id'] = $id;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules('Nom_client', 'Nom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('adresse', 'Adresse', 'required');
        $this->form_validation->set_rules('telephone', 'Téléphone', 'required');
        $this->form_validation->set_rules('nationalite', 'Nationalité', 'required');

        if ($this->form_validation->run() == TRUE) {
            $Nom_client = $this->input->post('Nom_client');
            $email = $this->input->post('email');
            $adresse = $this->input->post('adresse');
            $telephone = $this->input->post('telephone');
            $nationalite = $this->input->post('nationalite');
            $dataToUpdate = array(
                'Nom_client' => $Nom_client,
                'email' => $email,
                'adresse' => $adresse,
                'telephone' => $telephone,
                'nationalite' => $nationalite,
            );

            $status = $this->user_model->updateUser($dataToUpdate, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'Mise à jour réussie');
                redirect(base_url('user')); // Redirection après mise à jour réussie
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                $this->load->view('user/edit_user', $data);
            }
        } else {
            $this->load->view('user/edit_user', $data);
        }
    } else {
        $this->load->view('user/edit_user', $data);
    }
}

	
	

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status = $this->user_model->deleteUser($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Supprimé avec succès');
                redirect(base_url('user/index/'));
            } else {
                $this->session->set_flashdata('error', 'Erreur');
                redirect(base_url('user/index/'));
            }
        }
    }
}
?>
