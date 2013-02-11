<?php
ini_set('display_errors', '1');
require ('global.php');
$posts=new posts;
$theme=new theme;
$theme->header();
foreach ($posts->get() as $id=>$data){
    $theme->postit($data['message']);
}
$theme->footer();