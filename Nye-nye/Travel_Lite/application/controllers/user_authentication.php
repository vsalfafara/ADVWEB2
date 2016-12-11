<?php
//session_start();

class user_authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->load->library('session');

        $this->load->model('login_database');

        $this->load->helper('security');
    }

    public function index(){
        $this->load->view('travel/login_form');
    }

    public function new_user_registration(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE){
            $this->load->view('travel/registration_form');
        }else{
            $data = array('user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password'));

            $result = $this->login_database->registration_insert($data);

            if($result == TRUE){
                $data['message_display'] = 'Registration Successful';
                $this->load->view('travel/login_form', $data);
            }else{
                $data['message_display'] = 'Account already exists';
                $this->load->view('travel/registration_form', $data);
            }
        }
    }

    public function user_login_process(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE)
        {
            if(isset($this->session->userdata['logged_in']))
            {
                $this->load->view('travel/index');
            }

            else
            {
                $this->load->view('travel/login_form');
            }

        }

        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'));

            $result = $this->login_database->login($data);

            if($result == TRUE){
                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);

                if($result != FALSE){
                    $session_data = array(
                        'id' => $result[0]->id,
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email
                    );

                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('templates/header');
                    $this->load->view('travel/index');
                    $this->load->view('templates/footer');
                }

            }else
            {
                $data = array('error_message' => 'Invalid Username or Password');
                $this->load->view('travel/login_form', $data);
            }
        }
    }

    public function logout(){
        $sess_array = array('username' => '');

        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('templates/header');
        $this->load->view('travel/index');
        $this->load->view('templates/footer');
    }
}
?>