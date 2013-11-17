<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <base href="<?php echo BASE_URL ?>"/> -->

    <title>Sidebar Page - Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
    <?php include 'shared/nav.html'; ?>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
        <div class="col-md-3 col-sm-4 sidebar">
            <ul class="nav nav-stacked nav-pills">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="disabled"><a href="#">Portfolio</a></li>
              <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
              <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
              <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
              <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
              <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
              <li class="disabled"><a href="#">Blog</a></li>
              <li><a href="blog-home-1.html">Blog Home 1</a></li>
              <li><a href="blog-home-2.html">Blog Home 2</a></li>
              <li><a href="blog-post.html">Blog Post</a></li>
              <li class="disabled"><a href="#">Blog</a></li>
              <li><a href="full-width.html">Full Width Page</a></li>
              <li class="active"><a href="sidebar.html">Sidebar Page</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404</a></li>
              <li><a href="pricing.html">Pricing Table</a></li>
            </ul>
        </div>
      
        <div class="col-md-9 col-sm-8">
          <h1 class="page-header">Sidebar Page <small>For Deeper Customization</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Full Width Page</li>
          </ol>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam placerat nunc ut tellus tristique, non posuere neque iaculis. Fusce aliquet dui ut felis rhoncus, vitae molestie mauris auctor. Donec pellentesque feugiat leo a adipiscing. Pellentesque quis tristique eros, sed rutrum mauris.</p>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include 'shared/footer.html'; ?>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
  </body>
</html>