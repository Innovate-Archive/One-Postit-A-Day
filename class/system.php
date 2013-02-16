<?php
class system{
    public $db='';
    public $mem='';
    
    public function __construct(){
        $this->db=new PDO('sqlite:'.ROOT.'/'.DB.'.sqlite3');
        $this->mem=new PDO('sqlite::memory:');
        $this->mem->setAttribute(PDO::ATTR_ERRMODE, 
                              PDO::ERRMODE_EXCEPTION);
    }
    
    public function checklogin($username,$password){
        $username=htmlspecialchars($username, ENT_QUOTES);
        $password=htmlspecialchars($password, ENT_QUOTES);
        $sql=$this->db->prepare("SELECT * FROM 'user' WHERE name='".$username."' AND pass='".$password."'");
        $sql->execute();
        $row=$sql->fetch(PDO::FETCH_NUM);
        if ($row[0]==1){
            return true;
        }else{
            return false;
        }
    }
    
}