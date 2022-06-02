<?
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link href="../css/phps.css" rel="stylesheet">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
      <form class="login">
        <h3 class="col"><? echo $_SESSION['hato']?></h3>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="login" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="password" placeholder="Password">
				</div>
				<button class="button login__submit" name="s" type="submit">
					<span class="button__text" >Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  <?
			include "hosting.php";
			$sql = "select * from password where id=1";
			$q=$con->query($sql);
			$r=$q->fetch_object();
    if ( $_GET['login']==$r->log && $_GET['password']==$r->pas){
      $_SESSION['login']="admin";
      ?>
        <script>
          window.location.href="admin.php";
        </script>
      <?
    }else if(!($_GET['login']=="admin" && $_GET['password']=="123")){
      $_SESSION['hato']="";
    }
  ?>
</body>
</html>
