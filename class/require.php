<?php
defined('OnePostitADay') or die();

 /*
 Require.php: this file includes all the files where that classes are stored
 
 */
 function __autoload($class_name) {
    if ($class_name=='theme'){
        require_once(ROOT.'/theme/'.THEME.'/class.php');
    }else{
        require_once(ROOT.'/class//'.$class_name.'.php');
    }
    
 }
  