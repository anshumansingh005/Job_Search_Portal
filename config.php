<?php


$host="localhost";
$user="anshu_assign";
$pass="#include<abc.h>";
$database="anshu_assign";

$conn=mysql_connect($host,$user,$pass);
mysql_select_db($database);



if(!$conn)
{
    echo "Error Connecting to the database";
}

?>