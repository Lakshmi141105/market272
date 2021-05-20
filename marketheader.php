
<?php require "assets/services/marketdbconnector.php"?>
<?php
if(!session_id()){
    session_start();
}
?>
!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soulful Art </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Favicons -->
   <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link href="assets/css/marketstyle.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
 

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

  <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div class="container">
            	<!-- <img src="assets/img/navbar-logo.svg" alt="" /> -->
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><h4 style="color:white;background-color:rgba(0,0,0,0.1);">Market place for all</h4></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <svg class="svg-inline--fa fa-bars fa-w-14 ml-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars ml-1"></i> Font Awesome fontawesome.com -->
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">                       
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="markethomepage.php">Home</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketmostrated.php">Top Rated</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketmostreviewed.php">Highly Reviewed</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketmostviewed.php">Most Popular</a></li>
						<?php 
						if(empty($_SESSION["uname"]))
                        	echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketlogin.php">Login</a></li>';
						?>
						<?php 
						if(empty($_SESSION["uname"]))
                        	echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketsignup.php">Signup</a></li>';
						?>
						<?php if(!empty($_SESSION["uname"])) 
							echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="marketlogout.php">Logout</a></li>';
						?>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"> <?php if(!empty($_SESSION["uname"])){ echo "Welcome ". $_SESSION["uname"]."!";} else{echo "";} ?></a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#users">Users</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
     
   