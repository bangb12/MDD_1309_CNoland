<?php
    class Pages extends CI_Controller{
    
    //loads views based on what page needs to be opened
        function faq()
        {
            $this->load->view('faq');
        }
        //Id is passed through URL to determine which detail needs to be opened
        function details($id)
        {
            $this->load->view($id);
        }
        function terms()
        {
            $this->load->view('terms');
        }
    }

?>