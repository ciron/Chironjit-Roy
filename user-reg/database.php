<?php

$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='sign_up';

$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
session_start();
if(!$con){
    echo "error";
}

?>
