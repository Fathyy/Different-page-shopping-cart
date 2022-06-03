<style>
<?php include 'style.css'; ?>
</style>

<?php
include_once "includes/header.php";
?>
    <!-- newsletter section begins -->
    
    <footer class="newsletter-form my-5">
    <div class="container py-5">
        <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6">
        <p>Subscribe to our newsletter and get 20% off your first purchase</p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6">
    <form action="code.php" method="post" class="subscribe">
    <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Your email">
  </div>
  <div class="subscribe-btn">
  <button type="submit" class="btn btn-success" name="subscribe">Subscribe</button>
  </div>
  </form>
  </div>
  </div>
  </div>
    
    </footer>
    <!-- newsletter section ends -->

    <!-- lower footer section begins -->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h3>Loose Fit</h3>
                <ul>
               <li><i class="fa-brands fa-twitter"></i></li>
               <li><i class="fa-brands fa-linkedin"></i></li>
               <li><i class="fa-brands fa-instagram"></i></li>
               <li><i class="fa-brands fa-facebook"></i></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <ul>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Office Wear</a></li>
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Shoes</a></li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            <ul>
                    <li><a href="#">Information</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Orders and returns</a></li>
                     
                </ul>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
            <ul>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">My account</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Help</a></li>
                    
                </ul>

            </div>
        </div>
    </div>
    <!-- lower footer section ends -->
    <?php
include_once 'includes/footer.php';
?>