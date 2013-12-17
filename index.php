<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <base href="<?php echo BASE_URL ?>"/> -->

    <title>Extra Mile Vending</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <?php include 'shared/nav.html'; ?>
    
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill-small" style="background-image:url('img/logos/emv-wide.jpg');"></div>
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/equip/4mach.jpg');"></div>
            <div class="carousel-caption">
              <h1>Your source for custom vending solutions</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
              <h1>Picture of an Arcade Location set up</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Four');"></div>
            <div class="carousel-caption">
              <h1>Logos for Charities (Will have to get approval to use logos first)</a></h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/specials/specials_banner.jpg');"></div>
            <div class="carousel-caption">
              <h1>Check out our specials!</h1>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h3><i class="fa fa-puzzle-piece"></i>We help you increase your business profits</h3>
            <p class="text-justify">By providing vending options to your workplace or business, your employees are away from work for less time, your customers are entertained while they wait, and stay longer!  <a href="contact.php">Contact us</a> today to get a free quote and personlized solutions.</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3><i class="fa fa-cogs"></i>Equipment</h3>
            <p class="text-justify">We specialize in providing individual small equipment orders and lot purchases and sales.  We have <a href="machines.php">Vending Machines</a> ( Soda Machines, Snack Machines, Combination Machines, Frozen Food Machines, Coffee Machines) and <a href="games.php">Arcade Games</a> ( Racing Games, Bar Games, Crane/Claw Machines, Redemption Games, Merchandisers, Dollar Bill Changers).</p>
          </div>
          <div class="col-lg-4 col-md-4">
              <h3><i class="fa fa-money"></i>Specials</h3>
              <p class="text-justify">Check out our <a href="specials.php">weekly and monthly specials</a>!  We offer discounts to liquidate, promote, and start new business avenues for all of our customers</p>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->

    <!-- Deleted from template -->

    <?php include 'shared/footer.html'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
  </body>
</html>
