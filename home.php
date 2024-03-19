<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title> Online Mobile Store</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header id="header">
    <ul id="nav-bar">
      <li class="topnav">
        <a class="navbar-brand" href="/">
          <div class="logo-image">
            <img src="https://img.freepik.com/free-vector/mobile-store-logo-design_23-2149716936.jpg" class="img-fluid" width="100" height="100">
          </div>
        </a>
      </li>
      <li><a href="home.php">Home</a></li>
      <li><a href="#Supplies">Smart Phones </a></li>
      <li><a href="#contact">Contact us</a></li>
  <?php if (isset($_SESSION["username"])) { ?>
    <li>
  <a href="cart/cart.php">
    Cart
    <span class="wishlist-quantity">
      <?php
      $totalWishlistQuantity = 0; // Initialize the total quantity variable
      if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
          $totalWishlistQuantity += $item['quantity'];
        }
        echo $totalWishlistQuantity; // Output the total wishlist quantity
      }
      ?>
    </span>
  </a>
</li>
    <li class="right-corner"><a href="logout.php">Logout</a></li>
  <?php } else { ?>
    <li class="right-corner"><a href="login.php">Sign up/ Login</a></li>
  <?php } ?>
</ul>
    
  </header>
  <?php if (isset($_SESSION["welcome_message"])) { ?>
    <div class="welcome-message">
      <span><?php echo $_SESSION["welcome_message"]; ?></span>
    </div>
  <?php } ?>
  <div style="display:flex; align-items: center;background-color: white; justify-content: center;padding: 2rem; gap: 1rem;">

    <div style="display:flex; align-items: center; justify-content: center; border-radius: 10px; height: 20rem; width: 30rem; background-color: green;">
    <img src="https://i.pinimg.com/originals/62/58/6a/62586aa3ba0fe58918825c75864a0625.png" style="width:100%; height: 100%; border-radius: 10px; object-fit: cover;">
    </div>
   <div style="display:flex; align-items: center; justify-content: center; border-radius: 10px; height: 20rem; width: 30rem; background-color: green;">
    <img src="https://newspaperads.ads2publish.com/wp-content/uploads/2018/11/oppo-phones-your-best-diwali-gift-ad-times-of-india-mumbai-04-11-2018.png" style="width:100%; height: 100%; border-radius: 10px;object-fit: cover; ">
    </div>
    <div style="display:flex; align-items: center; justify-content: center; border-radius: 10px; height: 20rem; width: 30rem; background-color: green;">
    <img src="https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/743/cached.offlinehbpl.hbpl.co.uk/news/OMC/C3019842-E693-B6DA-2E4AB19E479D8029.jpg" style="width:100%; height: 100%; border-radius: 10px; object-fit: cover;">
    </div>
  </div>



  <!-- <div class="slideshow-flex " style="display: flex; align-items:center; justify-content:center"> -->

    <!-- Full-width images with number and caption text -->
    <!-- <div class="mySlides fade imgDiv">
      <img src="./images/mobi1.jpg" style="width:100%; border-radius: 10px; margin-top: 40px;">
    </div> -->

    <!-- <div class="mySlides fade">
      <img src="./images/mobi3.jpg" style="width:100%; border-radius: 20px; margin-top: 40px;">
    </div> -->

    <!-- <div class="mySlides fade">
      <img src="./images/mob3.jpg" style="width:100%; border-radius: 20px; margin-top: 40px;">
    </div> -->

    <!-- Next and previous buttons -->
    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
  <!-- </div> --> 

  <!-- The dots/circles -->

  <!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> -->



  <section id="Supplies" style="margin-top: 2rem ; background-color:white; padding:1rem; height:30rem; width: 100%; display:flex;">
    <!-- <h2 class="supplies">Supplies</h2> -->
    <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 3.5rem; padding:1rem">
        <div class="card" style=" display: flex; flex-direction: column; border-radius:10px; justify-content: center; align-items: center;  width: 20rem; height: 20rem;">
        <div style="width: 20rem;  border-top-right-radius:10px; border-top-left-radius:10px ;">
          <img src="https://images.unsplash.com/photo-1624434207284-727cf0e6ea8e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"  alt="huawei phones" 
          style="width:20rem; height: 20rem; object-fit: cover; border-top-right-radius:10px; border-top-left-radius:10px;">
        </div>
          <h1>Huawei Phones</h1>
          <p class="price"></p>
          <p></p>
          <a href="huawei.php">
          <button style="background-color: red; height:2.5rem; width:8rem; border:none;border-radius: 10px;">View More</button>
          </a>
        </div>

   
        <div class="card" style=" display: flex; flex-direction: column; border-radius:10px; justify-content: center; align-items: center;  width: 20rem; height: 20rem;">
        <div style="width: 20rem;  border-top-right-radius:10px; border-top-left-radius:10px ;">
          <img src="https://i5.walmartimages.com/seo/AT-T-Apple-iPhone-15-Pro-128GB-Natural-Titanium_79baf43f-cbc5-44b3-b066-5b7c88b6dfec.77e2bd5aadd90f19f91b7846d14c2b0e.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF"  alt="iphones " 
          style="width:20rem; height: 20rem; object-fit: cover; border-top-right-radius:10px; border-top-left-radius:10px;">
        </div>
          <h1>Apple Phones</h1>
          <p class="price"></p>
          <p></p>
          <a href="apple.php">
          <button style="background-color: red; height:2.5rem; width:8rem; border:none;border-radius: 10px;">View More</button>
          </a>
        </div>

        <div class="card" style=" display: flex; flex-direction: column; border-radius:10px; justify-content: center; align-items: center;  width: 20rem; height: 20rem;">
        <div style="width: 20rem;  border-top-right-radius:10px; border-top-left-radius:10px ;">
          <img src="https://m.media-amazon.com/images/I/51oT5k+XRrS._AC_UF894,1000_QL80_.jpg"  alt="huawei phones" 
          style="width:20rem; height: 20rem; object-fit: cover; border-top-right-radius:10px; border-top-left-radius:10px;">
        </div>
          <h1>Xiaomi Phones</h1>
          <p class="price"></p>
          <p></p>
          <a href="xiaomi.php">
          <button style="background-color: red; height:2.5rem; width:8rem; border:none;border-radius: 10px;">View More</button>
          </a>
        </div>
  
      </div>
    </div>
  </section>
  <footer>
    <section id="contact">
      <div class="f-item-con">
        <div class="app-info">
          <span class='app-name'>
            About Us
          </span>
          <p>Remember us for all kinds of smart phones!!</p>
        </div>
        <div class="useful-links">
          <div class="footer-title">Contact Us</div>
          <ul>
            <p> Dakhshinkali-05</p>
            <p>Kathmandu</p>

          </ul>
        </div>
        <div class="g-i-t">
          <div class="footer-title">Contact Us</div>
          <div class="app-info">
            <p>Bishal KC 98033499441</strong></p>
            <p>Purushottam Aryal 98012345677</p>
           
          </div>
          <!-- <form action="send_email.php" method="post" class="space-y-2">
            <input type="text" name="g-name" class="g-inp" id="g-name" placeholder='Name' />
            <input type="email" name="g-email" class="g-inp" id="g-email" placeholder='Email' />
            <textarea type="text" name="g-msg" class="g-inp h-40 resize-none" id="g-msg" placeholder='Message...'></textarea>
            <button type="submit" class='f-btn'>Submit</button>
          </form>  -->
        </div>
    </section>
  </footer>


  </section>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</body>

</html>