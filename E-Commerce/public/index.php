<?php 
 
 require_once '../inc/header.php';
 
 require_once '../inc/nav.php';
 
require 'database/DatabaseManager.php';
require 'database/MigrationManager.php';


 $page = isset($_GET['page']) ? $_GET['page'] : 'home';


 require_once '../routes/web.php';













 
require_once '../inc/footer.php';

?>