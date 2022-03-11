<?php
require_once("./Models/truyvandb.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");
require_once("./Models/Type_model.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Payment_model.php");
require_once("./Models/payment.php");
class dashboard {
    
    public function getUser() {
        $sql = 'select count(id) as soluong from users';
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    public function getLaptop() {
        $sql = 'select count(id) as soluong from products';
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }

    public function getMoney() {
        $sql = 'SELECT SUM(price) as money FROM `v_data` WHERE status = 1';
        $Money = executeResult($sql);
        return $Money;
    }

    public function getdonhangcho() {
        $sql = 'SELECT count(order_id) as soluong FROM `v_data` WHERE status = 2';
        $Money = executeResult($sql);
        return $Money;
    }
    public function thongkesanpham()
    {
        
        $sql = 'SELECT count(*) as index1, (select COUNT(*) from `products` where status = 1) AS index2, (select COUNT(*) from `products` where status = 2) AS index3 FROM `products` WHERE status = 0 
        ';
        $result = executeResult($sql);
        
        return $result;
    }

    public function thongkedathang()
    {
        
        $sql = 'SELECT count(*) as index1, (select COUNT(*) from `v_data` where status = 1) AS index2, (select COUNT(*) from `v_data` where status = 3) AS index3 FROM `v_data` WHERE status = 0 ';
        $result = executeResult($sql);
        
        return $result;
    }

    public function thongkenguoidung()
    {
        
      $sql = "SELECT count(*) as index1 ,(SELECT count(*) as index1  FROM `users` WHERE MONTH(created_at) = MONTH(NOW())-1) as index2,
                 (SELECT count(*) as index1  FROM `users` WHERE MONTH(created_at) = MONTH(NOW())-2) as index3,(SELECT count(*) as index1  FROM `users` WHERE MONTH(created_at) = MONTH(NOW())-3) as index4 
                 FROM `users` WHERE MONTH(created_at) = MONTH(NOW())";
        $result = executeResult($sql);
        
        return $result;
    }

    public function thongkengaytaosanpham()
    {
        
        $sql = "SELECT count(*) as index1 ,(SELECT count(*) as index1  FROM `products` WHERE MONTH(created_at) = MONTH(NOW())-1) as index2,
        (SELECT count(*) as index1  FROM `products` WHERE MONTH(created_at) = MONTH(NOW())-2) as index3,
        (SELECT count(*) as index1  FROM `products` WHERE MONTH(created_at) = MONTH(NOW())-3) as index4,
        (SELECT count(*) as index1  FROM `products` WHERE MONTH(created_at) = MONTH(NOW())-4) as index5
        FROM `products` WHERE MONTH(created_at) = MONTH(NOW())";
        $result = executeResult($sql);
        
        return $result;
    }
}
?>