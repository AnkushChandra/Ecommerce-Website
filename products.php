<?php 
 require 'includes/common.php';
 
 

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

    include 'includes/check-if-added.php';
     ?>

    <div class="container panel-margin">
      <div class="jumbotron">
        <h1>Welcome to our LifeStyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt
          around, we have all in one place.</p>
      </div>
      <div class="row text-center">

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/5.jpg" alt="camera">
            <div class="caption">
              <h3>Camera 1</h3>
              <p>Price: Rs 36,000</p>
               
              <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(1)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>

              
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/2.jpg" alt="camera">
            <div class="caption">
              <h3>Camera 2</h3>
              <p>Price: Rs 40,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(2)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/3.jpg" alt="camera">
            <div class="caption">
              <h3>Camera 3</h3>
              <p>Price: Rs 50,000</p>
              <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(3)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/4.jpg" alt="camera">
            <div class="caption">
              <h3>Camera 4</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(4)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/12.jpg" alt="camera">
            <div class="caption">
              <h3>Watch 1</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(5)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/9.jpg" alt="camera">
            <div class="caption">
              <h3>Watch 2</h3>
              <p>Price: Rs 60,000</p>
              <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(6)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/10.jpg" alt="camera">
            <div class="caption">
              <h3>Watch 3</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(7)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/11.jpg" alt="camera">
            <div class="caption">
              <h3>Watch 4</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(8)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/6.jpg" alt="camera">
            <div class="caption">
              <h3>Shirt 1</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(9)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/8.jpg" alt="camera">
            <div class="caption">
              <h3>Shirt 2</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(10)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/13.jpg" alt="camera">
            <div class="caption">
              <h3>Shirt 3</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(11)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img src="img/14.jpg" alt="camera">
            <div class="caption">
              <h3>Shirt 4</h3>
              <p>Price: Rs 60,000</p>
               <?php 

              if(!isset($_SESSION['email']))

                { ?>
              <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
              <?php 
            }

              else{ ?>
                <?php if(check_if_added_to_cart(12)){ ?>
                  <a href="#" class="btn btn-success" disabled>Added to cart</a>
                <?php }else{ ?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
                  <?php }
                } ?>
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