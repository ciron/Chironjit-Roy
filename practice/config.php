<?php

$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='form_validation';

$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$con){
    echo "Database Not connect";
}
echo "connect";

?>