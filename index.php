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
  <link rel="stylesheet" href="css/main.css" />
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

  <!-- HEADER SECTION -->
  <header class="main-header">
    <div class="header-container">
      <div class="header-content">
        <h1>Create Your <span>Own Story</span></h1>
        <p>pen paper pencil and a cup of tea on a rainy afternoon</p>
      </div>
      <div class="header-image">
        <img src="img/center_image.jpg" alt="" />
      </div>
    </div>
  </header>

  <!-- WHAT WE OFFER SECTION -->
  <section class="offers-main">
    <div class="offers-container">
      <div class="section-title">
        <h2>What We Offer</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
          malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.
        </p>
      </div>
      <div class="offer-container">
        <div class="offer-item">
          <div class="offer-icon">
            <i class="bx bx-money-withdraw"></i>
          </div>
          <div class="offer-content">
            <h3>Best Offer</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
              iste maxime consequuntur accusantium a labore? Incidunt facere
              ratione iusto voluptate?
            </p>
            <button class="btn-offer">Read More</button>
          </div>
        </div>
        <div class="offer-item">
          <div class="offer-icon">
            <i class="bx bx-trophy"></i>
          </div>
          <div class="offer-content">
            <h3>Superb Quality</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
              iste maxime consequuntur accusantium a labore? Incidunt facere
              ratione iusto voluptate?
            </p>
            <button class="btn-offer">Read More</button>
          </div>
        </div>
        <div class="offer-item">
          <div class="offer-icon">
            <i class="bx bx-world"></i>
          </div>
          <div class="offer-content">
            <h3>Top Grossing</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo
              iste maxime consequuntur accusantium a labore? Incidunt facere
              ratione iusto voluptate?
            </p>
            <button class="btn-offer">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END WHAT WE OFFER SECTION -->

  <!-- NEW OFFERS SECTION -->
  <section class="newoffer-main">
    <div class="newoffer-container">
      <div class="newoffer-image">
        <img src="img/center_image.jpg" alt="" />
      </div>
      <div class="newoffer-content">
        <h2>NEW ARRIVALS!</h2>
        <p>There is an exciting collection to be posted real soon. All the items will surely satisfy your creativity and needs. Get ready because these items won't store in for long and will surely be hard to resist!</p>
        <button class="new-arrivals">Read More</button>
      </div>
    </div>
  </section>

  <!-- FEATURED PRODUCTS -->
  <section class="features-main">
    <div class="features-container">
      <div class="features-header">
        <h2>Featured Products</h2>
        <p>Items you will love</p>
        </p>
      </div>
      <!-- new container for per item -->
      <div class="features-itemCont">
        <div class="features-item">
          <div class="features-image">
            <img src="img/featured/f1.jpg" alt="">
          </div>
          <div class="features-content">
            <div class="item-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <h4>Long Life</h4>
            <p>PHP 159</p>
          </div>
        </div>
        <!-- feature item 2-->
        <div class="features-item">
          <div class="features-image">
            <img src="img/featured/f2.jpg" alt="">
          </div>
          <div class="features-content">
            <div class="item-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <h4>Beautiful Mess</h4>
            <p>PHP 390</p>
          </div>
        </div>
        <!-- feature item 3-->
        <div class="features-item">
          <div class="features-image">
            <img src="img/featured/f3.jpg" alt="">
          </div>
          <div class="features-content">
            <div class="item-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <h4>Cracked Open</h4>
            <p>PHP 229</p>
          </div>
        </div>
        <!-- feature item 4-->
        <div class="features-item">
          <div class="features-image">
            <img src="img/featured/f4.jpg" alt="">
          </div>
          <div class="features-content">
            <div class="item-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <h4>Everlasting Flow</h4>
            <p>PHP 199</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEEDBACK SECTION -->
  <section class="feedback-main">
    <div class="feedback-container">
      <div class="feedback-header">
        <h2>Hear it from our Customers</h2>
      </div>
      <div class="feedback-contents">
        <div class="feedback-item">
          <div class="feedback-icon">
            <i class='bx bxs-quote-left'></i>
          </div>
          <div class="feedback-content">
            <p>These are the best stickers! I highly recommend, they are so cute and high quality. Definitely my go-to sticker shop!</p>
            <div class="feedback-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="feedback-image">
              <img src="img/users/user-1.png" alt="">
              <p>Kate Smith</p>
            </div>
          </div>
        </div>
        <!-- SET 2 -->
        <div class="feedback-item">
          <div class="feedback-icon">
            <i class='bx bxs-quote-left'></i>
          </div>
          <div class="feedback-content">
            <p>These are the best stickers! I highly recommend, they are so cute and high quality. Definitely my go-to sticker shop!</p>
            <div class="feedback-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="feedback-image">
              <img src="img/users/user-2.png" alt="">
              <p>John Doe</p>
            </div>
          </div>
        </div>
        <!-- SET 3 -->
        <div class="feedback-item">
          <div class="feedback-icon">
            <i class='bx bxs-quote-left'></i>
          </div>
          <div class="feedback-content">
            <p>These are the best stickers! I highly recommend, they are so cute and high quality. Definitely my go-to sticker shop!</p>
            <div class="feedback-rating">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <div class="feedback-image">
              <img src="img/users/user-3.png" alt="">
              <p>Jane Doe</p>
            </div>
          </div>
        </div>
      </div>
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