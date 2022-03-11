<?php
require_once("./Models/truyvandb.php");
require_once("./Models/Type.php");
class Type_model {
    

    public function selectCountID() {
        $sql = 'select count(id) as number from type';
        $result = executeResult($sql);
        return $result;
    }
    public function selectNumber($index,$numberOnePage) {
        $sql = 'select * from type limit ' . $index . ', '.$numberOnePage.'';
        $ListUser = executeResult($sql);
        return $ListUser;
	}


    public function getTypelist() {
        $sql = 'select * from type';
        $ListType = executeResult($sql);
        return $ListType;
    }
    
    function insert(Type $type) {
        $sql = "insert into type(name) value ('$type->name')";
        $result = execute($sql);
        return $result;
    }
    
    public function searchByName($name) {
        $sql = "select * from type where name LIKE '%$name%'";
        $ListType = executeResult($sql);
        return $ListType;
    }

    public function findById($id) {
        $sql = "select * from type where id = $id";
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    
    function update(Type $type) {
        $sql = "UPDATE type set name = '$type->name' where id = '$type->id'";
        $result = execute($sql);
        return $result;
    }
    
    public function delete($id) {
        $sql = 'delete from type where id = '.$id;
        $result = execute($sql);
        return $result;;
    }
    
    
}
?>