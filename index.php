<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/GhoshStore.png" />
        <title>GhoshStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell Shirts, Jeans & Sarees.</h1>
                       <p>Flat 25% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/Men Regular Fit Denim Jeans.webp" alt="Men Regular Fit Denim Jeans">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Regular Fit Denim Jeans</p>
                                        <p>Choose among the best jeans available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/men fitted Kurta.webp" alt="fitted Kurta">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">fitted Kurta</p>
                                    <p>Original Shirts from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Women's Cotton Printed Saree.webp" alt="Women's Cotton Printed Saree">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Women's Cotton Printed Saree</p>
                                   <p>Our exquisite collection of Sarees.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>This is GhoshStore. All Rights Reserved. | Contact Us: +91 1234567890</p>
                   <p>This website is developed by Sudip Ghosh</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>