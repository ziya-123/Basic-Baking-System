<?php
$username="root";
$password="";
$server="localhost";
$db="bank";
$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "connection successful";
   
}
else{
    echo "no connection";
   
}
?>