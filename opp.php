<?php
$con=new mysqli("localhost","root","","test_db");
//checking connection 
if($con->connect_error){
    die("connection failed");
}
echo "connected successfully<hr>";
$sql="select *from student";
$result=$con->query($sql);
if($result->num_rows>0)
while($row=$result->fetch_assoc())
{
    echo "ID: ". " ".$row['id']."</br>";
    echo "NAME: ". " ".$row['name']."</br>";
    echo "ROLL:". " ".$row['roll']."</br>";
    echo "ADDRESS:". " ".$row['address']."</br>";
}else{
    echo"0 records";
}?>