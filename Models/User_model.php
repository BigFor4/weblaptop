<?php
require_once("./Models/truyvandb.php");
require_once("Models/User.php");
class User_model{
   
    public function getUserlist() {
        $sql = 'select * from users';
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    public function FindByEmail($email) {
        $sql = "select * from users email = '$email'";
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    public  function  login($email,$password)
    {
        $sql = "select * from users where email = '$email' and password = '$password' and status = 0";
        $ListUser = executeResult($sql);    
        return $ListUser;
    }
    public function quenmatkhau($email,$password)
    {
        $time = date('Y/m/d H:i:s');
        $sql = "UPDATE users set  password = '$password',updated_at='$time'
                                where email = '$email'";
        $result = execute($sql);
        return $result;
    }
    public  function  dangky(User $users)
    {
        $sql = "insert into users(name,email,password,address,phone) value ('$users->name','$users->email', '$users->password','$users->address', '$users->phone')";
        $result = execute($sql);
        return $result;
        
    }

    public function selectCountID() {
        $sql = 'select count(id) as number from users';
        $result = executeResult($sql);
        return $result;
    }
    public function selectNumber($index,$numberOnePage) {
        $sql = 'select * from users limit ' . $index . ', '.$numberOnePage.'';
        $ListUser = executeResult($sql);
        return $ListUser;
	}
    
    function insert(User $users) {
        $time = date('Y/m/d H:i:s');
        $sql = "insert into users(name, image,email,password,address,phone,created_at) value ('$users->name', '$users->image','$users->email', '$users->password','$users->address', '$users->phone','$time')";
        $result = execute($sql);
        return $result;
    }
    
    
    public function findById($id) {
        $sql = "select * from users where id = $id";
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    
    public function searchByEmail($email) {
        $sql = "select * from users where email LIKE '%$email%'";
        $ListUser = executeResult($sql);
        return $ListUser;
    }
    
    function update(User $users) {
        $time = date('Y/m/d H:i:s');
        $sql = "UPDATE users set name = '$users->name', image = '$users->image',
                                email = '$users->email', password = '$users->password',
                                role_id = '$users->role_id', address = '$users->address',
                                phone = '$users->phone', status = '$users->status',updated_at='$time'
                                where id = '$users->id'";
        $result = execute($sql);
        return $result;
    }
    function updateprofile(User $users) {
        $time = date('Y/m/d H:i:s');
        $sql = "UPDATE users set name = '$users->name', image = '$users->image', password = '$users->password', address = '$users->address',
                                phone = '$users->phone',updated_at='$time'
                                where id = '$users->id'";
        $result = execute($sql);
        return $result;
    }
    public function delete($id) {
        $sql = 'delete from users where id = '.$id;
        $result = execute($sql);
        return $result;;
    }
}
?>