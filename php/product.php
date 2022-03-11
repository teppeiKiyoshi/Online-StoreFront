<?php

$xml = new DOMDocument();
$xml->load("../xml/products.xml");
$products = $xml->getElementsByTagName("product");

$category = array();
foreach ($products as $product) {
  $cat = $product->getElementsByTagName("category")->item(0)->nodeValue;
  if (!in_array($cat, $category)) {
    array_push($category, $cat);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js" integrity="sha512-9Dh726RTZVE1k5R1RNEzk1ex4AoRjxNMFKtZdcWaG2KUgjEmFYN3n17YLUrbHm47CRQB1mvVBHDFXrcnx/deDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/product.css" />
  <title>The Artbox</title>
</head>

<body onload='getProduct();'>
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
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#programs">Product</a></li>
          <li><a href="account.html">Account</a></li>
          <li><a href="#contact">Wishlist</a></li>
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

  <div class="small-container">
    <div class="row row-2">
      <div id="btnContainer">
        <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
        <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
      </div>
      <select id="prodCategory" onchange="getProduct(this.value);">
        <?php
        $html = "<option value=\"All\">All</option>";
        foreach ($category as $cat) {
          $html .= "<option value=\"$cat\">" . ucfirst($cat) . "</option>";
        }
        echo $html;
        ?>
      </select>
    </div>
    <div id="output"></div>
    <div class="page-cont" id="page-cont"></div>
    <script src="../js/getProduct.js"></script>
  </div>

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
            <span>6th Floor, My Building<br />
              123 Home Street Manila,<br />
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

  <script src="../js/main.js"></script>
</body>

</html>