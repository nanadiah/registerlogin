<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser()
    {
        //$this->load->model('Model_user');
        //$this->load->library('session');

        //$this->form_validation->set_rules('username', 'Username', 'required');
        //$this->form_validation->set_rules('password', 'Password', 'required');

        
        /*if ($this->form_validation->run() == FALSE) 
        { 
                $this->load->view('login_view');
        } 
        else 
        {
            $this->load->model('model_user');
            $cek = $this->model_user->checkLogin();

            if ($cek != FALSE) 
            {
                $_SESSION = $_POST['username'];
                $_SESSION = $_POST['password'];

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();
                $user = $query->row();
                
                if($user->username)
                {
                    $this->session->set_flashdata('Login');

                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $user->username;
                    redirect('Home/Login');
                }
                
            } else {
                $this->session->set_flashdata('error', 'gagal masuk');
                redirect('Home/index');
            }
            
            $this->load->view('user_view');
            
        }*/

        $this->load->model('Model_user');
        $query = $this->Model_user->checkLogin();
        $username = $query[0]->username;

        $listSession = array('username' => $username);

        
        $this->session->set_userdata($listSession);
        $this->session->set_flashdata('berhasil', 'Anda telah masuk.');
        
        redirect('Home/Masuk');
        
        

    }

    public function logoutUser()
    {
        //$this->session->sess_destroy();
        unset($_SESSION);
        redirect('Home/index');
    }

}

/* End of file Login.php */


?>