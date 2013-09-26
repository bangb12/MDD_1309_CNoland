<?php
    class Images extends CI_Controller{
    
    //Loads the model and intiates getting the image
        function loadImg($imageid)
        {
            $this->load->model('imagemodel');
            var_dump($imageid);
            $this->imagemodel->getImage($imageid);
        }
    }

?>