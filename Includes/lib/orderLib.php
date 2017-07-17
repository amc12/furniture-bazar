<?php
require_once(__DIR__ . '/../config/general.php');
require_once (__DIR__ . '/../'. _LIB_FOLDER .'/productLib.php');

function saveNewOrder ($userId){
    global $db;
    $sql = 'INSERT INTO Orders VALUES (NULL, UserId, 0 , RON, 0 , NOW())';
    $query = mysqli_query($db, $sql);
    if($query)
        return mysqli_insert_id($db);
    else throwJSONError(9, 'eroare la order');
}


function finalizeOrder() {
        global $db;
        $Total = 0;
        if (!isset($_SESSION['cart']) || count($_SESSION['cart']<=0))
            throwJSONError(8, 'no products in cart');
        saveNewOrder($_SESSION['user']['userId']);
        foreach ($_SESSION['cart'] as $productId => $productDetails ){
            $sql = 'INSERT INTO OrderDetails VALUES (NULL, '.$orderId.', '.$productId.', '.$productDetails['currency'].', 
            '.$productDetails['Total'].')';
            
            $Total += $productDetails['Total'];
            mysqli_query($db,$sql);
            
        }  
        $sql = 'UPDATE Orders set Total=$total WHERE OrderId = '.$orderId.'';
        mysqli_query($db, $sql); deleteCart();
        return true;
    }
    
function cancelOrder($orderId){ 
    global $db;
    if (isset($_SESSION['user']) & count($_SESSION['cart']>0)
        $sql = 'DELETE FROM Orders '.$orderId.'';
        if (mysqli_affected_rows >0)   return true;
            else throwJSONError();
}

function getAllOrders($orderId = 0){ //returneaza toate comenzile si detaliile despre o comanda selectata prin arg.orderId
    global $db;
    if (orderId ==0)
        $sql = 'SELECT * FROM Orders WHERE UserId = "'.$_SESSION['user']['UserId']."' ORDER BY orderDate DESC';
       else {
        $sql = 'SELECT * FROM Orders WHERE orderId = "'.$_SESSION['user']['UserId']."' AND orderId = $orderId';
        }
        $query = mysqli_query($db, $sql);
        if (!$query or mysqli_errno()>0) {
        throwJSONError ('', mesaj eroare la baza de date');
        }
        
    $arr = [];
    while ($R == mysqli_fetch_assoc($query)){
            $arr[]=$R;
        }
    return $arr;
    
}

function getOrderDetails($orderId){//afiseaza doar pt. o singura comanda
    global $db;
    $arr = getAllOrders($orderId);
        if (count($arr)<=0) 
            throwJSONError('', mesaj eroare - nu am gasit orderul/comanda);
    $arr = $arr[0];
    
}

function getOrderProducts($orderId){
    global $db;
    $sql = 'SELECT * FROM OrderDetails WHERE orderId = $orderId';
    $query = mysqli_query($db, $sql);
    $result = [];
    if ($query) { 
        while ($R == mysqli_fetch_assoc($query)) 
            $result[] = $R;
            
        }
    
    return $result;
    $sql = 'SELECT O.ProductId, P.ProductName, O.quantity, O.price, O.currency, O.Total FROM OrderDetails O INNERJOIN Products P
             ON (P.ProductId = O.ProductId) WHERE O.OrderId = $OrderId';
}