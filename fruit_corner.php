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

             $insertuery = "insert into fruit (pic,pname,pprice,pavailable,plocation,pno) values 
             ('$destfile','$pname','$pprice','$pavailable','$plocation','$pno')";

             $query = mysqli_query($con, $insertuery);

             /*if($query){
                echo "Inserted";
             }
             else{
                echo "Not Inserted";
             }*/

            }

    // }else{
    //     echo "N0 button has been clicked";
    }

    ?>


<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Item</title>
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


    <h1>Fruit Item<i class="fa fa-shopping-cart" style="font-size:48px;color:yellowgreen;float: right;"></i></h1>
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
                <td class="card"><?php echo '<b>Contact<br><br>'.$result['pno'].'<br><br><a href="about.php"><style="color: MediumTurquoise"></i>SEE MORE</a>'; ?></td>
                </tr>
              
           

             <?php
            }?>

    </table>

    
    <?php include 'footer.php';?>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="fruit_corner.js"></script>  
</body>
</html>