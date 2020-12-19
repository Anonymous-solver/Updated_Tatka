<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Item</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <style>
        * {box-sizing: border-box;}
        
        body {
          margin: 0;
          font-family: Georgia, Times, "Times New Roman", serif;
      }
      
      
      
      
  </style>
</head>


<body>


      <br><br><center><h3>Hi!   <?php echo $_SESSION['username']; ?></h3></center><br><br>

      <center>Welcome To your profile</center><br><br>

     <table >

            <?php

            include 'dbcon.php';
            $selectquery = "select * from veg";
            $query = mysqli_query($con, $selectquery);

            $result = mysqli_fetch_array($query);

            while($result = mysqli_fetch_array($query))
            { ?>


              <tr >
                <td class="card">
                <img src="<?php echo $result['pic']; ?> "width="200" height= '150'></td>
                <td class="card"><center><b><?php echo $result['pname']; ?></b></center></td>
                <td class="card"><center><p class="price"><?php echo '৳'.$result['pprice']; ?></p></center></td>
                <td class="card"><?php echo '<b>Available<br><br> '.$result['pavailable']."KG"; ?><br></td>
                <td class="card"><?php echo '<b>Location<br><br>'.$result['plocation']; ?><br></td>
                <td class="card"><?php echo '<b>Contact<br><br>'.$result['pno'].'<br><br><a href="about.php"><style="color: MediumTurquoise"></i>Delete</a>'; ?></td>
                </tr>
              
           

             <?php
            }?>

    </table>

     <table >

            <?php

            include 'dbcon.php';
            $selectquery = "select * from fruit";
            $query = mysqli_query($con, $selectquery);

            $result = mysqli_fetch_array($query);

            while($result = mysqli_fetch_array($query))
            { ?>


              <tr >
                <td class="card">
                <img src="<?php echo $result['pic']; ?> "width="200" height= '150'></td>
                <td class="card"><center><b><?php echo $result['pname']; ?></b></center></td>
                <td class="card"><center><p class="price"><?php echo '৳'.$result['pprice']; ?></p></center></td>
                <td class="card"><?php echo '<b>Available<br><br> '.$result['pavailable']."KG"; ?><br></td>
                <td class="card"><?php echo '<b>Location<br><br>'.$result['plocation']; ?><br></td>
                <td class="card"><?php echo '<b>Contact<br><br>'.$result['pno'].'<br><br><a href="about.php"><style="color: MediumTurquoise"></i>Delete</a>'; ?></td>
                </tr>
              
           

             <?php
            }?>

    </table>
    <?php include 'footer.php';?>
    
  </body>
  </html>