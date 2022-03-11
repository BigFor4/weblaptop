<?php
require_once("./Models/User_model.php");
require_once("./Models/User.php");
require_once("./Models/dashboard.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Type_model.php");


class user_controller {
    private $user_model;
    private $laptop_model;
    private $type_model;
    function __construct() {
        $this->user_model = new User_model();
        $this->laptop_model = new Laptop_model();
        $this->type_model = new Type_model();
        
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
         $users = new User();
         $check = $this->user_model->getUserlist();
        if(!empty($_POST)){
            
            
            
            
            if (isset($_POST['name'])) {
                $users->name = $_POST['name'];
            }
            if (isset($_POST['image'])) {
               
                $users->image = $_POST['image'];
                
            }
           
            if (isset($_POST['email'])) {
                $users->email = $_POST['email'];
               
            }
            
            if (isset($_POST['phone'])) {
                $users->phone = $_POST['phone'];
            }
            
            if (isset($_POST['address'])) {
                $users->address = $_POST['address'];
            }
            if (isset($_POST['password'])) {
                $users->password = $_POST['password'];
            }
            $reuslt = $this->user_model->insert($users);
            if ($reuslt) {
                echo json_encode(array('check'=>true,'message'=>"Insert successfully!"));
            }
            else {
                echo json_encode(array('check'=>false,'message'=>"Insert NOT successfully! Error: "));
            }
            
        }
       
        
        require_once("./Views/User/create.php");
    }
     function quanmetkhau()
    {
        
         if(!empty($_POST)){
            $email = "";
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $size = strlen( $chars );
            $newpassword = "";
            for( $i = 0; $i < 10; $i++ ) {
            $newpassword .= $chars[ rand( 0, $size - 1 ) ];
            }

            $result=$this->user_model->quenmatkhau($email,$newpassword);
            $to      = $email;
            $subject = "Tiêu đề email";
            $message = "<h1>Mật khẩu mới của bạn là:'$newpassword'</h1>";       //MỚI
            $header  =  "From:myemail@exmaple.com \r\n";
            $header .=  "Cc:other@exmaple.com \r\n";
            
            $header .= "MIME-Version: 1.0\r\n";             //MỚI
            $header .= "Content-type: text/html\r\n";       //MỚI
           
            $success = mail ($to,$subject,$message,$header);
        }
        $check = $this->user_model->getUserlist();
        require_once("Views/quenmatkhau/quenmatkhau.php");
    }
    function update() {
        
        $id  = filter_input(INPUT_GET,"id");
        $listUser = $this->user_model->findById($id);
        if(!empty($_POST)){
            
            $users = new User();
            if (isset($_POST['name'])) {
                $users->name = $_POST['name'];
            }
            if (isset($_POST['image'])) {
                $users->image = $_POST['image'];
                if($users->image == NULL)
                {
                    $users->image = $listUser[0]['image'];
                }
                
            }
            if (isset($_POST['email'])) {
                $users->email = $_POST['email'];
            }
            if (isset($_POST['phone'])) {
                $users->phone = $_POST['phone'];
            }
            
            if (isset($_POST['address'])) {
                $users->address = $_POST['address'];
            }
            if (isset($_POST['password'])) {
                $users->password = $_POST['password'];
            }
            if (isset($_POST['status'])) {
                $users->status = $_POST['status'];
            }
            if (isset($_POST['role_id'])) {
                $users->role_id = $_POST['role_id'];
            }
            $users->id = $id;
            $reuslt = $this->user_model->update($users);
        }
        
            
       
        
        require_once("./Views/User/update.php");
    }
    function delete() {
        if(!empty($_POST)){
            
            $id = "";
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
            }
            
          
            $reuslt = $this->user_model->delete($id);
        }
        
    }
    
    function list() {

        $result = $this->user_model->selectCountID();
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = $result[0]['number'];
        }
        $numberOnePage = 5;
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
        $listUser =$this->user_model->selectNumber($index,$numberOnePage);
        if ($listUser !== false) {
            require_once("./Views/User/index.php");
        }
        
       
    }
    function search()
    {
        
        $search = filter_input(INPUT_GET,"value");
           
            
            
            
            $listUser = $this->user_model->searchByEmail($search);
            
        require_once("./Views/User/search.php");
    }
    function dashboard()
    {
        
        $dashboard = new dashboard();
        $listUser = $dashboard->getUser();
        $listLaptop = $dashboard->getLaptop();
        $Money = $dashboard->getMoney();
        $donhangcho = $dashboard->getdonhangcho();
        $reportUser = $dashboard->thongkenguoidung();
        $donhangcho = $dashboard->getdonhangcho();
        $reportProduct = $dashboard->thongkesanpham();
        $reportPayment = $dashboard->thongkedathang();
        $reportCreateProduct = $dashboard->thongkengaytaosanpham();
        require_once("Views/dashboard.php");
    }
    function dangxuat()
    {
        
        
        require_once("Views/dangnhap/dangnhap.php");
    }
    function dangnhap() {
       
        unset($_SESSION["email"]);
        unset($_SESSION["role_id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["image"]);
        unset($_SESSION["id"]);
        unset($_SESSION["address"]);
        unset($_SESSION["phone"]);
        unset($_SESSION["password"]);
        $email = $password = "";
        if(!empty($_POST)){
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            $reuslt = $this->user_model->login($email,$password);
            if($reuslt)
            {
                
                $_SESSION['email'] = $email;
                $_SESSION['role_id'] = $reuslt[0]['role_id'];
                $_SESSION['name'] = $reuslt[0]['name'];
                $_SESSION['image'] = $reuslt[0]['image'];
                $_SESSION['id'] = $reuslt[0]['id'];
                $_SESSION['address'] = $reuslt[0]['address'];
                $_SESSION['phone'] = $reuslt[0]['phone'];
                $_SESSION['password'] = $reuslt[0]['password'];
            }
           
            
        }
        $check = $this->user_model->getUserlist();
        
        require_once("Views/dangnhap/dangnhap.php");
    }
    function dangki()
    {
        $users = new User();
        $check = $this->user_model->getUserlist();
        if(!empty($_POST)){
            
            
            
            
                if (isset($_POST['name'])) {
                    $users->name = $_POST['name'];
                }
                
                
                if (isset($_POST['email'])) {
                    $users->email = $_POST['email'];
                    
                }
                
                if (isset($_POST['phone'])) {
                    $users->phone = $_POST['phone'];
                }
                
                if (isset($_POST['address'])) {
                    $users->address = $_POST['address'];
                }
                if (isset($_POST['password'])) {
                    $users->password = $_POST['password'];
                }
                $reuslt = $this->user_model->dangky($users);

        }
        require_once('./Views/dangki/dangki.php');
    }
    function profile()
    {
        require_once("./Views/user/profile.php");
    }
    
}
?>