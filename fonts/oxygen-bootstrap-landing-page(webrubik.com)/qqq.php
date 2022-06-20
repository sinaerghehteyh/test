<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qwer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn){
 //session_start();
   $id=$_GET['id'];
  
  //print_r(var_dump($id));
   //$ss=  mysqli_fetch_all(   $posts );
 $query="SELECT * FROM postt WHERE id= '$id'  ";
$posts=  mysqli_fetch_all(    mysqli_query($conn,$query)   );

//p


}




?>

		
		<!--posttt3 -->
		<div id="gtco-features">
			<div class="gtco-container">
				<div class="row">
				
					<?php foreach($posts as $postt) {    ?>
                    <div class="col-md-4 col-sm-4">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
                        
								
							</span>

	<img  src="<?php print_r( $postt[2]);   ?>  " class="col-md-10 col-sm-10"   alt="user">

	<h3>  <?php  print_r( $postt[1]);   ?>  </h3>

						<p>  <?php  print_r( $postt[3]);   ?>   </p>

							<p><a href="#" class="btn btn-primary">بیشتر</a></p>
						</div>
					</div>
                
<?php }; ?>
