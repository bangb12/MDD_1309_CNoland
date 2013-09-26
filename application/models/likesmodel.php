<?

class likesModel extends CI_Model{
    
    function get_likes()
    {
        $query = $this->db->get('likes');
        return $query = $query->result_array();
    }
    
}
?>