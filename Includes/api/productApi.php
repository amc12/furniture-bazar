<?php
require_once (__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/productLib.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');

 returnHeader();
 //echo ('<pre>') ;

switch ($_GET['apiMethod']) {
	case 'getAllProducts':  returnJSON(getAllProducts());
                        	break;    	
    default:
         throwJSONError (_ERROR_PRODUCTS_NOT_FOUND_CODE, _ERROR_PRODUCTS_NOT_FOUND_MSG);
         //return print_r(array('successfull' => false, 'errorMessage'=> 'API Command not found!'), true);
        break;}
 //echo ('</pre>');
?>