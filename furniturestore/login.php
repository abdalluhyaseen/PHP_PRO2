<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DECORA</title>
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

    <!-- Login Form -->
    <section class="auth-section">
        <div class="auth-container">
            <h2>Login</h2>
            <form id="login-form">
                <input type="email" id="email" placeholder="Enter your email" required>
                <input type="password" id="password" placeholder="Enter your password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </section>

    <script src="login.js">
   
    </script>
</body>
</html>
