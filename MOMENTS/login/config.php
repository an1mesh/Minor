<?php
define('DB_SERVER','localhost:3307');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

$u = $_REQUEST["u"];
$p = $_REQUEST["p"];


$con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($con->connect_error){
    die("connection failed:".$con->connect_error);
}
$sql = "select username from customers where username ='".$u."' and password='".$p."'";
$result = $con->query($sql);
if($result-> num_rows>0){
    while($row= $result->fetch_assoc()){
        echo $row["username"];
    }
}
else{
    echo "0";
}
?>