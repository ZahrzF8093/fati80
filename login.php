<div style="color: aliceblue; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'">
<?php
date_default_timezone_set('Asia/Tehran');
$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);
echo "$date_time";
require_once 'config.php';
?>
</div>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	  content="width=device-width,user scalable=no, initill-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width , initial-scale=1 , shrink-to-fit=on">
<title>ورود کاربر</title>
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="asset/css/css/all.css">
</head>

<body dir="rtl" style="background-image: url('asset/pic/8.jpeg');">
<div class="container">
	<!-- slider -->
			<div class="row">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/pic/slider/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/pic/slider/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/pic/slider/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	
	<!-- menu -->
	    <div class="row" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size: 20px">
						<div class="col">


			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<img src="asset/pic/logo.png" alt="سایت الماس" width="100" height="60">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
		  
        <a class="nav-link" href="index.php">سایت الماس<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
		  <a class="nav-link" href="index.php">فروشگاه</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ورود به...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="register.php">ثبت نام</a>
          <a class="dropdown-item" href="login.php">پنل کاربری</a>
          <a class="dropdown-item" href="cpanel/login.php">پنل مدیریت</a>
          
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact us.php">تماس با ما</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about us.php">درباره ما</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="search" name="input" placeholder="جست و جو..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">جست و جو</button>
    </form>
  </div>
</nav>
</div>
		</div>
	    
			
	<!--container-->
	<div class="row">
	    <div class="col-12 col-md-12" style="background-image: url('asset/pic/10.jpeg');">
		<div style="text-align:center"><p style="font-size: 30px;">ورود کاربر</p></div>
			<div style="display: flex; align-content: center; align-items: center;">
		<form action="login.php" method="post" style="margin: 0 auto;">
			<input type="text" class="form-control" name="email" placeholder="ایمیل..." style="width: 400px;"><br>
       <input type="password" class="form-control" name="password" placeholder="گذرواژه..." style="width: 400px;"><br>
       <div style="text-align: center;">
       <input type="submit" value="ورود" name="login" class="btn btn-primary">
       <input type="reset" value="انصراف" class="btn btn-primary">
       </div><br>
		</form>
	    	</div>
		</div>
		
    </div>
	<div class="row">
		<div class="col-sm" style=" text-align: center; background-color:azure">
			<br>
			<p style="text-align: center; color: #5B6867; font-size: 20px;"><i class="fas fa-link"> لینک های مفید </i></p>
	      <a class="dropdown-item" href="register.php">ثبت نام</a>
          <a class="dropdown-item" href="login.php">پنل کاربری</a>
          <a class="dropdown-item" href="cpanel/login.php">پنل مدیریت</a>
		  <a class="dropdown-item" href="contact us.php">تماس با ما</a>
		  <a class="dropdown-item" href="about us.php">درباره ما</a>
		</div>
		
		
		<div class="col-sm" style="text-align: right; background-color:antiquewhite">
			<br>
			<p style="text-align: center; color: #5B6867; font-size: 20px;"><i class="fas fa-phone-square"> راه های ارتباطی با ما </i></p>
		<p><i class="fas fa-map-marker-alt" aria-hidden="true"> آدرس :اصفهان شهرستان اردستان خیابان امام خمینی  </i></p>
			<p><i class="fas fa-phone" aria-hidden="true"> شماره تماس : 03154245608 </i></p>
			<p><i class="fab fa-whatsapp-square" aria-hidden="true"> واتساپ : 03154245608  </i></p>
			<p><i class="fab fa-telegram" aria-hidden="true"> تلگرام : fateme_yn_80  </i></p>
			<p><i class="fab fa-instagram-square" aria-hidden="true"> اینستاگرام:fateme_y.n_80 </i></p>
        	<p><i class="fa fa-envelope" aria-hidden="true"> ایمیل :fateme.yn.80@gmail.com </i></p>
		</div>
		
		
		<div class="col-sm" style="background-color:beige">
			<br>
			<p style="text-align: center; color: #5B6867; font-size: 20px;"><i class="fas fa-map-marker"> ما کجا هستیم ؟ </i></p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.833169122313!2d52.36717662881781!3d33.375421268805646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbd420c5106e0a3%3A0xa1bb89277292ad9e!2zSXNmYWhhbiBQcm92aW5jZSwgQXJkZXN0YW4sINiu24zYp9io2KfZhiDYp9mF2KfZhSDYrtmF24zZhtuM2IwgSXJhbg!5e0!3m2!1snl!2s!4v1625926758195!5m2!1snl!2s" width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>	

	<script src="asset/js/jquery-2.1.1.min.js"></script>
	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['login'])) {
  $email=$_POST['email'];
  $pass=md5($_POST['password']);
  $check=mysqli_query($db,"select * from users where email='$email' and password='$pass'");
  if (mysqli_num_rows($check)>0) {
    $_SESSION['user']=$email;
    header("Location:index.php");
  }
  else{
    echo "<script> alert('ایمیل یا گذرواژه خود را اشتباه وارد کرده اید یا ثبت نام نکرده اید.')</script>";
  }
}
?>
