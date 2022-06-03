<?php
include 'db_connect.php';
// write query to fetch all products
$sql = 'SELECT title, image, price, id FROM products';
$result = mysqli_query($connection, $sql);
// fetch the resulting rows as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($result);
// close connection
mysqli_close($connection);
?>

<?php
  include_once "includes/header.php";
  include_once "includes/nav.php";
  ?>
    
   
   <div class="container">
     <div class="row">
     <h4 class="our-products">Our Products!</h4>
       <?php foreach($products as $product){ ?>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
             <div class="card" style="width: 18rem; height:18rem;">
                   <div class="card-content center">
                   <img src="<?php echo htmlspecialchars($product['image']);?>" alt="" class="card-img">
                       <h4 class="title-price"><?php echo htmlspecialchars($product['title']);?></h4>
                       <h5 class="title-price"><?php echo htmlspecialchars($product['price']);?></h5>
                       <div class="card-action btn btn-primary">
                       <a class="brand-text" href="details.php?id=<?php echo $product['id']?>">More</a> 
                      </div>
                       
                    </div>
                  
                   </div>
 
               </div>
                  
            
            <?php } ?>
            </div>
                    </div>
           <?php
           include_once 'includes/footer.php';
           ?>
