<?php
ini_set('display_errors', '1');
require('../global.php');
$error=false;
if (isset($_GET['logout'])){
    unset($_SESSION['username']);
}
if (!empty($_SESSION['username'])){
    header('Location: dash.php');
}
if (!empty($_POST['login'])){
    if ($system->checklogin($_POST['login'],$_POST['password'])){
        $_SESSION['username']=$_POST['login'];
        header('Location: dash.php');
    }else{
        $error=true;
    }
}
$theme->header();
if ($error) $theme->postit('<h2>Wrong login</h2>');
$theme->postit('<h2>Login<h2>
                <form action="index.php" method="post">
                <h2><input name="login" placeholder="Username"/></h2>
                <p><input name="password" placeholder="Password" type="password"/></p>
                <p><input type="submit" value="Login" /></p>
                </form>
                ');

$theme->footer();