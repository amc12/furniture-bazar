<?php
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/outputHelper.php');
//require_once(__DIR__ . '/../config/constants.php');

function databaseConnect (){
    global $db;
    $db = mysqli_connect("localhost", _DB_USER, _DB_PASSWORD, _DB_DATABASE);
    if (mysqli_connect_errno()){
        throwJSONError(_ERROR_FAILED_DATABASE_CODE , _ERROR_FAILED_DATABASE_MSG );
}

        
}