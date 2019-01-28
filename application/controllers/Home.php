<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('Login_view');
    }

    public function Register()
    {
        $this->load->view('register_view');
    }

    public function Login()
    {
        $this->load->view('login_view');
    }

    public function Masuk()
    {
        $this->load->view('user_view');
    }

    public function Profil()
    {
        $this->load->view('profil');   
    }

    public function Contact()
    {
        $this->load->view('contact');
    }

    public function About()
    {
        $this->load->view('about');
        
    }
}

/* End of file Home.php */


?>