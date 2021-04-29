<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../View/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="owl.carousel.css">
  <link rel="stylesheet" href="owl.theme.css">
  <script src="owl.carousel.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <body>
    <div class="container" id="nav">
      <div class="logo">
        <img src="../View/image/imageedit_6_2951875799.png" alt="">
      </div>
      <div class="bar_1">
        <div class="search">
          <input type="text" name="" value="" placeholder="search items">
          <i class="fas fa-search"></i>
        </div>
        <div class="cart">
          <a href="../Model/displaycart.php"><h6>Cart</h6></a>
          <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="account">
          <a href="login.php"><h6>My Account</h6></a>
          <i class="far fa-user"></i>
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#glr">Gallery</a></li>
            <li><a href="#prd">Services</a></li>
            <li><a href="#abt">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="wrappergrid">
      <div class="line">
        <div class="slider">
          <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item it2"><img src="../View/image/black-friday-shopping-at-the-mall_1542817198181_421713_ver1.0_62844402_ver1.0_1280_720_1.jpg" alt="">             
          </div>
        </div>
      </div>
    </div>

    <div id="abt" class="about">
        <div class="writing">
          <img src="../View/image/Quotation-Mark-PNG-Image-Background.png" alt="" data-aos="fade-right" data-aos-duration="2000">
          <h2 data-aos="fade-right" data-aos-duration="3000"> Buy only because something excites you, not just for the simple act of shopping..<h1>Lubaba Tasnia</h1></h2>
        </div>
        <div class="writing_2" data-aos="fade-left" data-aos-duration="3000">
          <h2>About Us</h2>
          <p>Shopping House is the process of buying goods and services from merchants who sell on the internet and people who purchase products according to their needs from companies that provide products online.<br>Why us? We have the ability to be open 24/7, instant processing of transactions, increased business reach, digital payment system over traditional system, and the customer service that tops all the other online shopping companies</p>
        </div>
    </div>
    <div id="prd" class="product">
      <div class="p_writing">
        <p>Become a vendor and set up shop or become a customer and buy from various types of products</p>
      </div>
      <div class="groceryimg img" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
        <img src="../View/image/imageedit_7_7952718874.png" alt="">
      </div>
      <div class="maleimg img" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
        <img src="../View/image/imageedit_4_6941243847.png" alt="">
      </div>
      <div class="femaleimg img" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
        <img src="../View/image/imageedit_25_9699283036.png" alt="">
      </div>
      <div class="kidsimg img" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
        <img src="../View/image/imageedit_65_2656724540.png" alt="">
      </div>
      <div class="tvimg img" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
        <img src="../View/image/imageedit_74_5293453805.png" alt="">
      </div>
    </div>
    <div id="glr" class="gallery">
      <h2 class="gheader">OUR PRODUCTS</h2>
      <div class="female g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="../Model/showwomen.php"><img src="../View/image/freestocks-_3Q3tsJ01nc-unsplash.jpg" alt=""></a>
      </div>
      <h2 class="f">Women's corner</h2>
      <div class="male g" data-aos="zoom-in" data-aos-duration="3000">
        <a href="../Model/showmen.php"><img src="../View/image/89e069b079ba3d187e0f829253b39c12.jpg" alt=""></a>
      </div>
      <h2 class="m">Gent's</h2>
      <div class="kid g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="../Model/showkids.php"><img src="../View/image/videoblocks-cute-little-girl-on-shopping-portrait-of-a-kid-with-shopping-bags-shopping-girl_s5d2rpgtn_thumbnail-1080_01.png" alt=""></a>
      </div>
      <h2 class="k">Kid's Corner</h2>
      <div class="tv g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="../Model/showaccessories.php"><img src="../View/image/blake-wisz-Xn5FbEM9564-unsplash.jpg" alt=""></a>
      </div>
      <h2 class="t">Accessories</h2>
      <div class="grocery g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="../Model/showgrocery.php"><img src="../View/image/494-4942895_grocery-png-picture-transparent-background-grocery-bag-png.png" alt=""></a>
      </div>
      <h2 class="gr">Groceries</h2>
      <div class="medicine g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="../Model/showmedicine.php"><img src="../View/image/Pharmacy-1024x768.jpg" alt=""></a>
      </div>
      <h2 class="med">Medicine</h2>
    </div>
    <section id="contact">
      <div class="contact">
        <h1>Get In Touch</h1>
          <div class="col-md-6" data-aos="fade-down" data-aos-duration="2000">
            <form class="contact-form">
              <div class="form-group">
                <input type="text"  class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="email"  class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <textarea  class="form-control" rows="4"
                  placeholder=" Your Message">
                </textarea>
              </div>
              <button type="submit" class="btnn btn-primary">SEND MESSAGE</button>
            </form>
          </div>
        </div>
          <div class="col-md-6 contact-info" data-aos="fade-down" data-aos-duration="2000">
            <div class="folow">
              <b>Address:</b><i class="fa fa-map-marker"></i> XYZ Road,Dhaka
            </div>
            <div class="folow">
              <b>Phone:</b><i class="fa fa-phone"></i> +880 12371283712893791287
            </div>
          <div class="folow">
            <b>Email:</b><i class="fa fa-envelope-o"></i> tasnia@gmail.com
          </div>
        </div>
    </section>
    <section id="foot">
      <div class="footer">
        <div class="fcol">
          <h4>OSS Contact</h4>
          <p class="phone"><i class="fas fa-phone"></i>   P: 541-883-9914</p>
          <p class="mail"><i class="far fa-envelope"></i>  E: tasnia.com</p>
          <p class="mail"><i class="far fa-envelope"></i>  E: tasnia.com</p>
        </div>
        <div class="fcol">
          <h4>OSS Hotline</h4>
          <p class="phone">P: 541-244-1457</p>
          <p class="mail">E: tasnia.com</p>
          <p class="mail">E: tasnia.com</p>
        </div>
        <div class="fcol">
          <h4>SUPPORT</h4>
          <p>faq</p>
          <p>payment option</p>
          <p>scheduling</p>
        </div>
        <div class="folow">
          <label>
          <b>Get Social:</b></label>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-google-plus"></i></a>
        </div>
      </div>
    </section>
    <div class="gototop">
      <a href="#"><button type="button" name="button" class="topbtn" id="up"><i class="fas fa-chevron-circle-up"></i></button></a>
    </div>
      <script src="script.js" charset="utf-8"></script>
  </body>
</html>
