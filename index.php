<!DOCTYPE html>
<html>

<head>
    <title>furniture bazaar</title>
    <meta charset="utf-8" lang="eng">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/jquery-ui.min.css" rel="stylesheet">
  <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
  <link href="css/jquery-ui.theme.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="Css/reset.css">
    <link rel="stylesheet" type="text/css" href="Css/furniture.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    
    </script>
</head>

<body>
    <div id="header"></div>
    <!--<?php
include_once 'header.html';
include_once 'navigation.html';
?>-->
    <main>
        <!--needs tweaking-->
        <!--deals first area-->
        <div class="row  slider-deals top_row">
            <div class="univ_wrapper">
                <div class="col_4 hot_deals">
                    <div class="backgr-black">
                        <p>HOT DEALS</p>
                        <p class="dots-select">
                            <span class="active"></span>
                            <span></span>
                            <span></span>
                        </p>
                    </div>
                    <div class="add_cart">
                        <p>
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> ADD TO CART
                        </p>
                    </div>
                    <div id="clockdown">
                        <div class="deal_circle days">
                            <p class="dates" id="days"></p>
                            <p class="text">days</p>
                        </div>
                        <div class="deal_circle hours">
                            <p class="dates" id="hours"></p>
                            <p class="text">HRS</p>
                        </div>
                        <div class="deal_circle minutes">
                            <p class="dates" id="minutes"></p>
                            <p class="text">MINS</p>
                        </div>
                        <div class="deal_circle seconds">
                            <p class="dates" id="seconds"></p>
                            <p class="text">SECS</p>
                        </div>
                    </div>
                    <div class="border-area">
                        <p class="bordered_title">Aenean Ru Bristique</p>
                        <p class="border-stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </p>
                        <div class="price_opt">
                            <p class="opt_square"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <p class="opt_square"><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                            <p class="opt_square"><i class="fa fa-exchange" aria-hidden="true"></i></p>
                            <p class="old_new_price">
                                <span class="old"><span>$350.00</span></span>
                                <span class="new">$300.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!--Slider Start-->
                <div class="col_8 right-carousel">
                    <div class="deals-slider-wrap">
                        <div class="slider-dreapta">
                            <div class="slidess slide-1 ">
                                <div class="slider_title_container">
                                    <h3>INDOOR <span>FURNITURE</span></h3>
                                    <h4>save up to 50% of all furniture</h4>
                                    <a class="shop_now_btn">
                                        <p>shop now</p>
                                    </a>
                                </div>
                            </div>
                            <div class="slidess slide-2"><img src="Img/slider/02.png"></div>
                            <div class="slidess slide-3"><img src="Img/slider/03.jpg"></div>
                            <div class="slidess slide-4"><img src="Img/slider/04.jpg"></div>
                            <div class="slidess slide-5"><img src="Img/slider/05.jpg"></div>
                        </div>
                        <div class="slide-control">
                            <div class="slide-nav previous" id="slideprev" onclick="Sliding(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            <div class="slide-nav next" id="slidenext" onclick="Sliding(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--The 4 option row thingy-->
        <div class="row second_row">
            <div class="univ_wrapper four-icon-wrp">
                <div class="col_3">
                    <div class="four-icon-container">
                        <div class="icon_top"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <p>free shipping</p>
                        <p>all order</p>
                    </div>
                </div>
                <div class="col_3">
                    <div class="four-icon-container">
                        <div class="icon_top"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                        <p>24/7 customer</p>
                        <p>support</p>
                    </div>
                </div>
                <div class="col_3">
                    <div class="four-icon-container">
                        <div class="icon_top"><i class="fa fa-reply-all" aria-hidden="true"></i></div>
                        <p>money back</p>
                        <p>guarantee</p>
                    </div>
                </div>
                <div class="col_3">
                    <div class="four-icon-container">
                        <div class="icon_top"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                        <p>member discount</p>
                        <p>first order</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row third_row">
            <div class="univ_wrapper">
                <div class="col_6 col_left">
                    <div class="guest_offer">
                        <p>guest room</p>
                        <p>sofa</p>
                        <p class="border_percent">
                            -20%
                        </p>
                    </div>
                </div>
                <div class="col_6 office_special col_right">
                    <div>
                        <span class="set_to_mid">
               <span class="bold_font">office</span><span> chair</span>
                        <br>
                        <span class="smaller_text">collection</span>
                        <span class="orange_price">
               $200.00
               </span>
                        </span>
                    </div>
                    <div class="second_box">
                        <div class="set_to_right">
                            <span class="orange_price"><span class="bold_font">special</span> collection</span>
                            <span class="small_text">save up to 45% of furniture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row products_wrapper">
            <div class="univ_wrapper title_categories">
                <div class="col_12">
                    <h4 class="bordered_title">new furniture</h4>
                    <p class="select-container">
                        <span class="selector bed_select active">Bed</span>
                        <span class="selector chair_select">Chair</span>
                        <span class="selector sofa_select">Sofa</span>
                        <span class="selector table_select">Table</span>
                        <span class="selector dining_select">Dining</span>
                    </p>
                </div>
            </div>
            <div class="select_prod_page">
                <span class="select"></span>
                <span></span>
                <span></span>
            </div>
            <div class="univ_wrapper home_products">
                <div class="col_12">
                </div>
            </div>
        </div>
        <!--needs tweaking-->
        <div class="page-wrapper row home-products produse container" id="output">
        </div>
        <!--Tabbing area-->
        <div class="row ">
            <div class="page-wrapper tabbing">
                <div class="col-md-6 tabbing-area">
                    <div class="tab-wrapper">
                        <div class="tab-select-wrp clear_both">
                            <a class="active" href="#tab1">featured</a>
                            <a href="#tab2">top seller</a>
                            <a href="#tab3">sale off</a>
                            <a href="#tab4">top rated</a>
                        </div>
                        <div class="tab_item_container">
                            <div id="tab1" class="tab active">
                                tabul 1
                            </div>
                            <div id="tab2" class="tab">
                                <div class="item_container">
                                    tabul 2
                                </div>
                            </div>
                            <div id="tab3" class="tab">
                                <div class="item_container">
                                    tabul 3
                                </div>
                            </div>
                            <div id="tab4" class="tab">
                                <div class="item_container">
                                    tabul 4
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="righty">
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--<?php include_once 'footer.html'; ?>-->
    <div id="footer"></div>
    <script src="https://code.jquery.com/jquery-3.2.0.min.js" type="text/javascript"></script>
    <!--<script src="js/jquery-3.2.0.min.js"></script>-->
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
    <script src="SCRIPTS/scripts-home.js" type="text/javascript"></script>
</body>

</html>
