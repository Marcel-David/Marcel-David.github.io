<?php
 session_start();
 if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
    header("location: login.php");
    exit;
 }

?>
<?php
 $showAlert = false;
 $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include "partials/_dbconnect.php";
   
    $phone = $_SESSION['phone'];
   
    
    
    //$exist=false;

    //check if the phone number is exis
    $existSql="SELECT * FROM `order` WHERE phone='$phone'";
    $result=mysqli_query($conn, $existSql);
    $numberExistRows= mysqli_num_rows($result);

    if($numberExistRows>0){
        while($row = mysqli_fetch_assoc($result)) {
            echo "Brand: " . $row["brand"]. " - Item: " . $row["item"]. "Quantity " . $row["quantity"]. "<br>";
          }
         
    }else {
        echo "0 results";
      }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
   
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>