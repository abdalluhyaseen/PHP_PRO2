<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart - DECORA</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="imges/logofurniture.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
   <?php include 'nav.php'; ?>

    <section class="cart">
      <h2 style="margin-top: 70px">Shopping Cart</h2>
      <div class="cart-items"></div>
      <button onclick="checkout()">Checkout</button>
    </section>
    <?php include 'footer.php'; ?>


    <script src="script.js"></script>
  </body>
</html>
