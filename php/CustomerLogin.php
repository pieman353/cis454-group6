<?php
include('check.php');
if(isset($_SESSION['login_user'])){
    header("location: index1.php");
}
?>
<html>    
  <head>
    <meta charset="utf-8">
    <title>Customer</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
		<link rel="stylesheet" href="../CSS_img/clogin.css">
  </head>
  <body>
    <h1> Syracuse Food Services </h1>
    <div class = "box">
	  	<div class = "main">
				<div class = "avatar">
					<img src = "https://cdn4.iconfinder.com/data/icons/materia-flat-human-vol-1/24/013_005_people_person_avatar_profile-512.png">
				</div>
				<form method="POST" action="">
					<div class="enter">
						<input  type="text" name="username" id="name" class="inp" placeholder=" Username">
					</div>
					<div class = "bar">
						<i></i>
					</div>
					<div class="enter">
						<input id="password" type="password" name="password" class="inp" placeholder=" Password">
					</div>
					<div class="sub">
						<input name = "submit" type="submit" value="Go">
					</div>
					<span><?php echo $error?></span>
				</form>
	  	</div>
		</div>
	  <div class="link">Don't have an account?
            <a href="../SignUp.html">Click here to sign up</a>
          </div>
    </body>
</html>