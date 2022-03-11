<?php
require_once("./Models/Type_model.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Type.php");
require_once("./Models/Laptop.php");
class laptop_controller {
    private $type_model;
    private $laptop_model;
    function __construct() {
        $this->type_model = new Type_model();
        $this->laptop_model = new Laptop_model();
        
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
    function create() {
        $laptop = new Laptop();
        if(!empty($_POST)){
            if (isset($_POST['name'])) {
                $laptop->name = $_POST['name'];
            }
            if (isset($_POST['type'])) {
                $laptop->type = $_POST['type'];
            }
            if (isset($_POST['image'])) {
                $laptop->image = $_POST['image'];
            }
            if (isset($_POST['ram'])) {
                $laptop->ram = $_POST['ram'];
            }
            if (isset($_POST['cpu'])) {
                $laptop->cpu = $_POST['cpu'];
            }
            if (isset($_POST['manhinh'])) {
                $laptop->manhinh = $_POST['manhinh'];
            }
            if (isset($_POST['card'])) {
                $laptop->card = $_POST['card'];
            }
            if (isset($_POST['price'])) {
                $laptop->price = $_POST['price'];
                $laptop->giamgia = $laptop->price;
            }
            if (isset($_POST['trongluong'])) {
                $laptop->trongluong = $_POST['trongluong'];
            }
            if (isset($_POST['kichthuoc'])) {
                $laptop->kichthuoc = $_POST['kichthuoc'];
            }
            if (isset($_POST['xuatxu'])) {
                $laptop->xuatxu = $_POST['xuatxu'];
            }
            if (isset($_POST['baohanh'])) {
                $laptop->baohanh = $_POST['baohanh'];
            }
            if (isset($_POST['hedieuhanh'])) {
                $laptop->hedieuhanh = $_POST['hedieuhanh'];
            }
            if (isset($_POST['thongtinkhac'])) {
                $laptop->thongtinkhac = $_POST['thongtinkhac'];
            }
            $reuslt = $this->laptop_model->insert($laptop);
        }
        $listType = $this->type_model->getTypelist();
        require_once("./Views/Laptop/create.php");
    }
    function update() {
        $id  = filter_input(INPUT_GET,"id");
        $listLaptop = $this->laptop_model->findById($id);
        $listType = $this->type_model->getTypelist();
        if(!empty($_POST)){
            
            $laptop = new Laptop();
            if(!empty($_POST)){
                $laptop->id = $id;
                if (isset($_POST['name'])) {
                    $laptop->name = $_POST['name'];
                }
                if (isset($_POST['type'])) {
                    $laptop->type = $_POST['type'];
                }
                if (isset($_POST['image'])) {
                    $laptop->image = $_POST['image'];
                    if($laptop->image == NULL)
                    {
                        $laptop->image = $listLaptop[0]['image'];
                    }
                    
                }
                if (isset($_POST['ram'])) {
                    $laptop->ram = $_POST['ram'];
                }
                if (isset($_POST['cpu'])) {
                    $laptop->cpu = $_POST['cpu'];
                }
                if (isset($_POST['manhinh'])) {
                    $laptop->manhinh = $_POST['manhinh'];
                }
                if (isset($_POST['card'])) {
                    $laptop->card = $_POST['card'];
                }
                if (isset($_POST['price'])) {
                    $laptop->price = $_POST['price'];
                    
                }
                if (isset($_POST['giamgia'])) {
                    $laptop->giamgia = $_POST['giamgia'];
                   
                }
                if (isset($_POST['trongluong'])) {
                    $laptop->trongluong = $_POST['trongluong'];
                }
                if (isset($_POST['kichthuoc'])) {
                    $laptop->kichthuoc = $_POST['kichthuoc'];
                }
                if (isset($_POST['xuatxu'])) {
                    $laptop->xuatxu = $_POST['xuatxu'];
                }
                if (isset($_POST['baohanh'])) {
                    $laptop->baohanh = $_POST['baohanh'];
                }
                if (isset($_POST['hedieuhanh'])) {
                    $laptop->hedieuhanh = $_POST['hedieuhanh'];
                }
                if (isset($_POST['thongtinkhac'])) {
                    $laptop->thongtinkhac = $_POST['thongtinkhac'];
                }
                if (isset($_POST['showmenu'])) {
                    $laptop->showmenu = $_POST['showmenu'];
                }
                if (isset($_POST['status'])) {
                    $laptop->status = $_POST['status'];
                }
                if (isset($_POST['tintuc'])) {
                    $laptop->tintuc = $_POST['tintuc'];
                }
                if (isset($_POST['motatintuc'])) {
                    $laptop->motatintuc = $_POST['motatintuc'];
                }
                $reuslt = $this->laptop_model->update($laptop);
            }
            
           
        }
        
        
        
        
        require_once("./Views/Laptop/update.php");
    }
    function delete() {
        if(!empty($_POST)){
            
            $id = "";
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
            }
            
            
            $reuslt = $this->laptop_model->delete($id);
        }
    }
    
    function list() {
        
        $result = $this->laptop_model->selectCountID();
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = $result[0]['number'];
        }
        $numberOnePage = 6;
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
        $listType = $this->type_model->getTypelist();
        $listLaptop =$this->laptop_model->selectNumber($index,$numberOnePage);
        if ($listLaptop !== false) {
            require_once("./Views/Laptop/index.php");
        }
       
        
    }
    function search() {
        
        
        $listType = $this->type_model->getTypelist();
        $listLaptop = $this->laptop_model->getLaptoplist();
        require_once("./Views/Laptop/index.php");
    }
    function like() {
        if(!empty($_POST)){
            
            $product_id = $status = "";
            if (isset($_POST['product_id'])) {
                $product_id = $_POST['product_id'];
            }
            if (isset($_POST['status'])) {
                $status = $_POST['status'];
            }
            
            
            $reuslt = $this->laptop_model->insertlikeproduct($product_id,$_SESSION['id'],$status);
        }
        
    }
    function dislike() {
        if(!empty($_POST)){
            
            $product_id = $status = "";
            if (isset($_POST['product_id'])) {
                $product_id = $_POST['product_id'];
            }
            if (isset($_POST['status'])) {
                $status = $_POST['status'];
            }
            
            
            $reuslt = $this->laptop_model->dislikelikeproduct($product_id,$_SESSION['id'],$status);
        }
        
    }
    
    function disorder() {
        if(!empty($_POST)){
            
            $id = "";
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
            }
            $reuslt = $this->laptop_model->deleteorder($id);
        }
        
    }

    function searchADMIN()
    {
        
        $search = filter_input(INPUT_GET,"value");
        $listLaptop = $this->laptop_model->searchByName($search);
        $listType = $this->type_model->getTypelist();
        require_once("./Views/Laptop/search.php");
    }
}
?>