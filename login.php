<!-- <?php

    // include 'dbcon.php';

    // session_start();
    //   header('location: login.php');

    ?>  -->

  <?php include 'header.php';?>


    <!DOCTYPE html>
    <html>
    <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="style1.css">   
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


          padding: 10px 95px;
          border-radius: 40px;
          background-color: white;
        } 

      </style>

    </head>


    <body>


      <?php

        //session_start();

        include 'dbcon.php';

        if(isset($_POST['submit'])){


          $email = $_POST['email'];
          $password = $_POST['password']; 


          $usearch = "select * from registration where email='$email'";
          $result = mysqli_query($con, $usearch);

          $num = mysqli_num_rows($result);
                                                                                                                  


        if($num){


          $upass = mysqli_fetch_assoc($result);
          $dbpass = $upass['password'];




          //$_SESSION['email'] = $upass['email'];

          $_SESSION['username'] = $upass['username'];


          $passdecode = password_verify($password, $dbpass);

          if($passdecode){
            ?>
                          <script>
                          //alert("Login Successful");
                          location.replace("home.php");
                          </script>
                          
                          <?php           
                          //$_SESSION['username'] = $upass['username'];
                           //header('location: home.php');
          }else{
            ?>
                          <script>
                          alert("password may be wrong");
                          </script>
                          
                          <?php
          }
        }else{

          ?>
                          <script>
                          alert("Invalid Email");
                          location.replace("login.php");
                          </script>
                          
                          <?php

                          //header('location: login.php');
                      
        }

        }

        ?>

      <div class="login-box">
        <img src="image/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <p>Email</p>
          <input type="text" name="email" placeholder="Enter Email" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" name="submit" value="Login">
          <a href="#">Forget Password</a>
        </form><br>
        Don't have an account yet?
        <br><br><a href="signup.php"><button class="sbutton sbutton1 ">SignUp</button></a>

        <!--<?php include 'footer.php';?>-->

      </div>


    </body>

    </html>