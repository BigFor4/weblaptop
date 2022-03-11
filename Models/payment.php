<?php
class payment {
    var $data = array();
    
    function __set($key,$value) {
        $this->$key = $value;
    }
    function __get($key){
        return $this->$key;
    }
}
?>