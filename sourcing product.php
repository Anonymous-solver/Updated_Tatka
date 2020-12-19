<?php include 'header.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Source of Product</title>
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


  <section>
    <img class="mySlides" src="image/vegetable1.jpg"
    style="width:100%;height:400px; ">
    <img class="mySlides" src="image/vegetable2.jpg"
    style="width:100%;height:400px;">
    <img class="mySlides" src="image/vegetable3.jpg" 
    style="width:100%;height:400px;">
    <img class="mySlides" src="image/vegetable4.jpg" 
    style="width:100%;height:400px;">
    <img class="mySlides" src="image/vegetable6.jpg" 
    style="width:100%;height:400px;">
    

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

<div class="source1">
 <h1 style="text-align: center;font-size: 2.5em;color: Green;">
  Source of Product
</h1>
</div>
<div class="source2">
  <div class="source2-1" style="background: White">
   <h5 style="text-align: center;font-size:16px;line-height: 24px; padding: 10px;color: black">
     Our local cuisine is rich in diversity, history and in taste. However, the awareness
     regarding our food culture in our country and around the world is still relatively low.
     Cultivation and consumption of organic food have definitely increased. But the
     production of organic food hasn't increased by more than 1 per cent. A major portion of
     our food is contaminated by chemicals,lacks pesticides, artificial chemicals, hormones
     and antibiotics. In this city , we find it all. Farmers produce crops but they don’t know
   where to sell them. And don’t get an actual price.</br> </br>
   We collect it from farmer and deliver it to our valuable
   customer.
 </h5>
 <div class="comment2">
   <h1 style="text-align: center;font-size: 2.5em;color: Green;">
    Any Query?
  </h1>
</div>

<div class="comment" style="text-align: center;color: Green">
  <form method="post">

    NAME: <input id="name" name="name" type="text"><br/><br>
    Email: <input id="email" name="email" type="text"><br/><br>
    Comment:<textarea id="comment" name="comment"></textarea>
    <input id="articleid" name="articleid" type="hidden" value="<?php echo $_GET["id"]; ?>"><br>
    <input type="submit" value="Submit"> <br>
  </form><br>

</div>


<?php include 'footer.php';?>

</body>
</html>