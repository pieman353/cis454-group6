<?php
class productDatabase {
    /* getProductDesc
       -> Retrieves description of given product from database
       Input: prodName -> string containing product
       Output: desc -> array of matching descriptions
       */
    public static function getProductDesc($prodName) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "root";
        $dbname = "prod";

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
}
?>