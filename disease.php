<!DOCTYPE html>
<html lang="en">
<head>
<title>Malaria Analysis</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">For Emergencies: 102</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li class="menu_item menu_mm"><a href="home.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="bmi.html">BMI & BMR Analysis</a></li>
					<li class="menu_item menu_mm"><a href="dsearch.php">Disease Search</a></li>
					<li class="menu_item menu_mm"><a href="msearch.php">Medicine Search</a></li>
					<li class="menu_item menu_mm"><a href="javascript:myFunction();">Log Out</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
					<div class="col-lg-5">
						<div class="logo_container">
							<a href="#">
								<div class="about_image"><img src="imagehac.png" alt=""></div>
							</a>
							
						</div>
					</div>
				</div>
			</div>	

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="bmi.html">BMI Analysis</a></li>
					<li class="menu_item menu_mm"><a href="dsearch.php">Disease Search</a></li>
					<li class="menu_item menu_mm"><a href="msearch.php">Medicine Search</a></li>
					<li class="menu_item menu_mm"><a href="logout.html">Log Out</a></li>
				</ul>
			</div>
			<div class="menu_extra">
				
				<div class="menu_emergencies">For Emergencies: 102</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>Malaria</span> Detection</div>
							<form action="disease.php" enctype="multipart/form-data" method="post">
Select image :
<form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
 
 
</form>
		
							<div class="breadcrumbs">
								<ul>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<script>
function myFunction() {
  var txt;
  if (confirm("Are you sure you want to log out ?")) {
   window.location.href = "index.html";

  } else {
    
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>


	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

  
</body>
</html>

<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"test/".$file_name);
         #echo "Success";
      }else{
         print_r($errors);
      }
   
   #echo $file_name;
   	
	$text1='python malariacell.py test/'.$file_name;
	#echo $text1;
	$command = escapeshellcmd($text1);
	$output = shell_exec($command);
	$location="test/".$file_name;
	echo '<img src='.$location.' height=200 width=300 />';
	echo("         Result:   ".$output);
   }
?>