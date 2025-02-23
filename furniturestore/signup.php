<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - DECORA</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">
                <img src="imges/logofurniture.png" alt="DECORA Logo">
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="cart.html">Cart</a></li>
            </ul>
        </nav>
    </header>

    <!-- Signup Form -->
    <section class="auth-section">
        <div class="auth-container">
            <h2>Sign Up</h2>
            <form id="signup-form">
                <input type="text" id="name" placeholder="Enter your name" required>
                <input type="email" id="email" placeholder="Enter your email" required>
                <input type="password" id="password" placeholder="Enter your password" required>
                <input type="password" id="confirm-password" placeholder="Confirm your password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </section>

  <script src="signup.js"></script>
</body>
</html>
