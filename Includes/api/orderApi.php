<?php
require_once (__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../lib/cartLib.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');

 returnHeader();
 echo ('<pre>');

switch ($_GET['apiMethod']) {
    case 'finalize order'://ia din cart si pune in DB
   
    case 'cancel order': if(isset($_GET['orderId']) or $_GET['orderId']<=0)
                            throwJSONError('', 'nu am gasit comanda');
                            if(checkIfUserIsLoggedIn())
                            throwJSONError ('', '');
    case 'getAllOrders': if(!checkIfUserIsLoggedIn())
                                throwJSONError('', 'mesaj eroare - user nelogat');
                            	echoJSONOutput (getAllOrders());
                        break;    	

    case 'getOrderDetails': if(!isset($_GET['orderId']) || $_GET['orderId']<=0)
                                throwJSONError ('', 'mesaj eroare  - nu este comanda');
                            if (!checkIfUserIsLoggedIn())
                                throwJSONError(' ', 'mesaj eroare userul nu este logat');
                            echoJSONOutput(getOrderDetails($_GET['orderId']));
}
    
?>