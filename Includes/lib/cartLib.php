<?php
require_once(__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/productLib.php');


function initCart (){
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
}

function addProducttoCart ($productId, $quantity=1){
    initCart();
    $productDetails = getProductDetailsFromID($productId);
    if ($quantity >0)
    $_SESSION['cart'][$productId] = ['quantity'=>$quantity, 'price'=>$productDetails['price'], 'currency'=>$productDetails['currency'], 
    'total'=>$quantity*$productDetails['price'], 'productName'=>$productDetails['productName'] ];
    else if (isset($_SESSION['cart']['$productId']))
            unset($_SESSION['cart']['$productId']);
            return true;
    
}


function deleteproductfromCart($productId, $quantity=0) {
    return addProducttoCart($productId, $quantity);
}

function deleteCart(){
    $_SESSION['cart'] = array();
    return true;
}

function getCartDetails(){
    initCart();
    echoJSONOutput($_SESSION['cart']);
    
}