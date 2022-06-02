<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>scool 33 view </title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
	<style>
    .logo{
      color: orange !important;
      text-decoration: solid
    }
    .ex-header {
      padding-top: 8rem;
      padding-bottom: 5rem;
      background: url(../images/j3.jpg) center center no-repeat;
      background-size: cover;
      background-position: 0px -450px;
      text-align: center;
  
  }
  </style>
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <span class="navbar-brand logo-image logo" href="index.html">SCHOOL 33</span>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
           
           
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
<?
  if(isset($_GET['qid']))
  {

      include "hosting.php";
      $sql = "select * from news_2 where id=".$_GET['qid'];
      $q = $con->query($sql);
      $r=$q->fetch_object();
}else if(isset($_GET['qid2']))
{
    include "hosting.php";
      $sql = "select * from update1 where id=".$_GET['qid2'];
      $q = $con->query($sql);
      $r=$q->fetch_object();
}else if(isset($_GET['qid3']))
{
    include "hosting.php";
      $sql = "select * from up2 where id=".$_GET['qid3'];
      $q = $con->query($sql);
      $r=$q->fetch_object();
}
?>        
         
         <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="white">Assalomu alaykum school 33 view qismiga xush kelibsiz</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                   

                    <div class="text-container last">
                        <h2><?= $r->title?></h2>
					             <p><?= $r->content?></p>
                    </div> 
                    
                    <!-- end of text-container -->
                    <a class="btn-solid-reg" href="../index.php">BACK</a>
                </div>
                <div class="col-lg-6"> 
                    <img src="../images/<?= $r->rasm?>" alt="" width="500px" height="300px">
                </div>
                <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->





    
    <!-- Footer -->


      <!-- Copyright -->
      <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">33-maktab © 2022 <a href="https://abdumajidweb.netlify.app" target="aria">Aria</a> - yana bir loyha</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>