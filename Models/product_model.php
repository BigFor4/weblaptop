<?php 
require_once("./Models/truyvandb.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");
class Product_Model {
    public function selectNumberProductType($index,$numberOnePage,$type) {
        $sql = 'select * from products where  showmenu = 1 and status = '.$type.'   limit ' . $index . ', '.$numberOnePage.'';
            $result = executeResult($sql);
            return $result;
	}
    public function selectNumberProduct($index,$numberOnePage) {
        $sql = 'select * from products where  showmenu = 1  ORDER BY id desc limit ' . $index . ', '.$numberOnePage.'';
            $result = executeResult($sql);
            return $result;
	}
    public function select($sql) {
            $result = executeResult($sql);
            return $result;
	}
    public function selectCountID() {
        $sql = 'select count(id) as number from products  where  showmenu = 1 ';
        $result = executeResult($sql);
        return $result;
    }
    public function selectCountIdType($type) {
        $sql = 'select count(id) as number from products where  showmenu = 1 and status = '.$type;
        $result = executeResult($sql);
        return $result;
    }
	public function getProductById($id) {
		$sql = 'SELECT * FROM products WHERE showmenu = 1 and id ='.$id;
            $result = executeResult($sql);
            return $result;
	}
	
}
?>