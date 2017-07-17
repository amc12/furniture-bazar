<?php

function returnHeader() {
	header('Content-Type: application/json'); 
		
}

function throwJSONError($errorCode, $errorMessage) {
	$arr = array('successful' => false , 'errorCode' => $errorCode , 'errorMessage' => $errorMessage);
	$encodedJSON = json_encode($arr);
	echo $encodedJSON;
	exit();

}

function echoJSONOutput(array $arr){
	$arr1 = array('succesful' => true );
	if (count($arr) > 0) {
		$arr1 += array('details' => $arr );
		}
	else {return false;	}
	$encodedJSON = json_encode($arr1);
	echo $encodedJSON;
	exit();
}
function returnJSON (array $arr){
	      
	 echo  json_encode($arr);
	 exit();
}
?>