<?php

require_once (__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../lib/userLib.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');
returnHeader();

echo ('<pre>') ;
switch ($_POST['apiMethod']) {
    case 'addBrand':
    case 'getBrands':
    case 'getBrandCategory':
    case 'deleteBrands':
    default:    
        
}