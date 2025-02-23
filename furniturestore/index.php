<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DECORA - Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="imges/logofurniture.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- ✅ Navbar -->
    <header>
      <nav>
        <div class="logo">
          <img src="imges/logofurniture.png" alt="DECORA Logo" />
        </div>
        <ul>
          <li>
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
          </li>
          <li>
            <a href="product.php"><i class="fas fa-couch"></i> Products</a>
          </li>
          <li>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
          </li>
        </ul>
        <a class="small" href="login.php"><i class="fas fa-user"></i> Login</a>
      </nav>
    </header>

    <!-- ✅ Hero Section -->
    <section class="hero">
      <div class="hero-card">
        <h2>Find Your Perfect Furniture</h2>
        <p>Best quality furniture at affordable prices.</p>
        <button onclick="window.location.href='products.html'">Shop Now</button>
      </div>
    </section>

    <!-- ✅ Featured Products -->
    <section class="featured-products">
      <h2>Featured Products</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="imges/sofa.jpeg" alt="Sofa" />
          <h3>Modern Sofa</h3>
          <p>$299.99</p>
          <button>Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="imges/product2.jpg" alt="Chair" />
          <h3>Elegant Chair</h3>
          <p>$99.99</p>
          <button>Add to Cart</button>
        </div>
        <div class="product-card">
          <img src="imges/product3.jpeg" alt="Table" />
          <h3>Wooden Table</h3>
          <p>$149.99</p>
          <button>Add to Cart</button>
        </div>
      </div>
    </section>

    <!-- ✅ Promotional Banner -->
    <section class="promo-banner">
      <h2><i class="fas fa-gift"></i> Special Discount - Up to 50% Off!</h2>
      <p>Hurry, limited time offer.</p>
      <button onclick="window.location.href='products.html'">
        <i class="fas fa-arrow-right"></i> Shop Now
      </button>
    </section>

    <!-- ✅ Contact Us -->
    <section class="contact">
      <h2>Contact Us</h2>
      <form>
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Your Email" required />
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </section>

    <!-- ✅ Footer -->
    <footer>
      <p>&copy; 2025 DECORA. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
