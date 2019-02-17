<?php
class productDatabase {
    /* getProductDesc
       -> Retrieves description of given product from database
       Input: prodName -> string containing product
       Output: desc -> array of matching descriptions
       */
    require_once("databaseInfo.php")
    public static function getProductDesc($prodName) {
        $host = databaseInfo::$database_host;
        $dbusername = databaseInfo::$product_database_username;
        $dbpassword = databaseInfo::$product_database_password;
        $dbname = databaseInfo::$product_database_name;

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die("Connect Error (".mysqli_connect_errno().")".mysqli_connect_error());
        }
        else {
            $sql = "SELECT proddesc FROM products WHERE prodname = '$prodName'";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $desc[] = $row;
            }
        }
        return $desc;
    }
    public static function insertProd($prod) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "root";
        $dbname = "prod";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die("Connect Error (".mysqli_connect_errno().")".mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO $signin_database_table (prodname, prodquant, proddesc, price) values ('$prod->name','$prod->quantity', '$prod->desc', '$prod->price')";
        }
    }
}
?>