<?php 
require_once 'products.php';
$sum =0;
foreach($products as $product){
   $price = $product["price"] * $_POST[$product["id"]];
   $sum = $sum + $price;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>PHP ECサイト</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">Shopping Cart</h1>
      <div class="carts-container">
      <?php foreach($products as $product): ?>
      <?php if ($_POST[$product["id"]] > 0): ?>
        <div class="cart-item">
          <div class="flex">
            <img class="cart-item-img" src="<?php echo $product["image"]; ?>">
            <div class="cart-item-detail">
              <p class="cart-item-title"><?php echo $product["name"]; ?></p>
              <p><?php echo $_POST[$product["id"]]; ?>  × <?php echo $product["price"]; ?></p>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php endforeach; ?>
      <div class="btn-footer bg-gray">
        <input class="checkout-btn" type="submit" value="<?php echo $sum."円を決済する"; ?>"決済する">
      </div>
    </div>
  </div>
</body>
</html>