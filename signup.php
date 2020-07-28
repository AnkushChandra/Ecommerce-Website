<?php 
 require 'includes/common.php';
 if (isset($_SESSION['email']))
  {
header('location: products.php');
 
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>LifeStyle Stores</title>
    <!-- link to Bootstrap minified css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- link to Jquery minified-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- link to Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- link to external CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
  
  <?php 

    include 'includes/header.php';
     ?>

    <div class="container panel-margin">
      <div class="row row_style">
      <div class="col-xs-6 col-xs-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 class="panel-title">SignUp</h2>
        </div>
        <div class="panel-body">
          <form action="signup_script.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="contact" placeholder="Contact" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
       
      </div>
    </div>
  </div>

    </div>

   <?php 

    include 'includes/footer.php';
     ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>