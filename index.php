<?
session_start();
include "php/hosting.php";
include "php/formalar.php";
include "php/tillar.php";
if (isset($_GET['lang'])) {
    $_SESSION['til'] = $_GET['lang'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Maktab and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="33-Maktab">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="referrer" content="origin">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0">
	<meta name="google" content="notranslate">
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="sp-RFHUl69ePlsCUjwgzU3Y0H0P5dxzzaszJOtwaDNQ">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="application-name" content="school 33">
	<meta name="apple-mobile-web-app-title" content="school 33">
	<meta name="theme-color" content="#4285F4">
	<meta name="msapplication-tap-highlight" content="no">

    <!-- Website Title -->
    <title>33-Maktab</title>

    <!-- Styles -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/stil.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
   
    
  
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
        .q {
            color: #ee832b !important;
        }

        .video {
            width: 100% !important; 
        }

        .row_sch {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .header {
            position: relative;
            padding-top: 8rem;
            padding-bottom: 40%;
          
            
          
            text-align: center;
            background: url(../images/j4.jpg) center no-repeat fixed;
        }

        .outer-container {
            margin-bottom: -160px;
           
        }
        .form-1{
            padding-top: 350px !important;
        }
        .titlee{
            margin-top: 100px;
        }
        @media screen and (max-width:760px) {
            .video{
                width: 99% !important;
            }
            .outer-container{
                 margin-bottom: -230px;
            }
        .row_sch {
            display: grid;
            grid-template-columns: 1fr;
        }
    }
    .a1:hover,.a2:hover{
        background-color: rgba(170, 129, 74, 0.8);
        padding: 250px 20px;
        margin-top: -250px;
        margin-left: -10px;
        margin-right: -10px;
        border-radius: 10px;
    }
    .img{
        height: 400px;
        width: 570px;
        transition: all 0.5s;
    }
    .imw:hover img{
        transform: scale(1.2);
         transition: all 0.5s;
    }
    .imw{
        width: 570px;
        height: 400px;
        overflow: hidden;
    }
    </style>
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
    

            <H3 class="navbar-brand logo-image q" href="index.html">SCHOOL 33</H3>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="?lang=uz">uz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="?lang=en">en </a>
                </li>
            </ul>
     
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#register"><?= $sayt['rg'] ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#description">YANGILIKLAR</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link  page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VAQT</a>

                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">ALOQA</a>
                </li>

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header animate__animated animate__fadeIn WOW"  >
        <div class="container titlee">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown">

                        </div>
                        <h1><?= $sayt['title'] ?></h1>
                        <p class="p-large"><?= $sayt['content'] ?></p>
                        <a class="btn-solid-lg page-scroll" href="#register"><?= $sayt['btn'] ?></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->

        <!-- Image Slider -->
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/mak3.jpg" alt="alternative" width="1150px" height="760px">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/mak.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/mak2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next a1"></div>
                    <div class="swiper-button-prev a2"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
        </div> <!-- end of outer-container -->
        <!-- end of image slider -->

    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2><?= $sayt['uqr'] ?></h2>
                        <p><?= $sayt['uqr_c'] ?></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong><?= $sayt['roy'] ?></strong> </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong><?= $sayt['roy2'] ?></strong></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong><?= $sayt['roy3'] ?></strong> </div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container">

                        <?

                        insu();
                        ?>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- Partners -->
    <div class="slider-1">

    </div> <!-- end of slider-1 -->
    <!-- end of partners -->

    <!--select data base ========================================== -->
    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 imw">
                    <?
                    global $con;
                    $sql = "SELECT * from update1 where id=1";
                    $q = $con->query($sql);
                    $r = $q->fetch_object();
                    ?>
                    <img class="img-fluid img" src="images/<?= $r->rasm ?>" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2><?= $r->title ?></h2>
                        <p><?= substr($r->content,0,400) ?></p>
                        <a href="php/vie.php?qid2=<?= $r->id?>" target="vie.php" class="btn-solid-lg page-scroll" > To'liq o'qish </a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->
    <!--select data base==========================================-->


    <!-- Description -->
    <div id="description" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>33-Maktab yangiliklari</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row row_sch">
                <!--select data base==========================================-->
                <?
                news();
                ?>

                <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!--select data base==========================================-->
    <!-- end of description -->


    <!-- Students -->
    <div class="basic-3">
        <!--select data base ==========================================-->
        <? 
            include "php/hosting.php";
            $sql="select * from up2";
            $q=$con->query($sql);
            $r=$q->fetch_object();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2><?= $r->title?></h2>
                        <p><?= substr($r->content,0,400)?></p>
                        <a href="php/vie.php?qid3=<?= $r->id?>" target="vie.php" class="btn-solid-lg page-scroll" > To'liq o'qish </a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 imw">
                    <img class="img-fluid img" src="images/<?= $r->rasm?>" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of students -->
    <!--select data base==========================================-->




    <!-- Video -->
        <? 
            video();
        ?>




    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>O'qtuvchilardan yullangan habarlar</h3>

                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                <?
                                    sel_news();
                                ?>
                                <!-- Slide -->
                               
                                <!-- end of slide -->

                                <!-- Slide -->
                              

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!--select data base==========================================-->
    <!-- Date -->
    <div id="date" class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2>7-Noyabr</h2>
                        <p>Biznng maktab qayta ta'mirlashda chiqdi va 2 hafta mobaynida maktab web dasturini yaratdik. Bunda siz taklif va shikoyatlaringizni yozishingiz yangiliklardan bo habar bulishingiz mumkin. Agar siz o'qtuvchi bulsangiz accaunt ochib o'z yangiliklaringizni kiritishingiz mumkin bo'ladi</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!--select data base==========================================-->
    <!-- end of date -->
                    <style>
                        .st{
                            font-size: large;
                            font-weight: 400;
                        }
                    </style>

    <!-- Newsletter -->
    <div class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tastiqlangan ustozlar uchun yangilik qushish <br> <span class="st">iltimos email manzilingizni kiriting</span></h3>
                    <!-- Newsletter Form -->
                  <?
                   b_f();
                  
                  ?>
                    <!-- end of newsletter form -->

                    <!-- Social Links -->
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of icon-container -->
                    <!-- end of social icons -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of newsletter -->


    <!-- Contact -->
    <div id="contact" class="form-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Aloqa tafsilotlari</h2>
                        <p>Roʻyxatdan oʻtishga oid savollar yoki takliflar va shikoyatlar uchun quyidagi kontakt maʼlumotlari orqali bogʻlaning. Har qanday savol uchun formadan foydalaning.</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">NAVOIY MASSIV 33-MAKTAB</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="media-body">+998 90 565 81 84 &nbsp;&nbsp;<i class="fas fa-mobile-alt"></i>&nbsp;+998 91 145 95 00</div>
                            </li>
                            <li class="media">
                              <i class="fas fa-globe"></i>
                                <div class="media-body"> <a class="light-gray" href="#your-link">Kunalik.com</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                  <? ins_tak();?>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-3 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>Sattorov Abdumajid</h5>
                        <p class="p-small">11 A sinf o'quvchisi tomonidan  2022 yil fevralda dastur ishga tushdi
                            <br>
                          telefon raqami  91 145 95 00
                        </p>
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
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();   
    </script>
</body>

</html>