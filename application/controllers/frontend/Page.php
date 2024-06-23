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

    public function login()
    {
        $data['page_title'] = 'Espace client';
        $this->load->view('frontend/espace_client', $data);
    }

    public function reservation()
    {
        $data['page_title'] = 'Reservation';
        $this->load->view('frontend/reservation', $data);
    }

    public function taxi()
    {
        $data['page_title'] = 'Taxi';
        $this->load->view('frontend/listing', $data);
    }

    public function agence()
    {
        $data['page_title'] = 'Agence';
        $this->load->view('frontend/agence', $data);
    }

    public function propos()
    {
        $data['page_title'] = 'A propos';
        $this->load->view('frontend/about', $data);
    }
}

?>
