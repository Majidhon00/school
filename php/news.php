<?
session_start();
  if(!(isset($_SESSION['salom'])))
  {
    ?>
      <script>
        window.location.href="../index.php";
      </script>
    <?
  }else{
    include "formalar.php"
    ?>
      
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
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
      .ex-headee {
        padding-top: 10rem;
        padding-bottom: 5rem;
        background: url(../images/j2.jpg) center center no-repeat;
        background-size: cover;
        background-position: 0px -130px;
        text-align: center;
        
}
        .whit{
          color: whitesmoke;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
	
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="../images/logo.svg" alt="alternative"></a>
        
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
    //  include "hosting.php";
    //  $sql = "SELECT * from insert_login where id=".$_GET['id'];
    //  $q = $con->query($sql);
    //  $r = $q->fetch_object();

?>        
         
         <!-- Header -->
    <header id="header" class="ex-headee">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="whit">Assalomu alaykum  ustoz qanday ma'lumot qo'shmoqchisiz</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="container">
        <br>
      <?
    
    fo();
    
    ?>
    </div>

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   

                    <div class="text-container last">
                        <h3><?= $r->title?></h3>
					    <p><?= $r->content?></p>
                    </div> <!-- end of text-container -->
                    <a class="btn-solid-reg" href="../index.php">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->





    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>About Corso</h5>
                        <p class="p-small">We're passionate about teaching people how to do better SEO for their online presence</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col second">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="terms-conditions.html">Terms & Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="article-details.html">Article Details</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col third">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="article-details.html">Article Details</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="terms-conditions.html">Terms & Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news & updates follow us</p>
                        <a href="#your-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


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
    <?
  }
?>