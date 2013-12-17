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

      <div class="row">
        <div class="col-md-8">
          <img class="img-responsive" src="img/specials/weekly.jpg">
        </div>
        <div class="col-md-4">
          <h3>Weekly Special</h3>
          <p class="text-justify">Today's date is <?php echo date("D\, M d\, Y"); ?>. The time is <?php echo  date("h:i:s A"); ?></p>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque 
          urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3>Project Details</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-4">
          <h3>Monthly Special</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3>Project Details</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>
        <div class="col-md-8">
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