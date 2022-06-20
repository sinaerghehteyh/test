<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    $name=$_POST['name'];
    $number=$_POST['mobaile'];
    $img=$_FILES['img'];
    session_start();
    //$id= $_SESSION['id'];

    move_uploaded_file($img['tmp_name'],'../img'.$img['name']);
$qqa='../img'.$img['name'];

session_start();
$id= $_SESSION['id'];


    $query="INSERT  INTO `postt`(`titele`,`img-pas`,`body`,`idxx`,`sto`) VALUES ('$name','$qqa','$number','$id',0)";

    $query_qqr= mysqli_query ($conn,$query);
    if($query_qqr){
        header('location:./addpost.php');
       // echo 'ssss';

    }else{
       echo 'name tekrary asttt';
    }


};
  

