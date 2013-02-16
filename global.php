<?php
ini_set('session.save_path', '/tmp');
session_start();
define('OnePostitADay',true);
define('ROOT', dirname(__FILE__));
require(ROOT.'/config.php');
require(ROOT.'/class/require.php');
$system= new system;
$theme= new theme;