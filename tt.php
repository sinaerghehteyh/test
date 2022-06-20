<?php


$r=$_GET['req'];

if($r=='ss'){
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    $e=$_GET['id'];
    $query="UPDATE`postt` SET sto=1 WHERE id='$e'";
  $ppl=  mysqli_query($conn,$query);
if($ppl){
   // echo 'aaaa';
  // header('location:./admin.php');
}else{echo 'ssss';
  
print_r(var_dump($conn));
}



  
  
    # code...

    
}}
 







if($r=='de'){
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    $e=$_GET['id'];
   $query="UPDATE `postt` SET  sto=11 WHERE id='$e'";
  $ppl=  mysqli_query($conn,$query);
if($ppl){
    echo 'aaaa';
}else{echo 'ssss';
  
print_r(var_dump($conn));
}



  
  
    # code...

    
}}

