<?
session_start();
include "hosting.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/stil.css">
  <style>
    .forma {
      display: none;
    }

    .video {
      width: 100% !important;

    }

    .video-wrapper {
      width: 100% !important;

    }

    .activi {
      display: block;
    }

    @media screen and (max-width:760px) {
      .video {
        width: 99% !important;
      }

    }
  </style>
</head>

<body>

  <? function bir()
  // uodate one
  {
    global $con;
    $sql = "SELECT * from update1 where id=1";
    $q = $con->query($sql);
    $r = $q->fetch_object();
  ?>
    <form method="POST" enctype="multipart/form-data">

      <label for="title">sarlavhani uzgartirish</label>
      <input type="text" id="title" name="up1" value="<?= $r->title ?>" class="form-control">
      <br>
      <label for="rasm">rasmni uzgartirish</label>
      <input type="file" id="rasm" name="rasm" class="form-control">
      <br>
      <label for="text">matinni uzgartirish</label>
      <textarea name="upc1" id="text" rows="3" class="form-control"><?= $r->content ?></textarea>
      <br>
      <input type="submit" name="s12" value="send" class="btn btn-primary">
    </form>

    <?
    if (isset($_POST['s12'])) {

      $t = "../images";
      $up1 =  addslashes($_POST['up1']);
      $upc1 =  addslashes($_POST['upc1']);
      $rasm = $_FILES['rasm']['name'];
      move_uploaded_file($_FILES['rasm']['tmp_name'], "$t/$rasm");

      global $con;
      if (isset($rasm)) {
        $sql = "UPDATE update1 set title='$up1',content='$upc1',rasm='$rasm'  where id=1";
      } else {
        $sql = "UPDATE update1 set title='$up1',content='$upc1' where id=1";
      }
      $q = $con->query($sql);
    }
  }
  // insert ustozlar login --------
  function insu()
  {
    ?>
    <form method="GET">

      <div class="form-group">
        <input type="text" class="form-control-input" id="rname" name="wname">
        <label class="label-control" for="rname">To'liq ism</label>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group">
        <input type="email" class="form-control-input" id="remail" name="wemail">
        <label class="label-control" for="remail">Elektron pochta manzili</label>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control-input" id="rphone" name="wphone">
        <label class="label-control" for="rphone">Telefon raqami</label>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group checkbox">
        <br>
      </div>
      </div>
      <div class="form-group">
        <button type="submit" name="s2" class="form-control-submit-button">REGISTER</button>
      </div>
      <div class="form-message">
        <div id="rmsgSubmit" class="h3 text-center hidden"></div>
      </div>
    </form>
    <?
    if (isset($_GET['s2'])) {
      $name = $_GET['wname'];
      $phone = $_GET['wphone'];
      $email = $_GET['wemail'];
      $v = date('Y-m-d');

      include "hosting.php";
      $sql = "insert into insert_login(name,tel,login,time,tip) values('{$name}','{$phone}','{$email}','{$v}',0)";
      $q = $con->query($sql);
    }
  }
  // insert ustozlar login end -------
  // =========================

  // =========================
  // select ustizlat email -----------

  function selu()
  {
    ?>
    <table class="table table-active ">
      <th>ism</th>
      <th>email</th>
      <th>tel</th>
      <th>vaqti</th>
      <th>tastiqlash</th>
      <?
      global $con;
      $sql = "select * from insert_login where tip=0";
      $q = $con->query($sql);
      while ($r2 = $q->fetch_object()) { ?>
        <tr>
          <td><?= $r2->name ?></td>
          <td><a href="#"><?= $r2->login ?></a></td>
          <td><?= $r2->tel ?></td>
          <td><?= $r2->time ?></td>
          <td><a href="<?= $r2->id ?>" class="btn btn-danger del"><i class="fas fa-trash"></i></a>
            <?
            if ($r2->tip == 0) {
            ?>
              <a href="?t=<?= $r2->id ?>" class="btn btn-success"><i class="fas fa-check"></i></a>
          </td><? } else {
                echo "Tastiqlandi";
              } ?>
        </tr>
      <?
      }
      echo "</table>";
      if (isset($_GET['id'])) {
        global $con;
        $sql = "delete from insert_login where id=" . $_GET['id'];
        $q = $con->query($sql);
        ad_up();
      }
      if (isset($_GET['t'])) {
        global $con;
        $sql = "UPDATE insert_login set tip=1 where id=" . $_GET['t'];
        $q = $con->query($sql);
        ad_up();
      }
    } // tip 1 lar   --------------
    function sel_tn()
    {
      global $con;
      $sql = "select * from news_2";
      $q = $con->query($sql);
      ?><table class="table table-bordered">
        <th>No</th>
        <th>Sarlavha</th>
        <th>Matn</th>
        <th>Rasm</th>
        <th>o'chirish</th>
        <?
        $a = 1;
        while ($r = $q->fetch_object()) { ?>
          <tr>
            <td><?= $a++ ?></td>
            <td><?= $r->title ?></td>
            <td><?= $r->content ?></td>
            <td><img src="../images/<?= $r->rasm ?>" alt="" width="150px"></td>
            <td><a href="<?= $r->id ?>" class="btn btn-danger del"><i class="fas fa-trash"></i></a></td>
          </tr>
        <? }
        echo "</table>";

        if (isset($_GET['id'])) {
          global $con;
          $sql = "delete from news_2 where id=" . $_GET['id'];
          $q = $con->query($sql);
          ad_up();
        }
      }

      function b_f()
      {
        ?>
        <form id="">
          <div class="form-group">
            <input type="text" name="email" class="form-control-input" id="nemail" required>
            <label class="label-control" for="nemail">Email</label>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group checkbox">

            <div class="help-block with-errors"></div>
          </div>

          <input type="submit" class="form-control-submit-button" name="s8" value="SIGN UP">

          <div class="form-message">
            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
          </div>
        </form>

        <?
        if (isset($_GET['s8'])) {


          $em = $_GET['email'];
          global $con;
          $sql = "SELECT * from insert_login where tip=1";
          $q = $con->query($sql);
          while ($r = $q->fetch_object()) {
            if ($em == $r->login) {
              $_SESSION['salom'] = "salom"
        ?>
              <script>
                window.location.href = "php/news.php"
              </script>
            <?
            } else if ($em == "admin-web") {
            ?>
              <script>
                window.location.href = "php/login.php"
              </script>
        <?
            }
          }
        }
      }
      function video()
      {
        global $con;
        $sql = "SELECT * from video where id=1";
        $q = $con->query($sql);
        $r = $q->fetch_object();

        ?>
        <div class="basic-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2>Maktab haqida lavha</h2>

                <!-- Video Preview -->
                <div class="image-container">
                  <div class="video-wrapper">
                    <video src="images/<?= $r->video ?>" class="video" width="99%" controls></video>
                  </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

              </div> <!-- end of col -->
            </div> <!-- end of row -->
          </div> <!-- end of container -->
        </div> <!-- end of basic-4 -->
        <!-- end of video -->

      <?
      }
      function vid_in()
      {
      ?>
        <form action="" method="POST" enctype="multipart/form-data"><br>
          <label for="vid">Videoni kiritish</label>
          <input type="file" name="vid" id="vid" class="form-control"><br>
          <input type="submit" value="send" name="t2" class="btn btn-primary">
        </form>
        <?

        if (isset($_POST['t2'])) {
          $tt = "../images";
          $vid = $_FILES['vid']['name'];
          move_uploaded_file($_FILES['vid']['tmp_name'], "$tt/$vid");

          global $con;
          $sql = "UPDATE video set video='$vid' where id=1";
          $q = $con->query($sql);
          ad_up();
        }
        ?>
      <?
      }
      function sel_tip1()
      {
      ?>
        <table class="table table-active ">
          <th>ism</th>
          <th>email</th>
          <th>tel</th>
          <th>vaqti</th>
          <th>tastiqdan o'chirish</th>
          <?
          global $con;
          $sql = "select * from insert_login where tip=1";
          $q = $con->query($sql);
          while ($r = $q->fetch_object()) { ?>
            <tr>
              <td><?= $r->name ?></td>
              <td><a href="#"><?= $r->login ?></a></td>
              <td><?= $r->tel ?></td>
              <td><?= $r->time ?></td>
              <td><a href="?tx=<?= $r->id ?>" class="btn btn-danger"><i class="fab fa-xbox"></i></a></td>

            </tr>
          <? }
          if (isset($_GET['tx'])) {
            global $con;
            $sql = "UPDATE insert_login set tip=0 where id=" . $_GET['tx'];
            $q = $con->query($sql);
            ad_up();
          }

          echo "</table>";
          if (isset($_GET['id'])) {
            global $con;
            $sql = "delete from insert_login where id=" . $_GET['id'];
            $q = $con->query($sql);
            ad_up();
          }
        }
        // news -------------

        function news()
        {
          global $con;
          $sql = "select * from news";
          $q = $con->query($sql);
          $a = 1;
          while ($r = $q->fetch_object()) {

          ?>
            <div class="col-lg-12">
              <ul class="list-unstyled li-space-lg first">
                <li class="media">
                  <i class="bullet"><?= $a++ ?></i>
                  <div class="media-body">
                    <h4><?= $r->title ?> </h4>
                    <p><?= substr($r->content, 0, 100) ?>
                    <h6><?= $r->time ?></h6>
                    <h5><a href="../view.php?wid=<?= $r->id ?>"> to'liq o'qish</a></h5>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          <?
          }
        }
        function news_into()
        {
          ?>
          <form action="" method="POST">
            <br>
            <div class="form-group">
              <input type="text" name="title2" id="remail" class="form-control" placeholder="Sarlavha">
            </div>
            <label class="label-control" for="text2">Matn</label>
            <textarea name="text2" id="text2" rows="3" class="form-control" placeholder="Matn"></textarea>
            <br>
            <input type="submit" name="s4" value="send" class="btn btn-primary">
          </form>
          <?
          if (isset($_POST['s4'])) {
            $name = addslashes($_POST['title2']);
            $phone = addslashes($_POST['text2']);
            $v = date('Y-m-d');

            include "hosting.php";
            $sql = "insert into news(title,content,time) values('{$name}','{$phone}','{$v}')";
            $q = $con->query($sql);
          ?>
            <script>
              window.location.href = "admin.php?good"
            </script>
          <?
          }
        }
        function news2()
        {
          echo '<table class="table table-bordered row">
      <th class="col-1">NO</th>
      <th class="col-4">sarlavha</th>
      <th class="col-6">matn</th>
      <th class="col-1">del</th>
      ';

          global $con;
          $sql = "select * from news";
          $q = $con->query($sql);
          $a = 1;
          ?>
          <div class="forma">

            <form action="">
              <input type="text" class="form-control" placeholder="sarlavha">
              <br>
              <textarea name="text" placeholder="matn" class="form-control" id="" cols="30" rows="3"></textarea>
            </form>
          </div>
          <br>
          <?
          while ($r = $q->fetch_object()) {

          ?>

            <tr>
              <td>
                <h6><?= $a++ ?></h6>
              </td>

              <td>
                <h6><?= $r->title ?></h6>
              </td>

              <td>
                <p><?= substr($r->content, 0, 50) ?>
                <h6><?= $r->time ?></h6>
                </p>
              </td>
              <td class=" d-flex">
                <a href="<?= $r->id ?>" class="btn btn-danger del"> <i class="fas fa-trash-alt"></i> </a>
              </td>
            </tr>

          <?
          }
          if ($_GET['uid']) {
          ?>
            <div class="form">

              <form action="">
                <input type="text" class="form-control" placeholder="sarlavha">
                <br>
                <textarea name="text" placeholder="matn" class="form-control" id="" cols="30" rows="3"></textarea>
              </form>
            </div><br>

          <?
          }
          echo "</table>";
        }
        if (isset($_GET['id'])) {
          global $con;
          $sql = "delete from news where id=" . $_GET['id'];
          $q = $con->query($sql);
        }
        function ad_up()
        {
          ?>
          <script>
            window.location.href = "admin.php"
          </script>
        <?
        }
        function fo()
        {
        ?>
          <div class="col-lg-6">
            <form id="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control-input" name="name0" id="cname" required>
                <label class="label-control" for="cname">Ism</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label for="ename">rasmingizni kiriting</label>
                <input type="file" class="form-control-input" name="rasm0" id="ename">
              </div>
              <div class="form-group">
                <textarea class="form-control-textarea" name="text0" id="cmessage" required></textarea>
                <label class="label-control" for="cmessage">Qanday Xabar</label>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <input type="submit" class="form-control-submit-button" name="s0" value="send">
              </div>
              <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
          </div>
          <?

          if (isset($_POST['s0'])) {
            $t = "../images";
            $name0 = addslashes($_POST['name0']);
            $text0 = addslashes($_POST['text0']);
            $rasm0 = $_FILES['rasm0']['name'];
            move_uploaded_file($_FILES['rasm0']['tmp_name'], "$t/$rasm0");

            include "hosting.php";
            $sql = "INSERT INTO news_2(title,content,rasm) values('{$name0}','{$text0}','{$rasm0}')";
            $q = $con->query($sql);
          ?>
            <script>
              window.location.href = "news.php?good=nall"
            </script>
          <?
          }
        }
        function sel_news()
        {
          global $con;
          $sql = "SELECT * from news_2 order by id DESC limit 5";
          $q = $con->query($sql);
          $a = 1;
          while ($r = $q->fetch_object()) {
          ?>
            <div class="swiper-slide">
              <div class="image-wrapper">
                <img class="img-fluid" src="images/<?= $r->rasm ?>" alt="alternative">
              </div> <!-- end of image-wrapper -->
              <div class="text-wrapper">
                <div class="testimonial-text"><?= substr($r->content, 0, 100) ?></div>
                <div class="testimonial-author"><?= $r->title . "   " ?> <a href="php/vie.php?qid=<?= $r->id ?>">To'liq o'qish</a></div>
              </div> <!-- end of text-wrapper -->
            </div> <!-- end of swiper-slide -->
          <?
          }
        }
        function ins_tak()
        { ?>
          <form id="" data-focus="false" method="POST">
            <div class="form-group">
              <input type="text" class="form-control-input" name="uname" id="cname" required>
              <label class="label-control" for="cname">To'liq ism</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control-input" name="uphone" id="cemail" required>
              <label class="label-control" for="cemail">Telefon</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control-textarea" id="cmessage" name="utext" required></textarea>
              <label class="label-control" for="cmessage">Habar </label>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <input type="submit" name="s7" class="form-control-submit-button" value="Yuborish">
            </div>
            <div class="form-message">
              <div id="cmsgSubmit" class="h3 text-center hidden"></div>
            </div>
          </form>

          <?
          if (isset($_POST['s7'])) {
            $uname = addslashes($_POST['uname']);
            $utel = addslashes($_POST['uphone']);
            $utext = addslashes($_POST['utext']);

            global $con;
            $sql = "insert into shikoyat(name,tel,text,tip) values('{$uname}','{$utel}','{$utext}',0)";
            $q = $con->query($sql);
          }
        }
        function u2()
        {
          global $con;
          $sql = "select * from shikoyat ";
          $q = $con->query($sql);
          ?>
          <table class="table table-primary">
            <th>ism</th>
            <th>telefon</th>
            <th>habar</th>
            <th>kurdi deb belgilash</th>
            <?
            while ($r = $q->fetch_object()) { ?>
              <tr>
                <td><?= $r->name ?></td>
                <td><?= $r->tel ?></td>
                <td><?= $r->text ?></td>
                <td><a href="?uuid=<?= $r->id ?>" class="btn btn-info"> <i class="fas fa-eye"> </i> <a href="<?= $r->id ?>" class="btn btn-danger del"><i class="fas fa-trash"></i> </a> </a> <span class="badge badge-success"><?
                                                                                                                                                                                                                                if ($r->tip == 0) {
                                                                                                                                                                                                                                  echo "new";
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                ?></span> </td>
              </tr>
            <?
            }
            if (isset($_GET['uuid'])) {
              global $con;
              $sql = "update shikoyat set tip=1 where id=" . $_GET['uuid'];
              $q = $con->query($sql);
            ?>
              <script>
                window.location.href = "admin.php"
              </script>
            <?
            }
            if (isset($_GET['id'])) {
              global $con;
              $sql = "DELETE from shikoyat where id=" . $_GET['id'];
              $q = $con->query($sql);
            ?>
              <script>
                window.location.href = "admin.php"
              </script>
            <?
            }
            echo "</table>";
          }
          function u2_u()
          {

            global $con;
            $sql = "select * from up2";
            $q = $con->query($sql);
            $r = $q->fetch_object();
            ?>
            <br>
            <form action="" method="POST" enctype="multipart/form-data">
              <label for="tit1">Sarlavha</label>
              <input type="text" id="tit1" name="tit3" class="form-control" value="<?= $r->title ?>">
              <label for="file1">Rasm</label>
              <input type="file" id="file1" name="rasm3" class="form-control">
              <label for="text1">Matn</label>
              <textarea name="text3" id="text3" cols="30" rows="3" class="form-control"><?= $r->content ?></textarea><br>
              <input type="submit" name="sq" class="btn btn-info" value="send">
            </form>
            <?
            if (isset($_POST['sq'])) {

              $t = "../images";
              $tit3 = addslashes($_POST['tit3']);
              $text3 = addslashes($_POST['text3']);
              $rasm3 = $_FILES['rasm3']['name'];
              move_uploaded_file($_FILES['rasm3']['tmp_name'], "$t/$rasm3");

              global $con;
              $sql = "UPDATE up2 set title='$tit3' , content='$text3' , rasm='$rasm3' where id=2";
              $q = $con->query($sql);
            }
          }
          function password()
          {
            global $con;
            $sql = "select * from password";
            $q = $con->query($sql);
            $r = $q->fetch_object();
            ?>
            <br>
            <form action="" method="POST">
              <label for="log">login</label>
              <input type="text" name="log" placeholder="login" id="log" class="form-control" value="<?= $r->log ?>"><br>
              <label for="pas">password</label>
              <input type="text" name="pas" placeholder="password" id="pas" class="form-control" value="<?= $r->pas ?>"><br>
              <input type="submit" value="send" name="sub" class="btn btn-outline-primary">
            </form>
            <?
            if (isset($_POST['sub'])) {
              $log = addslashes($_POST['log']);
              $pas = addslashes($_POST['pas']);

              global $con;
              $sql = "update password set log='$log' , pas='$pas' where id=1";
              $q = $con->query($sql);
            }
          }
          function sov()
          {



            ?>
            <br>
            <h4>Savol</h4>
            <form action="">
            <input type="text" name="sovol" placeholder="Sovol" class="form-control"><br>
              <div class="row">
                <div class="col-lg-10">
                  <h5>javoblar</h5>
                  <textarea name="jovoba" cols="30" rows="2" placeholder="Jovob-1" class="form-control"></textarea><br>
                </div>
                <div class="col-lg-2">
                  <p>tug'ri javob</p>
                  <input type="radio" name="chek" value="A"> A
                </div>
              </div>
              <div class="row">
                <div class="col-lg-10">
                  <textarea name="jovobb" cols="30" rows="2" placeholder="Jovob-2" class="form-control"></textarea><br>
                </div>
                <div class="col-lg-2">
                  <input type="radio" name="chek" value="B"> B
                </div>
              </div>
              <div class="row">
                <div class="col-lg-10">
                  <textarea name="jovobc" cols="30" rows="2" placeholder="Jovob-3" class="form-control"></textarea><br>
                </div>
                <div class="col-lg-2">
                  <input type="radio" name="chek" value="C"> C
                </div>
              </div>

              <br>
              <input type="submit" class="btn btn-primary" name="submitj" value="send">
            </form>
            <?

            if (isset($_GET['submitj'])) {
              $sav = addslashes($_GET['sovol']);
              $j1 = addslashes($_GET['jovoba']);
              $j2 = addslashes($_GET['jovobb']);
              $j3 = addslashes($_GET['jovobc']);
              $radio = $_GET['chek'];
              $con = new mysqli('localhost', 'root', 'root', 'school');
              $sql = "insert into s_j(savol,j_1,j_2,j_3,t_j) values('{$sav}','{$j1}','{$j2}','{$j3}','{$radio}')";
              $q = $con->query($sql);
            }
            ?>
          <?
          }
          ?>
</body>

<script src="../js/jquery.js"></script>
<script>
  $(function() {
    $(".del").click(function(a) {
      a.preventDefault();
      i = confirm("rosdan o'chrilsinmi");
      if (i == true) {
        s = $(this).attr('href');
        window.location.href = "?id=" + s;
      }
    })
  })
</script>
<h2 id="h2"></h2>

</html>