<?php


$con = new mysqli("localhost", "root" , "" , "login");

if($con == false){
    echo "Connection Failed";
}else{
    echo "Connection Successful";
}

?>