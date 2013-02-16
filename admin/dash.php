<?php
@ini_set('display_errors', '1');
require('../global.php');
if (empty($_SESSION['username'])){
    header('Location: index.php');
}
$posts=new posts;
$last=end($posts->get());
$theme->header(); 
if (time() - $last['time'] <= 86400){
    $theme->postit('You may only place one post-it a day');
}else{
    if (!empty($_POST['post'])){
        $posts->add($_POST['post']);
        $theme->postit('<h1>It is posted!</h2>');
    }else{
        $theme->postit('<form action="dash.php" method="post">
                    <p><textarea name="post"></textarea></p>
                    <p><input type="submit" value="Post it"/></p>
                    </from>
                    ');
    }
    
}
$theme->postitposition('<form action="index.php">
                        <input type="submit" name="logout" value="Log Out""/>
                        </form>
                        ',10,921);
$theme->footer();
