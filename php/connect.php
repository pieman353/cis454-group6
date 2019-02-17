<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.php" />
  </head>
    <body>
        <?php
            include_once("databaseInfo.php");
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');
            if(!empty($username)){
                if(!empty($password)){
                    //$host = "localhost";
                    //$dbusername = "root";
                    //$dbpassword = "root";
                    //$dbname = "signup";

                    $conn = new mysqli($database_host, $signin_database_username, 
                    $signin_database_password, $signin_database_name);

                    $query = "SELECT username FROM $signin_database_table WHERE username = '$username'";
                    $res = $conn->query($query);

                    if(mysqli_connect_error()){
                        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
                    }
                    else if(mysql_num_rows($res) > 0) {
                        echo "User already exists.";
                    }
                    else{
                        $sql = "INSERT INTO $signin_database_table (username, password) values ('$username','$password')";
                        if($conn->query($sql)){
                            echo "New record is inserted sucessfully";
                            echo '<a href="event_info.html">Go back</a>';
                        }else{
                            echo "Error: ".$sql."<br>".$conn->error;
                        }
                        $conn->close();
                    }

                else{
                    echo "Password should not be empty";
                    die();
                }
            }else{
                echo "Username should not be empty";
                die();
            }
        }
        ?>
    </body>
</html>