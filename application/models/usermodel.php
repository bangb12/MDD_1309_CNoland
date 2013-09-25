<?

class userModel extends CI_Model{
    
    public function __constract(){
        
    }
    
    public function login($username,$password){ //Passes in username and password from login fields
        //Selects from the database should something match the username and password input
        $this->db->select('id, username, password');
        $this->db->from('Users');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        //Gets the result of the selection
        $query = $this->db->get();
        //If statement that leads to log in if there is a row, which means something matched.
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return FALSE;
        }
        
    }
    public function signup(){
        //Posts data from the form into variables
        $listing = 'http://localhost:8888/MDD_1309_CNoland/index.php?actin=home';
        $signup = 'http://localhost:8888/MDD_1309_CNoland/index.php/signup/view/';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username:', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password:', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('passwordconfirm', 'Password Confirm:', 'trim|required|matches[password]');
       //Checks if form validation found problems, posts to database if everything is okay
       if($this->form_validation->run() == FALSE)
       {
            log_message('error', 'Unable to insert into Datbase, Validation failed');
            header("Location: $signup");
       }else{
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            //Uses those variables to insert into the database
            $query=mysql_query("INSERT into Users(username, password)VALUES('$username', '$password')");
            header("Location: $listing");
       }
    }
}
?>