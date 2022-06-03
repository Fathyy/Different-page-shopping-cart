<?php
session_start();
include 'db_connect.php';
if(isset($_POST['add_to_cart'])){

  if(isset($_SESSION['cart'])){
    $session_array_id = array_column($_SESSION['cart'], "id");

    if(in_array($_GET['id'], $session_array_id)){
      $session_array = array(
        'id' => $_GET['id'],
        'title' => $_GET['title'],
        'price' => $_GET['price'],
        'quantity' => $_GET['quantity'],
        
      );
      $_SESSION['cart'][] = $session_array;
      
    }

  }
  else{
    $session_array = array(
      'id' => $_GET['id'],
      'title' => $_GET['title'],
      'price' => $_GET['price'],
      'quantity' => $_GET['quantity'],
      
    );
    $_SESSION['cart'][] = $session_array;
  }
}
?>




<style>
<?php include 'style.css'; ?>
</style>

<?php
// check GET request id parameter
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($connection, $_GET['id']);

//make sql
$sql = "SELECT * FROM products WHERE id =$id";

// get the query result
$result = mysqli_query($connection, $sql);

// fetch result in array format
$product = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($connection);
}
?>

  <?php
  include_once "includes/header.php";
  include_once "includes/nav.php";
  ?>

<div class="container py-5 image-details">
  <?php if($product):?>
    <div class="image-content">
    <img src="<?php echo htmlspecialchars($product['image']);?>" alt="">
    </div>
    <div class="left-content">
    <!-- <h4><?php echo htmlspecialchars($product['title']);?></h4>
    <h5><?php echo htmlspecialchars($product['price']);?></h5>
    <h5><?php echo htmlspecialchars($product['Brand name']);?></h5>
    <h5><?php echo htmlspecialchars($product['Description']);?></h5> -->
    <form action="cart.php?id=<?=$product['id'];?>" method="get">
     <img src="img/<?=$row['image']?>" alt="">
     <h2><?=$product['title'];?></h2>
     <h2><?=$product['price'];?></h2>
    <input type="number" name="quantity" value="1" class="form-control">
    <input type="submit" name="add_to_cart" class="btn-btn-warning btn-block my-2" value="Add to Cart">
  </form>
    </div>


      <?php endif; ?>
</div>

<?php
include_once 'includes/footer.php';
?>