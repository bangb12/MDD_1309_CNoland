<?php
    class Images extends CI_Controller{
    
        function loadImg($imageid)
        {
            $this->load->model('imagemodel');
            var_dump($imageid);
            $this->imagemodel->getImage($imageid);
        }
    }

?>