<?php
class posts{
    private $system='';
    public function __construct(){
        global $system;
        $this->system=$system;
    }
    
    function add($message){
        $message=htmlspecialchars($message, ENT_QUOTES);
        $time=time();
        $this->system->db->exec("INSERT INTO 'posts' ( 'id' , 'message' , 'time' ) 
                            VALUES ( NULL , '".$message."' , ".$time." )");
    }
    
    function get(){
        $sql=$this->system->db->prepare("SELECT * FROM 'posts'");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}