<?php
    class Pages extends CI_Controller{
    
        function faq()
        {
            $this->load->view('faq');
        }
        function details($id)
        {
            $this->load->view($id);
        }
    }

?>