
<?php 

if(session_status()==PHP_SESSION_NONE)session_start();
 if(isset($_POST['logout'])){
    session_destroy();
    echo 'you are logged out' ;
    exit();
 }



?>
