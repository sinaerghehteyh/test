<?php

if($_POST['form']== "sabtnam"){
    sabtsnam_user();

}else if($_POST['form']== "vrood"){
    vrood_user();
}
function vrood_user(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qwer";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn){
        $name=$_POST['name'];
        $number=$_POST['mobaile'];
       // $img=$_FILES['img'];
       
      //  move_uploaded_file($img['tmp_name'],'./img'.$img['name']);
   // $qqa='./img'.$img['name'];
    
   // $query="INSERT  INTO `ersss`us(`name`,`profile`,`numbrr`) VALUES ('$name','$qqa','$number')";
    //$query="SELECT *  FROM `uersss` WHERE mame= ' $name ' AND numbrr='$number'  ";
    $query="SELECT * FROM`usersss`WHERE name= '$name' AND numbrr='$number' ";
        $query_qqr= mysqli_query ($conn,$query);
        if (mysqli_num_rows($query_qqr) ==1){
      session_start();
      $user= mysqli_fetch_all( $query_qqr);
      $_SESSION['id'] = $user[0][0];
     // var_dump($user);
           header('location:./addpost.php');
           
 // print_r(var_dump($conn));
        }else{
           echo 'name va ya pasword eshtebah ast';
           
        };
    
    
    };};



function  sabtsnam_user(){
 
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
   $sh=$_POST['sh'];
    move_uploaded_file($img['tmp_name'],'./img'.$img['name']);
$qqa='/img'.$img['name'];

    $query="INSERT  INTO `usersss`(`name`,`profile`,`numbrr`,`sh`) VALUES ('$name','$qqa','$number','$sh')";

    $query_qqr= mysqli_query ($conn,$query);
    if($query_qqr){
        header('location:./vrood.html');
        //echo 'ssss';

    }else{
       echo 'name tekrary asttt';
    }


};
};