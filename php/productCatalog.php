<?php
require_once("productDatabase.php");
class productCatalog
{
    public function getDetails() {
        echo '<pre>';
        print_r(productDatabase::getProductDesc("Yogurt"));
        echo '</pre>';
    }

    /* input: Product object
       output: nothing

       -> Insert product into product database 
       */
    public function addProduct($prod) {
        productDatabase::insertProd($prod);
    }
}
?>