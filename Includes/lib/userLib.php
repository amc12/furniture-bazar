<?php
require_once(__DIR__ . '/../config/general.php');


 $users = array( array('userName' =>'user1', 'name' =>'John Doe', 'password' => 'john1', 'birthDay' => '1990.02.28'),
				array('userName' =>'user2', 'name' =>'Jane Done', 'password' =>'jane2', 'birthDay'=>'1980.07.18'),
				array('userName' => 'user3', 'name' => 'Mark Apple', 'password' => 'mark3', 'birthDay' => '1975.06.13'),
				array('userName' => 'user4', 'name' => 'Mike Snow', 'password' => 'mike4', 'birthDay' => '1969.09.23'),
				array('userName' => null, 'name' => 'Mary Smith', 'password' => 'mary5', 'birthDay' => '2000.05.08')
					 );

$db = _DB_DATABASE;

/*function loginUser($userName, $password){
	global $users;
	
	foreach ($users as $key=>$value) {
		if (strtoupper($value['userName']) == strtoupper($userName) && $value['password'] == $password) {
			//$arr = array($userName, $row['name'], $row['birthDay']) 
			$_SESSION['user'] = returnUserDetails($key);
			return true;
		}		
					
	}
	
	return false;	 
}*/

//$value = loginUser ('user3', 'mark3');

//print_r($value);

function checkIfUserIsLoggedIn () {
	if (isset($_SESSION['user'])) {
		return true;
	}
	else return false;
}


function returnUserDetails($userCode) {
	global $users;
	
	//check if $userCode exists as a key in $users (isset($users[$userCode])). If
    //it exists, return print_r($users[$userCode], true).
        	
    	if (isset($users[$userCode]) && $userCode != false){
				 $arr = print_r($users[$userCode]['name']);            //print_r('Name:' . $users[$userCode]['name'] . '</br>' . 'Birthday:'. $users[$userCode]['birthDay']);
    			$arr += array('userCode'=>$userCode);
    	  	   return $arr ; 
    	 }   	   	
    	return false;
    	     
    }

function logoutUser (){
	if (checkIfUserIsLoggedIn()) {
		unset($_SESSION['user']);
		return true;
	}
	return false;
}

function loginUser($userName, $password){
	global $db;
	
	databaseConnect();
	$sql = 'SELECT * FROM Users WHERE username = "'.addslashes($userName).'" AND password ="'.addslashes($password).'" LIMIT 0,1 ';
	$query = mysqli_query($db, $sql);
	if(!$query || mysqli_errno ($db) != 0) {
		throwJSONError(_ERROR_USERNAME_NOT_SPECIFIED_CODE, _ERROR_USERNAME_NOT_SPECIFIED_MSG . ' - '.$sql);
	}
	$row = mysqli_fetch_assoc($query);
	$_SESSION['user'] = $row;
	return true;
 }
 
function addUser($username, $password, $email){
	global $db;
	logoutUser();
	//session_start();
	databaseConnect();
	$sql = 'INSERT INTO users (username, password, email) VALUES ("'.$username.'" , "'.hash('sha256', $password).'" , "'.$email.'")';
    $query = mysqli_query($db, $sql);
    if(!$query || mysqli_errno ($db) != 0) {
		throwJSONError(_ERROR_USERNAME_NOT_SPECIFIED_CODE, _ERROR_USERNAME_NOT_SPECIFIED_MSG . ' - '.$sql);
	}
    else
    
    return true;
}
function updateUser(){
	
	
}
function deleteUser(){
	
}

?>