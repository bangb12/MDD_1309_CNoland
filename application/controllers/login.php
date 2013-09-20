<?php
    class Login extends CI_Controller{
        function view()
        {
            $this->load->view('loginview');
        }
        function validate_credentials()
        {
            $this->load->library('form_validation');
            //Sets the rules that the login requires, and starts check_database() method
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
            //If form is valid, logs in, otherwise shows login again
            if($this->form_validation->run() == FALSE){
                $_SESSION['errors'] = array("Your username or password was incorrect");
                log_message('error', 'Username or Password field did not match anything in database');
            $this->load->view('loginview');
            }else{
                $this->load->view('listing');
            }
        
        }
            //References the database
            function check_database($password)
            {
                //Puts username into its own variable
                $username = $this->input->post('username');
                //Starts the login method and puts the result into a variable
                $result = $this->loginmodel->login($username, $password);
                //If the result is true, sets up session data for the user including the logged in status
                if($result){
                    $sess_array = array();
                    foreach($result as $row){
                        $sess_array = array(
                            'id' => $row->id,
                            'username' => $row->username
                        );
                        $this->session->set_userdata('logged_in', $sess_array);
                    }
                    return TRUE;
                }else{
                    $this->form_validation->set_message('check_database', 'Invalid username or password');
                    return false;
                }
            }
    }
?>