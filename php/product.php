<?php
class Product {
    private $name;
    private $desc;
    private $quantity;
    private $price;

    function __construct($n, $d, $q, $p) {
        $name = $n;
        $desc = $d;
        $quantity = $q;
        $price = $p;
    }
}
?>