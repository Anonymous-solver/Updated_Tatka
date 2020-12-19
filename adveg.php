<?php include 'header.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Adveg</title> 
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {box-sizing: border-box;}

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .sbutton {
      font-weight: bold;
      border: none;
      color: black;
      padding: none;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: none;
      cursor: pointer;
    }

    .sbutton1 {


      padding: 10px 80px;
      border-radius: 40px;
      background-color: white;
    } 

    .fill{
      width: 900px;
      height: 500px;
      
      color:black;
      top: 55%;
      left: 50%;
      position: absolute;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding: 70px 30px;
      .submit{
        cursor: pointer;
        background: #39dc79;
        color: #000;
      }
    }
  }

</style>
</head>


<body>



  <div class="fill">
    <h2 style="padding-bottom: 10px; border-bottom: 2px solid black">Fill in the details</h2>

    <h4 style="text-align: center;font-size: 1em; padding-bottom: 10px; color: black">Product details</h4>
    <form action="veg_corner.php" method="POST" style="text-align: center" enctype="multipart/form-data">

      <p>Product Image</p>
      <center><input type="file" id="myFile" name="pic" required=""></center><br>
      

      <p>Product Name</p>
      <input type="text" name="pname" placeholder="Enter product name" required="">
      
      <p>Price(per kg)</p>            
      <input type="number" name="pprice" placeholder="Enter price (per kg)" required="">

      <p>Available</p>
      <input type="number" name="pavailable" placeholder="Enter quantity (kg)" required="" >

     <br>


    <h4 style="text-align: center;font-size: 1em; padding-bottom: 10px; color: black">Contact details</h4>

      <h3>Hi!   <?php echo $_SESSION['username']; ?></h3>

      <!-- <h3><?php echo $_SESSION['email']; ?></h3> -->

      <p>Your Location</p>
      <input type="text" name="plocation" placeholder="Enter location" required="">
      <p>Add phone number</p>
      <input type="number" name="pno" placeholder="Enter phone number" required=""><br><br>
      <center><input type="submit" name= "submit" value="Post Ad"></center><br><br>
    </form><br>
    

    <?php include 'footer.php';?>
    
  </body>
  </html>