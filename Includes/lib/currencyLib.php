<?php
function populateConversionValues () {
    global $db;
    //apelez clasa functie 
    //ce aduce lista cursuri bnr (toate monedele)
    $arrCurrencies = getCurrentCurrencies(); 
    foreach ($arrCurrencies as $currency) {
        $value = getCurrencyConversion(strtoupper($currency)); //de pe net (grup)
        $SQL = "INSERT INTO CurrencyConversion ('ISOCode', 'ConversionDate', 'ConversionValue') VALUES ('.$currency.', NOW(), '.$value.')";
        mysql_query($db, $SQL);
        
    }
    
}



function getCurrentCurrencies (){
global $db;
$arrC = array();
$SQL = " SELECT ISOCode from Currencies" ;
$query = mysqli_query($db, $SQL);
if(!$query || mysqli_errno($db)){ exit();
while ($row = mysqli_fetch_assoc($query))
{ $arrC[] = $row['ISOCode'];
return $arrC;
}
}