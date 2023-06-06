<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Aneka Jaya Plastik-Gelas')</title>
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
              <li><a href="/opp" class="act">OPP</a></li>
              <li><a href="/hdpe" class="act">HDPE</a></li>
              <li><a href="/pe" class="act">PE</a></li>
              <li><a href="/kresek" class="act">Kresek</a></li>
              <li class="active"><a href="/gelas" class="act">Gelas</a></li>
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
          <li class="active">Gelas</li>
        </ol>
      </div>
    </div>
    <!-- //breadcrumbs -->
    <!--- Gelas --->
    <div class="products">
      <div class="container">
        <div class="col-md-4 products-left">
          <div class="categories">
            <h2>Categories</h2>
            <ul class="cate">
              <li>
                 <!--Category 1: Opp-->
                 <a href="/opp">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>Opp</a>
              </li>
              <li>
                <!--Category 2: HDPE-->
                <a href="/hdpe">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>HDPE</a>
              </li>
              <li>
                <!--Category 3: PE-->
                <a href="/pe"
                  ><i class="fa fa-arrow-right" aria-hidden="true"></i
                  >PE</a
                >
              </li>
             <li>
                <!--Category 4: Kresek-->
                <a href="/kresek"
                  ><i class="fa fa-arrow-right" aria-hidden="true"></i
                  >Kresek</a
                >
              </li>
              <li>
                <!--Category 5: Gelas-->
                <a href="/gelas"
                  ><i class="fa fa-arrow-right" aria-hidden="true"></i
                  >Gelas</a
                >
              </li>
              <li>
                <!--Category 6: Kertas-->
                <a href="/kertas"
                  ><i class="fa fa-arrow-right" aria-hidden="true"></i
                  >Kertas</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8 products-right">
          <div class="products-right-grid">
            <div class="products-right-grids">
              <div class="sorting">
                <select
                  id="country"
                  onchange="change_country(this.value)"
                  class="frm-field required sect"
                >
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Default
                    sorting
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by
                    popularity
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by
                    average rating
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by
                    price
                  </option>
                </select>
              </div>
              <div class="sorting-left">
                <select
                  id="country1"
                  onchange="change_country(this.value)"
                  class="frm-field required sect"
                >
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Item on
                    page 9
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Item on
                    page 18
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>Item on
                    page 32
                  </option>
                  <option value="null">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>All
                  </option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="agile_top_brands_grids">
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                        <a href="/single">
                          <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                        </a>
                          <p>Gelas Plastik 12oz</p>
                          <h4>Rp10,000</h4>
                        </div>
                        <div class="snipcart-details top_brand_home_details">
                          <form action="/checkout" method="post">
                            <fieldset>
                              <input type="hidden" name="cmd" value="_cart" />
                              <input type="hidden" name="add" value="1" />
                              <input type="hidden" name="business" value=" " />
                              <input
                                type="hidden"
                                name="item_name"
                                value="Gelas Plastik 12oz"
                              />
                              <input
                                type="hidden"
                                name="amount"
                                value="10,000"
                              />
                          
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
                              />
                              <input type="hidden" name="return" value=" " />
                              <input
                                type="hidden"
                                name="cancel_return"
                                value=" "
                              />
                             <!--  <input
                                type="submit"
                                name="submit"
                                value="Add to cart"
                                class="button"
                              /> -->

                              <input 
                                type="button" 
                                value="Add to Cart" 
                                class="button" 
                                onclick="addProductToCheckout();" 
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
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 10oz</p>
                            <h4>Rp10,000</h4>
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
                              <input
                                type="hidden"
                                name="amount"
                                value="30.99"
                              />
                              <input
                                type="hidden"
                                name="discount_amount"
                                value="1.00"
                              />
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
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
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 14oz</p>
                            <h4>Rp10,000</h4>
                          </div>
                        <div class="snipcart-details top_brand_home_details">
                          <form  action="{{ route('transactions.addToCart') }}" method="post">
                            @csrf

                            <fieldset>
                              <input type="hidden" name="item_name" value="Pepsi soft drink" />
                              <input type="hidden" name="amount" value="80.00" />
                              <input type="hidden" name="currency_code" value="IDR" />
                              <input type="submit" name="submit" value="Add to Cart" class="button" />
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
          <div class="agile_top_brands_grids">
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 16oz</p>
                            <h4>Rp10,000</h4>
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
                              <input
                                type="hidden"
                                name="amount"
                                value="35.99"
                              />
                              <input
                                type="hidden"
                                name="discount_amount"
                                value="1.00"
                              />
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
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
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 18oz</p>
                            <h4>Rp16,000</h4>
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
                              <input
                                type="hidden"
                                name="amount"
                                value="30.99"
                              />
                              <input
                                type="hidden"
                                name="discount_amount"
                                value="1.00"
                              />
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
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
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 18oz</p>
                            <h4>Rp18,000</h4>
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
                              <input
                                type="hidden"
                                name="amount"
                                value="80.00"
                              />
                              <input
                                type="hidden"
                                name="discount_amount"
                                value="1.00"
                              />
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
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
          <div class="agile_top_brands_grids">
            <div class="col-md-4 top_brand_left">
              <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                  <div class="agile_top_brand_left_grid_pos">
                    <img
                      src="images/offer.png"
                      alt=" "
                      class="img-responsive"
                    />
                  </div>
                  <div class="agile_top_brand_left_grid1">
                    <figure>
                      <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                          <a href="/single">
                            <img title=" " alt="gelas" width="150" height="150" src="webdev_image_assets/CupPlastik.png"/>
                          </a>
                            <p>Gelas Plastik 22oz</p>
                            <h4>Rp20,000</h4>
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
                              <input
                                type="hidden"
                                name="amount"
                                value="35.99"
                              />
                              <input
                                type="hidden"
                                name="discount_amount"
                                value="1.00"
                              />
                              <input
                                type="hidden"
                                name="currency_code"
                                value="IDR"
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
        <div class="clearfix"></div>
      </div>
    </div>
    <!--- Gelas --->
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
