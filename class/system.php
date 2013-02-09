<?php
class system{
    public $db='';
    public $mem='';
    
    public function __construct(){
        $this->db=new PDO('sqlite:'.DB.'.sqlite3');
        $this->mem=new PDO('sqlite::memory:');
        $this->mem->setAttribute(PDO::ATTR_ERRMODE, 
                              PDO::ERRMODE_EXCEPTION);
    }
    
}