<?php

class Page extends CI_Controller {

    public function index()
    {
        $data['page_title'] = 'Accueil';
        $this->load->view('frontend/index', $data);
    }

    public function contact()
    {
        $data['page_title'] = 'Contact';
        $this->load->view('frontend/contact', $data);
    }

    public function espace_client()
    {
        $data['page_title'] = 'Espace client';
        $this->load->view('frontend/espace_client', $data);
    }

    public function reservation()
    {
        $data['page_title'] = 'Reservation';
        $this->load->view('frontend/reservation', $data);
    }

    public function listing()
    {
        $data['page_title'] = 'Taxi';
        $this->load->view('frontend/listing', $data);
    }

    public function agence()
    {
        $data['page_title'] = 'Agence';
        $this->load->view('frontend/agence', $data);
    }

    public function about()
    {
        $data['page_title'] = 'A propos';
        $this->load->view('frontend/about', $data);
    }

    public function sign_in()
    {
        $data['page_title'] = 'Connexion';
        $this->load->view('frontend/sign_in', $data);
    }

    public function reset()
    {
        $data['page_title'] = 'Réinitialiser le mot de passe';
        $this->load->view('frontend/reset', $data);
    }

    public function password()
    {
        $data['page_title'] = 'Changer le mot de passe';
        $this->load->view('frontend/password', $data);
    }
    
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard'; // Définir le titre de la page
        $this->load->view('frontend/dashboard', $data); // Charger la vue
    }

    public function vehicule()
    {
        $data['page_title'] = 'Vehicule';
        $this->load->view('frontend/vehicule', $data);
    }

    public function zaboun()
    {
        $data['page_title'] = 'Zaboun';
        $this->load->view('frontend/zaboun', $data);
    }
	public function transfert()
    {
        $data['page_title'] = 'transfert';
        $this->load->view('frontend/transfert', $data);
    }


}
?>
