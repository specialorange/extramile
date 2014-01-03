<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Specials</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <?php include 'shared/nav.html'; ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Specials <small>Weekly | Monthly</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Specials</li>
          </ol>
        </div>
      </div>

      <div class="col-lg-12">
        <h4>$100 deposit per machine holds any machine or deal for 30 Days.  Deposit lost if not paid in full or picked up within 30 days.</h1>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-6">
          <img class="img-responsive" src="img/specials/weekly.jpg">
        </div>
        <div class="col-md-6">
          <h3>Weekly Special</h3>

          <p class="text-justify">
            <?php
              if (date('W') == 1 || date('W') == 14 || date('W') == 27 || date('W') == 40) {
                echo "Dixie Narco 501E 9 Selection Drink Machine $1200";
              } else if (date('W') == 2 || date('W') == 15 || date('W') == 28 || date('W') == 41) {
                echo "AP 7000 5 Wide Snack Machine $750";
              } else if (date('W') == 3 || date('W') == 16 || date('W') == 29 || date('W') == 42) {
                echo "All Skee-Ball Games/Full Size Basketball Games $250 off";
              } else if (date('W') == 4 || date('W') == 17 || date('W') == 30 || date('W') == 43) {
                echo "National 147 or 148 Snack Machines $1000";
              } else if (date('W') == 5 || date('W') == 18 || date('W') == 31 || date('W') == 44) {
                echo "All Toy/Candy Cranes and Claw Machines $100 off";
              } else if (date('W') == 6 || date('W') == 19 || date('W') == 32 || date('W') == 45) {
                echo "USI 3053 or 3054 Snack Machines $600";
              } else if (date('W') == 7 || date('W') == 20 || date('W') == 33 || date('W') == 46) {
                echo "Dixie Narco 501T or 368 Drink Machines $650";
              } else if (date('W') == 8 || date('W') == 21 || date('W') == 34 || date('W') == 47) {
                echo "AP 6000 Snack Machines $700";
              } else if (date('W') == 9 || date('W') == 22 || date('W') == 35 || date('W') == 48) {
                echo "All Bar Games and Touch Screen Games $200 off";
              } else if (date('W') == 10 || date('W') == 23 || date('W') == 36 || date('W') == 49) {
                echo "Vendo 511 Drink Machines $750";
              } else if (date('W') == 11 || date('W') == 24 || date('W') == 37 || date('W') == 50) {
                echo "National 167 Snack Machines with SureVend $1750";
              } else if (date('W') == 12 || date('W') == 25 || date('W') == 38 || date('W') == 51) {
                echo "All Arcade Games $100 off";
              } else if (date('W') == 13 || date('W') == 26 || date('W') == 39 || date('W') == 52) {
                echo "10% off Entire Order";
              }
            ?>  
          </p>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-6">
          <h3>Monthly Special</h3>

          <p class="text-justify">
            <?php
              if (date('n') == 1) {
                echo "All Racing Games $699";
              } else if (date('n') == 2) {
                echo "All Dixie Narco Drink Machines $100 off";
              } else if (date('n') == 3) {
                echo "All Snack Machines $100 off";
              } else if (date('n') == 4) {
                echo "Dixie Narco 501E Drink Machines $1099";
              } else if (date('n') == 5) {
                echo "AP6000 or AP 7000 Snack Machines $699";
              } else if (date('n') == 6) {
                echo "2010.5 AMI Bar Top Games $1499 Upgrade to 2014 Software $1999";
              } else if (date('n') == 7) {
                echo "Dixie Narco 368 Can Drink Machine $649";
              } else if (date('n') == 8) {
                echo "All Toy/Candy Cranes $999";
              } else if (date('n') == 9) {
                echo "Skee-Ball Lightining or Basket Fever $699";
              } else if (date('n') == 10) {
                echo "Dixie Narco 276 $699 or 276E $999";
              } else if (date('n') == 11) {
                echo "AP Snack Machines $200 off.";
              } else if (date('n') == 12) {
                echo "Holiday Special Buy 3 Get 1 Free on Everything in our showroom.";
              }
            ?>  
          </p>
        </div>
        <div class="col-md-6">
          <img class="img-responsive" src="img/specials/monthly.jpg">
        </div>
      </div>

    </div><!-- /.container -->

    <?php include 'shared/footer.html'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
  </body>
</html>