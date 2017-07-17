<?php

require_once (__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../lib/userLib.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');
returnHeader();


/*switch ($_GET['apiMethod']) {
    case 'userLogin': if (empty($_GET['userName']) || empty($_GET['password'])) { 

    					throwJSONError(_ERROR_USERNAME_NOT_SPECIFIED_CODE, _ERROR_USERNAME_NOT_SPECIFIED_MSG);
    					    }
    				  $userCode = loginUser($_GET['userName'] , $_GET['password']);
    				  if ($userCode === true) { 
    				  	echoJSONOutput($_SESSION['user']);
    				  	
    				  }
    				  else { throwJSONError(_ERROR_USERNAME_NOT_SPECIFIED_CODE, _ERROR_USERNAME_NOT_SPECIFIED_MSG.' - not found');}
                      //$userDetails = returnUserDetails($userCode);
                      //print_r($userDetails);
                      
                        break;
    case 'getLoggedUserDetails': if (checkIfUserIsLoggedIn()) {
    									echoJSONOutput($_SESSION['user']);
    								}
    							else { throwJSONError (_ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE, _ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE_MSG);}
    	                break;
    case 'logoutUser': if (logoutUser()){
    						echoJSONOutput('succces');
    					}
    					else { throwJSONError (_ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE, _ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE_MSG);}
    					break;
    default:
         throwJSONError (_ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE, _ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE_MSG);
         //return print_r(array('successfull' => false, 'errorMessage'=> 'API Command not found!'), true);
        break;
}
    	*/				
switch ($_POST['apiMethod1']) {					
    case 'addUser': if (empty($_POST['username']) || empty($_POST['pwd']) || empty($_POST['email']) ){
                        throwJSONError(_ERROR_REQUIERED_FIELD_CODE, _ERROR_REQUIERED_FIELD_MSG);
                        }
                    $addUser = addUser($_POST['username'], $_POST['pwd'], $_POST['email']);  
                    if ($addUser === true){
                        
                        echo 'successfull'; 
                    }
                        break;
    //case 'updateUser':
    //case 'deleteUser':
     default:
         throwJSONError (_ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE, _ERROR_USERNAME_NOT_SPECIFIED_AUTH_CODE_MSG);
         //return print_r(array('successfull' => false, 'errorMessage'=> 'API Command not found!'), true);
        break;
}
?>