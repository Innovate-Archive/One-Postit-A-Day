<?php
defined('OnePostitADay') or die();

    /*
    Require.php: this file includes all the files where that classes are stored
    
    */
    function __autoload($class_name) {
       require_once(dirname(__FILE__) . '/' . $class_name .'.php');
    }
  