<?php
require_once("./Models/Type_model.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");
require_once("./Models/product.php");
require_once("./Models/product_model.php");
class product_controller {
    private $type_model;
    private $laptop_model;
    private $model;
    function __construct() {
        $this->type_model = new Type_model();
        $this->laptop_model = new Laptop_model();
        $this->model = new Product_Model();	
        
        if (isset($_SESSION["email"]))
        {
            $this->user_id = $_SESSION['id'];
        }
        else{
            $this->user_id = "";
        }
    }
    
    public function run() {
        
        $actionGET = filter_input(INPUT_GET,"action");
        if (method_exists($this,$actionGET))
            /* Gọi đến phương thức có tên tương ứng với actionGET */
            $this->$actionGET();
            else {
                print "Process List...";
                $this->list();
            }
            
    }
    
    
    function searchType() {
        $listLikeProduct = $this->laptop_model->likeproduct();
        $listType = $this->type_model->getTypelist();
        
        $type = filter_input(INPUT_GET,"type");
        
        $listLaptop = $this->laptop_model->SearchType($type);
        
        $result = $this->laptop_model->SearchType($type);
        
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = count($result);
        }
        $pages = ceil($number / 24);
        
        $curent_page = 1;
        if (isset($_GET['page'])) {
            $curent_page = $_GET['page'];
        }
        $curent_pagePrevious = 1;
        if (isset($_GET['page'])) {
            $curent_pagePrevious = $_GET['page'] - 1;
        }
        $curent_pageNext = 1;
        if (isset($_GET['page'])) {
            $curent_pageNext = $_GET['page'] + 1;
        }
        if ($curent_pageNext > $pages) {
            $curent_pageNext = $pages;
        }
        if ($curent_pagePrevious < 1) {
            $curent_pagePrevious = 1;
        }
        $index = ($curent_page - 1) * 24;
        
        $result =$this->laptop_model->SearchType($type);
        if ($result !== false) {
            require_once("./Views/sanpham/searchsanpham.php");
        }
        else {
            print "Error";
        }
        require_once("./Views/sanpham/searchsanpham.php");
        
        
    }
    function searchName() {
        $listLikeProduct = $this->laptop_model->likeproduct();
        $listType = $this->type_model->getTypelist();
        $search = filter_input(INPUT_GET,"search");
        
      
        $listLaptop = $this->laptop_model->SearchName($search);
        
        $result = $this->laptop_model->SearchName($search);
        
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = count($result);
        }
        $pages = ceil($number / 24);
        
        $curent_page = 1;
        if (isset($_GET['page'])) {
            $curent_page = $_GET['page'];
        }
        $curent_pagePrevious = 1;
        if (isset($_GET['page'])) {
            $curent_pagePrevious = $_GET['page'] - 1;
        }
        $curent_pageNext = 1;
        if (isset($_GET['page'])) {
            $curent_pageNext = $_GET['page'] + 1;
        }
        if ($curent_pageNext > $pages) {
            $curent_pageNext = $pages;
        }
        if ($curent_pagePrevious < 1) {
            $curent_pagePrevious = 1;
        }
        $index = ($curent_page - 1) * 24;
        
        $result =$this->laptop_model->SearchName($search);
        if ($result !== false) {
            require_once("./Views/sanpham/searchsanpham.php");
        }
        else {
            print "Error";
        }
        require_once("./Views/sanpham/searchsanpham.php");
        
        
    }
    function searchNameType() {
        $listLikeProduct = $this->laptop_model->likeproduct();
        $listType = $this->type_model->getTypelist();
        $type = filter_input(INPUT_GET,"type");
        $search = filter_input(INPUT_GET,"search");
        $listLaptop = $this->laptop_model->SearchNameType($search,$type);
        
        $result = $this->laptop_model->SearchNameType($search,$type);
        
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = count($result);
        }
        $pages = ceil($number / 24);
        
        $curent_page = 1;
        if (isset($_GET['page'])) {
            $curent_page = $_GET['page'];
        }
        $curent_pagePrevious = 1;
        if (isset($_GET['page'])) {
            $curent_pagePrevious = $_GET['page'] - 1;
        }
        $curent_pageNext = 1;
        if (isset($_GET['page'])) {
            $curent_pageNext = $_GET['page'] + 1;
        }
        if ($curent_pageNext > $pages) {
            $curent_pageNext = $pages;
        }
        if ($curent_pagePrevious < 1) {
            $curent_pagePrevious = 1;
        }
        $index = ($curent_page - 1) * 24;
        
        $result =$this->laptop_model->SearchNameType($search,$type);
        if ($result !== false) {
            require_once("./Views/sanpham/searchsanpham.php");
        }
        else {
            print "Error";
        }
        require_once("./Views/sanpham/searchsanpham.php");
        
        
    }
}
?>