<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>   افزودن صفحه</title>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css"/>
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
session_start();
   $id=$_SESSION['id'];
  //print_r(var_dump($id));
   //$ss=  mysqli_fetch_all(   $posts );
 $query="SELECT * FROM postt WHERE idxx= '$id'  ";
$posts=  mysqli_fetch_all(    mysqli_query($conn,$query)   );

//p


};



?>

	<div class="gtco-loader"></div>
	<div id="page">
		<!--start navbar and menu -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo"><a href="index.php">Oxygen.</a></div>
					</div>
					<div class="col-xs-8 text-center menu-1">
						<ul>
							<li class="active"><a href="index.php">صفحه نخست</a></li>
							<li><a href="#">درباره ما</a></li>
							<li class="has-dropdown">
								<a href="#">سرویس ها</a>
								<ul class="dropdown">
									<li><a href="#">طراحی سایت</a></li>
									<li><a href="#">گرافیک</a></li>
									<li><a href="#">برندسازی</a></li>
									<li><a href="#">سئو</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="#">ابزارها</a>
								<ul class="dropdown">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">bootstrap</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</li>
							<li><a href="#">تماس با ما</a></li>

                
						</ul>

	
						</ul>
					</div>
                    </div>
					<div class="col-xs-2 text-left hidden-xs menu-2">
						<ul>
	<li class="btn-cta"><a    href="ez post.html"><span>  اضافه کردن مقاله    </span></a></li>
						
				</div>
			</div>
		</nav>
        
		<!--start header -->
		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(pics/img_bg_1.jpg);">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Oxygen</h1>
<h2> <a href="http://webrubik.com/" target="_blank"> </a><br> داشبورد.</h2>
								<p><a href="#" class="btn btn-default">شروع کنید</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--end header -->


              
		
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

<p><a href="eee.php/?id=<?php print_r($postt[0]);?>" class="btn btn-primary">بیشتر</a></p>
<p><a  class="btn btn-primary">وضعیت _<?php if($postt[5]==1){echo 'تایید شد';}elseif($postt[5]==0){echo 'در انتضار تایید ناظر';}  ?></a></p>
						</div>
					</div>
                
<?php }; ?>

		<!-- start footer -->
		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget">
						<h3>شرکت</h3>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
						<p><a href="#">بیشتر</a></p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="gtco-footer-links">
							<li><a href="#">درباره ما</a></li>
							<li><a href="#">تماس با ما</a></li>
							<li><a href="#">قوانین</a></li>
							<li><a href="#">سوالات متداول</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="gtco-footer-links">
							<li><a href="#">فروشگاه</a></li>
							<li><a href="#">شخصی</a></li>
							<li><a href="#">شرکتی</a></li>
							<li><a href="#">سایت ساز</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="gtco-footer-links">
							<li><a href="#">یافتن طراحان</a></li>
							<li><a href="#">یافتن برنامه نویسان</a></li>
							<li><a href="#">اعضای تیم</a></li>
							<li><a href="#">خدمات</a></li>
						</ul>
					</div>
				</div>

				<div class="row copyleft">
					<div class="col-md-12">
						<p class="pull-right">
							<small class="block">&copy; 2019 Free HTML5. All Right Reserved.</small>
							<small class="block">translated by <a href="http://webrubik.com/" target="_blank">webrubik.com</a></small>
						</p>
						<p class="pull-left">
						<ul class="gtco-social-icons pull-left">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script  src="js/scripts.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>