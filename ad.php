  <?php include 'header.php';?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {box-sizing: border-box;}

      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .sa-ta {
        display: table;
        width: 100%;
      }
      .sa {
        display: table-cell;
        padding: 16px;
      }
      .sa3-ta3 quote{
        display: table;
        width: 100%;
      }
      .sa3 {
        display: table-cell;
        padding: 16px;
      }
      .sa4-ta4 quote{
        display: table;
        width: 100%;
      }
      .sa4 {
        display: table-cell;
        padding: 16px;
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


    <div class="sasa">
      <h2 style="text-align: center;font-size: 2em; padding-bottom: 10px;color: black">Welcome User! Let's post an ad</h2>
      <h6 style="text-align: center;font-size: 1em; padding-bottom: 10px;<!--border-bottom: 1px dashed #e8e511-->;color: black">Choose any option below</h6>
    </div>



  </table>
  

  <h1 style="text-align:center";><i> <font-color="midnightblue">Welcome To Our TATKA Corner</font-color="midnightblue"></h1>
    <table style="width:100%;background-color: LightSteelBlue;">
      <tr>
        <th class="carding">
          <h2><i>Vegetable Item</h2>
            <a href="adveg.php">
             <img src="image/pic4.jpg" alt="HTML tutorial" style="width:100%;height:100%">
           </a></th>

           <th class="carding">
             <h2><i>Fruit Item</h2>
               <a href="adfruit.php">
                <img src="image/pic5.jpg" alt="HTML tutorial" style="width:100%;height:70%">
              </a></th>

            </tr>
            
          </table><br>


          <table style="width:100%;background-color: LightSteelBlue;">
            <tr >
              <th class="carding">
                <h2><i>Crop Item</h2>
                  <a href="adcrop.php">
                   <img src="image/crop.jpg" alt="HTML tutorial" style="width:100%;height:50%">
                 </a></th>

                 <th class="carding">
                   <h2><i>Equipment Item</h2>
                     <a href="Instrument_corner.php">
                      <img src="image/equipment.jpg" alt="HTML tutorial" style="width:100%;height:30%">
                    </a></th>

                  </tr>
                  
                </table><br>
                
                


                <?php include 'footer.php';?>

              </body>
              </html>