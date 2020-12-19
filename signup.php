   <!--  <?php

    // session_start();
    //header('location: login.php');

    ?>
 -->
    <?php include 'header.php';?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title>SignUp</title>
    	<link rel="stylesheet" type="text/css" href="style1.css">   



    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1">


    	<style>
    		* {box-sizing: border-box;}

    		body {
    			margin: 0;
    			font-family: Arial, Helvetica, sans-serif;
    		}

    	</style>
    </head>


    <body>

    	<?php

    	include 'dbcon.php';

    	if(isset($_POST['submit'])){

            
    		$username = mysqli_real_escape_string($con,$_POST['username']);
    		$email = mysqli_real_escape_string($con,$_POST['email']);
    		$password = mysqli_real_escape_string($con,$_POST['password']); 
    		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    		$pass = password_hash($password, PASSWORD_BCRYPT);
    		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    		$emailquery = "select * from registration where email = '$email'";

    		$query = mysqli_query($con, $emailquery);

    		$emailcount =  mysqli_num_rows($query);

    		if($emailcount>0){
    		echo "Email Already Existed";
    	}else{
    		if($password === $cpassword){

    			$insertquery = "insert into registration
    	(username,email,password,cpassword) values('$username','$email',
    	'$pass', '$cpass')";

    	 $iquery = mysqli_query($con, $insertquery);
    	 if($iquery){
                    ?>
                    <script>
                    alert("Insertion Successful");
                    </script>
                    <?php

                     header('location: login.php');
                 }
                 else{
                    ?>
                    <script>
                    alert("Insertion Unsuccessful");
                    </script>
                    <?php
                 }

    		}
            else{
    			?>
                    <script>
                    alert("Password isn't matching");
                    </script>
                    <?php
    		}
    		   
    	}

    	}

    	?>

    	<div class="login-box">
    		<img src="image/avatar.png" class="avatar">
    		<h1>Signup Here</h1>
    		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    			<p>User name</p>
    			<input type="text" name="username" placeholder="Enter Name" required>
    			<p>Email</p>
    			<input type="text" name="email" placeholder="Enter Email" required>
    			<p>Password</p>
    			<input type="password" name="password" placeholder="Enter Password" required>
    			<p>Confirm Password</p>
    			<input type="password" name="cpassword" placeholder="Confirm Password" required>
    			<input type="submit" name="submit" value="Sign Up">
    			By signing up for an account you agree to our
    			Terms and Conditions
    		</form>

    	</div> 

    	<!--<?php include 'footer.php';?>-->
    </body>
    </html>