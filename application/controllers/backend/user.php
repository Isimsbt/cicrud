<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model'); // Assuming 'user_model' corresponds to 'client_model'
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ID_client = $this->input->post('ID_client');
            $Nom_client = $this->input->post('Nom_client');
            $email = $this->input->post('email');
            $adresse = $this->input->post('adresse');
            $genre = $this->input->post('genre');
            $telephone = $this->input->post('telephone');
            $nationalite = $this->input->post('nationalite');

            $data = array(
                'ID_client' => $ID_client,
                'Nom_client' => $Nom_client,
                'email' => $email,
                'adresse' => $adresse,
                'genre' => $genre,
                'telephone' => $telephone,
                'nationalite' => $nationalite,
            );

            $status =  $this->user_model->insertClient($data); // Adjust function name to 'insertClient' in your model
            if ($status == true) {
                $this->session->set_flashdata('success', 'Client successfully added');
                redirect(base_url('backend/user/add'));
            } else {
                $this->session->set_flashdata('error', 'Error adding client');
                $this->load->view('backend/user/add_user_view');
            }
        } else {
            $this->load->view('backend/user/add_user_view');
        }
    }

    function index()
    {
        $data['clients'] = $this->user_model->getAllUsers(); // Adjust function name to 'getAllClients' in your model
        $this->load->view('backend/user/list_user_view', $data); // Adjust view name if needed
    }

    function edit($id)
    {
        $data['client'] = $this->user_model->getUser($id); // Adjust function name to 'getClient' in your model
        $data['id'] = $id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ID_client = $this->input->post('ID_client');
            $Nom_client = $this->input->post('Nom_client');
            $email = $this->input->post('email');
            $adresse = $this->input->post('adresse');
            $genre = $this->input->post('genre');
            $telephone = $this->input->post('telephone');
            $nationalite = $this->input->post('nationalite');

            $data = array(
                'ID_client' => $ID_client,
                'Nom_client' => $Nom_client,
                'email' => $email,
                'adresse' => $adresse,
                'genre' => $genre,
                'telephone' => $telephone,
                'nationalite' => $nationalite,
            );

            $status =  $this->user_model->updateClient($data, $id); // Adjust function name to 'updateClient' in your model
            if ($status == true) {
                $this->session->set_flashdata('success', 'Client successfully updated');
                redirect(base_url('backend/user/edit/' . $id));
            } else {
                $this->session->set_flashdata('error', 'Error updating client');
                $this->load->view('backend/user/edit_user_view');
            }
        }

        $this->load->view('backend/user/edit_user_view', $data); // Adjust view name if needed
    }

    function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->user_model->deleteUser($id); // Adjust function name to 'deleteClient' in your model
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Client successfully deleted');
                redirect(base_url('backend/user/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error deleting client');
                redirect(base_url('backend/user/index/'));
            }
        }
    }
}
