<!-- <?php

//session_start();
//if(!isset($_SESSION['username'])){
  //header('location: login.php');
//}
?> -->

<?php include 'header.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {box-sizing: border-box;}

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .middle {
      overflow: hidden;
      background-color: MediumSeaGreen;
    }

    .middle a{
      float: left;
      display: block;
      color:  black;
      text-align: center;
      padding: 20px 20px;
      text-decoration: none;
      font-size: 17px;
    }

    .middle a:hover {
      background-color: none;
      color: green;
    }


    .carding {

      padding: 1rem;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 20%;
      margin: auto;
    }

    
    .carding:hover {
      background-color: #D5F5E3 ;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .carding button:hover {
      opacity: 0.7;
    }

  </style>
</head>


<body>

  <!--<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>*\-->

  <!-- <?php //echo $_SESSION['username']; ?> -->

  <!-- <P>Welcome To Our Channel Mr.<?php echo $_SESSION['username']; ?></P> -->

  <div class="middle">
    <section>
      <img class="mySlides" src="image/slidepic5.jpg"
      style="width:100%;height:500px; ">
      <img class="mySlides" src="image/slidepic4.jpg"
      style="width:100%;height:500px;">
      <img class="mySlides" src="image/slidepic1.jpg"
      style="width:100%;height:500px;">
    </section>

    <script>

      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
       }
       myIndex++;
       if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000);
    }
  </script>


  <table style="width:100%;background-color: Lavender">
    <h1 style="text-align:center;color:white"><i>Platform Facilities:</h1>
      <tr>
        <th>
         <a href="Trusted delivery partner.php">
           <img src="image/pic1.jpg" alt="HTML tutorial" style="width:100%;height:100%;border:5%">
           <h2><i>Trusted delivary partner</h2>
           </a></th>

           <th>
             <a href="sourcing product.php">
              <img src="image/pic2.png" alt="HTML tutorial" style="width:80%;height:80%;border:5%">
              <h2><i>Sourcing products</h2>
              </a></th>
              
              <th>
               <a href="working capital investment.php">
                <img src="image/pic3c.jpg" alt="HTML tutorial" style="width:100%;height:100%;border:5%">
                <h2><i>Working capital investment</h2>
                </a></th>

              </tr>
              
            </table>
            

            <h1 style="text-align:center; color: white">Welcome To Our TATKA Corner</h1>
            <table style="width:100%;background-color: LightSteelBlue;">
              <tr>
                <th class="carding">
                 <h2><i>Vegetable Corner</h2>
                   <a href="veg_corner.php">
                     <img src="image/pic4.jpg" alt="HTML tutorial" style="width:100%;height:100%">
                   </a></th>

                   <th class="carding">
                     <h2><i>Fruit Corner</h2>
                       <a href="fruit_corner.php">
                        <img src="image/pic5.jpg" alt="HTML tutorial" style="width:100%;height:100%">
                      </a></th>

                    </tr>
                    
                  </table><br>


                  <table style="width:100%;background-color: LightSteelBlue;">
                    <tr >
                      <th class="carding">
                        <h2><i>Crop Corner</h2>
                          <a href="crop_corner.php">
                           <img src="image/crop.jpg" alt="HTML tutorial" style="width:100%;height:100%">
                         </a></th>

                         <th class="carding">
                           <h2><i>Equipment Corner</h2>
                             <a href="Instrument_corner.php">
                              <img src="image/equipment.jpg" alt="HTML tutorial" style="width:80%;height:10%">
                            </a></th>

                          </tr>
                          
                        </table><br>


                        <?php include 'footer.php';?>

                      </body>




