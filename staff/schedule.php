<?php
include 'config.php';
if(isset($_POST['submit'])){
    $order_id=$_POST['scheduled_id'];
    $u_id=$_POST['route'];
    $scheduled_id=$_POST['day'];
    $wasteType=$_POST['time'];
    $wasteType=$_POST['created_at'];
    $wasteType=$_POST['updated_at'];

    $sql="INSERT INTO crud(order_id,u_id,scheduled_id,wasteType) 
    values('$order_id','$u_id','$scheduled_id','$wasteType')";

      $result=mysqli_query($conn, $sql);
      if($result){
       // echo "Data inserted successfully.....";
       header("Location: dashboard.php");
      }else{
        die(mysqli_error($conn));
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>