		  <?php


		    session_start();
		    $con = mysqli_connect('localhost','root');

		    if($con){
			?>
			<script>
			alert("Connection Successful");
			</script>
			<?php
		}else{
			?>
			<script>
			alert("NO Connection Successful");
			</script>
			
			<?php

		}

		$db = mysqli_select_db($con, 'adveg');

		if(isset($_POST['submit'])){


	        $email = $_POST['email'];
	        $password = $_POST['password']; 


	        $usearch = "select * from registration where email='$email'";
	        $result = mysqli_query($con, $usearch);

	        $num = mysqli_num_rows($result);



	      if($num){

	        $upass = mysqli_fetch_assoc($result);
	        $dbpass = $upass['password'];

	        //$_SESSION['username'] = $upass['username'];

	        $passdecode = password_verify($password, $dbpass);

	        if($passdecode){
	          echo "Login Successful";
	           //$_SESSION['username'] = $upass['username'];
	          header('location: home.php');
	        }else{

	        	 ?>
	                        <script>
	                        alert("username or password may be wrong");
	                        </script>
	                        
	                        <?php
	          
	          header('location: login.php');
	        }

	      }else{
	        ?>
	                        <script>
	                        alert("Invalid Email");
	                        </script>
	                        
	                        <?php

	                        header('location: login.php');
	                    
	      }

	      }

	      ?>
		    header('location: login.php');

		  ?>