<?php 
require_once("./Models/product.php");
require_once("./Models/Type_model.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");

class index_controller {
	var $model;
	private $type_model;
	private $laptop_model;
	function __construct() {
        require_once("./Models/product_model.php");
		$this->model = new Product_Model();	
		$this->type_model = new Type_model();
		$this->laptop_model = new Laptop_model();
	}
	
	function run() {
		$action_GET = isset($_GET['action'])?$_GET['action']:'';
		switch($action_GET) {
			case 'view':
				$id = '';
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
				$result = $this->model->getProductById($id);
				$action_POST = isset($_POST['action'])?$_POST['action']:'';
				if (empty($action_POST)) {
					require_once('./Views/sanphamchitiet/sanphamchitiet.php');
					break;
				}
			case 'tintuc':
                $listType = $this->type_model->getTypelist();
                $listLaptop = $this->laptop_model->getlistTinTuc();
                require_once('./Views/tintuc/tintuc.php');
				break;
            case 'gioithieu':
                $listType = $this->type_model->getTypelist();
                require_once('./Views/gioithieu/gioithieu.php');
                break;
            case 'dangnhap':
                require_once('./Views/dangnhap/dangnhap.php');
                break;
            case 'dangki':
                require_once('./Views/dangki/dangki.php');
                break;
			case 'sanpham':
                $listType = $this->type_model->getTypelist();
                $result = $this->model->selectCountID();
                $number = 0;
                if ($result != null && count($result) > 0) {
                    $number = $result[0]['number'];
                }
                $numberOnePage = 12;
                $pages = ceil($number / $numberOnePage);

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
                $index = ($curent_page - 1) * $numberOnePage;
                $result =$this->model->selectNumberProduct($index,$numberOnePage);
                $listLikeProduct = $this->laptop_model->likeproduct();

                if ($result !== false) {
					require_once('./Views/sanpham/sanpham.php');
				}
				else {
					print "Error";
				}
				
				break;
			// case 'pagenoibat':

            // case 'pagenew':
                case 'page':
                default:
                $type = 0;
                $result = $this->model->selectCountIdType($type);
                $listTinTuc = $this->laptop_model->getlistTinTuc();

                $numberOnePage = 8;
                $number = 0;
                if($result != null && count($result) > 0){
                    $number = $result[0]['number'];
                }
                
                $pages = ceil($number / $numberOnePage);
                $curent_page = 1;
                if(isset($_GET['page'])){
                    $curent_page = $_GET['page'];
                }
                $curent_pagePrevious = 1;
                if(isset($_GET['page'])){
                    $curent_pagePrevious = $_GET['page'] - 1;
                }
                $curent_pageNext = 1;
                if(isset($_GET['page'])){
                    $curent_pageNext = $_GET['page'] + 1;
                }
                if($curent_pageNext > $pages){
                    $curent_pageNext = $pages;
                }
                if($curent_pagePrevious<1){
                    $curent_pagePrevious = 1;
                }
                $index = ($curent_page-1)* $numberOnePage;
				$noibat = $this->model->selectNumberProductType($index,$numberOnePage,$type);



                
                $type1 = 1;
                $result1 = $this->model->selectCountIdType($type1);
                
                $number1 = 0;
                if($result1 != null && count($result1) > 0){
                    $number1 = $result1[0]['number'];
                }
                $pages1 = ceil($number1 / $numberOnePage);

                $curent_page1 = 1;
                if(isset($_GET['page1'])){
                    $curent_page1 = $_GET['page1'];
                }
                $curent_pagePrevious1 = 1;
                if(isset($_GET['page1'])){
                    $curent_pagePrevious1 = $_GET['page1'] - 1;
                }
                $curent_pageNext1 = 1;
                if(isset($_GET['page1'])){
                    $curent_pageNext1 = $_GET['page1'] + 1;
                }
                if($curent_pageNext1 > $pages1){
                    $curent_pageNext1 = $pages1;
                }
                if($curent_pagePrevious1<1){
                    $curent_pagePrevious1 = 1;
                }
                $index1 = ($curent_page1-1)*$numberOnePage;
                $new = $this->model->selectNumberProductType($index1,$numberOnePage,$type1);
				$listType = $this->type_model->getTypelist();
                $listLaptop = $this->laptop_model->getLaptoplist();
                $listLikeProduct = $this->laptop_model->likeproduct();

                
				if ($noibat !== false && $new !== false) {
                    
					require_once('./Views/content_view.php');
                    
				}
				else {
					print "Error";
				}
				break;
		}
	}
}
?>