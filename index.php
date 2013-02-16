<?php
ini_set('display_errors', '1');
require ('global.php');
$posts=new posts;
$theme->header();
$theme->move();
foreach ($posts->get() as $id=>$data){
    $theme->postit($data['message']);
}
$theme->footer();