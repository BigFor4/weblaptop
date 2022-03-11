<?php
require_once 'Connection.php';
//ket noi db
function execute($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
}
//select
function executeResult($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    
    $result = mysqli_query($conn, $sql);
    $list = [];
    while ($row = mysqli_fetch_array($result, 1)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    
    return $list;
}