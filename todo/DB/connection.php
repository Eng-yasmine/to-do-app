<?php

# CONNECTION WITH DATABASE 
$conn = mysqli_connect("localhost" , "root" ,"" ,"todoapp");

if(!$conn){
    echo "connect failed" . mysqli_connect_error($conn);
}

#CREATE DATABASE 
$sql ="CREATE DATABASE IF NOT EXISTS todoapp" ;
#MAKE QUERY
$query = mysqli_query($conn , $sql);

mysqli_close($conn);


// echo "<pre>" ;
// var_dump($conn); 
 

# CREATE TABLE-.................... 
$conn = mysqli_connect("localhost" , "root" ,"" ,"todoapp");

if(!$conn){
    echo "connect failed" . mysqli_connect_error($conn);
}

#CREATE  TABLES---------- 
$sql ="CREATE TABLE IF NOT EXISTS `tasks`(

id INT PRIMARY KEY AUTO_INCREMENT ,

title VARCHAR(200) NOT NULL 
)" ;

#MAKE QUERY
$query = mysqli_query($conn , $sql);



// echo "<pre>" ;
// var_dump($conn); 










?>