<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Aneka Jaya Plastik-Checkout')</title>
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
    <link href="<?php echo asset('css/font-awesome.css')?>" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="<?php echo asset('js/jquery-1.11.1.min.js')?>"></script>
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
    <script type="text/javascript" src="<?php echo asset('js/move-top.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/easing.js')?>"></script>
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
            <a>SHOP NOW</a>
          </p>
        </div>
        <div class="agile-login">
          <ul>
            <li>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                            </li>
                        @else    
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       style="color: white; font-weight: bold; text-decoration: none;">Logout</a>
                                </form>
                            </li>                                
                        @endguest
                    </ul>
                </div>
            </li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
        </div>


        <!-- <div class="product_list_header">
         <a href="/checkout" class="w3view-cart">
            <button class="w3view-cart" type="submit" name="submit" value="">
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </button>
          </a>
        </div> -->

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
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- //navigation -->
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
      <div class="container">
        <ol class="breadcrumb breadcrumb1">
          <li>
            <a href="/index"
              ><span class="glyphicon glyphicon-home" aria-hidden="true"></span
              >Home</a
            >
          </li>
          <li class="active">Checkout Page</li>
         
        </ol>
      </div>
    </div>
    <!-- //breadcrumbs -->
       <!-- checkout -->
    <div class="checkout">
      <div class="container">
        <h2>Your shopping cart contains: <span>3 Products</span></h2>
        <div class="checkout-right">
        {{ csrf_field() }}
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>SL No.</th>
                <th>Product</th>
                <th>Quality</th>
                <th>Product Name</th>

                <th>Price</th>
                <th>subtotal</th>

                <th>Remove</th>
              </tr>
            </thead>
            @foreach($listCheckout as $index => $t)
            <form method="post" action="/checkout/updateCart">
            {{ csrf_field() }}
            <tr class="rem1">
              <td class="invert">{{ $index + 1 }}</td>
              <td class="invert-image">
                <a href="/single"
                  ><img src="{{ asset('webdev_image_assets/' . $t->product_image)}}" alt=" " class="img-responsive " style = "height: 100px; width: 100px;"
                /></a>
              </td>
              <td class="invert">
                <div class="quantity">
                  <div class="quantity-select">
                    <input class="entry value-plus" style="color:black" type="number" name="qty[{{$t->Product_ID}}]" value="{{$t->qty}}">
                  </div>
                </div>
              </td>
              <td class="invert">{{$t->name}}</td>

              <td class="invert">{{$t->price}}</td>
              <td class="invert">{{$t->subtotal}}</td>

              <td class="invert">
                <div class="rem">
                  <div class="close1"></div>
                  <button type="submit" name="delete"
                                        onclick="{{route('/delete/{id}')}}">Delete</button>
                </div>
                <script>
                  $(document).ready(function (c) {
                    $(".close1").on("click", function (c) {
                      $(".rem1").fadeOut("slow", function (c) {
                        $(".rem1").remove();
                      });
                    });
                  });
                </script>
              </td>
            </tr>
            @endforeach            
            </table>
            <input type="submit" value="Update Cart" />

        </form>
        
            <form method="post" action="/checkout/checkout">
            {{ csrf_field() }}

         
            <input type="hidden" name="prod_id" value="{{$t->Product_ID}}">
            <input type="hidden" name="name" value="{{$t->name}}">
            <input type="hidden" name="cust_name" value="{{$t->cust_name}}">
            <input type="hidden" name="price" value="{{$t->price}}">
            <input type="hidden" name="Order_Qty" value="{{$t->qty}}">
            <input type="hidden" name="total" value="{{$t->subtotal}}">
            <input type="submit" name="checkout" value="Checkout" />
        </form>
        <script>
                          document.getElementById("checkoutForm").addEventListener("submit", function(e) {
                          e.preventDefault(); // Prevent the default form submission
                          var form = e.target;
                          var url = form.getAttribute("action");
                          var method = form.getAttribute("method");

                          // Perform your AJAX request or any other necessary actions here
                          // ...

                          // Redirect to the newproduct page
                          window.location.href = "/index";
                          });
        </script>



            <!--quantity-->
            <script>
              $(".value-plus").on("click", function () {
                var divUpd = $(this).parent().find(".value"),
                  newVal = parseInt(divUpd.text(), 10) + 1;
                divUpd.text(newVal);
              });

              $(".value-minus").on("click", function () {
                var divUpd = $(this).parent().find(".value"),
                  newVal = parseInt(divUpd.text(), 10) - 1;
                if (newVal >= 1) divUpd.text(newVal);
              });
            </script>
            <!--quantity-->
        </div>
        <div class="checkout-left">
          <div class="checkout-left-basket">
            <ul>
              <li>Total  <span><i>-</i>{{$t->subtotal}}</span></li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- //checkout -->
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
