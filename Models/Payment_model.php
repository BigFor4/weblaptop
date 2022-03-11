<?php
require_once("./Models/truyvandb.php");
require_once("./Models/payment.php");
class Payment_model {
    
    
    
    
    function insertOrder($product_id,$user_id,$price) {
        $time = date('Y/m/d H:i:s');
        $sql = "insert into `order`(`user_id`,`created_at`) value ('$user_id','$time')";
        $result = execute($sql);
       
        $sql1 = 'SELECT MAX(id) as MaxID from `order` ';
        $result1 = executeResult($sql1)[0]['MaxID'];
        
        $sql2 = "insert into `order-details`(`order_id`,`product_id`,`price`) value ('$result1','$product_id','$price')";
        $result2 = execute($sql2);
        
        return $result;
    }

    function getListOrderById($id)
    {
        
        $sql = "select * from v_data where status = 0 and user_id = $id";
        $ListUser = executeResult($sql);
        return $ListUser;
    }
   
    function updateorder($order_id,$status) {
        
        $sql = "UPDATE `order` set  `status` = '$status' where id = '$order_id'";
        $result = execute($sql);
        return $result;
    }

    function updatepayment($order_id,$status) {
        
        $sql = "UPDATE `payment` set  `status` = '$status' where order_id = '$order_id'";
        $result = execute($sql);
        return $result;
    }

    function insertpayment(Payment $payment) {
        $time = date('Y/m/d H:i:s');
        $sql = "insert into `payment`(`user_id`, `order_id`, `cardnumber`, `name`, `expires`, `CVC`, `price`, `created_at`) 
                value ('$payment->user_id','$payment->order_id','$payment->cardnumber','$payment->name','$payment->expires',
                '$payment->cvc','$payment->price','$time')";
       $result = execute($sql);
        
        return $result;
    }
    
    function getPaymentUser($id)
    {
        
        $sql = "select * from `v_order` where user_id= '$id'";
        $ListPayment = executeResult($sql);
        return $ListPayment;
    }

    function getListPayment()
    {
        $sql = "select * from v_order where status=2";
        $ListPayment = executeResult($sql);
        return $ListPayment;
    }
}
?>