<?php
include('session.php');
include('processProducts.php');

if(!isset($_SESSION['login_user'])){
header("location: signin.php");
}
?>


<html lang="en">
<head>
    <script src="index1.js"> </script>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Main_page</title>
      <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../CSS_img/customerMain.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <script src="/js/jquery-2.1.4.min.js"></script>
    <style>
        * {
            margin:0;
            padding:0;
        }
        html, body {
            height: 100%;
            width: 100%;
            font-size:12px;
        }
        .white_content {
            display: none;
            position: absolute;
            top: 25%;
            right: 25%;
            width: 50%;
            height: 50%;
            padding: 6px 16px;
            background-color: white;
            z-index:1002;
            overflow: auto;
            position: fixed;
        }
        .black_overlay {
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color:#f5f5f5;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
            position: fixed;
        }
        .close {
            float:right;
            clear:both;
            width:100%;
            text-align:right;
            margin:0 0 6px 0;
        }
        .close a {
            color:#333;
            text-decoration:none;
            font-size:14px;
            font-weight:700;
        }
        .con {
            line-height:3.5rem;
            font-size: 20px;
            font-weight: 700;
            width:100%;
            display: inline;
        }
    </style>
</head>
<script src="../javascript/Popup.js" type="text/javascript"></script>

<body> 
    <div class="session">
        <div class="block">
            <div class="navbar">
                <div>
                    <b class="welcome" id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
                    <b class="logout" id="logout"><a href="logout.php">Logout</a></b>
                </div>
                <div class="shoppingCart">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="main">
            <div class = "catagory">
                <div class = "title">Fruit</div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/apple.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light')">
                            this is an apple
                        </a>
                        <div id="light" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/apple.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/orange.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $0.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light2')">
                            this is an orange
                        </a>
                        <div id="light2" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light2')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/orange.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$0.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/yogurt.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $3.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light3')">
                            this is a yogurt
                        </a>
                        <div id="light3" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light3')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/yogurt.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$3.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/banana.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $0.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light4')">
                            this is an banana
                        </a>
                        <div id="light4" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light4')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/banana.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$0.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="main">
            <div class = "catagory">
                <div class = "title">Snacks</div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/cheetos.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light5')">
                            this is cheetos
                        </a>
                        <div id="light5" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light5')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/cheetos.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/doritos.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light6')">
                            this is doritos
                        </a>
                        <div id="light6" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light6')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/doritos.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/mnm.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $0.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light7')">
                            this is m&m
                        </a>
                        <div id="light7" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light7')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/mnm.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$0.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/oreo.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $2.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light8')">
                            this is oreos
                        </a>
                        <div id="light8" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light8')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/oreo.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$2.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="main">
            <div class = "catagory">
                <div class = "title">Drinks</div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/coke.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light9')">
                            this is coke
                        </a>
                        <div id="light9" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light9')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/coke.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/md.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light10')">
                            this is mountain dew
                        </a>
                        <div id="light10" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light10')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/md.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/water.jpg" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $1.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light11')">
                            this is water
                        </a>
                        <div id="light11" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light11')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/water.jpg" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$1.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class = "itemBlock">
                    <div class = "item">
                        <img src="../CSS_img/pureleaf.png" class = "imgStyle">
                    </div>
                    <div class = "info">
                        <div class = "price">
                            $2.99
                        </div>
                        <a href="javascript:void(0)" onclick="show('light12')">
                            this is pure leaf
                        </a>
                        <div id="light12" class="white_content">
                            <div class="close">
                                <a href="javascript:void(0)" onclick="hide('light12')"> 
                                    X
                                </a>
                            </div>
                            <div class="con">
                                <div class = "leftSide">
                                    <div class = "pic">
                                        <img src="../CSS_img/pureleaf.png" class="imgStyle">
                                    </div>
                                    <div class="detail">
                                     - The perfect gift for any occasion. One Dozen Select World Class Grade 'A' Navel Oranges - Natural organic source of sunshine!<br>
                                     - Super Fast Shipping to Guarantee Freshness.<br>
                                     - For more quantities, prices, and options please go to our Amazon Store listed below.<br>
                                     - http://www.amazon.com/
                                    </div>
                                </div>
                                <div class = "rightSide">
                                    <div class="price2">$2.99</div>
                                    <div class="inStock">In Stock</div>
                                    <div class = "select">
                                        <div class = "qty">qty:</div>
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <input type="button" class="button" value="Add to Cart">    
                                </div>
                            </div>
                        </div>
                        <div id="fade" class="black_overlay"></div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </div>    
    
</body>
</html>