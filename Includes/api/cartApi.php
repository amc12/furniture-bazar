<?php
require_once (__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../lib/cartLib.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');

 returnHeader();
//$_SESSION['cart'] = array(['quantity'] ['price'] ['currency']['total']['productName']);
 echo '<pre>';

switch ($_GET['apiMethod']) {
    case 'add': if (isset($_GET['ProductId']) & $_GET['ProductId']>0){
                    if (isset($_GET['quantity'])){
                        if addProducttoCart($_GET['productId'], $_GET['quantity']){
                        echoJSONOutput();
                        }
                        else throwJSONError(_ERROR_ADD_PRODUCT_CODE, 'erorr adding product');}
                
                    else if(addProducttoCart($_GET['productId'])){
                        echoJSONOutput;}
                    else throwJSONError(_ERROR_ADD_PRODUCT_CODE, 'error adding product');}
               
                else throwJSONError(_ERROR_RTFM_CODE, 'RTFM');
                
                break;
                }
    case 'clearCart':
    case 'deleteproductfromCart':
    case 'getcartdetails':