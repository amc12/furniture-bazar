<?php
require_once(__DIR__ . '/../config/general.php');

//$db = _DB_DATABASE;
function getAllProducts(){
    global $db;
    databaseConnect();
    //$db = mysqli_connect("localhost", "root", "", "furniturebazaar") or die("Please, check your server connection.");

    $sql = 'SELECT * from products ORDER BY ProductId DESC';
    $query = mysqli_query($db, $sql);
    $arr = array();
    if (!$query || mysqli_errno($db)!=0)
        throwJSONError(_ERROR_FAILED_DATABASE_CODE, _ERROR_FAILED_DATABASE_MSG); //eroare sql
    
    //if ($query->num_rows > 0) {
    //$data = $query->fetch_all( MYSQLI_ASSOC );
    //echo json_encode( $data );
    while ($row = mysqli_fetch_assoc($query))
    {
          $arr[]=$row;
        }
    return ($arr); }
    //returnJSON($arr);
    //mysqli_close($db);

?>

