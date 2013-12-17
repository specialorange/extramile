<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <base href="<?php echo BASE_URL ?>"/> -->

    <title>FAQ Page - Modern Business - Start Bootstrap Template</title>

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
          <h1 class="page-header">FAQ <small>Frequently Asked Questions</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">FAQ</li>
          </ol>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">

          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <h4 class="panel-title">
                  <a>
                    Where is Extra Mile Vending?
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                  We have 3 locations, but our main warehouse is located at 80 White St. North in Concord.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <h4 class="panel-title">
                  <a>
                    What are your hours of operation?
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  We are open Monday-Friday 8AM-5PM, Saturday from 10-3PM and Sunday from 12-3pm or by appointment. However, we do request that you Call before coming to our shop to ensure we haven’t stepped away to deliver machines or grab a bite to eat!
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <h4 class="panel-title">
                  <a>
                    How quickly can we get a machine(s) set up at our business?
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  This varies by the # of machines and location of the business, but often times we can set up and deliver the same day or the next business day.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <h4 class="panel-title">
                  <a>
                    Does your used equipment come with any type of warranty?
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    Yes. All of our equipment comes with a 30-Day warranty unless otherwise noted.
                </div>
              </div>
            </div>

<!--             <div class="panel panel-default">
              <div class="panel-heading" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNumber">
                <h4 class="panel-title">
                  <a>
                    Question?
                  </a>
                </h4>
              </div>
              <div id="collapseNumber" class="panel-collapse collapse">
                <div class="panel-body">
                  Answer answer.
                </div>
              </div>
            </div>
 -->            
          </div>
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