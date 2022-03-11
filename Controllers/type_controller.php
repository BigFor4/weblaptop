<?php
require_once("./Models/Type_model.php");
require_once("./Models/Type.php");
class type_controller {
    private $type_model;
    function __construct() {
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
        $type = new Type();
        if(!empty($_POST)){
            
            
            if (isset($_POST['name'])) {
                $type->name = $_POST['name'];
            }
           
            
            $reuslt = $this->type_model->insert($type);
        }
        require_once("./Views/TypeLaptop/create.php");
    }
    function update() {
        $id  = filter_input(INPUT_GET,"id");
        $listType = $this->type_model->findById($id);
        if(!empty($_POST)){
            
            $type = new Type();
            if (isset($_POST['name'])) {
                $type->name = $_POST['name'];
            }
            
            $type->id = $id;
            $result = $this->type_model->update($type);
        }
        
        
        
        
        require_once("./Views/TypeLaptop/update.php");
    }
    function delete() {
        if(!empty($_POST)){
            
            $id = "";
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
            }
            
            
            $reuslt = $this->type_model->delete($id);
        }
    }
    
    function list() {


        $result = $this->type_model->selectCountID();
        $number = 0;
        if ($result != null && count($result) > 0) {
            $number = $result[0]['number'];
        }
        $numberOnePage = 3;
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
        
        $listType = $this->type_model->selectNumber($index,$numberOnePage);
        if ($listType !== false) {
            require_once("./Views/TypeLaptop/index.php");
        }
       
    }
    function search() {
        
        $search = filter_input(INPUT_GET,"value");
       
        $listType = $this->type_model->searchByName($search);
        require_once("./Views/TypeLaptop/search.php");
       
    }
}
?>