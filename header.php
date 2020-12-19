<!-- <?php

// session_start();
//  if(!isset($_SESSION['username'])){
// header('location: login.php');

//}

?>  -->

<!DOCTYPE html>
<html>

<head>
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {box-sizing: border-box;}

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: MediumSeaGreen;
    }

    .topnav a{
      float: left;
      display: block;
      color:  lavender;
      text-align: center;
      padding: 20px 20px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: none;
      color: black;
    }


    .topnav-right {
      float: right;
    }



    .button {
      border: none;
      color: white;
      padding: none;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: none;
      cursor: pointer;
    }

    .button1 {


      padding: 2px 30px;
      border-radius: 12px;


      background-color: orange;} 
      .fantasy{
        font-family: Courier, monospace;
      }


    </style>
  </head>


  <body>

    <div class="topnav">

     <a href="home.php"><button class="button button1 "><b class="fantasy">TATKA</b></button></a>
     <a href="home.php"><i class="fa fa-fw fa-home" style="color: MediumTurquoise"></i> Home</a>
     <a href="about.php"><i class="fa fa-fw fa-user" style="color: MediumTurquoise"></i>About</a>
     <a href="contact.php"><i class="fa fa-fw fa-envelope" style="color: MediumTurquoise"></i> Contact</a>
     <div class="topnav-right">
     <?php

         session_start();
         if(!isset($_SESSION['username'])){
          ?>

            <a href="login.php"><i class="fa fa-user-circle-o" style="color: MediumTurquoise"></i>Login</a>
            <a href="login.php"><button class="button button1 ">POST YOUR AD</button></a></div>

            <?php

        }else{
          ?>
            <a href="profile.php"><i class="fa fa-user-circle-o" style="color: MediumTurquoise"></i><?php echo $_SESSION['username']; ?></a>
            <a href="logout.php"><i class="fa fa-user-circle-o" style="color: MediumTurquoise"></i>Logout</a>
            <a href="ad.php"><button class="button button1 ">POST YOUR AD</button></a></div>
            
            <?php
        } 

      ?>
      
    
      
    </div>
  </body>
</html>
