<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="test_db";
//create connection 
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$con)
{
    die("connection failed");
} 
{
    echo "connection successfully<hr>";
}
if(isset ($_REQUEST['delete']))
{
$sql="DELETE FROM student where id={$_REQUEST['idd']}";
if(mysqli_query($con,$sql)){
    echo "Record deleted";
}
else{
    echo "Error unable to delete record";
}

}
/*
if(isset($_REQUEST['submit'])){
    //checking for empty field 
if(($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']=="")){
    echo "<small>Fill all Field...</small><hr>";
}
else{
    $name=$_REQUEST['name'];
    $roll=$_REQUEST['roll'];
    $address=$_REQUEST['address'];
    $sql="insert into student (name,roll,address) VALUES('$name','$roll','$address')";
    if(mysqli_query($con,$sql))
    {
        echo "new record inserted successfully";
    }
    else{
        echo "unable to insert data";
    }
}
}
*/
?>

<!doctype html>
<html lang="en">
  <head>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>insert data by user</title>
  </head>
  <body>

  <div class="container">
  <div class="row">
  <div class="col-sm-4">
  <form action="" method="post">
  <div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control"name="name" id="name">
  </div>
  <div class="form-group">
  <label for="roll">Roll</label>
  <input type="text" class="form-control"name="roll" id="roll ">
  </div>
  <div class="form-group">
  <label for="address">ADDRESS</label>
  <input type="text" class="form-control"name="address"id ="address">
  </div>
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 
 
 
 
 
  </form>
  </div>
  */
  <div class="col-sm-6 offset-sm-2">
  <?php
  $sql="SELECT * FROM student";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  
  {
      echo'<table class="table">';
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>ROLL</th>";
      echo "<th>NAME</th>";
      echo "<th>ADDRESS</th>";
      echo "<th>Action</th>";

      echo"</tr>";
      echo"</thead>";
      echo "<tbody>";
      while($row=mysqli_fetch_assoc($result))
      {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['roll']."</td>";
          echo "<td>".$row['address']."</td>";
          echo '<td><form action="" method="post">
          <input type="hidden" name="idd" value='.$row['id'].'>
          
          <input type="submit" class="btn btn-sm btn-primary" name="summit"
          value="delete"></form></td>';
      }
  }
  else{
      echo"0 results";
  }

  ?>
  </div>
  
  </div>
  </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>