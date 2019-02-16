<?php
require_once("productDatabase.php");
class productCatalog
{
    public function getDetails() {
        echo '<pre>';
        print_r(productDatabase::getProductDesc("Yogurt"));
        echo '</pre>';
    }
}
?>