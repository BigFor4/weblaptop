<?php
require_once("./Models/truyvandb.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");
class Laptop_model {
    
    public function getLaptoplist() {
        $sql = 'select * from products ORDER BY id desc';
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    
     public function getlistTinTuc() {
        $sql = 'select * from products where tintuc = 1 ORDER BY id desc';
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    
    function insert(Laptop $laptop) {
        $time = date('Y/m/d H:i:s');
        $sql = "insert into products (name, type, image, ram, cpu, manhinh,card, price, trongluong, 
                kichthuoc, xuatxu, baohanh, hedieuhanh, thongtinkhac,giamgia,created_at) value 
                ('$laptop->name','$laptop->type','$laptop->image','$laptop->ram','$laptop->cpu'
                ,'$laptop->manhinh','$laptop->card','$laptop->price','$laptop->trongluong','$laptop->kichthuoc'
                ,'$laptop->xuatxu','$laptop->baohanh','$laptop->hedieuhanh','$laptop->thongtinkhac','$laptop->giamgia','$time')";
        $result = execute($sql);
        return $result;
    }


    public function selectCountID() {
        $sql = 'select count(id) as number from products';
        $result = executeResult($sql);
        return $result;
    }
    public function selectNumber($index,$numberOnePage) {
        $sql = 'select * from products limit ' . $index . ', '.$numberOnePage.'';
        $ListUser = executeResult($sql);
        return $ListUser;
	}
    public function searchByName($name) {
        $sql = "select * from products where name LIKE '%$name%'";
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    public function SearchNameType($search,$type) {

        $sql = "select * from products where type = '$type' and  name LIKE '%$search%'";
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    public function findById($id) {
        $sql = "select * from products where id = $id";
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    
    
    public function SearchType($type) {
        $sql = "select * from products where type=$type";
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    public function SearchName($search) {
        $sql = "select * from products where name LIKE '%$search%'";
        $ListLaptop = executeResult($sql);
        return $ListLaptop;
    }
    
     function update(Laptop $laptop) {
        $time = date('Y/m/d H:i:s');
        $sql = "UPDATE products set name = '$laptop->name', type = '$laptop->type',image = '$laptop->image',motatintuc = '$laptop->motatintuc',
                                    ram = '$laptop->ram', cpu = '$laptop->cpu', manhinh = '$laptop->manhinh',tintuc = '$laptop->tintuc',
                                    card = '$laptop->card', price = '$laptop->price', trongluong = '$laptop->trongluong', status = '$laptop->status',
                                    kichthuoc = '$laptop->kichthuoc', xuatxu = '$laptop->xuatxu', baohanh = '$laptop->baohanh',giamgia = '$laptop->giamgia',
                                    hedieuhanh = '$laptop->hedieuhanh', thongtinkhac = '$laptop->thongtinkhac',showmenu = '$laptop->showmenu',updated_at='$time'
                                    where id = '$laptop->id'";
        $result = execute($sql);
        return $result;
    }
    
    public function delete($id) {
        $sql = 'delete from products where id = '.$id;
        $result = execute($sql);
        return $result;
    }
    
    public function likeproduct()
    {
        $sql = "select * from likeproduct";
        $ListLikeProduct = executeResult($sql);
        return $ListLikeProduct;
    }

    public function insertlikeproduct($product_id,$user_id,$status)
    {
        $sql = "insert into likeproduct(product_id,user_id,status) value ('$product_id','$user_id','$status')";
        $result = execute($sql);
        return $result;
    }
    
    public function dislikelikeproduct($product_id,$user_id,$status)
    {
        
        $sql = 'delete from likeproduct where product_id = '.$product_id. ' and user_id = '.$user_id.'';
        $result = execute($sql);
        return $result;
    }

    public function deleteorder($id)
    {
        
        $sql = 'delete from `order` where id = '.$id;
        $result = execute($sql);
        return $result;
    }
}
?>