<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soulful Art</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  function submisubscription()
  {
    if($('#email').val().indexOf('@')>0 && $('#email').val().indexOf('.com')>0)   
    $('#lblSubscribe').css('display', 'block');
    else
    $('#lblSubscribe').css('display', 'none');
  }
  function setup() {
        var tmp = get('active_link');
        if (tmp)
        {
        $("#navigation li.active").removeClass("active");
        $('#'+tmp).addClass("active");
        };
        
    } 
    function get(name) {
        if (typeof (Storage) !== "undefined") {
          return localStorage.getItem(name);
        } 
    }
    function store(name, val) {
        if (typeof (Storage) !== "undefined") {
          localStorage.setItem(name, val);
        } 
    }
  $(document).ready(function(){
    
    setup();
    $(".navbar li a").click(function(e) { 
     store('active_link', $(this).attr('id'));
 });
    });

 
    </script>
  </head>

<body>
 
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Soulful Art</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a id="home" class="nav-link  " href="../../index.php"  ><span class="nav-link-sp active">Home</span></a></li>
          <li><a id="about" class="nav-link " href="../../about.php" ><span class="nav-link-sp">About</span></a></li>
          <li><a id="products" class="nav-link " href="../../products.php" >Products</a></li>
          <li><a id="portfolio" class="nav-link  " href="../../portfolio" >Portfolio</a></li>
          <li><a id="services" class="nav-link " href="../../services.php" >Services</a></li>         
          <li><a id="news" class="nav-link " href="../../news.php" >News</a></li>
          <li><a id="contacts" class="getstarted " href="../../contacts.php" >Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
