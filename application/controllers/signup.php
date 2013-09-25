<?php
    class Signup extends CI_Controller{
    
        function view()
        {
            $this->load->helper(array('form'));
            $this->load->view('signupview');
        }
        function register()
        {
            $this->load->model('usermodel');
            $this->usermodel->signup();
        }
    }

?>