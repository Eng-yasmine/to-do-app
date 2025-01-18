<?php 
$titl ='register';
if(session_status() == PHP_SESSION_NONE)session_start();





 // print_r($_POST) ; done
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $name = $_POST['name'] ;
 $email = $_POST['email'] ;
$password = $_POST['password'] ;
 
// valid data 
 $valid_name = "yasmeen";
 $valid_email = "yas@yahoo.com";
 $valid_pwd ="123456";

if( $name == $valid_name && $email == $valid_email && $password == $valid_pwd){
   if(!isset($_SESSION['user_data'])){
    
     $_SESSION['user_data'] = ['name' => $name,'email'=> $email,'password'=> $valid_pwd ];
   
     header('location:dashboard.php');
   exit();
 }else{
     echo "session isn't set";
 }

 


 //var_dump($_POST);
 }else{

echo "invalid data";

 }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ;?></title>
</head>
<body>
      
    
<div class="container px-4 px-lg-5 mt-5">
    <div class="row bg-primary.bg-gradient">
        <div class="col-8 mx-auto">
        <h1>Register</h1>
            <form action="" method="POST" class="form border my-2 p-3">
                <div class="mb-3">
                    <div class="mb-3 form-control">
                        <label for="name">user name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3 form-control">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3 form-control">
                        <label for="pass">password</label>
                        <input type="password" name="password" id="pass" class="form-control">
                    </div>
                    <div class="mb-3 form-group">
                        <input type="submit" value="register" id="" class="btn btn-primary">
                        <p>if you have an account >> <a href="login.php">login </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    



</body>
</html>