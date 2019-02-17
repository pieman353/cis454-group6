<?php
    require_once("databaseInfo.php");
    $conn=mysqli_connect(databaseInfo::$database_host,databaseInfo::$signin_database_username,
    databaseInfo::$signin_database_password,databaseInfo::$signin_database_name);
    session_start();

    $user_check = $_SESSION['login_user'];

    $tab = databaseInfo::$signin_database_table;
    $query = "SELECT username from $tab where username = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['username']; 
?>