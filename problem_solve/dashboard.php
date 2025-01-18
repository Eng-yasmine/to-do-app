<?php
if(session_status() === PHP_SESSION_NONE)session_start();

$count = $_SESSION['visit']++ ;

$_SESSION['last_visit']= date('y-m-d h:i:s');
  echo "welcom ". $_SESSION['userdata']['name']."you visit this page $count times". $_SESSION['first_visit'] . "the last visit is  " . $_SESSION['last_visit'] ; 


?>
<form action="logout.php" method="POST">
  <div>
  <button type="submit" name="logout">LOGOUT</button>
  </div>
</form>