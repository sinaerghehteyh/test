<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>   singel post</title>
	<!-- Animate.css -->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap- css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap- css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap- css/bootstrap-rtl.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap-css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap-  css/owl.carousel.min.css">
	<link rel="stylesheet" href=" http://localhost/aas/oxygen-bootstrap- css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="http://localhost/aas/oxygen-bootstrap-css/style.css"/>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn){

   $id=$_GET['id'];
  //print_r(var_dump($id));
   //$ss=  mysqli_fetch_all(   $posts );
 $query="SELECT * FROM postt WHERE id= '$id'  ";
$posts=  mysqli_fetch_all(    mysqli_query($conn,$query)   );

//p


};



?>
              
		
		<!--posttt3 -->
		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
			
  
					<?php foreach($posts as $postt) {  
                        
                      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn){
$a=   $postt[4];
   
 $query="SELECT * FROM usersss WHERE id= '$a'  ";
$posts=  mysqli_fetch_all(    mysqli_query($conn,$query)   );

foreach($posts as $usersss){};
 // print_r(var_dump($usersss[4]));
}; 
                        ?>
                        
     
  


                    <div class="col-md-4 col-sm-4">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
                        
								
							</span>

	<img  src="<?php print_r( $postt[2]);   ?>  " class="col-md-10 col-sm-10"   alt="user">

	<h3>  <?php  print_r( $postt[1]);   ?>  </h3>

						<p>  <?php  print_r( $postt[3]);   ?>   </p>

		<p><a href="#" class="btn btn-primary"> شماره تماس اگهی  <?php print_r( $usersss[4]) ;?></a></p>
						</div>
					</div>
                
<?php }; ?>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>