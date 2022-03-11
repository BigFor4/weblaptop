<?php
class User {
    var $data = array();
    function __set($key,$value) {
        $this->data[$key] = $value;
    }
    function __get($key){
        return $this->data[$key];
    }
}
?>