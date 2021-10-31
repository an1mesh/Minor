<?php
define('DB_SERVER','localhost:3307');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$u = $_REQUEST["u"];
$p = $_REQUEST["p"];
$e = $_REQUEST["e"];


$con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($con->connect_error){
    die("connection failed:".$con->connect_error);
}

$sql = "select username from customers where username ='".$u."' and password='".$p."'";
$result = $con->query($sql);
if($result-> num_rows>0){
    echo "account already exists";
}
else{
    $sql = "insert into customers (username,password,email) values ('".$u."','".$p."','".$e."')";
    $result = $con->query($sql);
    echo "account created!";
}



?>