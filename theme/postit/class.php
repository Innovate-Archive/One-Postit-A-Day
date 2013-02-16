<?php
class theme{
    function header(){
        require (ROOT.'/theme/'.THEME.'/header.php');
    }
    
    function footer(){
        require (ROOT.'/theme/'.THEME.'/footer.php');
    }
    function postit($message){
        echo '<div class="stickyNote" onload="stickyNote()">';
        echo '<p>'.$message.'</p>';
        echo '</div>';
    }
    function postitposition($message,$top,$left){
        echo '<div class="stickyNote" style="top: '.$top.'px; left: '.$left.'px; position: absolute;">';
        echo '<p>'.$message.'</p>';
        echo '</div>';
    }
    function move(){
        echo '<script type="text/javascript" src="mootools.js"></script>
        <script type="text/javascript">'."
		window.addEvent('domready', function(){
			$$('#container div').each(function(drag){
			new Drag.Move(drag);});	
		}); 
	</script>";
    }
}