<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Aneka Jaya Plastik</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="keywords"
      content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
       function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //for-mobile-apps -->
    <link
      href="<?php echo asset('css/bootstrap.css')?>"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link
      href="//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
          event.preventDefault();
          $("html,body").animate(
            { scrollTop: $(this.hash).offset().top },
            1000
          );
        });
      });
    </script>
    <!-- start-smoth-scrolling -->
  </head>

  <body>
    <!-- header -->
    <div class="agileits_header">
      <div class="container">
        <div class="w3l_offers">
          <p>
            SALE UP TO 70% OFF. USE CODE "SALE70%" .
            <a href="/products">SHOP NOW</a>
          </p>
        </div>
        
        <div class="product_list_header">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle w3view-cart" type="button" data-toggle="dropdown">
          <i class="glyphicon glyphicon-user fa-lg" aria-hidden="true"></i>
          </button>
            <ul class="dropdown-menu">
              <li><a href="/indexLogout">Logout</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="logo_products">
      <div class="container">
        <div class="w3ls_logo_products_left1">
          <ul class="phone_email">
            <br />
            <li>
            <i class="fa fa-phone" aria-hidden="true"></i>Contact us: +62 896-3781-5553

            </li>
          </ul>
        </div>
        <div class="w3ls_logo_products_left">
          <h1><a href="/index">Aneka Jaya Plastik</a></h1>
        </div>
        <div class="w3l_search">
          <br />
          <form action="#" method="post">
            <input
              type="search"
              name="Search"
              placeholder="Search for a Product..."
              required=""
            />
            <button
              type="submit"
              class="btn btn-default search"
              aria-label="Left Align"
            >
              <i class="fa fa-search" aria-hidden="true"> </i>
            </button>
            <div class="clearfix"></div>
          </form>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- //header -->

    <!-- navigation -->
    <div class="navigation-agileits">
      <div class="container">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
            <button
              type="button"
              class="navbar-toggle collapsed navbar-toggle1"
              data-toggle="collapse"
              data-target="#bs-megadropdown-tabs"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
           
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
            <li><a href="/index" class="act">Home</a></li>
              <!-- Mega Menu -->
              <li><a href="/opp" class="act">OPP</a></li>
              <li><a href="/hdpe" class="act">HDPE</a></li>
              <li><a href="/pe" class="act">PE</a></li>
              <li><a href="/kresek" class="act">Kresek</a></li>
              <li><a href="/gelas" class="act">Gelas</a></li>
              <li><a href="/kertas">Kertas</a></li>
              <li><a href="/newproduct">Add new Product</a></li>
              <li><a href="/order">Order</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- //navigation -->
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <ol
          class="breadcrumb breadcrumb1 animated wow slideInLeft"
          data-wow-delay=".5s"
        >
          <li>
            <a href="/index"
              ><span class="glyphicon glyphicon-home" aria-hidden="true"></span
              >Home</a
            >
          </li>
          <li class="active">Edit Product</li>
        </ol>
      </div>
    </div>
    <!-- //breadcrumbs -->
        <!-- form product -->
      <div class="product">
      <div class="container">
        <br>
    <div class="products">
      <div class="container">
        <div class="agileinfo_single">
        @foreach ($tabel as $t)
          <div class="col-md-4 agileinfo_single_left">
            <img id="example" src="{{ asset('public/uploads/' . $t->product_image)}}" alt=" "class="img-responsive"
            />
          </div>
          <div class="col-md-8 agileinfo_single_right">
            <h2>{{$t->Nama}}</h2>
            <div class="w3agile_description">
              <h4>Description :</h4>
              <p>{{$t->Deskripsi}}</p>
              <h4>Category :</h4>
              <p>{{$t->Kategori}}</p>
              <h4>Brand :</h4>
              <p>{{$t->Brand}}</p>
              <h4>Stock :</h4>
              <p>{{$t->Stock}}</p>
              <h4>Price :</h4>
              <p>Rp. {{$t->Harga}}</p>
            </div>
            
             
            </div>
          </div>
          <div class="clearfix"></div>
          @endforeach
        </div>
      </div>
    </div>


        <h2 style="text-align: center">Edit Product</h2>

        <div
          class="login-form-grids animated wow slideInUp"
          data-wow-delay=".5s"
        >
          <form  action="" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
            Product Name: <input type="text" name="p_name" placeholder="Product Name" required=" " /><br>
            Product Category: <select id="p_category" name="categoryList">
                                <option value="opp">OPP</option>
                                <option value="hdpe">HDPE</option>
                                <option value="pe">PE</option>
                                <option value="kresek">Kresek</option>
                                <option value="gelas">Gelas</option>
                                <option value="kertas">Kertas</option>
                              </select>
            <br><br>
            Product Brand: <input type="text" name="P_Brand" placeholder="Product Brand" required=" " /><br>
            Product Price: <input type="text" name="P_Price" placeholder="Price" required=" " /><br>
            Product Stock: <input type="text" name="P_Stock" placeholder="Stock" required=" " /><br>
            Product Description: <textarea id="description" name="P_Desc" rows="4" cols="67"></textarea>
            Product Image: <input type="file" id="product_image" name="product_image"><br>      
            <input type="submit" value="Edit Product" />
          </form>
        </div>
        <br> <br>
      </div>
    </div>
    <!-- //form product -->

    <!-- //footer -->
    <div class="footer">
      <div class="container">
        <div class="w3_footer_grids">
          <div class="col-md-3 w3_footer_grid">
            <h3>Contact</h3>

            <ul class="address">
              <li>
                <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i
                >Ruko Grand CBD Wedoro A-09, <span>Sidoarjo City.</span>
              </li>
              <li>
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i
                ><a href="mailto:mrkentang.sby@gmail.com"
                  >mrkentang.sby@gmail.com</a
                >
              </li>
              <li>
                <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i
                >+62 896-3781-5553
              </li>
            </ul>
          </div>
          <div class="col-md-3 w3_footer_grid">
            <h3>Information</h3>
            <ul class="info">
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/about">About Us</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/contact">Contact Us</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/faq">FAQ's</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 w3_footer_grid">
            <h3>Category</h3>
            <ul class="info">
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/opp">Opp</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/hdpe">HDPE</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/pe">PE</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/kresek">Kresek</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/gelas">Gelas</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/kertas">Kertas</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 w3_footer_grid">
            <h3>Profile</h3>
            <ul class="info">
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/wishlist">My Wishlist</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/checkout">My Cart</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/login">Login</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/registered">Create Account</a>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="footer-copy">
        <div class="container">
          <p>
            © 2023 Toko Aneka Jaya Plastik. All rights reserved | Design by Group 8
          </p>
        </div>
      </div>
    </div>
    <div class="footer-botm">
      <div class="container">
        <div class="w3layouts-foot">
          <ul>
            <li>
              <a href="wa.me/089637815553" class="w3_agile_whatsapp"
                ><i class="fa fa-whatsapp" aria-hidden="true"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="payment-w3ls">
          <img src="images/card.png" alt=" " class="img-responsive" />
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- //footer -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
      $(document).ready(function () {
        /*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

        $().UItoTop({ easingType: "easeOutQuart" });
      });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
      // Mini Cart
      paypal.minicart.render({
        action: "#",
      });

      if (~window.location.search.indexOf("reset=true")) {
        paypal.minicart.reset();
      }
    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet" />
    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery("#demo1").skdslider({
          delay: 5000,
          animationSpeed: 2000,
          showNextPrev: true,
          showPlayButton: true,
          autoSlide: true,
          animationType: "fading",
        });

        jQuery("#responsive").change(function () {
          $("#responsive_wrapper").width(jQuery(this).val());
        });
      });
    </script>
    <!-- //main slider-banner -->
  </body>
</html>
