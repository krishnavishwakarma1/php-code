<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="";
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$con)
{
    die("connection failed");
}
else{
    echo "database connected successfully<hr>";
}
    $sql="DELETE FROM student where id=1";
if(mysqli_query($con,$sql));
{
    echo "record deleted successfully";
}
$sql="create database new_db";
if(mysqli_query($con,$sql))
{
    echo "database created successfully";
}
else{
    echo "unable to create database";
}
?>