<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.php" />
  </head>
    <body>
        <?php
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');
            $firstname = filter_input(INPUT_POST,'firstname');
            $lastname = filter_input(INPUT_POST,'lastname');
            if(!empty($username)){
                if(!empty($password)){
                    //$host = "localhost";
                    //$dbusername = "root";
                    //$dbpassword = "root";
                    //$dbname = "signup";

                    $conn = new mysqli($database_host, $signin_database_username, 
                    $signin_database_password, $signin_database_name);

                    if(mysqli_connect_error()){
                        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
                    }else{
                        $sql = "INSERT INTO $signin_database_table (firstname,lastname,username, password) values ('$firstname','$lastname','$username','$password')";
                        if($conn->query($sql)){
                            echo "<div class='cc'>Success</div>";
                            echo '<a href="../FrontPage.html">Go back</a>';
                        }else{
                            echo "Error: ".$sql."<br>".$conn->error;
                        }
                        $conn->close();
                    }

                }else{
                    echo "Password should not be empty";
                    die();
                }
            }else{
                echo "Username should not be empty";
                die();
            }
        ?>
    </body>
</html>