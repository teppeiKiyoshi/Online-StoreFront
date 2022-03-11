<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/cart.css" />
  <title>The Artbox</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav>
    <div class="nav-bar">
      <i class="bx bx-menu sidebarOpen"></i>
      <span class="logo navLogo">
        <a href="index.html" class="mainlogo-txt">The Artbox</a>
      </span>

      <div class="menu">
        <div class="logo-toggle">
          <span class="logo"><a href="index.html">The Artbox</a></span>
          <i class="bx bx-x siderbarClose"></i>
        </div>

        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="php/product.php">Product</a></li>
          <li><a href="account.php">Account</a></li>
          <li><a href="wishlist.php">Wishlist</a></li>
        </ul>
      </div>
      <div class="main-searchBox">
        <div class="searchBox">
          <div class="searchToggle">
            <i class="bx bx-x cancel"></i>
            <i class="bx bx-search search"></i>
          </div>

          <div class="search-field">
            <input type="text" placeholder="What are you looking for?" />
            <i class="bx bx-search"></i>
          </div>
          <div class="shopping-cart">
            <i class="bx bx-cart"></i>
            <span class="cart-count">0</span>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->
  <!-- SHOPPING CART -->
  <section class="cart-container cart-page">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="../img/product/p1.jpg" alt="" width="200px">
            <div>
              <p>This is a Sample Product</p>
              <small>Price: PHP 500</small>
              <br>
              <a href="#">Remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>PHP 500.69</td>
      </tr>
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>PHP 700</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>PHP 70</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>PHP 770</td>
        </tr>
      </table>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="footer" class="main-footer">
    <div class="footer-container">
      <div class="section about-us">
        <h2>About Us</h2>
        <p id="footer-pText">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
          eius modi porro ipsa vero debitis aliquid voluptatibus
          necessitatibus deserunt, ullam quod totam maxime. Iure, id
          molestias! Nemo laudantium aspernatur nam facere atque voluptatem
          commodi expedita ea cumque, officia provident molestias?
        </p>
        <ul class="footer-social">
          <li>
            <a href="#"><i class='bx bxl-facebook-square'></i></a>
          </li>
          <li>
            <a href="#"><i class='bx bxl-twitter'></i></a>
          </li>
          <li>
            <a href="#"><i class='bx bxl-instagram'></i></a>
          </li>
          <li>
            <a href="#"><i class='bx bxl-google-plus'></i></i></a>
          </li>
          <li>
            <a href="#"><i class='bx bxl-youtube'></i></a>
          </li>
        </ul>
      </div>
      <div class="section quick-links">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Partners</a></li>
          <li><a href="#">Best Deals</a></li>
          <li><a href="#">News & Events</a></li>
          <li><a href="#">Promotions & Offers</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="section contact-info">
        <h2>Contact Info</h2>
        <ul class="cont-info">
          <li>
            <span><i class='bx bx-current-location'></i></span>
            <span>2nd Floor Cinderella Building,<br />
              825 EDSA Quezon City,<br />
              Philippines</span>
          </li>
          <li>
            <span><i class='bx bx-phone'></i></span>
            <p>
              <a href="#">02 1234 4567'</a><br />
              <a href="#">+63 132 456 7282</a>
            </p>
          </li>
          <li>
            <span><i class='bx bx-envelope'></i></span>
            <p><a href="#">theartbox@creatives.com</a></p>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyright-txt">
    <p>
      Copyright &copy; 2022 The Artbox by Emanuelle Martin. All Rights Reserved.
    </p>
  </div>

  <script src="js/main.js"></script>
  <script src="js/getProduct.js"></script>
</body>

</html>