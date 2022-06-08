<?php
require_once("./Models/User_model.php");
require_once("./Models/User.php");
require_once("./Models/dashboard.php");
require_once("./Models/Laptop_model.php");
require_once("./Models/Type_model.php");
require_once("./Models/Payment_model.php");
require_once("./Models/payment.php");
require_once("./Models/product.php");
require_once("./Models/product_model.php");
class payment_controller {
    private $user_model;
    private $laptop_model;
    private $type_model;
    private $payment_model;
    var $model;
    var $user_id ;
    function __construct() {
       
		$this->model = new Product_Model();	
        $this->user_model = new User_model();
        $this->laptop_model = new Laptop_model();
        $this->type_model = new Type_model();
        $this->payment_model = new Payment_model();
        
        
        
    }
    
    public function run() {
       
        $actionGET = filter_input(INPUT_GET,"action");
        if (method_exists($this,$actionGET))
            /* Gọi đến phương thức có tên tương ứng với actionGET */
            $this->$actionGET();
            else {
                $this->list();
            }
            
    }
    function view()
    {
				$id = '';
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
              
				$result = $this->model->getProductById($id);
				$action_POST = isset($_POST['action'])?$_POST['action']:'';
				if (empty($action_POST)) {
					require_once('./Views/sanphamchitiet/sanphamchitiet.php');
			    
                }
                
               
    }
    function dathang()
    {   
        if(!empty($_POST)){
            if (isset($_POST['id'])) {
                $product_id = $_POST['id'];
            }
            $user_id = $_SESSION['id'];
            $listLaptop = $this->laptop_model->findById($product_id);
            $result = $this->payment_model->insertOrder($product_id,$user_id,$listLaptop[0]['giamgia']);
        }
        
        
    } 
    function payment()
    {   
        $user_id = $_SESSION['id'];
        
        $listUser = $this->payment_model->getListOrderById($user_id);
        $listType = $this->type_model->getTypelist();
        $listLaptop = $this->laptop_model->getLaptoplist();
        require_once('./Views/thanhtoan/payment.php');
    }
    function thanhtoan()
    {   
        
        $id = filter_input(INPUT_GET,"product_id");
        $order_id = filter_input(INPUT_GET,"id");
        if(!empty($_POST)){
            $payment = new Payment();
            if (isset($_POST['cardnumber'])) {
                $payment->cardnumber = $_POST['cardnumber'];
                
            }
            if (isset($_POST['name'])) {
                $payment->name = $_POST['name'];
                
            }
            if (isset($_POST['expires'])) {
                $payment->expires = $_POST['expires'];
                
            }
            if (isset($_POST['cvc'])) {
                $payment->cvc = $_POST['cvc'];
            }
            if (isset($_POST['price'])) {
                $payment->price = $_POST['price'];
            }
            $payment->order_id = $order_id;
            $payment->user_id = $_SESSION['id'];
            $result=$this->payment_model->insertpayment($payment);
            $result1 = $this->payment_model->updateorder($order_id,2);
        }
        
        
        $listUser = $this->payment_model->getListOrderById($_SESSION['id']);
        $listType = $this->type_model->getTypelist();
        $listLaptop = $this->laptop_model->findById($id);
        require_once('./Views/thanhtoan/thanhtoan.php');
    }
    function list() {
        $listPayment = $this->payment_model->getListPayment();
        $listUser = $this->user_model->getUserlist();
        $listType = $this->type_model->getTypelist();
        $listLaptop = $this->laptop_model->getLaptoplist();
        require_once("./Views/thanhtoan/index.php");
    }
    function update() {
        if(!empty($_POST)){
           $order_id = "";
            if (isset($_POST['id'])) {
                $order_id  = $_POST['id'];
                
            }
            $result = $this->payment_model->updateorder($order_id,1);
            $result1 = $this->payment_model->updatepayment($order_id,1);
        } 
    }
    function delete() {
        if(!empty($_POST)){
           $order_id = "";
            if (isset($_POST['id'])) {
                $order_id  = $_POST['id'];
                
            }
            $result = $this->payment_model->updateorder($order_id,3);
            $result1 = $this->payment_model->updatepayment($order_id,3);
        } 
    }
    function profile()
    {
        if(!empty($_POST)){
            
            $users = new User();
            if (isset($_POST['name'])) {
                $users->name = $_POST['name'];
            }
            if (isset($_FILES['image'])) {

                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-user", true) . '.' . $img_ex_lc;
                    $img_upload_path = './uploads/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                }
                $users->image = $new_img_name;

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
           
          
            $users->id =  $_SESSION['id'];;
            
          
            $_SESSION['name'] = $users->name;
            $_SESSION['image'] = $users->image;
            $_SESSION['address'] = $users->address ;
            $_SESSION['phone'] = $users->phone;
            $_SESSION['password'] = $users->password;
            $reuslt = $this->user_model->updateprofile($users);
        }
        $user_id = $_SESSION['id'];
        $listPayment = $this->payment_model->getPaymentUser($user_id);
        $listUser = $this->user_model->getUserlist();
        $listType = $this->type_model->getTypelist();
        $listLaptop = $this->laptop_model->getLaptoplist();
        require_once("./Views/User/profile.php");
    }
}
