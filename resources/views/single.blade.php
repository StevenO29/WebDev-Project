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
      href="css/bootstrap.css"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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

        <div class="product_list_header">
         <a href="/checkout" class="w3view-cart">
            <button class="w3view-cart" type="submit" name="submit" value="">
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
            </button>
          </a>
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
              <li><a href="/plastic" class="act">Plastic</a></li>
              <li><a href="/paper" class="act">Paper</a></li>
              <li><a href="/cup" class="act">Cup</a></li>
              <li><a href="/cutleries" class="act">Cutleries</a></li>
              <li class="active"><a href="/products">More Products</a></li>
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
          <li class="active">Singlepage</li>
        </ol>
      </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="products">
      <div class="container">
        <div class="agileinfo_single">
          <div class="col-md-4 agileinfo_single_left">
            <img
              id="example"
              src="images/si1.jpg"
              alt=" "
              class="img-responsive"
            />
          </div>
          <div class="col-md-8 agileinfo_single_right">
            <h2>OPP 8x8</h2>
            <div class="rating1">
              <span class="starRating">
                <input id="rating5" type="radio" name="rating" value="5" />
                <label for="rating5">5</label>
                <input id="rating4" type="radio" name="rating" value="4" />
                <label for="rating4">4</label>
                <input
                  id="rating3"
                  type="radio"
                  name="rating"
                  value="3"
                  checked=""
                />
                <label for="rating3">3</label>
                <input id="rating2" type="radio" name="rating" value="2" />
                <label for="rating2">2</label>
                <input id="rating1" type="radio" name="rating" value="1" />
                <label for="rating1">1</label>
              </span>
            </div>
            <div class="w3agile_description">
              <h4>Description :</h4>
              <p>
                Plastik dengan perekat.
              </p>
            </div>
            <div class="snipcart-item block">
              <div class="snipcart-thumb agileinfo_single_right_snipcart">
                <h4 class="m-sing">Rp3,000 <span>Rp5,000</span></h4>
              </div>
              <div class="snipcart-details agileinfo_single_right_details">
                <form action="#" method="post">
                  <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" name="business" value=" " />
                    <input
                      type="hidden"
                      name="item_name"
                      value="pulao basmati rice"
                    />
                    <input type="hidden" name="amount" value="21.00" />
                    <input type="hidden" name="discount_amount" value="1.00" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="return" value=" " />
                    <input type="hidden" name="cancel_return" value=" " />
                    <input
                      type="submit"
                      name="submit"
                      value="Add to cart"
                      class="button"
                    />
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- new -->
    <div class="newproducts-w3agile">
      <div class="container">
        <h3>New offers</h3>
        <div class="agile_top_brands_grids">
          <div class="col-md-3 top_brand_left-1">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive" />
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="/products"
                          ><img title=" " alt=" " src="images/14.png"
                        /></a>
                        <p>Fried-gram</p>
                        <div class="stars">
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star gray-star"
                            aria-hidden="true"
                          ></i>
                        </div>
                        <h4>$35.99 <span>$55.00</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input
                              type="hidden"
                              name="item_name"
                              value="Fortune Sunflower Oil"
                            />
                            <input type="hidden" name="amount" value="35.99" />
                            <input
                              type="hidden"
                              name="discount_amount"
                              value="1.00"
                            />
                            <input
                              type="hidden"
                              name="currency_code"
                              value="USD"
                            />
                            <input type="hidden" name="return" value=" " />
                            <input
                              type="hidden"
                              name="cancel_return"
                              value=" "
                            />
                            <input
                              type="submit"
                              name="submit"
                              value="Add to cart"
                              class="button"
                            />
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 top_brand_left-1">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive" />
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="/products"
                          ><img title=" " alt=" " src="images/15.png"
                        /></a>
                        <p>Navaratan-dal</p>
                        <div class="stars">
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star gray-star"
                            aria-hidden="true"
                          ></i>
                        </div>
                        <h4>$30.99 <span>$45.00</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input
                              type="hidden"
                              name="item_name"
                              value="basmati rise"
                            />
                            <input type="hidden" name="amount" value="30.99" />
                            <input
                              type="hidden"
                              name="discount_amount"
                              value="1.00"
                            />
                            <input
                              type="hidden"
                              name="currency_code"
                              value="USD"
                            />
                            <input type="hidden" name="return" value=" " />
                            <input
                              type="hidden"
                              name="cancel_return"
                              value=" "
                            />
                            <input
                              type="submit"
                              name="submit"
                              value="Add to cart"
                              class="button"
                            />
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 top_brand_left-1">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive" />
                </div>
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive" />
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="/products"
                          ><img
                            src="images/16.png"
                            alt=" "
                            class="img-responsive"
                        /></a>
                        <p>White-peasmatar</p>
                        <div class="stars">
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star gray-star"
                            aria-hidden="true"
                          ></i>
                        </div>
                        <h4>$80.99 <span>$105.00</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input
                              type="hidden"
                              name="item_name"
                              value="Pepsi soft drink"
                            />
                            <input type="hidden" name="amount" value="80.00" />
                            <input
                              type="hidden"
                              name="discount_amount"
                              value="1.00"
                            />
                            <input
                              type="hidden"
                              name="currency_code"
                              value="USD"
                            />
                            <input type="hidden" name="return" value=" " />
                            <input
                              type="hidden"
                              name="cancel_return"
                              value=" "
                            />
                            <input
                              type="submit"
                              name="submit"
                              value="Add to cart"
                              class="button"
                            />
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 top_brand_left-1">
            <div class="hover14 column">
              <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid_pos">
                  <img src="images/offer.png" alt=" " class="img-responsive" />
                </div>
                <div class="agile_top_brand_left_grid1">
                  <figure>
                    <div class="snipcart-item block">
                      <div class="snipcart-thumb">
                        <a href="/products"
                          ><img title=" " alt=" " src="images/17.png"
                        /></a>
                        <p>Channa-dal</p>
                        <div class="stars">
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star blue-star"
                            aria-hidden="true"
                          ></i>
                          <i
                            class="fa fa-star gray-star"
                            aria-hidden="true"
                          ></i>
                        </div>
                        <h4>$35.99 <span>$55.00</span></h4>
                      </div>
                      <div class="snipcart-details top_brand_home_details">
                        <form action="#" method="post">
                          <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input
                              type="hidden"
                              name="item_name"
                              value="Fortune Sunflower Oil"
                            />
                            <input type="hidden" name="amount" value="35.99" />
                            <input
                              type="hidden"
                              name="discount_amount"
                              value="1.00"
                            />
                            <input
                              type="hidden"
                              name="currency_code"
                              value="USD"
                            />
                            <input type="hidden" name="return" value=" " />
                            <input
                              type="hidden"
                              name="cancel_return"
                              value=" "
                            />
                            <input
                              type="submit"
                              name="submit"
                              value="Add to cart"
                              class="button"
                            />
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- //new -->
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
                ><a href="/plastic">Plastic</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/paper">Paper</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/cup">Cup</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/cutleries">Cutleries</a>
              </li>
              <li>
                <i class="fa fa-arrow-right" aria-hidden="true"></i
                ><a href="/products">Products</a>
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
