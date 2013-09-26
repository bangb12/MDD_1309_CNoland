<?

class imageModel extends CI_Model{
    
    public function __constract(){
        
    }
    //Takes the id passed in to determine which image to load from the database
    public function getImage($imageid){
        $this->db->select('imagepath');
        $this->db->where('id', $imageid);
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return FALSE;
        }
    }
}
?>