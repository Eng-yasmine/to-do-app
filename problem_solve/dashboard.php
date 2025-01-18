<?php
if(session_status() == PHP_SESSION_NONE)session_start();


echo "welcome $_SESSION[user_data]"; 


?>