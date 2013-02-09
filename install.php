<?php
require('global.php');
$system->db->exec("CREATE TABLE IF NOT EXISTS posts (
                    id INTEGER PRIMARY KEY,  
                    message TEXT, 
                    time INTEGER)");