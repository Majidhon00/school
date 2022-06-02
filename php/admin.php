<?
session_start();
if (!(isset($_SESSION['login']))) {
?>
  <script>
    window.location.href = "login.php";
  </script>
<?
} else {
  include "hosting.php";
  include "formalar.php";
?>
  <!DOCTYPE html>
  <!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
  <html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../dars13.icon/css/all.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .recent-sales {

        width: 120% !important;
      }
    </style>
  </head>
  <script src="../js/jquery.js"></script>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">school 33</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="bir">
            <i class='fas fa-edit'></i>
            <span class="links_name">birinchi qator</span>
          </a>
        </li>
        <li>
          <a href="#" class="sakkiz">
            <i class='fas fa-edit'></i>
            <span class="links_name">ikkinchi qator</span>
          </a>
        </li>
        <li>
          <a href="#" class="ikki">
            <i class='fab fa-google'></i>
            <?
            include "hosting.php";
            $sql = "select count(tip) as cou from insert_login where tip=0";
            $q = $con->query($sql);
            $r = $q->fetch_object();
            ?>
            <span class="links_name">emaillar <? if (!($r->cou == 0)) { ?><span class="badge badge-danger"><?= $r->cou ?></span><? } ?></span>
          </a>
        </li>
        <li>
          <a href="#" class="besh">
            <i class='fas fa-check'></i>
            <span class="links_name">tastiqlanganlar </span>
          </a>
        </li>
        <li>
          <a href="#" class="uch">
            <i class="fas fa-edit"></i>
            <span class="links_name">yangilik kiritish</span>
          </a>
        </li>
        <li>
          <a href="#" class="tur">
            <i class='fab fa-telegram'></i>
            <span class="links_name">yangiliklar</span>
          </a>
        </li>
        <li>
          <a href="#" class="olti">
            <i class='fas fa-network-wired'></i>
            <span class="links_name">o'qtuvchilar yangiliklari</span>
          </a>
        </li>
        <li>
          <?
          include "hosting.php";
          $sql = "select count(tip) as cun from shikoyat where tip=0";
          $q = $con->query($sql);
          $r = $q->fetch_object();
          ?>
          <a href="#" class="yetti">
            <i class='far fa-comment'></i>
            <span class="links_name"> Habarlar <span class="badge badge-warning eye"><? if (!($r->cun == 0)) {
                                                                                        echo $r->cun;
                                                                                      } ?></span></span>
          </a>
        </li>
        <li>
          <a href="#" class="toq">
            <i class='fa fa-cog'></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="log.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" class="search" placeholder="Search...">
          <i class='bx bx-search'></i>
        </div>
        <div class="profile-details">
          <!--<img src="images/profile.jpg" alt="">-->
          <span class="admin_name"><?= date('Y-m-d') ?></span>

        </div>
      </nav>

      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="bir_show">
              <div class="title">update one</div>
              <?
              bir();
              ?>
            </div>
            <div class="sakkiz_show">
              <div class="title">update two</div>
              <?
              u2_u();
              ?>
            </div>
            <div class="ikki_show">
              <div class="title">email</div>
              <?
              selu();
              ?>
            </div>
            <div class="uch_show">
              <div class="title">yangilik kiritish</div>
              <?
              news_into();
              ?>

            </div>
            <div class="tur_show">
              <div class="title">yangiliklar</div><br>
              <?
              news2();

              ?>
            </div>
            <div class="besh_show">
              <div class="title">tastiqlanganlar</div><br>
              <?
              sel_tip1();
              ?>
            </div>
            <div class="olti_show">
              <div class="title">o'qtuvchilar kiritgan yangiliklar</div><br>
              <?
              sel_tn();
              ?>
            </div>
            <div class="yetti_show">
              <div class="title">taklif va shikoyatlar</div>
              <?
              u2();
                                                                          
              ?>
            </div>
            <div class="toq_show">
              <div class="title"> Admin parolini o'zgartirish </div>
              <?
              password();
              vid_in();
              ?>
            </div>
            <div class="ser_show">
              <div class="title">test</div>
              <div id="print"></div>
              <?

              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      $(function() {
        $(".ikki_show").hide();
        $(".uch_show").hide();
        $(".tur_show").hide();
        $(".besh_show").hide();
        $(".olti_show").hide();
        $(".yetti_show").hide();
        $(".sakkiz_show").hide();
        $(".toq_show").hide();
        $(".ser_show").hide();

        $(".ikki").click(function() {
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".ikki_show").show();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".bir").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").show();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".uch").click(function() {
          $(".ikki_show").hide();
          $(".uch_show").show();
          $(".bir_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".tur").click(function() {
          $(".ikki_show").hide();
          $(".tur_show").show();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".besh").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").show();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".olti").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").show();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })

        $(".yetti").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").show();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".sakkiz").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").show();
          $(".toq_show").hide();
          $(".ser_show").hide();

        })
        $(".toq").click(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").show();
          $(".ser_show").hide();

        })
        $(".search").keyup(function() {
          $(".ikki_show").hide();
          $(".bir_show").hide();
          $(".uch_show").hide();
          $(".tur_show").hide();
          $(".besh_show").hide();
          $(".olti_show").hide();
          $(".yetti_show").hide();
          $(".sakkiz_show").hide();
          $(".toq_show").hide();
          $(".ser_show").show();

          $.post("ajax.php",{ser:$(".search").val()},function(data){
            $("#print").html(data)
          });

        })
        
      })
    </script>
    <script src="../js/s.js"></script>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>

  </body>

  </html>

<? } ?>