<?php
        include('check.php');
        if(isset($_SESSION['login_user'])) {
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
        <form method="POST" action="">
            <h1> Syracuse Food Services </h1>
            <div class = "box">
                <div class = "main">
                        <div class = "avatar">
                            <img src = "https://cdn4.iconfinder.com/data/icons/materia-flat-human-vol-1/24/013_005_people_person_avatar_profile-512.png">
                        </div>
                        <input name = "username" id = "name" type = "text" class = "inp" placeholder = "Username" required>
                        <div class = "bar">
                            <i></i>
                        </div>
                        <input name = "password" id = "password" type = "password" class = "inp" placeholder = "Password" required>
                        <div class="sub">
                            <input name = "submit" type="submit" value="Submit">
                        </div>
                </div>
            </div>
            <span><?php echo $error;?></span>
        </form>
    </body>
</html>