<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users (name, email, mobile, password) 
    VALUES ('$name', '$email', '$mobile', '$password')";



      $result=mysqli_query($conn, $sql);
      if($result){
       // echo "Data inserted successfully.....";
       header("Location: display.php");
      }else{
        die(mysqli_error($conn));
      }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

    <div class="container mt-5"><h2>Add user</h2></div> <!--heading-->

    <div class="container">
    <form action="" method="POST">
        
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Mobile">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>