<?php

	include 'dbcon.php';

	if(isset($_POST['submit'])){
		$file = $_FILES['pic'];
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pavailable = $_POST['pavailable']; 
		$plocation = $_POST['plocation'];
		$pno = $_POST['pno'];

		//print_r($file);
		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];

		if($fileerror==0){

			 $destfile = 'img/'.$filename;
			 //echo "$destfile";
			 move_uploaded_file($filepath, $destfile);

			 $insertuery = "insert into veg (pic,pname,pprice,pavailable,plocation,pno) values 
			 ('$destfile','$pname','$pprice','$pavailable','$plocation','$pno')";

			 $query = mysqli_query($con, $insertuery);

			 if($query){
			 	echo "Inserted";
			 }
			 else{
			 	echo "Not Inserted";
			 }

			}

	}else{
		echo "N0 button has been clicked";
	}

	?>