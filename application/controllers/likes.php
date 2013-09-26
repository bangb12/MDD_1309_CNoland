<?php
    class likes extends CI_Controller{
    
        function construct()
        {
            $this->load->model('likesmodel');
        }
        function index()
        {
            $listing = 'http://localhost:8888/MDD_1309_CNoland/index.php?action=home';
            $data['likes'] = $this->likesmodel->get_likes();
            header("Location: $listing", $data);
        }
    }

?>