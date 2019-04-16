<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="new_db";
//create connection 
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$con)
{
    die("connection failed");
} 
{
    echo "connection successfully<hr>";
}
if(!$con){
    die("connection failed");
}
echo "connectedsuccessfully<hr>";
$sql="create table new_tab(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(255),roll INT,address TEXT)";
if(mysqli_query($con,$sql))
{
    echo "table is created successfully";
}
else 
{
    echo "Failed Unable to create table";
}




?>