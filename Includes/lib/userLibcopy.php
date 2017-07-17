<?php

/*function loginUser($userName, $password) {
 	 global $users;
      foreach($users as $key => $value) {
      	if( strtoupper('$userName') == strtoupper($users['userName']) && strtoupper('$password') == strtoupper($users['password'])) {
      		$arr = array ($userName, $users['name'], $users['birthDay']); }
      	
      	if (!empty($arr)){return $arr;  }
		else { return false;}	 
      }
    }
    $value = loginUser ('user3', 'mark3');

  print_r($value);*/


  /*function miau (){
  global $users;
  foreach ($users as $row) {
    echo $row['name'].' - '.$row['birthDay']. "</br>";
}
}
miau();*/

$users = array(  
  "1001" => array(
                "userName" => "Oliv", 
                "name" => "Olivia Costan", 
                "password" => "oliv1234", 
                "birthDay" => "1993.08.05",
                ),
   "1002" => array(
                "userName" => "Ovidiu", 
                "name" => "Ovidiu Constantin", 
                "password" => "ovi1234", 
                "birthDay" => "1992.02.05",
                ),
   "1003" => array(
                "userName" => "Madalina", 
                "name" => "Madalina Barticel", 
                "password" => "madu1234", 
                "birthDay" => "1992.05.15",
                ),
   "1004" => array( 
                "userName" => "Roxana", 
                "name" => "Roxana Anghel", 
                "password" => "rox1234", 
                "birthDay" => "1993.07.28",
                ),
   "1005" => array( 
                "userName" => "Carina", 
                "name" => "Carina Sandor", 
                "password" => "cari1234", 
                "birthDay" => "1993.09.15",
                ),
                
    );
    
    function loginUser($userName, $password) {
          global $users;
      foreach($users as $key => $user) {
      if( strtoupper($userName) == strtoupper($value['userName']) &&
      strtoupper($password) == strtoupper($value['password']) )
             return  $key;  
        }
     
}
   return false; 
       
}