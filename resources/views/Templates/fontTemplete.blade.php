<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('photo/cart-shopping.ico')}}" rel="shortcut icon"/>
  <title>FreshCart</title>
  <!-- Link Bootstrap's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Local CSS -->
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/down.css')}}">
  <!-- Local Swiper CSS -->
  <link rel="stylesheet" href="./css/swiper.css">

  @yield('css')
</head>


<body>
  <header>
    <div class="top-showcase">
      <div class="container p-1">
        <div class="d-flex justify-content-center justify-content-md-between">
          <span> Super Value Deals - Save more with coupons</span>
          <div class="dropdown d-none d-md-block">
            <div class="btn-group">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{asset('img/icon/english-flag_工作區域 1.png')}}" alt="English-flag" class="img-fluid flag">
                <span>English</span>
                <i class="bi bi-chevron-down chevron-down"></i>
              </button>
              <ul class="dropdown-menu">
                <li class="flag-menu">
                  <img src="./img/icon/english-flag_工作區域 1.png" alt="English-flag" class="img-fluid flag">
                  <span>English</span>
                </li>
                <li class="flag-menu">
                  <img src="./img/icon/germany-flag_工作區域 1.png" alt="germany-flag" class="img-fluid flag">
                  <span>Germany</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-search">
      <div class="container d-flex justify-content-between">
        <div class="top-search-left d-flex align-items-center">
          <a href="#" class="freshcart-logo"><img src="./img/icon/freshcart-logo.svg" alt=""></a>
          <form class="d-flex position-relative d-none d-lg-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search for products" aria-label="Search">
            <button class="btn search-btn position-absolute" type="submit"><i class="bi bi-search"></i></button>
          </form>
          <button type="button" class="btn btn-outline-secondary location-btn d-none d-lg-block">
            <i class="bi bi-geo-alt"></i>
            <span>Location</span>
          </button>
        </div>
        <div class="top-search-right d-flex align-items-center">
          <a href="#" class="position-relative d-none d-lg-block ">
            <i class="bi bi-heart top-icon"></i>
            <span class="position-absolute badge badge-circle text-bg-success rounded-circle">5</span>
          </a>
          <a href="#">
            <i class="bi bi-person top-icon"></i>
          </a>
          <a href="#" class="position-relative">
            <i class="bi bi-cart2 top-icon"></i>
            <span class="position-absolute badge badge-circle text-bg-success rounded-circle">1</span>
          </a>
          <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="bi bi-text-indent-left top-icon"></i>
          </button>
          <!-- 彈跳menu -->
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <img src="./img/icon/freshcart-logo.svg" alt="" class="offcanvas-title" id="offcanvasExampleLabel">

              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- 彈跳menu 內容 -->
            <div class="offcanvas-body">
              <form class="d-flex position-relative mb-2" role="search">
                <input class="form-control" type="search" placeholder="Search for products" aria-label="Search">
                <button class="btn search-btn position-absolute" type="submit"><i class="bi bi-search"></i></button>
              </form>
              <button type="button" class="btn btn-outline-secondary location-btn mb-3">
                <i class="bi bi-geo-alt"></i>
                <span>Pick Location</span>
              </button>
              <button type="button" class="btn dropdown-toggle all-departments-btn fs-6-7 mb-3"
              data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="bi bi-grid me-1"></i>
                <span>All Departments</span>
              </button>
              <div class="collapse all-departments-menu" id="collapseExample">
                <ul class="p-0">
                  <li><a class="dropdown-item" href="#">Dairy, Bread & Eggs</a></li>
                  <li><a class="dropdown-item" href="#">Snacks & Munchies</a></li>
                  <li><a class="dropdown-item" href="#">Fruits & Vegetables</a></li>
                  <li><a class="dropdown-item" href="#">Cold Drinks & Juices</a></li>
                  <li><a class="dropdown-item" href="#">Breakfast & Instant Food</a></li>
                  <li><a class="dropdown-item" href="#">Bakery & Biscuits</a></li>
                  <li><a class="dropdown-item" href="#">Chicken, Meat & Fish</a></li>
                </ul>

              </div>
              <!-- accordion test to do -->
              <div class="accordion" id="accordionExample">
                <!-- Home -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Home
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <a class="dropdown-item" href="#">Home 1</a>
                      <a class="dropdown-item" href="#">Home 2</a>
                      <a class="dropdown-item" href="#">Home 3</a>
                      <a class="dropdown-item" href="#">Home 4</a>
                      <a class="dropdown-item" href="#">Home 5<span class="badge light-blue ms-1">New</span></a>

                    </div>
                  </div>
                </div>
                <!-- Shop -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Shop
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body  fs-6-7">
                      <a class="dropdown-item" href="#">Shop Grid - Filter</a>
                      <a class="dropdown-item" href="#">Shop Grid - 3 column</a>
                      <a class="dropdown-item" href="#">Shop List - Filter</a>
                      <a class="dropdown-item" href="#">Shop - Filter</a>
                      <a class="dropdown-item" href="#">Shop Single</a>
                      <a class="dropdown-item" href="#">Shop Single v2</a>
                      <a class="dropdown-item" href="#">Shop Wishlist</a>
                      <a class="dropdown-item" href="#">Shop Cart</a>
                      <a class="dropdown-item" href="#">Shop Checkout</a>
                    </div>
                  </div>
                </div>
                <!-- Stores -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Stores
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <a class="dropdown-item" href="#">Store List</a>
                      <a class="dropdown-item" href="#">Store Grid</a>
                      <a class="dropdown-item" href="#">Store Single</a>
                    </div>
                  </div>
                </div>
                <!-- Mega menu -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Mega menu
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <ul>
                        <li>
                          <!-- Mega menu 第一列 -->
                          <h6 class="main-green-color">Dairy, Bread & Eggs</h6>
                          <a class="dropdown-item" href="#">Butter</a>
                          <a class="dropdown-item" href="#">Milk Drinks</a>
                          <a class="dropdown-item" href="#">Curd & Yogurt</a>
                          <a class="dropdown-item" href="#">Eggs</a>
                          <a class="dropdown-item" href="#">Buns & Bakery</a>
                          <a class="dropdown-item" href="#">Cheese</a>
                          <a class="dropdown-item" href="#">Condensed Milk</a>
                          <a class="dropdown-item" href="#">Dairy Products</a>
                        </li>
                        <li class="mt-3">
                          <!-- Mega menu 第二列 -->
                          <h6 class="main-green-color">Breakfast & Instant Food</h6>
                          <a class="dropdown-item" href="#">Breakfast Cereal</a>
                          <a class="dropdown-item" href="#"> Noodles, Pasta & Soup</a>
                          <a class="dropdown-item" href="#">Frozen Veg Snacks</a>
                          <a class="dropdown-item" href="#"> Frozen Non-Veg Snacks</a>
                          <a class="dropdown-item" href="#"> Vermicelli</a>
                          <a class="dropdown-item" href="#"> Instant Mixes</a>
                          <a class="dropdown-item" href="#"> Batter</a>
                          <a class="dropdown-item" href="#"> Fruit and Juices</a>
                        </li>
                        <li class="mt-3">
                          <!-- Mega menu 第三列 -->
                          <h6 class="main-green-color">Cold Drinks & Juices</h6>
                          <a class="dropdown-item" href="#">Soft Drinks</a>
                          <a class="dropdown-item" href="#">Fruit Juices</a>
                          <a class="dropdown-item" href="#">Coldpress</a>
                          <a class="dropdown-item" href="#">Water & Ice Cubes</a>
                          <a class="dropdown-item" href="#">Soda & Mixers</a>
                          <a class="dropdown-item" href="#">Health Drinks</a>
                          <a class="dropdown-item" href="#">Herbal Drinks</a>
                          <a class="dropdown-item" href="#">Milk Drinks</a>
                        </li>
                        <li class="position-relative mt-3">
                          <!--Mega menu 第四列 -->
                          <img src="./img/banner/mega-menu-banner.jpeg" alt="" class="img-fluid">
                          <div class="position-absolute mega-branner">
                            <h5>
                              Dont miss this <br> offer today.
                            </h5>
                            <a href="#" class="btn shop-now-btn ms-auto fs-7">Shop Now</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Pages -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Pages
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <a class="dropdown-item" href="#">Blog</a>
                      <a class="dropdown-item" href="#">Blog Single</a>
                      <a class="dropdown-item" href="#">Blog Category</a>
                      <a class="dropdown-item" href="#">About us</a>
                      <a class="dropdown-item" href="#">404 Error</a>
                      <a class="dropdown-item" href="#">Contact</a>
                    </div>
                  </div>
                </div>
                <!-- Account -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Account
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <a class="dropdown-item" href="#">Sign in</a>
                      <a class="dropdown-item" href="#">Signup</a>
                      <a class="dropdown-item" href="#">Forgot Password</a>
                      <a class="dropdown-item" href="#">My Account</a>
                      <a class="dropdown-item" href="#">Home 5<span class="badge light-blue ms-1">New</span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Dashboard -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <a href="#">
                      <button class="accordion-button collapsed hover-green dashboard" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven">
                        Dashboard
                      </button>
                    </a>
                  </h2>
                </div>
                <!-- Docs -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed hover-green" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Docs
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-6-7">
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-file-text doc-icon main-green-color me-2"></i>
                        <div class="doc-body">
                          <h6 class="mb-0 fs-6-7">Documentations</h6>
                          <p class="mb-0 fs-7">
                            Browse the all documentation
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-layers doc-icon main-green-color me-2"></i>
                        <div class="doc-body">
                          <h6 class="mb-0 fs-6-7">
                            Changelog
                            <span class="main-green-color">v1.2.0</span>
                          </h6>
                          <p class="mb-0 fs-7">
                            See what's new
                          </p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-nav">
      <div class="container d-none d-lg-flex align-items-center pb-3">
        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle all-departments-btn d-none d-lg-block fs-6-7"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-grid me-1"></i>
            <span>All Departments</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dairy, Bread & Eggs</a></li>
            <li><a class="dropdown-item" href="#">Snacks & Munchies</a></li>
            <li><a class="dropdown-item" href="#">Fruits & Vegetables</a></li>
            <li><a class="dropdown-item" href="#">Cold Drinks & Juices</a></li>
            <li><a class="dropdown-item" href="#">Breakfast & Instant Food</a></li>
            <li><a class="dropdown-item" href="#">Bakery & Biscuits</a></li>
            <li><a class="dropdown-item" href="#">Chicken, Meat & Fish</a></li>
          </ul>
        </div>
        <ul class="top-nav-menu d-flex p-0 m-0">
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Home</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Home 1</a></li>
                <li><a class="dropdown-item" href="#">Home 2</a></li>
                <li><a class="dropdown-item" href="#">Home 3</a></li>
                <li><a class="dropdown-item" href="#">Home 4</a></li>
                <li><a class="dropdown-item" href="#">Home 5<span class="badge light-blue ms-1">New</span>
                  </a></li>
              </ul>
            </div>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Shop</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Shop Grid - Filter</a></li>
                <li><a class="dropdown-item" href="#">Shop Grid - 3 column</a></li>
                <li><a class="dropdown-item" href="#">Shop List - Filter</a></li>
                <li><a class="dropdown-item" href="#">Shop - Filter</a></li>
                <li><a class="dropdown-item" href="#">Shop Single</a></li>
                <li><a class="dropdown-item" href="#">Shop Single v2</a></li>
                <li><a class="dropdown-item" href="#">Shop Wishlist</a></li>
                <li><a class="dropdown-item" href="#">Shop Cart</a></li>
                <li><a class="dropdown-item" href="#">Shop Checkout</a></li>
              </ul>
            </div>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Stores</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Store List</a></li>
                <li><a class="dropdown-item" href="#">Store Grid</a></li>
                <li><a class="dropdown-item" href="#">Store Single</a></li>
              </ul>
            </div>
          </li>
          <!-- mega menu -->
          <li class="top-nav-item mega-menu">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Mega menu</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <div class="dropdown-menu">
                <div>
                  <div class="row p-2 p-lg-3">
                    <!-- Mega-menu第一列 -->
                    <div class="col col-lg-3">
                      <h6 class="main-green-color">Dairy, Bread & Eggs</h6>
                      <a class="dropdown-item" href="#">Butter</a>
                      <a class="dropdown-item" href="#">Milk Drinks</a>
                      <a class="dropdown-item" href="#">Curd & Yogurt</a>
                      <a class="dropdown-item" href="#">Eggs</a>
                      <a class="dropdown-item" href="#">Buns & Bakery</a>
                      <a class="dropdown-item" href="#">Cheese</a>
                      <a class="dropdown-item" href="#">Condensed Milk</a>
                      <a class="dropdown-item" href="#">Dairy Products</a>
                    </div>
                    <!-- Mega-menu第二列 -->
                    <div class="col col-lg-3">
                      <h6 class="main-green-color">Breakfast & Instant Food</h6>
                      <a class="dropdown-item" href="#">Breakfast Cereal</a>
                      <a class="dropdown-item" href="#"> Noodles, Pasta & Soup</a>
                      <a class="dropdown-item" href="#">Frozen Veg Snacks</a>
                      <a class="dropdown-item" href="#"> Frozen Non-Veg Snacks</a>
                      <a class="dropdown-item" href="#"> Vermicelli</a>
                      <a class="dropdown-item" href="#"> Instant Mixes</a>
                      <a class="dropdown-item" href="#"> Batter</a>
                      <a class="dropdown-item" href="#"> Fruit and Juices</a>
                    </div>
                    <!-- Mega-menu第三列 -->
                    <div class="col col-lg-3">
                      <h6 class="main-green-color">Cold Drinks & Juices</h6>
                      <a class="dropdown-item" href="#">Soft Drinks</a>
                      <a class="dropdown-item" href="#">Fruit Juices</a>
                      <a class="dropdown-item" href="#">Coldpress</a>
                      <a class="dropdown-item" href="#">Water & Ice Cubes</a>
                      <a class="dropdown-item" href="#">Soda & Mixers</a>
                      <a class="dropdown-item" href="#">Health Drinks</a>
                      <a class="dropdown-item" href="#">Herbal Drinks</a>
                      <a class="dropdown-item" href="#">Milk Drinks</a>
                    </div>
                    <!-- Mega-menu第四列 -->
                    <div class="col col-lg-3 position-relative">
                      <img src="./img/banner/mega-menu-banner.jpeg" alt="" class="img-fluid">
                      <div class="position-absolute mega-branner">
                        <h5>
                          Dont miss this <br> offer today.
                        </h5>
                        <a href="#" class="btn shop-now-btn ms-auto fs-7">Shop Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Pages</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Blog</a></li>
                <li><a class="dropdown-item" href="#">Blog Single</a></li>
                <li><a class="dropdown-item" href="#">Blog Category</a></li>
                <li><a class="dropdown-item" href="#">About us</a></li>
                <li><a class="dropdown-item" href="#">404 Error</a></li>
                <li><a class="dropdown-item" href="#">Contact</a></li>
              </ul>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Account</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sign in</a></li>
                <li><a class="dropdown-item" href="#">Signup</a></li>
                <li><a class="dropdown-item" href="#">Forgot Password</a></li>
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li><a class="dropdown-item" href="#">Home 5<span class="badge light-blue ms-1">New</span>
                  </a></li>
              </ul>
            </div>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Dashboard</span>
              </button>
            </div>
          </li>
          <li class="top-nav-item">
            <div class="dropdown">
              <button class="btn dropdown-toggle hover-green fs-6-7" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span>Docs</span>
                <i class="bi bi-chevron-down nav-down-i"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-file-text doc-icon main-green-color me-2"></i>
                    <div class="doc-body">
                      <h6 class="mb-0 fs-6-7">Documentations</h6>
                      <p class="mb-0 fs-7">
                        Browse the all documentation
                      </p>
                    </div>
                  </a></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-layers doc-icon main-green-color me-2"></i>
                    <div class="doc-body">
                      <h6 class="mb-0 fs-6-7">
                        Changelog
                        <span class="main-green-color">v1.2.0</span>
                      </h6>
                      <p class="mb-0 fs-7">
                        See what's new
                      </p>
                    </div>
                  </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    @yield('main-content')

  </main>
  <footer class="mt-5  container-fluid w-100 bg-light-blue pt-4 pb-5">
    <div class="bottom-nav container d-flex justify-content-center pt-5 mb-3">
      <div class="row w-100 border-4">
        <div class="col-lg-2 col-6 bg-body-tertiar">
          <div class="text-black fw-bolder pb-2">Categories</div>
          <div class="padding-self ">
            <a>Vegetables & Fruits</a><br>
            <a>Breakfast & instant food</a><br>
            <a>Bakery & Biscuits</a><br>
            <a>Atta, rice & dal</a><br>
            <a>Sauces & spreads</a><br>
            <a>Organic & gourmet</a><br>
            <a>Baby care</a><br>
            <a>Cleaning essentials</a><br>
            <a>Personal care</a>
          </div>
        </div>
        <div class="col-lg-2 col-6 ">
          <div class="padding-self">
            <br>
            <a>Dairy, bread & eggs</a><br>
            <a>Cold drinks & juices</a><br>
            <a>Tea, coffee & drinks</a><br>
            <a>Masala, oil & more</a><br>
            <a>Chicken, meat & fish</a><br>
            <a>Paan corner</a><br>
            <a>Pharma & wellness</a><br>
            <a>Home & office</a><br>
            <a>Pet care</a>
          </div>

        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <div class="text-black fw-bolder pb-2">Get to know us</div>
          <div class="padding-self">
            <a>Company</a><br>
            <a>About</a><br>
            <a>Blog</a><br>g
            <a>Help Center</a><br>
            <a>Our Value</a><br>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 d-lg-block">
          <div class="text-black fw-bolder pb-2">For Consumers</div>
          <div class="padding-self">
            <a>Payments</a><br>
            <a>Shipping</a><br>
            <a>Product Returns</a><br>
            <a>FAQ</a><br>
            <a>Shop Checkout</a><br>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <div class="text-black fw-bolder pb-2"> Become a Shopper</div>
          <div class="padding-self">
            <a>Shopper Opportunities</a><br>
            <a> Become a Shopper</a><br>
            <a>Earnings</a><br>
            <a>Ideas & Guides</a><br>
            <a>New Retailers</a><br>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mb-2 ">
          <div class="text-black fw-bolder pb-2">Freshcart programs</div>
          <div class="padding-self">
            <a>Freshcart programs</a><br>
            <a>Gift Cards</a><br>
            <a>Promos & Coupons</a><br>
            <a>Freshcart Ads</a><br>
            <a> Careers</a><br>
          </div>
        </div>
      </div>

    </div>
    <!-- 倒數第二行 -->
    <div class="bottom-service container d-flex align-items-center py-3 border-bottom border-top">
      <div class="row w-100">
        <!-- 左邊 -->
        <div class="footer-second-left col-12 justify-content-center col-lg-5 d-flex  align-items-center">
          <div class="d-flex align-items-center text-black">Payment Partners</div>
          <div class="ms-3">
            <svg width="44" height="28" viewBox="0 0 44 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17.4927 18.4705C15.9362 19.6649 13.6776 20.2998 11.7349 20.2998C9.01046 20.2998 6.55754 19.2538 4.70147 17.5121C4.55636 17.3759 4.68509 17.1886 4.86063 17.2932C6.86416 18.5046 9.34048 19.2343 11.8987 19.2343C13.6237 19.2343 15.5219 18.8622 17.2656 18.0935C17.5301 17.9767 17.7501 18.2735 17.4927 18.4705Z"
                fill="#F8991D" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M18.1431 17.7008C17.9441 17.4357 16.8277 17.5743 16.3245 17.6376C16.1723 17.657 16.1489 17.5184 16.2847 17.4187C17.1764 16.7692 18.6369 16.9565 18.8055 17.173C18.9763 17.3919 18.761 18.9147 17.9254 19.6395C17.7967 19.7514 17.675 19.6906 17.7311 19.5447C17.9207 19.0582 18.342 17.966 18.1431 17.7008Z"
                fill="#F8991D" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.358 12.8228V12.1903C16.358 12.093 16.4282 12.0298 16.5125 12.0298H19.2392C19.3258 12.0298 19.3961 12.0955 19.3961 12.1903V12.7328C19.3961 12.8228 19.3212 12.942 19.1901 13.1317L17.7787 15.2261C18.303 15.214 18.8577 15.2942 19.3329 15.574C19.4405 15.6372 19.4686 15.7296 19.478 15.8196V16.4935C19.478 16.5859 19.3797 16.6929 19.2767 16.637C18.4388 16.1797 17.3246 16.131 16.3954 16.6418C16.2995 16.6954 16.2012 16.5883 16.2012 16.4959V15.8537C16.2012 15.7515 16.2035 15.5764 16.3018 15.4183L17.9379 12.9785H16.5125C16.4282 12.9809 16.358 12.9177 16.358 12.8228Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6.41156 16.7714H5.583C5.50342 16.7666 5.44023 16.7033 5.43555 16.6255V12.2007C5.43555 12.1132 5.5081 12.0426 5.59471 12.0426H6.36709C6.44901 12.0475 6.51221 12.1107 6.51689 12.191V12.7675H6.53327C6.73456 12.208 7.11374 11.9478 7.62398 11.9478C8.14359 11.9478 8.46893 12.208 8.70064 12.7675C8.90193 12.208 9.35834 11.9478 9.84752 11.9478C10.1963 11.9478 10.5754 12.0961 10.8072 12.4318C11.0693 12.804 11.0155 13.344 11.0155 13.8184V16.6109C11.0155 16.6985 10.9429 16.769 10.8563 16.769H10.0277C9.94349 16.7641 9.87795 16.696 9.87795 16.6109V14.2659C9.87795 14.0811 9.89433 13.614 9.85454 13.4389C9.79369 13.1397 9.60644 13.057 9.36771 13.057C9.16642 13.057 8.95811 13.1956 8.8715 13.4194C8.78724 13.6432 8.79427 14.0154 8.79427 14.2659V16.6109C8.79427 16.6985 8.72171 16.769 8.63511 16.769H7.80654C7.72228 16.7641 7.65675 16.696 7.65675 16.6109V14.2659C7.65675 13.7721 7.73399 13.0473 7.1465 13.0473C6.54966 13.0473 6.57306 13.7551 6.57306 14.2659V16.6109C6.57306 16.7009 6.50051 16.7714 6.41156 16.7714Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M21.7517 12.8517C21.1409 12.8517 21.1011 13.7177 21.1011 14.2577C21.1011 14.7977 21.0941 15.9507 21.7447 15.9507C22.3884 15.9507 22.4188 15.0191 22.4188 14.4523C22.4188 14.0801 22.4024 13.6325 22.2948 13.2798C22.1988 12.9709 22.0139 12.8517 21.7517 12.8517ZM21.7424 11.9492C22.9735 11.9492 23.6382 13.0487 23.6382 14.445C23.6382 15.795 22.9033 16.8653 21.7424 16.8653C20.5347 16.8653 19.877 15.7658 19.877 14.3988C19.877 13.0195 20.544 11.9492 21.7424 11.9492Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M25.2358 16.7705H24.4096C24.3276 16.7656 24.2598 16.6975 24.2598 16.6124V12.1852C24.2668 12.1049 24.3347 12.0417 24.4189 12.0417H25.189C25.2615 12.0465 25.32 12.0976 25.3364 12.1657V12.842H25.3528C25.5845 12.2363 25.9099 11.9492 26.4833 11.9492C26.8555 11.9492 27.2182 12.0879 27.45 12.4698C27.6676 12.8225 27.6676 13.4185 27.6676 13.8466V16.6294C27.6583 16.7072 27.5904 16.768 27.5085 16.768H26.6776C26.6003 16.7632 26.5395 16.7048 26.5301 16.6294V14.2285C26.5301 13.7444 26.5839 13.0366 26.0105 13.0366C25.8092 13.0366 25.6243 13.1752 25.5307 13.3893C25.4137 13.6593 25.3996 13.9293 25.3996 14.2285V16.6099C25.3949 16.6999 25.3247 16.7705 25.2358 16.7705Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M15.0252 16.7577C14.9714 16.8088 14.8918 16.8112 14.8286 16.7771C14.5524 16.5387 14.5033 16.4293 14.3535 16.2031C13.8994 16.6847 13.5764 16.8307 12.9866 16.8307C12.2891 16.8307 11.7461 16.3831 11.7461 15.4879C11.7461 14.7873 12.1112 14.313 12.6308 14.0795C13.0802 13.8751 13.7098 13.8362 14.1896 13.7803V13.6684C14.1896 13.464 14.206 13.2208 14.089 13.0432C13.9884 12.8851 13.7941 12.8194 13.6232 12.8194C13.3073 12.8194 13.0264 12.9873 12.9562 13.3375C12.9421 13.4154 12.8883 13.4932 12.8134 13.4957L12.0082 13.4057C11.9404 13.3886 11.8655 13.3327 11.8842 13.2257C12.0668 12.2259 12.9257 11.9145 13.7051 11.9072H13.766C14.1662 11.9121 14.6765 12.0264 14.9854 12.3354C15.388 12.727 15.3506 13.25 15.3506 13.8192V15.1619C15.3506 15.5657 15.5121 15.7433 15.6642 15.9598C15.718 16.0376 15.7297 16.1325 15.6619 16.1885C15.4933 16.3368 15.1914 16.6069 15.0252 16.7577ZM14.1873 14.656C14.1873 14.9917 14.1943 15.2714 14.0328 15.5706C13.9018 15.8139 13.6911 15.9622 13.4594 15.9622C13.1411 15.9622 12.9562 15.7093 12.9562 15.3371C12.9562 14.6025 13.5905 14.4687 14.1896 14.4687V14.656H14.1873Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.14828 16.7611C4.09445 16.8122 4.01487 16.8146 3.95167 16.7805C3.67548 16.5422 3.62633 16.4327 3.47654 16.2065C3.02012 16.6881 2.69947 16.8341 2.10964 16.8341C1.41215 16.8341 0.869141 16.3865 0.869141 15.4913C0.869141 14.7907 1.23427 14.3164 1.75388 14.0829C2.20327 13.8785 2.83288 13.8396 3.3127 13.7837V13.6718C3.3127 13.4674 3.32908 13.2242 3.21205 13.0466C3.11141 12.8885 2.91714 12.8228 2.74628 12.8228C2.4303 12.8228 2.14943 12.9907 2.07922 13.341C2.06517 13.4188 2.01134 13.4942 1.93644 13.4991L1.13128 13.4091C1.06341 13.392 0.98851 13.3361 1.00723 13.2266C1.1898 12.2269 2.04879 11.9155 2.8282 11.9082H2.88905C3.28929 11.9131 3.79953 12.0274 4.10849 12.3363C4.51107 12.728 4.47362 13.251 4.47362 13.8202V15.1629C4.47362 15.5667 4.63512 15.7443 4.78726 15.9608C4.84109 16.0386 4.85279 16.1335 4.78491 16.1894C4.61873 16.3403 4.3168 16.6103 4.14828 16.7611ZM3.3127 14.6594C3.3127 14.9951 3.31972 15.2748 3.15822 15.574C3.02715 15.8173 2.8165 15.9656 2.58478 15.9656C2.26646 15.9656 2.08156 15.7127 2.08156 15.3405C2.08156 14.6059 2.71585 14.4721 3.31504 14.4721V14.6594H3.3127Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M39.0075 18.3578C39.0075 18.2459 39.0075 18.1461 39.0075 18.0318C39.0075 17.9394 39.052 17.8761 39.1433 17.881C39.3165 17.9078 39.5622 17.9321 39.7354 17.8956C39.9625 17.8469 40.1263 17.6791 40.2223 17.4504C40.358 17.1269 40.447 16.8666 40.5055 16.6964L38.7805 12.2546C38.7524 12.1792 38.743 12.0381 38.8882 12.0381H39.492C39.6067 12.0381 39.6535 12.1135 39.6793 12.1889L40.9291 15.7963L42.1228 12.1889C42.1462 12.1159 42.1954 12.0381 42.3101 12.0381H42.8788C43.0216 12.0381 43.0146 12.1767 42.9865 12.2546L41.2755 16.835C41.0532 17.4456 40.7583 18.4161 40.0936 18.584C39.7612 18.674 39.3399 18.6424 39.0941 18.5353C39.0309 18.5037 39.0075 18.4161 39.0075 18.3578Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M38.2002 16.5022C38.2002 16.5849 38.1347 16.653 38.0551 16.653H37.6291C37.5378 16.653 37.4746 16.5849 37.4629 16.5022L37.4208 16.2006C37.2242 16.3733 36.9855 16.5241 36.7257 16.6287C36.2248 16.8306 35.649 16.8647 35.1598 16.5533C34.8064 16.3271 34.6191 15.8868 34.6191 15.4319C34.6191 15.0792 34.7245 14.7314 34.9538 14.4784C35.2628 14.133 35.7098 13.9627 36.2505 13.9627C36.5759 13.9627 37.044 14.0016 37.3834 14.1184V13.5102C37.3834 12.8948 37.1329 12.6272 36.4752 12.6272C35.972 12.6272 35.5881 12.7051 35.0521 12.8778C34.9655 12.8802 34.9164 12.8121 34.9164 12.7294V12.3888C34.9164 12.3061 34.9843 12.2259 35.0592 12.2015C35.4407 12.0288 35.9814 11.9194 36.5571 11.8999C37.3061 11.8999 38.1979 12.075 38.1979 13.2743V16.5022H38.2002ZM37.3834 15.6168V14.7022C37.0978 14.6219 36.625 14.5878 36.4424 14.5878C36.1546 14.5878 35.8362 14.6584 35.6724 14.8433C35.5483 14.9795 35.4922 15.1741 35.4922 15.3614C35.4922 15.6046 35.5741 15.8479 35.7613 15.9695C35.9814 16.1252 36.3207 16.1057 36.6414 16.0109C36.9504 15.9209 37.2382 15.7603 37.3834 15.6168Z"
                fill="#333E47" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M31.9278 12.6409C32.871 12.6409 33.1285 13.412 33.1285 14.295C33.1332 14.8909 33.0278 15.4212 32.7306 15.7253C32.5082 15.9539 32.2601 16.0148 31.888 16.0148C31.5556 16.0148 31.1179 15.8348 30.7926 15.5842V13.0592C31.132 12.7892 31.565 12.6409 31.9278 12.6409ZM30.6475 18.5154H30.0787C29.9991 18.5154 29.9336 18.4473 29.9336 18.3646C29.9336 16.3091 29.9336 14.2512 29.9336 12.1957C29.9336 12.113 29.9991 12.0449 30.0787 12.0449H30.5141C30.6053 12.0449 30.6685 12.113 30.6802 12.1957L30.727 12.5192C31.1366 12.1422 31.6609 11.9014 32.1618 11.9014C33.5638 11.9014 34.0273 13.103 34.0273 14.3533C34.0273 15.6912 33.3204 16.764 32.129 16.764C31.6258 16.764 31.1554 16.5718 30.7949 16.2361V18.367C30.7926 18.4497 30.727 18.5154 30.6475 18.5154Z"
                fill="#333E47" />
            </svg>
          </div>
          <div class="ms-3">
            <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2598_6265)">
                <path d="M2.88867 11.4406H4.06571L3.47719 9.93701L2.88867 11.4406Z" fill="#2FABF7" />
                <path
                  d="M17.4941 10.1523C17.3871 10.0986 17.2266 10.0986 17.0661 10.0986H15.9961V10.9578H17.0661C17.2266 10.9578 17.3871 10.9578 17.4941 10.9041C17.6012 10.8504 17.6547 10.6893 17.6547 10.5282C17.7082 10.3134 17.6012 10.206 17.4941 10.1523Z"
                  fill="#228FE0" />
                <path
                  d="M28.9444 8.53955V9.18393L28.6234 8.53955H26.1088V9.18393L25.7878 8.53955H22.3637C21.7752 8.53955 21.2937 8.64695 20.8657 8.86174V8.53955H18.4581V8.86174C18.1906 8.64695 17.8696 8.53955 17.4416 8.53955H8.82778L8.23926 9.88201L7.65074 8.53955H4.92216V9.18393L4.60115 8.53955H2.30057L1.23054 11.0634L0 13.8557H1.23054H2.72859L3.0496 12.9965H3.79862L4.11963 13.8557H7.22273V13.2113L7.49024 13.8557H9.04179L9.3093 13.2113V13.8557H16.746V12.4595H16.853C16.96 12.4595 16.96 12.4595 16.96 12.6206V13.802H20.8122V13.4798C21.1332 13.6409 21.6147 13.802 22.2567 13.802H23.8618L24.1828 12.9428H24.9318L25.2528 13.802H28.3559V12.9965L28.8374 13.802H31.352V8.53955H28.9444ZM10.8608 13.0502H9.95132V10.0968L8.66728 13.0502H7.86475L6.58071 10.0968V13.0502H4.76165L4.38714 12.2447H2.56808L2.24707 13.1039H1.23054L2.83559 9.29133H4.17313L5.67118 12.8891V9.29133H7.11573L8.29276 11.8688L9.3628 9.29133H10.8608V13.0502ZM14.499 10.0968H12.4124V10.7949H14.4455V11.5467H12.4124V12.2984H14.499V13.1039H11.5029V9.29133H14.499V10.0968ZM18.5116 11.6541C18.6186 11.8688 18.6721 12.0299 18.6721 12.3521V13.1039H17.7626V12.6206C17.7626 12.4058 17.7626 12.0836 17.6021 11.8688C17.4416 11.7077 17.281 11.7077 16.96 11.7077H15.997V13.1039H15.0875V9.29133H17.1205C17.6021 9.29133 17.9231 9.29133 18.1906 9.45242C18.4581 9.61352 18.6186 9.88201 18.6186 10.3116C18.6186 10.9023 18.2441 11.2245 17.9766 11.3319C18.2441 11.3856 18.4046 11.5467 18.5116 11.6541ZM20.1166 13.0502H19.2071V9.23763H20.1166V13.0502ZM30.6565 13.0502H29.3724L27.6604 10.2042V13.0502H25.8413L25.5203 12.2447H23.6478L23.3267 13.1039H22.3102C21.8822 13.1039 21.3472 12.9965 21.0262 12.6743C20.7052 12.3521 20.5447 11.9225 20.5447 11.2245C20.5447 10.6875 20.6517 10.1505 21.0262 9.72091C21.2937 9.39872 21.7752 9.29133 22.3637 9.29133H23.2197V10.0968H22.3637C22.0427 10.0968 21.8822 10.1505 21.6682 10.3116C21.5077 10.4727 21.4007 10.7949 21.4007 11.1708C21.4007 11.6004 21.4542 11.8688 21.6682 12.0836C21.8287 12.2447 22.0427 12.2984 22.3102 12.2984H22.6847L23.9153 9.34502H25.2528L26.7509 12.9428V9.34502H28.0884L29.6399 11.9762V9.34502H30.5495V13.0502H30.6565Z"
                  fill="#0571C1" />
                <path d="M23.9688 11.4406H25.1993L24.6108 9.93701L23.9688 11.4406Z" fill="#228FE0" />
                <path d="M14.8735 19.1716V16.1108L13.4824 17.6144L14.8735 19.1716Z" fill="#228FE0" />
                <path
                  d="M9.14844 16.4868V17.1849H11.128V17.9367H9.14844V18.7421H11.342L12.3585 17.6145L11.3955 16.4868H9.14844Z"
                  fill="#2FABF7" />
                <path
                  d="M16.9067 16.4873H15.7832V17.4539H16.9602C17.2813 17.4539 17.4953 17.2928 17.4953 16.9706C17.4418 16.6484 17.2278 16.4873 16.9067 16.4873Z"
                  fill="#228FE0" />
                <path
                  d="M33.4374 17.4003V14.9839H32.7953H31.1903C30.7088 14.9839 30.3343 15.0913 30.0668 15.3061V14.9839H27.6057C27.2312 14.9839 26.7497 15.0913 26.5356 15.3061V14.9839H22.202V15.3061C21.881 15.0376 21.2925 14.9839 21.025 14.9839H18.1359V15.3061C17.8684 15.0376 17.2264 14.9839 16.9053 14.9839H13.6952L12.9462 15.7894L12.2507 14.9839H7.43555V20.2463H12.1437L12.8927 19.4408L13.5882 20.2463H16.4773V19.0113H16.8518C17.2264 19.0113 17.7079 19.0113 18.0824 18.8502V20.3H20.49V18.9039H20.597C20.7575 18.9039 20.7575 18.9039 20.7575 19.065V20.3H28.0337C28.5152 20.3 28.9967 20.1926 29.2642 19.9778V20.3H31.5648C32.0463 20.3 32.5278 20.2463 32.8488 20.0315C33.3839 19.7093 33.7049 19.1187 33.7049 18.4206C33.7049 18.0447 33.5979 17.6688 33.4374 17.4003ZM16.8518 18.2595H15.7818V19.5482H14.0698L12.9997 18.3132L11.8762 19.5482H8.34508V15.7357H11.9297L12.9997 16.9707L14.1233 15.7357H16.9588C17.6544 15.7357 18.4569 15.9505 18.4569 16.9707C18.4034 18.0447 17.6544 18.2595 16.8518 18.2595ZM22.202 18.0447C22.309 18.2058 22.3625 18.4206 22.3625 18.7428V19.4945H21.453V19.0113C21.453 18.7965 21.453 18.4206 21.2925 18.2595C21.1855 18.0984 20.9715 18.0984 20.6505 18.0984H19.6874V19.4945H18.7779V15.682H20.811C21.239 15.682 21.6135 15.682 21.881 15.8431C22.1485 16.0042 22.3625 16.2726 22.3625 16.7022C22.3625 17.2929 21.988 17.6151 21.7205 17.7225C21.988 17.8299 22.1485 17.9373 22.202 18.0447ZM25.8936 16.4874H23.8071V17.1855H25.8401V17.9373H23.8071V18.6891H25.8936V19.4945H22.8975V15.682H25.8936V16.4874ZM28.1407 19.4945H26.4286V18.6891H28.1407C28.3012 18.6891 28.4082 18.6891 28.5152 18.5817C28.5687 18.528 28.6222 18.4206 28.6222 18.3132C28.6222 18.2058 28.5687 18.0984 28.5152 18.0447C28.4617 17.991 28.3547 17.9373 28.1942 17.9373C27.3382 17.8836 26.3216 17.9373 26.3216 16.7559C26.3216 16.2189 26.6426 15.6283 27.6057 15.6283H29.3712V16.5411H27.7127C27.5522 16.5411 27.4452 16.5411 27.3382 16.5948C27.2312 16.6485 27.2312 16.7559 27.2312 16.8633C27.2312 17.0244 27.3382 17.0781 27.4452 17.1318C27.5522 17.1855 27.6592 17.1855 27.7662 17.1855H28.2477C28.7292 17.1855 29.0502 17.2929 29.2642 17.5077C29.4247 17.6688 29.5317 17.9373 29.5317 18.3132C29.5317 19.1187 29.0502 19.4945 28.1407 19.4945ZM32.7418 19.1187C32.5278 19.3334 32.1533 19.4945 31.6183 19.4945H29.9063V18.6891H31.6183C31.7788 18.6891 31.8858 18.6891 31.9928 18.5817C32.0463 18.528 32.0998 18.4206 32.0998 18.3132C32.0998 18.2058 32.0463 18.0984 31.9928 18.0447C31.9393 17.991 31.8323 17.9373 31.6718 17.9373C30.8158 17.8836 29.7993 17.9373 29.7993 16.7559C29.7993 16.2189 30.1203 15.6283 31.0833 15.6283H32.8488V16.5411H31.2438C31.0833 16.5411 30.9763 16.5411 30.8693 16.5948C30.7623 16.6485 30.7623 16.7559 30.7623 16.8633C30.7623 17.0244 30.8158 17.0781 30.9763 17.1318C31.0833 17.1855 31.1903 17.1855 31.2973 17.1855H31.7788C32.2603 17.1855 32.5813 17.2929 32.7953 17.5077C32.8488 17.5077 32.8488 17.5614 32.8488 17.5614C33.0094 17.7762 33.0629 18.0447 33.0629 18.3132C33.0629 18.6354 32.9559 18.9039 32.7418 19.1187Z"
                  fill="#0571C1" />
                <path
                  d="M21.2402 16.5947C21.1332 16.541 20.9727 16.541 20.8122 16.541H19.7422V17.4002H20.8122C20.9727 17.4002 21.1332 17.4002 21.2402 17.3465C21.3472 17.2928 21.4007 17.1317 21.4007 16.9706C21.4542 16.7558 21.3472 16.6484 21.2402 16.5947Z"
                  fill="#228FE0" />
                <path
                  d="M17.4942 10.1514C17.3871 10.0977 17.2266 10.0977 17.0661 10.0977H15.9961V10.9568H17.0661C17.2266 10.9568 17.3871 10.9568 17.4942 10.9031C17.6012 10.8494 17.6547 10.6883 17.6547 10.5272C17.7082 10.3124 17.6012 10.2051 17.4942 10.1514Z"
                  fill="#228FE0" />
                <path d="M23.9688 11.4406H25.1993L24.6108 9.93701L23.9688 11.4406Z" fill="#228FE0" />
                <path d="M14.8735 19.1716V16.1108L13.4824 17.6144L14.8735 19.1716Z" fill="#228FE0" />
                <path
                  d="M16.9067 16.4873H15.7832V17.4539H16.9602C17.2813 17.4539 17.4953 17.2928 17.4953 16.9706C17.4418 16.6484 17.2278 16.4873 16.9067 16.4873Z"
                  fill="#228FE0" />
                <path
                  d="M21.2402 16.5947C21.1332 16.541 20.9727 16.541 20.8122 16.541H19.7422V17.4002H20.8122C20.9727 17.4002 21.1332 17.4002 21.2402 17.3465C21.3472 17.2928 21.4007 17.1317 21.4007 16.9706C21.4542 16.7558 21.3472 16.6484 21.2402 16.5947Z"
                  fill="#228FE0" />
                <path
                  d="M16.5308 19.3871L15.7818 18.5817V19.4945H14.0163L12.9462 18.2595L11.7692 19.4945H8.23807V15.7357H11.8227L12.9462 16.9707L13.4812 16.3263L12.1437 14.9839H7.43555V20.2463H12.1437L12.9462 19.4408L13.6417 20.2463H16.5308V19.3871Z"
                  fill="#2FABF7" />
                <path
                  d="M10.9678 13.802L10.2723 13.0502H9.95131V12.728L9.14879 11.9225L8.61377 13.0502H7.86475L6.58071 10.0968V13.0502H4.76165L4.38714 12.2447H2.56808L2.19357 13.0502H1.23054L2.83559 9.29133H4.17313L5.67118 12.8891V9.29133H6.4737L5.72468 8.53955H4.92216V9.18393L4.65465 8.53955H2.30057L1.23054 11.0634L0 13.802H1.23054H2.78209L3.1031 12.9965H3.85212L4.22663 13.802H7.22273V13.1576L7.49024 13.802H9.04179L9.30929 13.1576V13.802H10.9678Z"
                  fill="#2FABF7" />
                <path d="M8.50447 11.3309L7.64844 10.4717L8.29046 11.8678L8.50447 11.3309Z" fill="#2FABF7" />
                <path
                  d="M32.8507 19.9773C33.3322 19.6551 33.6532 19.1181 33.7067 18.5274L32.9577 17.7757C33.0112 17.9368 33.0647 18.0979 33.0647 18.3127C33.0647 18.6348 32.9577 18.9033 32.7437 19.1181C32.5297 19.3329 32.1552 19.494 31.6202 19.494H29.9081V18.6885H31.6202C31.7807 18.6885 31.8877 18.6885 31.9947 18.5811C32.0482 18.5274 32.1017 18.42 32.1017 18.3127C32.1017 18.2053 32.0482 18.0979 31.9947 18.0442C31.9412 17.9905 31.8342 17.9368 31.6737 17.9368C30.8176 17.8831 29.8011 17.9368 29.8011 16.7554C29.8011 16.2184 30.1221 15.7351 30.9246 15.6277L30.3361 15.0371C30.2291 15.0908 30.1756 15.1445 30.1221 15.1445V14.8223H27.661C27.2865 14.8223 26.805 14.9297 26.591 15.1445V14.8223H22.2039V15.1445C21.8829 14.876 21.2943 14.8223 21.0268 14.8223H18.1378V15.1445C17.8702 14.876 17.2282 14.8223 16.9072 14.8223H13.6971L12.9481 15.6277L12.2526 14.8223H11.6641L13.2691 16.4332L14.0716 15.574H16.9072C17.6027 15.574 18.4053 15.7888 18.4053 16.8091C18.4053 17.8831 17.6562 18.0979 16.8537 18.0979H15.7837V18.9033L16.5862 19.7088V18.9033H16.8537C17.2282 18.9033 17.7097 18.9033 18.0843 18.7422V20.1921H20.4918V18.7959H20.5988C20.7593 18.7959 20.7593 18.7959 20.7593 18.957V20.1921H28.0356C28.5171 20.1921 28.9986 20.0847 29.2661 19.8699V20.1921H31.5667C31.9947 20.2458 32.4762 20.1921 32.8507 19.9773ZM22.2039 18.0442C22.3109 18.2053 22.3644 18.42 22.3644 18.7422V19.494H21.4549V19.0107C21.4549 18.7959 21.4549 18.42 21.2943 18.259C21.1873 18.0979 20.9733 18.0979 20.6523 18.0979H19.6893V19.494H18.7798V15.6814H20.8128C21.2408 15.6814 21.6154 15.6814 21.8829 15.8425C22.1504 16.0036 22.3644 16.2721 22.3644 16.7017C22.3644 17.2924 21.9899 17.6146 21.7224 17.722C21.9899 17.8294 22.1504 17.9368 22.2039 18.0442ZM25.8955 16.4869H23.8089V17.185H25.842V17.9368H23.8089V18.6885H25.8955V19.494H22.8994V15.6814H25.8955V16.4869ZM28.1426 19.494H26.4305V18.6885H28.1426C28.3031 18.6885 28.4101 18.6885 28.5171 18.5811C28.5706 18.5274 28.6241 18.42 28.6241 18.3127C28.6241 18.2053 28.5706 18.0979 28.5171 18.0442C28.4636 17.9905 28.3566 17.9368 28.1961 17.9368C27.34 17.8831 26.3235 17.9368 26.3235 16.7554C26.3235 16.2184 26.6445 15.6277 27.6075 15.6277H29.3731V16.5406H27.7145C27.554 16.5406 27.447 16.5406 27.34 16.5943C27.233 16.648 27.233 16.7554 27.233 16.8628C27.233 17.0239 27.34 17.0776 27.447 17.1313C27.554 17.185 27.661 17.185 27.768 17.185H28.2496C28.7311 17.185 29.0521 17.2924 29.2661 17.5072C29.4266 17.6683 29.5336 17.9368 29.5336 18.3127C29.5336 19.1181 29.0521 19.494 28.1426 19.494Z"
                  fill="#228FE0" />
                <path
                  d="M30.7109 16.8632C30.7109 17.0243 30.7644 17.078 30.9249 17.1317C31.0319 17.1854 31.139 17.1854 31.246 17.1854H31.7275C32.0485 17.1854 32.2625 17.2391 32.4765 17.3465L31.674 16.541H31.1925C31.0319 16.541 30.9249 16.541 30.8179 16.5947C30.7644 16.6484 30.7109 16.7558 30.7109 16.8632Z"
                  fill="#228FE0" />
                <path d="M28.8398 13.6431L28.9465 13.8042H28.9998L28.8398 13.6431Z" fill="#228FE0" />
                <path d="M25.8965 10.6895L26.806 12.8911V11.6023L25.8965 10.6895Z" fill="#228FE0" />
                <path
                  d="M16.7462 12.461H16.8532C16.9602 12.461 16.9602 12.461 16.9602 12.6221V13.8035H20.8124V13.4813C21.1334 13.6424 21.6149 13.8035 22.2569 13.8035H23.862L24.183 12.9443H24.932L25.253 13.8035H28.3561V13.2665L27.6071 12.5147V13.1054H25.788L25.5205 12.2462H23.648L23.3269 13.1054H22.3104C21.8824 13.1054 21.3474 12.998 21.0264 12.6758C20.7054 12.3536 20.5449 11.924 20.5449 11.2259C20.5449 10.689 20.6519 10.152 21.0264 9.72239C21.2939 9.4002 21.7754 9.2928 22.3639 9.2928H23.2199V10.0983H22.3639C22.0429 10.0983 21.8824 10.152 21.6684 10.3131C21.5079 10.4742 21.4009 10.7964 21.4009 11.1722C21.4009 11.6018 21.4544 11.8703 21.6684 12.0851C21.8289 12.2462 22.0429 12.2999 22.3104 12.2999H22.6849L23.9155 9.3465H24.4505L23.7015 8.59473H22.3104C21.7219 8.59473 21.2404 8.70212 20.8124 8.91692V8.59473H18.4583V8.91692C18.1908 8.70212 17.8698 8.59473 17.4418 8.59473H8.82799L8.23947 9.93718L7.65095 8.59473H5.29688L6.0459 9.3465H7.11593L8.02546 11.3333L8.34647 11.6555L9.3095 9.2928H10.8075V13.1054H9.89802V10.152L8.98849 12.2999L10.54 13.8572H16.6927L16.7462 12.461ZM19.2073 9.2928H20.1168V13.1054H19.2073V9.2928ZM14.4992 10.0983H12.4126V10.7964H14.4457V11.5481H12.4126V12.2999H14.4992V13.1054H11.5031V9.2928H14.4992V10.0983ZM15.9972 13.0517H15.0877V9.23911H17.1207C17.6023 9.23911 17.9233 9.23911 18.1908 9.4002C18.4583 9.5613 18.6188 9.82979 18.6188 10.2594C18.6188 10.8501 18.2443 11.1722 17.9768 11.2796C18.1908 11.3333 18.3513 11.4944 18.4048 11.6018C18.5118 11.8166 18.5653 11.9777 18.5653 12.2999V13.0517H17.6558V12.5684C17.6558 12.3536 17.6558 12.0314 17.4953 11.8166C17.4418 11.7092 17.2813 11.7092 16.9602 11.7092H15.9972V13.0517Z"
                  fill="#228FE0" />
              </g>
              <defs>
                <clipPath id="clip0_2598_6265">
                  <rect width="33.7052" height="28" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="ms-3">
            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2598_6225)">
                <path
                  d="M28.087 13.9986C28.087 18.6209 24.342 22.3986 19.6607 22.3986C15.024 22.3986 11.2344 18.6209 11.2344 13.9986C11.2344 9.37641 14.9794 5.59863 19.6161 5.59863C24.342 5.59863 28.087 9.37641 28.087 13.9986Z"
                  fill="#FFB600" />
                <path
                  d="M19.6607 5.59863C24.2974 5.59863 28.087 9.37641 28.087 13.9986C28.087 18.6209 24.342 22.3986 19.6607 22.3986C15.024 22.3986 11.2344 18.6209 11.2344 13.9986"
                  fill="#F7981D" />
                <path
                  d="M19.6602 5.59863C24.2968 5.59863 28.0865 9.37641 28.0865 13.9986C28.0865 18.6209 24.3414 22.3986 19.6602 22.3986"
                  fill="#FF8500" />
                <path
                  d="M8.33713 5.59863C3.74502 5.64308 0 9.37641 0 13.9986C0 18.6209 3.74502 22.3986 8.4263 22.3986C10.6109 22.3986 12.5726 21.5542 14.0884 20.2209C14.4005 19.9542 14.668 19.6431 14.9355 19.332H13.1967C12.9738 19.0653 12.7509 18.7542 12.5726 18.4875H15.5597C15.738 18.2209 15.9163 17.9097 16.0501 17.5986H12.0821C11.9484 17.332 11.8146 17.0209 11.7255 16.7097H16.3622C16.6297 15.8653 16.808 14.9764 16.808 14.0431C16.808 13.4209 16.7188 12.8431 16.6297 12.2653H11.458C11.5026 11.9542 11.5917 11.6875 11.6809 11.3764H16.3176C16.2284 11.0653 16.0947 10.7542 15.9609 10.4875H12.0376C12.1713 10.1764 12.3497 9.90974 12.528 9.59863H15.5151C15.3367 9.28752 15.1138 8.97641 14.8463 8.70974H13.1967C13.4642 8.39863 13.7317 8.13197 14.0438 7.8653C12.5726 6.48752 10.5663 5.68752 8.38171 5.68752C8.38171 5.59863 8.38171 5.59863 8.33713 5.59863Z"
                  fill="#FF5050" />
                <path
                  d="M0 13.9991C0 18.6213 3.74502 22.3991 8.4263 22.3991C10.6109 22.3991 12.5726 21.5547 14.0884 20.2213C14.4005 19.9547 14.668 19.6435 14.9355 19.3324H13.1967C12.9738 19.0658 12.7509 18.7547 12.5726 18.488H15.5597C15.738 18.2213 15.9163 17.9102 16.0501 17.5991H12.0821C11.9484 17.3324 11.8146 17.0213 11.7255 16.7102H16.3622C16.6297 15.8658 16.808 14.9769 16.808 14.0435C16.808 13.4213 16.7188 12.8435 16.6297 12.2658H11.458C11.5026 11.9547 11.5917 11.688 11.6809 11.3769H16.3176C16.2284 11.0658 16.0947 10.7547 15.9609 10.488H12.0376C12.1713 10.1769 12.3497 9.91021 12.528 9.5991H15.5151C15.3367 9.28799 15.1138 8.97688 14.8463 8.71021H13.1967C13.4642 8.3991 13.7317 8.13243 14.0438 7.86577C12.5726 6.48799 10.5663 5.68799 8.38171 5.68799H8.33713"
                  fill="#E52836" />
                <path
                  d="M8.42683 22.3998C10.6114 22.3998 12.5731 21.5553 14.0889 20.222C14.401 19.9553 14.6685 19.6442 14.936 19.3331H13.1973C12.9744 19.0664 12.7514 18.7553 12.5731 18.4886H15.5602C15.7385 18.222 15.9169 17.9109 16.0506 17.5998H12.0827C11.9489 17.3331 11.8152 17.022 11.726 16.7109H16.3627C16.6302 15.8664 16.8085 14.9775 16.8085 14.0442C16.8085 13.422 16.7194 12.8442 16.6302 12.2664H11.4585C11.5031 11.9553 11.5923 11.6886 11.6814 11.3775H16.3181C16.229 11.0664 16.0952 10.7553 15.9615 10.4886H12.0381C12.1719 10.1775 12.3502 9.91086 12.5285 9.59975H15.5156C15.3373 9.28864 15.1144 8.97753 14.8469 8.71086H13.1973C13.4648 8.39975 13.7323 8.13308 14.0444 7.86642C12.5731 6.48864 10.6003 5.61084 8.41568 5.61084H8.37109"
                  fill="#CB2026" />
                <path
                  d="M11.414 16.1333L11.5478 15.3777C11.5032 15.3777 11.414 15.4222 11.3249 15.4222C11.0128 15.4222 10.9682 15.2444 11.0128 15.1555L11.2803 13.5999H11.7707L11.9044 12.7555H11.4586L11.5478 12.2222H10.6561C10.6561 12.2222 10.1211 15.1555 10.1211 15.5111C10.1211 16.0444 10.4332 16.2666 10.8344 16.2666C11.1019 16.2666 11.3249 16.1777 11.414 16.1333Z"
                  fill="white" />
                <path
                  d="M11.7266 14.7107C11.7266 15.9551 12.5737 16.2662 13.287 16.2662C13.9557 16.2662 14.2232 16.1329 14.2232 16.1329L14.4016 15.2885C14.4016 15.2885 13.9112 15.5107 13.4653 15.5107C12.4845 15.5107 12.6628 14.7996 12.6628 14.7996H14.4907C14.4907 14.7996 14.6245 14.2218 14.6245 13.9996C14.6245 13.4218 14.3124 12.7107 13.3316 12.7107C12.3953 12.6218 11.7266 13.5996 11.7266 14.7107ZM13.287 13.4218C13.7774 13.4218 13.6882 13.9996 13.6882 14.044H12.7074C12.7074 13.9996 12.7966 13.4218 13.287 13.4218Z"
                  fill="white" />
                <path
                  d="M18.9482 16.1324L19.1265 15.1546C19.1265 15.1546 18.6807 15.3769 18.3686 15.3769C17.7444 15.3769 17.4769 14.888 17.4769 14.3546C17.4769 13.288 18.0119 12.7102 18.6361 12.7102C19.0819 12.7102 19.4386 12.9768 19.4386 12.9768L19.5724 12.0435C19.5724 12.0435 19.0374 11.8213 18.5469 11.8213C17.5215 11.8213 16.4961 12.7102 16.4961 14.3991C16.4961 15.5102 17.0311 16.2657 18.1011 16.2657C18.4578 16.2657 18.9482 16.1324 18.9482 16.1324Z"
                  fill="white" />
                <path
                  d="M6.51059 12.6211C5.88642 12.6211 5.44058 12.7989 5.44058 12.7989L5.30683 13.5544C5.30683 13.5544 5.70808 13.3767 6.28767 13.3767C6.59976 13.3767 6.86726 13.4211 6.86726 13.6878C6.86726 13.8655 6.82267 13.91 6.82267 13.91C6.82267 13.91 6.55517 13.91 6.42142 13.91C5.6635 13.91 4.81641 14.2211 4.81641 15.2433C4.81641 16.0433 5.35141 16.2211 5.6635 16.2211C6.28767 16.2211 6.55517 15.8211 6.59975 15.8211L6.55517 16.1767H7.35768L7.71435 13.7322C7.71435 12.6655 6.82267 12.6211 6.51059 12.6211ZM6.68892 14.6211C6.68892 14.7544 6.59976 15.4656 6.06475 15.4656C5.79725 15.4656 5.70808 15.2433 5.70808 15.11C5.70808 14.8878 5.84183 14.5767 6.51059 14.5767C6.64434 14.6211 6.68892 14.6211 6.68892 14.6211Z"
                  fill="white" />
                <path
                  d="M8.56058 16.2216C8.7835 16.2216 9.89809 16.266 9.89809 15.066C9.89809 13.9549 8.82808 14.1771 8.82808 13.7327C8.82808 13.5105 9.00641 13.4216 9.3185 13.4216C9.45225 13.4216 9.94267 13.466 9.94267 13.466L10.0764 12.666C10.0764 12.666 9.76434 12.5771 9.22933 12.5771C8.56058 12.5771 7.89183 12.8438 7.89183 13.7327C7.89183 14.7549 9.00642 14.666 9.00642 15.066C9.00642 15.3327 8.69433 15.3771 8.47141 15.3771C8.07016 15.3771 7.66891 15.2438 7.66891 15.2438L7.53516 16.0438C7.57974 16.1327 7.80266 16.2216 8.56058 16.2216Z"
                  fill="white" />
                <path
                  d="M26.3499 11.9106L26.1715 13.1106C26.1715 13.1106 25.8149 12.6662 25.3244 12.6662C24.5219 12.6662 23.8086 13.644 23.8086 14.7995C23.8086 15.5106 24.1653 16.2662 24.9232 16.2662C25.4582 16.2662 25.7703 15.9106 25.7703 15.9106L25.7257 16.2218H26.6174L27.2861 11.9551L26.3499 11.9106ZM25.9486 14.2662C25.9486 14.7551 25.7257 15.3773 25.2353 15.3773C24.9232 15.3773 24.7448 15.1106 24.7448 14.6662C24.7448 13.9551 25.0569 13.5106 25.4582 13.5106C25.7703 13.5106 25.9486 13.7329 25.9486 14.2662Z"
                  fill="white" />
                <path
                  d="M1.64982 16.1773L2.18483 12.9773L2.27399 16.1773H2.89816L4.05734 12.9773L3.56692 16.1773H4.50317L5.21651 11.9106H3.74525L2.85358 14.5329L2.809 11.9106H1.51607L0.802734 16.1773H1.64982Z"
                  fill="white" />
                <path
                  d="M15.4711 16.1766C15.7386 14.71 15.7832 13.51 16.4073 13.7322C16.4965 13.1544 16.6302 12.9322 16.7194 12.71C16.7194 12.71 16.6748 12.71 16.5411 12.71C16.1398 12.71 15.8277 13.2433 15.8277 13.2433L15.9169 12.7544H15.0698L14.4902 16.2211H15.4711V16.1766Z"
                  fill="white" />
                <path
                  d="M20.9989 12.6211C20.3747 12.6211 19.9289 12.7989 19.9289 12.7989L19.7951 13.5544C19.7951 13.5544 20.1964 13.3767 20.7759 13.3767C21.088 13.3767 21.3555 13.4211 21.3555 13.6878C21.3555 13.8655 21.311 13.91 21.311 13.91C21.311 13.91 21.0435 13.91 20.9097 13.91C20.1518 13.91 19.3047 14.2211 19.3047 15.2433C19.3047 16.0433 19.8397 16.2211 20.1518 16.2211C20.7759 16.2211 21.0434 15.8211 21.088 15.8211L21.0434 16.1767H21.846L22.2026 13.7322C22.2472 12.6655 21.311 12.6211 20.9989 12.6211ZM21.2218 14.6211C21.2218 14.7544 21.1326 15.4656 20.5976 15.4656C20.3301 15.4656 20.2409 15.2433 20.2409 15.11C20.2409 14.8878 20.3747 14.5767 21.0434 14.5767C21.1772 14.6211 21.1772 14.6211 21.2218 14.6211Z"
                  fill="white" />
                <path
                  d="M22.9613 16.1766C23.2288 14.71 23.2734 13.51 23.8976 13.7322C23.9867 13.1544 24.1205 12.9322 24.2096 12.71C24.2096 12.71 24.1651 12.71 24.0313 12.71C23.6301 12.71 23.318 13.2433 23.318 13.2433L23.4071 12.7544H22.5601L21.9805 16.2211H22.9613V16.1766Z"
                  fill="white" />
                <path
                  d="M10.0312 15.5111C10.0312 16.0444 10.3433 16.2666 10.7446 16.2666C11.0567 16.2666 11.3242 16.1777 11.4133 16.1333L11.5471 15.3777C11.5025 15.3777 11.4133 15.4222 11.3242 15.4222C11.0121 15.4222 10.9675 15.2444 11.0121 15.1555L11.2796 13.5999H11.77L11.9038 12.7555H11.4579L11.5471 12.2222"
                  fill="#DCE5E5" />
                <path
                  d="M12.1719 14.7107C12.1719 15.9551 12.5731 16.2662 13.2865 16.2662C13.9552 16.2662 14.2227 16.1329 14.2227 16.1329L14.4011 15.2885C14.4011 15.2885 13.9106 15.5107 13.4648 15.5107C12.484 15.5107 12.6623 14.7996 12.6623 14.7996H14.4902C14.4902 14.7996 14.624 14.2218 14.624 13.9996C14.624 13.4218 14.3119 12.7107 13.331 12.7107C12.3948 12.6218 12.1719 13.5996 12.1719 14.7107ZM13.2865 13.4218C13.7769 13.4218 13.8661 13.9996 13.8661 14.044H12.7069C12.7069 13.9996 12.796 13.4218 13.2865 13.4218Z"
                  fill="#DCE5E5" />
                <path
                  d="M18.9496 16.1324L19.128 15.1546C19.128 15.1546 18.6821 15.3769 18.37 15.3769C17.7459 15.3769 17.4784 14.888 17.4784 14.3546C17.4784 13.288 18.0134 12.7102 18.6375 12.7102C19.0834 12.7102 19.44 12.9768 19.44 12.9768L19.5738 12.0435C19.5738 12.0435 19.0388 11.8213 18.5484 11.8213C17.5229 11.8213 16.9434 12.7102 16.9434 14.3991C16.9434 15.5102 17.0325 16.2657 18.1025 16.2657C18.4592 16.2657 18.9496 16.1324 18.9496 16.1324Z"
                  fill="#DCE5E5" />
                <path
                  d="M5.30683 13.5989C5.30683 13.5989 5.70808 13.4211 6.28767 13.4211C6.59976 13.4211 6.86726 13.4655 6.86726 13.7322C6.86726 13.91 6.82267 13.9544 6.82267 13.9544C6.82267 13.9544 6.55517 13.9544 6.42142 13.9544C5.6635 13.9544 4.81641 14.2655 4.81641 15.2878C4.81641 16.0878 5.35141 16.2655 5.6635 16.2655C6.28767 16.2655 6.55517 15.8655 6.59975 15.8655L6.55517 16.2211H7.35768L7.71435 13.7766C7.71435 12.7544 6.82267 12.71 6.466 12.71L5.30683 13.5989ZM7.13476 14.6211C7.13476 14.7544 6.59976 15.4655 6.06475 15.4655C5.79725 15.4655 5.70808 15.2433 5.70808 15.11C5.70808 14.8878 5.84183 14.5766 6.51059 14.5766C6.64434 14.6211 7.13476 14.6211 7.13476 14.6211Z"
                  fill="#DCE5E5" />
                <path
                  d="M7.58008 16.1327C7.58008 16.1327 7.84758 16.2216 8.6055 16.2216C8.82842 16.2216 9.94301 16.266 9.94301 15.066C9.94301 13.9549 8.873 14.1771 8.873 13.7327C8.873 13.5105 9.05134 13.4216 9.36342 13.4216C9.49717 13.4216 9.98759 13.466 9.98759 13.466L10.1213 12.666C10.1213 12.666 9.80926 12.5771 9.27425 12.5771C8.6055 12.5771 8.38258 12.8438 8.38258 13.7327C8.38258 14.7549 9.05134 14.666 9.05134 15.066C9.05134 15.3327 8.73925 15.3771 8.51633 15.3771"
                  fill="#DCE5E5" />
                <path
                  d="M26.1703 13.1097C26.1703 13.1097 25.8136 12.6652 25.3232 12.6652C24.5207 12.6652 24.2532 13.643 24.2532 14.7986C24.2532 15.5097 24.1641 16.2652 24.922 16.2652C25.457 16.2652 25.7691 15.9097 25.7691 15.9097L25.7245 16.2208H26.6161L27.2849 11.9541L26.1703 13.1097ZM26.1257 14.2652C26.1257 14.7541 25.7245 15.3763 25.2341 15.3763C24.922 15.3763 24.7436 15.1097 24.7436 14.6652C24.7436 13.9541 25.0557 13.5097 25.457 13.5097C25.7691 13.5097 26.1257 13.7319 26.1257 14.2652Z"
                  fill="#DCE5E5" />
                <path
                  d="M1.64982 16.1773L2.18483 12.9773L2.27399 16.1773H2.89816L4.05734 12.9773L3.56692 16.1773H4.50317L5.21651 11.9106H4.10192L2.85358 14.5329L2.809 11.9106H2.31858L0.802734 16.1773H1.64982Z"
                  fill="#DCE5E5" />
                <path
                  d="M14.5352 16.1766H15.4714C15.7389 14.71 15.7835 13.51 16.4077 13.7322C16.4968 13.1544 16.6306 12.9322 16.7198 12.71C16.7198 12.71 16.6752 12.71 16.5414 12.71C16.1402 12.71 15.8281 13.2433 15.8281 13.2433L15.9172 12.7544"
                  fill="#DCE5E5" />
                <path
                  d="M19.7951 13.5989C19.7951 13.5989 20.1964 13.4211 20.7759 13.4211C21.088 13.4211 21.3555 13.4655 21.3555 13.7322C21.3555 13.91 21.3109 13.9544 21.3109 13.9544C21.3109 13.9544 21.0434 13.9544 20.9097 13.9544C20.1518 13.9544 19.3047 14.2655 19.3047 15.2878C19.3047 16.0878 19.8397 16.2655 20.1518 16.2655C20.7759 16.2655 21.0434 15.8655 21.088 15.8655L21.0434 16.2211H21.846L22.2026 13.7766C22.2026 12.7544 21.3109 12.71 20.9543 12.71L19.7951 13.5989ZM21.623 14.6211C21.623 14.7544 21.088 15.4655 20.553 15.4655C20.2855 15.4655 20.1964 15.2433 20.1964 15.11C20.1964 14.8878 20.3301 14.5766 20.9989 14.5766C21.1772 14.6211 21.623 14.6211 21.623 14.6211Z"
                  fill="#DCE5E5" />
                <path
                  d="M22.0234 16.1766H22.9597C23.2272 14.71 23.2718 13.51 23.8959 13.7322C23.9851 13.1544 24.1189 12.9322 24.208 12.71C24.208 12.71 24.1634 12.71 24.0297 12.71C23.6284 12.71 23.3164 13.2433 23.3164 13.2433L23.4055 12.7544"
                  fill="#DCE5E5" />
              </g>
              <defs>
                <clipPath id="clip0_2598_6225">
                  <rect width="28.0877" height="28" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="ms-3">
            <svg width="40" height="28" viewBox="0 0 40 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2598_6254)">
                <path
                  d="M30.3979 12.3062H28.2758C28.1509 12.3062 28.0261 12.4306 27.9637 12.555L27.0898 18.0306C27.0898 18.155 27.1523 18.2172 27.2771 18.2172H28.4006C28.5254 18.2172 28.5878 18.155 28.5878 18.0306L28.8375 16.475C28.8375 16.3506 28.9624 16.2261 29.1496 16.2261H29.8362C31.2718 16.2261 32.0832 15.5417 32.2705 14.1728C32.3953 13.6128 32.2705 13.115 32.0208 12.8039C31.6463 12.4928 31.0845 12.3062 30.3979 12.3062ZM30.6476 14.3595C30.5228 15.1061 29.961 15.1061 29.3993 15.1061H29.0248L29.2744 13.675C29.2744 13.6128 29.3369 13.5506 29.4617 13.5506H29.5865C29.961 13.5506 30.3355 13.5506 30.5228 13.7995C30.6476 13.8617 30.6476 14.0484 30.6476 14.3595Z"
                  fill="#139AD6" />
                <path
                  d="M15.1069 12.3062H12.9848C12.8599 12.3062 12.7351 12.4306 12.6727 12.555L11.7988 18.0306C11.7988 18.155 11.8612 18.2172 11.9861 18.2172H12.9848C13.1096 18.2172 13.2344 18.0928 13.2968 17.9683L13.5465 16.475C13.5465 16.3506 13.6713 16.2261 13.8586 16.2261H14.5452C15.9808 16.2261 16.7922 15.5417 16.9794 14.1728C17.1043 13.6128 16.9794 13.115 16.7298 12.8039C16.3553 12.4928 15.8559 12.3062 15.1069 12.3062ZM15.3566 14.3595C15.2318 15.1061 14.67 15.1061 14.1083 15.1061H13.7962L14.0458 13.675C14.0458 13.6128 14.1083 13.5506 14.2331 13.5506H14.3579C14.7324 13.5506 15.1069 13.5506 15.2942 13.7995C15.3566 13.8617 15.419 14.0484 15.3566 14.3595Z"
                  fill="#263B80" />
                <path
                  d="M21.5346 14.2968H20.536C20.4736 14.2968 20.3487 14.359 20.3487 14.4213L20.2863 14.7324L20.2239 14.6079C19.9742 14.2968 19.5373 14.1724 19.038 14.1724C17.9145 14.1724 16.9158 15.0435 16.7286 16.2257C16.6037 16.8479 16.791 17.4079 17.1031 17.7812C17.4151 18.1546 17.8521 18.279 18.4138 18.279C19.3501 18.279 19.8494 17.719 19.8494 17.719L19.787 18.0301C19.787 18.1546 19.8494 18.2168 19.9742 18.2168H20.9105C21.0353 18.2168 21.1601 18.0923 21.2225 17.9679L21.7843 14.4835C21.7219 14.4213 21.597 14.2968 21.5346 14.2968ZM20.0991 16.2879C19.9742 16.8479 19.5373 17.2835 18.9131 17.2835C18.6011 17.2835 18.3514 17.159 18.2266 17.0346C18.1017 16.8479 18.0393 16.599 18.0393 16.2879C18.1017 15.7279 18.6011 15.2924 19.1628 15.2924C19.4749 15.2924 19.6621 15.4168 19.8494 15.5412C20.0366 15.7279 20.0991 16.039 20.0991 16.2879Z"
                  fill="#263B80" />
                <path
                  d="M36.7632 14.2963H35.7645C35.7021 14.2963 35.5773 14.3585 35.5773 14.4208L35.5149 14.7319L35.4524 14.6074C35.2028 14.2963 34.7658 14.1719 34.2665 14.1719C33.143 14.1719 32.1443 15.043 31.9571 16.2252C31.8322 16.8474 32.0195 17.4074 32.3316 17.7807C32.6437 18.1541 33.0806 18.2785 33.6423 18.2785C34.5786 18.2785 35.0779 17.7185 35.0779 17.7185L35.0155 18.0296C35.0155 18.1541 35.0779 18.2163 35.2028 18.2163H36.139C36.2639 18.2163 36.3887 18.0919 36.4511 17.9674L37.0129 14.483C36.9504 14.4208 36.888 14.2963 36.7632 14.2963ZM35.3276 16.2874C35.2028 16.8474 34.7658 17.283 34.1417 17.283C33.8296 17.283 33.5799 17.1585 33.4551 17.0341C33.3302 16.8474 33.2678 16.5985 33.2678 16.2874C33.3302 15.7274 33.8296 15.2919 34.3913 15.2919C34.7034 15.2919 34.8907 15.4163 35.0779 15.5408C35.3276 15.7274 35.39 16.0385 35.3276 16.2874Z"
                  fill="#139AD6" />
                <path
                  d="M26.9624 14.2939H25.9013C25.7765 14.2939 25.714 14.3562 25.6516 14.4184L24.2784 16.534L23.6543 14.5428C23.5918 14.4184 23.5294 14.3562 23.3422 14.3562H22.3435C22.2187 14.3562 22.1562 14.4806 22.1562 14.6051L23.2798 17.9029L22.2187 19.3962C22.1562 19.5206 22.2187 19.7073 22.3435 19.7073H23.3422C23.467 19.7073 23.5294 19.6451 23.5918 19.5829L27.0248 14.6673C27.2121 14.4806 27.0872 14.2939 26.9624 14.2939Z"
                  fill="#263B80" />
                <path
                  d="M37.952 12.4916L37.0781 18.0916C37.0781 18.2161 37.1405 18.2783 37.2654 18.2783H38.1392C38.264 18.2783 38.3889 18.1538 38.4513 18.0294L39.3251 12.5538C39.3251 12.4294 39.2627 12.3672 39.1379 12.3672H38.1392C38.0768 12.305 38.0144 12.3672 37.952 12.4916Z"
                  fill="#139AD6" />
                <path
                  d="M7.17796 10.4386C6.74104 9.94078 5.92962 9.69189 4.80611 9.69189H1.68526C1.49801 9.69189 1.31076 9.87856 1.24834 10.0652L0 18.2163C0 18.403 0.124834 18.5274 0.249668 18.5274H2.1846L2.68393 15.4786V15.603C2.74635 15.4163 2.9336 15.2297 3.12085 15.2297H4.05711C5.8672 15.2297 7.24037 14.483 7.67729 12.4297C7.67729 12.3674 7.67729 12.3052 7.67729 12.243C7.61488 12.243 7.61488 12.243 7.67729 12.243C7.73971 11.4341 7.61488 10.9363 7.17796 10.4386Z"
                  fill="#263B80" />
                <path
                  d="M7.61362 12.2417C7.61362 12.3039 7.61362 12.3661 7.61362 12.4284C7.17671 14.5439 5.80353 15.2284 3.99344 15.2284H3.05718C2.86993 15.2284 2.68268 15.415 2.62026 15.6017L1.99609 19.3973C1.99609 19.5217 2.05851 19.6461 2.24576 19.6461H3.8686C4.05585 19.6461 4.24311 19.5217 4.24311 19.335V19.2728L4.55519 17.3439V17.2195C4.55519 17.0328 4.74244 16.9084 4.92969 16.9084H5.17936C6.73979 16.9084 7.98813 16.2861 8.30021 14.4195C8.42505 13.6728 8.36263 12.9884 7.98813 12.5528C7.92571 12.4284 7.80088 12.3039 7.61362 12.2417Z"
                  fill="#139AD6" />
                <path
                  d="M7.17762 12.0568C7.1152 12.0568 7.05278 11.9946 6.99037 11.9946C6.92795 11.9946 6.86553 11.9946 6.80312 11.9323C6.55345 11.8701 6.30378 11.8701 5.99169 11.8701H3.55743C3.49501 11.8701 3.4326 11.8701 3.37018 11.9323C3.24535 11.9946 3.18293 12.119 3.18293 12.2434L2.68359 15.479V15.6035C2.74601 15.4168 2.93326 15.2301 3.12051 15.2301H4.05677C5.86686 15.2301 7.24003 14.4835 7.67695 12.4301C7.67695 12.3679 7.67695 12.3057 7.73937 12.2434C7.61454 12.1812 7.55212 12.119 7.42729 12.119C7.24003 12.0568 7.24003 12.0568 7.17762 12.0568Z"
                  fill="#232C65" />
              </g>
              <defs>
                <clipPath id="clip0_2598_6254">
                  <rect width="39.3227" height="28" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="ms-3">
            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2598_6200)">
                <path d="M10.2969 18.022L11.7235 10.022H13.9527L12.5706 18.022H10.2969Z" fill="#3C58BF" />
                <path d="M10.2969 18.022L12.1248 10.022H13.9527L12.5706 18.022H10.2969Z" fill="#293688" />
                <path
                  d="M20.6416 10.1114C20.1958 9.93364 19.4824 9.75586 18.5908 9.75586C16.3616 9.75586 14.7566 10.867 14.7566 12.467C14.7566 13.667 15.8712 14.2892 16.7628 14.6892C17.6545 15.0892 17.922 15.3559 17.922 15.7114C17.922 16.2447 17.2087 16.5114 16.5845 16.5114C15.6928 16.5114 15.2024 16.3781 14.4445 16.067L14.1324 15.9336L13.8203 17.7559C14.3553 17.9781 15.3362 18.2003 16.3616 18.2003C18.7245 18.2003 20.2849 17.0892 20.2849 15.4003C20.2849 14.467 19.7053 13.7559 18.3678 13.1781C17.5653 12.7781 17.0749 12.5559 17.0749 12.1559C17.0749 11.8003 17.4762 11.4447 18.3678 11.4447C19.1258 11.4447 19.6608 11.5781 20.062 11.7559L20.2849 11.8447L20.6416 10.1114Z"
                  fill="#3C58BF" />
                <path
                  d="M20.6416 10.1114C20.1958 9.93364 19.4824 9.75586 18.5908 9.75586C16.3616 9.75586 15.1578 10.867 15.1578 12.467C15.1578 13.667 15.8712 14.2892 16.7628 14.6892C17.6545 15.0892 17.922 15.3559 17.922 15.7114C17.922 16.2447 17.2087 16.5114 16.5845 16.5114C15.6928 16.5114 15.2024 16.3781 14.4445 16.067L14.1324 15.9336L13.8203 17.7559C14.3553 17.9781 15.3362 18.2003 16.3616 18.2003C18.7245 18.2003 20.2849 17.0892 20.2849 15.4003C20.2849 14.467 19.7053 13.7559 18.3678 13.1781C17.5653 12.7781 17.0749 12.5559 17.0749 12.1559C17.0749 11.8003 17.4762 11.4447 18.3678 11.4447C19.1258 11.4447 19.6608 11.5781 20.062 11.7559L20.2849 11.8447L20.6416 10.1114Z"
                  fill="#293688" />
                <path
                  d="M24.4756 10.022C23.9406 10.022 23.5393 10.0664 23.3164 10.5998L19.9727 18.022H22.3802L22.826 16.6886H25.6793L25.9468 18.022H28.0868L26.2143 10.022H24.4756V10.022ZM23.4502 15.3553C23.5839 14.9553 24.3418 12.9998 24.3418 12.9998C24.3418 12.9998 24.5202 12.5109 24.6539 12.1998L24.7877 12.9553C24.7877 12.9553 25.2335 14.9553 25.3227 15.3998H23.4502V15.3553Z"
                  fill="#3C58BF" />
                <path
                  d="M25.0106 10.022C24.4756 10.022 24.0743 10.0664 23.8514 10.5998L19.9727 18.022H22.3802L22.826 16.6886H25.6793L25.9468 18.022H28.0868L26.2143 10.022H25.0106V10.022ZM23.4502 15.3553C23.6285 14.9109 24.3418 12.9998 24.3418 12.9998C24.3418 12.9998 24.5202 12.5109 24.6539 12.1998L24.7877 12.9553C24.7877 12.9553 25.2335 14.9553 25.3227 15.3998H23.4502V15.3553Z"
                  fill="#293688" />
                <path
                  d="M6.19924 15.623L5.97632 14.4674C5.57507 13.1341 4.28214 11.6674 2.85547 10.9563L4.86173 18.0674H7.26924L10.8805 10.0674H8.473L6.19924 15.623Z"
                  fill="#3C58BF" />
                <path
                  d="M6.19924 15.623L5.97632 14.4674C5.57507 13.1341 4.28214 11.6674 2.85547 10.9563L4.86173 18.0674H7.26924L10.8805 10.0674H8.91883L6.19924 15.623Z"
                  fill="#293688" />
                <path
                  d="M0 10.022L0.401252 10.1109C3.2546 10.7775 5.21628 12.4664 5.9742 14.4664L5.1717 10.6886C5.03794 10.1553 4.63669 10.022 4.14627 10.022H0V10.022Z"
                  fill="#FFBC00" />
                <path
                  d="M0 10.022C2.85335 10.6886 5.21628 12.422 5.9742 14.422L5.21628 11.2664C5.08253 10.7331 4.63669 10.422 4.14627 10.422L0 10.022Z"
                  fill="#F7981D" />
                <path
                  d="M0 10.022C2.85335 10.6886 5.21628 12.422 5.9742 14.422L5.4392 12.6886C5.30545 12.1553 5.12711 11.622 4.50294 11.3998L0 10.022Z"
                  fill="#ED7C00" />
              </g>
              <defs>
                <clipPath id="clip0_2598_6200">
                  <rect width="28.0877" height="28" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <!-- 右邊兩個 -->
        <div class="footer-second-right col-12  justify-content-center  col-lg-7 d-flex  flex-wrap align-items-center">
          <div class="row">
            <!-- 倒數第二行右邊apple store -->
            <div
              class="footer-second-right-one col-12 col-md-8  pe-lg-0 col-lg-8 d-flex justify-content-center align-items-center">
              <div class="size-120-22 text-black"><span>Get deliveries with FreshCart </span></div>
              <div>
                <svg width="140" height="40" viewBox="0 0 169 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2490_5158)">
                    <path
                      d="M167.564 44.1036C167.564 46.7469 165.429 48.9023 162.765 48.9023H5.89245C3.24909 48.9023 1.09375 46.7673 1.09375 44.1036V5.91735C1.09375 3.274 3.24909 1.11865 5.89245 1.11865H162.765C165.409 1.11865 167.564 3.274 167.564 5.91735V44.1036Z"
                      fill="white" />
                    <path
                      d="M162.79 50H5.91705C2.66369 50 0 47.3566 0 44.1033V5.91704C0 2.66369 2.64336 0 5.91705 0H162.79C166.043 0 168.707 2.64335 168.707 5.91704V44.1033C168.687 47.3566 166.043 50 162.79 50Z"
                      fill="black" />
                    <path
                      d="M167.564 44.1036C167.564 46.7469 165.429 48.9023 162.765 48.9023H5.89245C3.24909 48.9023 1.09375 46.7673 1.09375 44.1036V5.91735C1.09375 3.274 3.24909 1.11865 5.89245 1.11865H162.765C165.409 1.11865 167.564 3.274 167.564 5.91735V44.1036Z"
                      fill="black" />
                    <path
                      d="M37.6603 24.7462C37.6197 20.7202 40.9544 18.7478 41.117 18.6665C39.2261 15.9215 36.298 15.5352 35.261 15.5148C32.8007 15.2504 30.4217 16.9788 29.161 16.9788C27.88 16.9788 25.9483 15.5352 23.8743 15.5758C21.1903 15.6165 18.6893 17.1619 17.3269 19.5815C14.5005 24.4819 16.6153 31.7003 19.3195 35.6653C20.682 37.6173 22.2679 39.7727 24.342 39.6913C26.3753 39.61 27.1276 38.39 29.5879 38.39C32.0077 38.39 32.7396 39.6913 34.8544 39.6303C37.03 39.5896 38.4127 37.6783 39.714 35.7263C41.2797 33.5099 41.9101 31.3139 41.9303 31.192C41.8897 31.1716 37.7011 29.5653 37.6603 24.7462Z"
                      fill="white" />
                    <path
                      d="M33.6553 12.8913C34.7532 11.529 35.5055 9.65825 35.2819 7.7876C33.6959 7.8486 31.7236 8.88561 30.5849 10.2276C29.5682 11.4069 28.6736 13.3386 28.9175 15.1483C30.7069 15.2703 32.5165 14.2333 33.6553 12.8913Z"
                      fill="white" />
                    <path
                      d="M67.0982 39.3862H64.2515L62.7061 34.5062H57.2771L55.7927 39.3862H53.0273L58.375 22.7534H61.6894L67.0982 39.3862ZM62.2181 32.4524L60.8151 28.1011C60.6728 27.6538 60.3881 26.6167 59.9815 24.9698H59.9407C59.7781 25.6815 59.5138 26.7184 59.1477 28.1011L57.765 32.4524H62.2181Z"
                      fill="white" />
                    <path
                      d="M80.8458 33.2453C80.8458 35.2786 80.2967 36.9053 79.1784 38.0846C78.1821 39.142 76.9417 39.6706 75.4777 39.6706C73.8917 39.6706 72.7531 39.1012 72.0617 37.9626V44.266H69.3981V31.3542C69.3981 30.0732 69.3574 28.7515 69.2964 27.4095H71.6347L71.777 29.3209H71.8177C72.7124 27.8975 74.0544 27.1655 75.8641 27.1655C77.2875 27.1655 78.4667 27.7145 79.4021 28.8532C80.3578 29.9512 80.8458 31.4152 80.8458 33.2453ZM78.1211 33.3469C78.1211 32.1878 77.8567 31.2119 77.3281 30.4595C76.7588 29.6665 75.9861 29.2802 75.01 29.2802C74.3594 29.2802 73.7494 29.5038 73.2208 29.9309C72.6921 30.3782 72.326 30.9476 72.1633 31.6389C72.0821 31.9642 72.0414 32.2286 72.0414 32.4522V34.4449C72.0414 35.3193 72.3058 36.0512 72.8344 36.6612C73.3631 37.2712 74.0747 37.5559 74.9287 37.5559C75.925 37.5559 76.7181 37.1695 77.2671 36.397C77.8364 35.6243 78.1211 34.6076 78.1211 33.3469Z"
                      fill="white" />
                    <path
                      d="M94.635 33.2453C94.635 35.2786 94.0859 36.9053 92.9681 38.0846C91.9717 39.142 90.7315 39.6706 89.2674 39.6706C87.6813 39.6706 86.5426 39.1012 85.8513 37.9626V44.266H83.1876V31.3542C83.1876 30.0732 83.147 28.7515 83.0859 27.4095H85.4243L85.5666 29.3209H85.6073C86.502 27.8975 87.844 27.1655 89.6538 27.1655C91.077 27.1655 92.2565 27.7145 93.1913 28.8532C94.1681 29.9512 94.635 31.4152 94.635 33.2453ZM91.9306 33.3469C91.9306 32.1878 91.6663 31.2119 91.1377 30.4595C90.569 29.6665 89.7958 29.2802 88.82 29.2802C88.1693 29.2802 87.5593 29.5038 87.0307 29.9309C86.502 30.3782 86.1563 30.9476 85.9733 31.6389C85.892 31.9642 85.8513 32.2286 85.8513 32.4522V34.4449C85.8513 35.3193 86.1157 36.0512 86.6443 36.6612C87.173 37.2509 87.8847 37.5559 88.7387 37.5559C89.735 37.5559 90.5279 37.1695 91.077 36.397C91.6466 35.6243 91.9306 34.6076 91.9306 33.3469Z"
                      fill="white" />
                    <path
                      d="M110.065 34.7295C110.065 36.1528 109.578 37.2915 108.581 38.1862C107.504 39.1622 105.979 39.6503 104.047 39.6503C102.257 39.6503 100.814 39.3045 99.7358 38.6132L100.347 36.3969C101.505 37.0882 102.806 37.4338 104.189 37.4338C105.186 37.4338 105.979 37.2102 106.528 36.7628C107.077 36.3155 107.362 35.7055 107.362 34.9532C107.362 34.2822 107.138 33.7128 106.67 33.2452C106.202 32.7775 105.45 32.3505 104.372 31.9642C101.464 30.8865 100.001 29.2802 100.001 27.2061C100.001 25.8438 100.509 24.7254 101.546 23.8511C102.583 22.9768 103.946 22.5498 105.633 22.5498C107.138 22.5498 108.419 22.8141 109.415 23.3428L108.744 25.5185C107.809 25.0101 106.731 24.7458 105.552 24.7458C104.616 24.7458 103.864 24.9694 103.355 25.4371C102.908 25.8438 102.685 26.3521 102.685 26.9418C102.685 27.5925 102.949 28.1415 103.457 28.5685C103.905 28.9548 104.697 29.3818 105.877 29.8494C107.3 30.4188 108.357 31.0898 109.029 31.8625C109.74 32.6148 110.065 33.5705 110.065 34.7295Z"
                      fill="white" />
                    <path
                      d="M118.902 29.4021H115.953V35.2175C115.953 36.7018 116.461 37.4338 117.499 37.4338C117.966 37.4338 118.373 37.3932 118.678 37.3118L118.76 39.3451C118.23 39.5484 117.539 39.6501 116.686 39.6501C115.628 39.6501 114.815 39.3248 114.225 38.6945C113.636 38.0438 113.33 36.9661 113.33 35.4615V29.4021H111.582V27.4094H113.33V25.2134L115.953 24.4204V27.4094H118.902C118.902 27.3891 118.902 29.4021 118.902 29.4021Z"
                      fill="white" />
                    <path
                      d="M132.143 33.3062C132.143 35.1566 131.614 36.6612 130.557 37.8406C129.459 39.0606 127.995 39.6706 126.165 39.6706C124.396 39.6706 122.993 39.081 121.956 37.922C120.919 36.7629 120.39 35.2786 120.39 33.5095C120.39 31.6592 120.939 30.1342 122.017 28.9345C123.095 27.7552 124.559 27.1655 126.369 27.1655C128.137 27.1655 129.54 27.7552 130.618 28.9142C131.614 30.0326 132.143 31.4965 132.143 33.3062ZM129.378 33.3672C129.378 32.2692 129.134 31.3339 128.666 30.5409C128.117 29.5852 127.304 29.1175 126.267 29.1175C125.189 29.1175 124.376 29.5852 123.827 30.5409C123.359 31.3339 123.115 32.2895 123.115 33.4282C123.115 34.5262 123.359 35.4819 123.827 36.2545C124.396 37.2103 125.21 37.6779 126.246 37.6779C127.263 37.6779 128.056 37.1899 128.645 36.2343C129.113 35.4006 129.378 34.4653 129.378 33.3672Z"
                      fill="white" />
                    <path
                      d="M140.81 29.7482C140.545 29.7076 140.261 29.6668 139.976 29.6668C139.041 29.6668 138.309 30.0126 137.801 30.7243C137.354 31.3545 137.129 32.1476 137.129 33.1033V39.4067H134.466V31.1919C134.466 29.8093 134.445 28.5485 134.385 27.4099H136.703L136.804 29.7076H136.886C137.17 28.9145 137.618 28.2843 138.228 27.7962C138.817 27.3692 139.468 27.1455 140.159 27.1455C140.404 27.1455 140.627 27.1659 140.83 27.1862L140.81 29.7482Z"
                      fill="white" />
                    <path
                      d="M152.725 32.8185C152.725 33.2862 152.684 33.6929 152.623 34.0181H144.632C144.652 35.1975 145.059 36.1125 145.791 36.7429C146.462 37.2919 147.336 37.5765 148.414 37.5765C149.594 37.5765 150.671 37.3935 151.647 37.0071L152.074 38.8575C150.935 39.3455 149.594 39.5896 148.048 39.5896C146.198 39.5896 144.734 39.0405 143.656 37.9425C142.599 36.8445 142.07 35.3805 142.07 33.5302C142.07 31.7205 142.558 30.2158 143.554 29.0162C144.591 27.7351 145.994 27.0845 147.743 27.0845C149.471 27.0845 150.773 27.7351 151.668 29.0162C152.379 30.0735 152.725 31.3341 152.725 32.8185ZM150.183 32.1272C150.203 31.3341 150.02 30.6631 149.675 30.0735C149.207 29.3212 148.495 28.9551 147.56 28.9551C146.685 28.9551 145.974 29.3212 145.445 30.0328C144.998 30.6022 144.734 31.2935 144.652 32.1068L150.183 32.1272Z"
                      fill="white" />
                    <path
                      d="M60.9376 16.7956H59.5346L58.7619 14.3963H56.0982L55.3662 16.7956H54.0039L56.6269 8.62158H58.2535L60.9376 16.7956ZM58.5585 13.3999L57.8672 11.2649C57.7859 11.0413 57.6639 10.533 57.4606 9.71957H57.4402C57.3589 10.0653 57.2369 10.5736 57.0539 11.2649L56.3829 13.3999H58.5585Z"
                      fill="white" />
                    <path
                      d="M67.5285 10.8984L65.2919 16.7952H64.0108L61.8555 10.8984H63.2585L64.2752 14.0095C64.4379 14.5382 64.5802 15.0262 64.7022 15.4939H64.7429C64.8445 15.0668 64.9869 14.5788 65.1698 14.0095L66.1662 10.8984C66.1459 10.8984 67.5285 10.8984 67.5285 10.8984Z"
                      fill="white" />
                    <path
                      d="M72.2839 16.7954L72.1823 16.1244H72.1415C71.7349 16.6735 71.1656 16.9378 70.4132 16.9378C69.3559 16.9378 68.6035 16.2058 68.6035 15.2094C68.6035 13.7454 69.8642 12.9931 72.0399 12.9931V12.8914C72.0399 12.1187 71.6332 11.7324 70.8199 11.7324C70.2302 11.7324 69.7219 11.8748 69.2746 12.1798L69.0102 11.3258C69.5592 10.9801 70.2302 10.8174 71.0436 10.8174C72.5889 10.8174 73.3615 11.6308 73.3615 13.2575V15.4331C73.3615 16.0227 73.3819 16.4904 73.4429 16.8361L72.2839 16.7954ZM72.1009 13.8675C70.6369 13.8675 69.9252 14.2131 69.9252 15.0468C69.9252 15.6568 70.3115 15.9618 70.8199 15.9618C71.4909 15.9618 72.1009 15.4535 72.1009 14.7621C72.1009 14.7825 72.1009 13.8675 72.1009 13.8675Z"
                      fill="white" />
                    <path
                      d="M76.2903 9.92259C75.8632 9.92259 75.5176 9.57697 75.5176 9.12965C75.5176 8.68227 75.8632 8.35693 76.3105 8.35693C76.7578 8.35693 77.1239 8.68227 77.1036 9.12965C77.1239 9.61759 76.7782 9.92259 76.2903 9.92259ZM76.9612 16.7954H75.6599V10.8986H76.9612V16.7954Z"
                      fill="white" />
                    <path d="M80.5982 16.7954H79.2969V8.19434H80.5982V16.7954Z" fill="white" />
                    <path
                      d="M86.1706 16.7954L86.0689 16.1244H86.0283C85.6216 16.6735 85.0522 16.9378 84.2999 16.9378C83.2426 16.9378 82.4902 16.2058 82.4902 15.2094C82.4902 13.7454 83.7509 12.9931 85.9266 12.9931V12.8914C85.9266 12.1187 85.5199 11.7324 84.7066 11.7324C84.1169 11.7324 83.6085 11.8748 83.1612 12.1798L82.8969 11.3258C83.4459 10.9801 84.1169 10.8174 84.9302 10.8174C86.4756 10.8174 87.2483 11.6308 87.2483 13.2575V15.4331C87.2483 16.0227 87.2686 16.4904 87.3296 16.8361H86.1706V16.7954ZM85.9875 13.8675C84.5235 13.8675 83.8119 14.2131 83.8119 15.0468C83.8119 15.6568 84.1983 15.9618 84.7066 15.9618C85.3776 15.9618 85.9875 15.4535 85.9875 14.7621V13.8675Z"
                      fill="white" />
                    <path
                      d="M92.5725 16.9379C91.7386 16.9379 91.1082 16.5923 90.7225 15.9009H90.702L90.6207 16.8159H89.502C89.543 16.3483 89.543 15.7992 89.543 15.2299V8.21484H90.8645V11.7732H90.885C91.2707 11.1225 91.9011 10.7972 92.7555 10.7972C94.1787 10.7972 95.1752 12.0172 95.1752 13.7862C95.1752 15.5959 94.077 16.9379 92.5725 16.9379ZM92.3082 11.8139C91.5555 11.8139 90.8645 12.4645 90.8645 13.3795V14.4166C90.8645 15.2299 91.4743 15.9009 92.2877 15.9009C93.2636 15.9009 93.8537 15.1079 93.8537 13.8269C93.8537 12.6272 93.2439 11.8139 92.3082 11.8139Z"
                      fill="white" />
                    <path d="M98.4302 16.7954H97.1284V8.19434H98.4302V16.7954Z" fill="white" />
                    <path
                      d="M105.576 14.1721H101.651C101.671 15.2904 102.424 15.9207 103.502 15.9207C104.091 15.9207 104.62 15.819 105.088 15.6361L105.291 16.5511C104.742 16.7951 104.071 16.9171 103.319 16.9171C101.468 16.9171 100.391 15.7581 100.391 13.9484C100.391 12.1387 101.509 10.7764 103.176 10.7764C104.681 10.7764 105.637 11.8948 105.637 13.5824C105.616 13.8061 105.616 14.0094 105.576 14.1721ZM104.376 13.2367C104.376 12.3217 103.908 11.6914 103.075 11.6914C102.322 11.6914 101.733 12.3421 101.651 13.2367H104.376Z"
                      fill="white" />
                    <path
                      d="M113.521 16.9381C111.792 16.9381 110.673 15.657 110.673 13.9083C110.673 12.0783 111.813 10.7974 113.622 10.7974C115.31 10.7974 116.469 12.0174 116.469 13.827C116.448 15.657 115.269 16.9381 113.521 16.9381ZM113.561 11.7327C112.605 11.7327 112.016 12.6274 112.016 13.8474C112.016 15.0674 112.626 15.9417 113.561 15.9417C114.497 15.9417 115.106 14.986 115.106 13.827C115.086 12.6477 114.476 11.7327 113.561 11.7327Z"
                      fill="white" />
                    <path
                      d="M123.484 16.7951H122.183V13.3994C122.183 12.3624 121.776 11.8337 121.004 11.8337C120.23 11.8337 119.681 12.5048 119.681 13.2774V16.7951H118.38V12.5861C118.38 12.0574 118.36 11.5084 118.339 10.8984H119.498L119.56 11.8134H119.6C119.946 11.1831 120.678 10.7764 121.472 10.7764C122.712 10.7764 123.525 11.7321 123.525 13.2571L123.484 16.7951Z"
                      fill="white" />
                    <path
                      d="M132.064 11.8949H130.621V14.7619C130.621 15.4939 130.865 15.8599 131.394 15.8599C131.617 15.8599 131.821 15.8396 131.983 15.7989L132.024 16.7953C131.76 16.897 131.434 16.9376 131.007 16.9376C129.971 16.9376 129.36 16.3683 129.36 14.8839V11.9153H128.506V10.8986H129.36V9.82091L130.641 9.43457V10.8986H132.085V11.8949H132.064Z"
                      fill="white" />
                    <path
                      d="M139.001 16.7954H137.679V13.4404C137.679 12.3831 137.273 11.8544 136.5 11.8544C135.829 11.8544 135.199 12.3221 135.199 13.2573V16.7954H133.877V8.19434H135.199V11.7323H135.219C135.626 11.0817 136.235 10.7767 136.988 10.7767C138.228 10.7767 139.001 11.7527 139.001 13.2981V16.7954Z"
                      fill="white" />
                    <path
                      d="M145.713 14.1721H141.768C141.788 15.2904 142.541 15.9207 143.619 15.9207C144.208 15.9207 144.736 15.819 145.204 15.6361L145.408 16.5511C144.859 16.7951 144.188 16.9171 143.435 16.9171C141.585 16.9171 140.508 15.7581 140.508 13.9484C140.508 12.1387 141.626 10.7764 143.293 10.7764C144.798 10.7764 145.753 11.8948 145.753 13.5824C145.753 13.8061 145.733 14.0094 145.713 14.1721ZM144.513 13.2367C144.513 12.3217 144.045 11.6914 143.211 11.6914C142.46 11.6914 141.869 12.3421 141.788 13.2367H144.513Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2490_5158">
                      <rect width="168.75" height="50" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <!-- 倒數第二行最右邊google play -->
            <div
              class="footer-second-right-two col-12 col-md-4 col-lg-4 ps-lg-0 d-flex  justify-content-center align-items-center">
              <svg width="140" height="40" viewBox="0 0 173 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M165.14 49.9999H7.05736C3.57649 49.9999 0.740234 47.1966 0.740234 43.7562V6.26901C0.740234 2.82865 3.57649 0.0253906 7.05736 0.0253906H165.14C168.622 0.0253906 171.457 2.82865 171.457 6.26901V43.7562C171.457 47.1966 168.596 49.9999 165.14 49.9999Z"
                  fill="black" />
                <path
                  d="M165.14 0.996813C168.08 0.996813 170.452 3.34136 170.452 6.24655V43.7338C170.452 46.639 168.08 48.9836 165.14 48.9836H7.05736C4.11796 48.9836 1.74583 46.639 1.74583 43.7338V6.24655C1.74583 3.34136 4.11796 0.996813 7.05736 0.996813H165.14ZM165.14 0.00292969H7.05736C3.5765 0.00292969 0.740234 2.80619 0.740234 6.24655V43.7338C0.740234 47.1742 3.5765 49.9774 7.05736 49.9774H165.14C168.621 49.9774 171.457 47.1742 171.457 43.7338V6.24655C171.457 2.80619 168.596 0.00292969 165.14 0.00292969Z"
                  fill="black" />
                <path
                  d="M60.693 12.8186C60.693 13.8635 60.3836 14.7045 59.7648 15.3161C59.0428 16.0551 58.1146 16.4374 56.9802 16.4374C55.8972 16.4374 54.9432 16.0551 54.1954 15.3161C53.4219 14.5516 53.0352 13.6342 53.0352 12.5128C53.0352 11.3916 53.4219 10.4741 54.1954 9.73506C54.9689 8.99604 55.8972 8.61377 56.9802 8.61377C57.5216 8.61377 58.0373 8.7157 58.5272 8.91957C59.017 9.12345 59.4296 9.40381 59.7133 9.76059L59.0428 10.4232C58.5272 9.83702 57.8568 9.53122 56.9544 9.53122C56.155 9.53122 55.4588 9.81148 54.8916 10.3722C54.2985 10.9328 54.015 11.6464 54.015 12.5384C54.015 13.4303 54.2985 14.1438 54.8916 14.7045C55.4846 15.2651 56.1808 15.5455 56.9544 15.5455C57.8052 15.5455 58.5014 15.2651 59.0686 14.7045C59.4296 14.3477 59.6617 13.838 59.7133 13.1754H56.9544V12.2835H60.6157C60.693 12.4364 60.693 12.6148 60.693 12.8186Z"
                  fill="white" stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path
                  d="M66.5238 9.68412H63.0687V12.0541H66.1886V12.9461H63.0687V15.3162H66.5238V16.2336H62.0889V8.74121H66.5238C66.5238 8.76669 66.5238 9.68412 66.5238 9.68412Z"
                  fill="white" stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path d="M70.6415 16.259H69.6616V9.68405H67.5474V8.7666H72.7558V9.68405H70.6415V16.259Z" fill="white"
                  stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path d="M76.5215 16.259V8.7666H77.5012V16.259H76.5215Z" fill="white" stroke="white"
                  stroke-width="0.199309" stroke-miterlimit="10" />
                <path d="M81.8334 16.259H80.8536V9.68405H78.7393V8.7666H83.9477V9.68405H81.8334V16.259Z" fill="white"
                  stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path
                  d="M93.825 15.2903C93.0777 16.0547 92.1491 16.437 91.0402 16.437C89.9313 16.437 89.0034 16.0547 88.2557 15.2903C87.508 14.5257 87.147 13.6083 87.147 12.5125C87.147 11.4166 87.508 10.4737 88.2557 9.73472C89.0034 8.97017 89.9313 8.58789 91.0402 8.58789C92.1491 8.58789 93.0777 8.97017 93.825 9.73472C94.5732 10.4992 94.9598 11.4166 94.9598 12.5125C94.934 13.6083 94.5732 14.5257 93.825 15.2903ZM88.9777 14.6531C89.5447 15.2137 90.2152 15.4941 91.0402 15.4941C91.8393 15.4941 92.5357 15.2137 93.1027 14.6531C93.6706 14.0925 93.9536 13.3789 93.9536 12.487C93.9536 11.595 93.6706 10.8815 93.1027 10.3208C92.5357 9.76017 91.8652 9.47981 91.0402 9.47981C90.2152 9.47981 89.5447 9.76017 88.9777 10.3208C88.4104 10.8815 88.1268 11.595 88.1268 12.487C88.1268 13.3789 88.4104 14.0925 88.9777 14.6531Z"
                  fill="white" stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path
                  d="M96.2964 16.259V8.7666H97.483L101.17 14.6025H101.221L101.17 13.1499V8.7666H102.15V16.259H101.144L97.2767 10.1428H97.225L97.2767 11.5954V16.259H96.2964Z"
                  fill="white" stroke="white" stroke-width="0.199309" stroke-miterlimit="10" />
                <path
                  d="M86.8926 27.1918C83.9275 27.1918 81.5037 29.4344 81.5037 32.518C81.5037 35.5761 83.9275 37.8442 86.8926 37.8442C89.858 37.8442 92.3071 35.5761 92.3071 32.518C92.3071 29.4344 89.8839 27.1918 86.8926 27.1918ZM86.8926 35.729C85.2683 35.729 83.8501 34.4038 83.8501 32.518C83.8501 30.6067 85.2425 29.307 86.8926 29.307C88.5428 29.307 89.9348 30.6067 89.9348 32.518C89.9348 34.4038 88.517 35.729 86.8926 35.729ZM75.135 27.1918C72.1699 27.1918 69.7461 29.4344 69.7461 32.518C69.7461 35.5761 72.1699 37.8442 75.135 37.8442C78.1002 37.8442 80.524 35.5761 80.524 32.518C80.524 29.4344 78.1002 27.1918 75.135 27.1918ZM75.135 35.729C73.5107 35.729 72.0925 34.4038 72.0925 32.518C72.0925 30.6067 73.5107 29.307 75.135 29.307C76.7594 29.307 78.1775 30.6067 78.1775 32.518C78.1518 34.4038 76.7594 35.729 75.135 35.729ZM61.1084 28.8228V31.0909H66.5747C66.42 32.3652 65.9816 33.2826 65.337 33.9196C64.5377 34.7096 63.3001 35.5761 61.1084 35.5761C57.7565 35.5761 55.1265 32.9002 55.1265 29.5873C55.1265 26.2744 57.7565 23.5985 61.1084 23.5985C62.9133 23.5985 64.2541 24.3121 65.2339 25.2041L66.8325 23.624C65.4659 22.3243 63.6611 21.356 61.1084 21.356C56.4931 21.356 52.6255 25.0511 52.6255 29.6128C52.6255 34.1745 56.4931 37.8697 61.1084 37.8697C63.6095 37.8697 65.4659 37.0542 66.9357 35.5506C68.4311 34.0726 68.921 31.9574 68.921 30.2754C68.921 29.7402 68.8695 29.256 68.7921 28.8738C68.7921 28.8228 61.1084 28.8228 61.1084 28.8228ZM118.401 30.5812C117.962 29.3835 116.596 27.1918 113.786 27.1918C111.027 27.1918 108.706 29.358 108.706 32.518C108.706 35.4997 110.975 37.8442 114.044 37.8442C116.519 37.8442 117.937 36.3661 118.529 35.4997L116.699 34.3019C116.08 35.1938 115.255 35.78 114.044 35.78C112.857 35.78 111.98 35.2448 111.439 34.1745L118.633 31.2438C118.659 31.1674 118.401 30.5812 118.401 30.5812ZM111.079 32.3396C111.027 30.3009 112.677 29.2306 113.888 29.2306C114.817 29.2306 115.616 29.6893 115.9 30.3519C115.874 30.3774 111.079 32.3396 111.079 32.3396ZM105.225 37.5129H107.597V21.8911H105.225V37.5129ZM101.358 28.3641H101.28C100.738 27.7525 99.733 27.1918 98.4437 27.1918C95.7625 27.1918 93.2875 29.5364 93.2875 32.518C93.2875 35.4997 95.7625 37.8187 98.4437 37.8187C99.733 37.8187 100.738 37.2581 101.28 36.621H101.358V37.3855C101.358 39.4243 100.249 40.5201 98.4955 40.5201C97.0517 40.5201 96.1491 39.5007 95.7883 38.6343L93.7258 39.4752C94.3187 40.8769 95.891 42.6098 98.4955 42.6098C101.28 42.6098 103.601 41.0043 103.601 37.0797V27.5231H101.358V28.3641ZM98.65 35.729C97.0258 35.729 95.6589 34.3784 95.6589 32.518C95.6589 30.6322 97.0258 29.2815 98.65 29.2815C100.249 29.2815 101.512 30.6577 101.512 32.518C101.512 34.3784 100.249 35.729 98.65 35.729ZM129.488 21.8656H123.841V37.4875H126.187V31.5751H129.488C132.118 31.5751 134.67 29.6893 134.67 26.7331C134.67 23.7515 132.092 21.8656 129.488 21.8656ZM129.54 29.4089H126.187V24.0573H129.54C131.293 24.0573 132.298 25.5099 132.298 26.7331C132.298 27.9309 131.293 29.4089 129.54 29.4089ZM144.134 27.1663C142.432 27.1663 140.653 27.9053 139.93 29.5619L142.02 30.4283C142.458 29.5618 143.309 29.2815 144.185 29.2815C145.397 29.2815 146.661 30.0206 146.661 31.2948V31.4477C146.222 31.1928 145.32 30.836 144.185 30.836C141.942 30.836 139.621 32.0593 139.621 34.3529C139.621 36.4426 141.478 37.7933 143.54 37.7933C145.139 37.7933 146.016 37.0797 146.557 36.2642H146.635V37.4619H148.904V31.4732C148.929 28.7209 146.841 27.1663 144.134 27.1663ZM143.85 35.729C143.077 35.729 141.994 35.3468 141.994 34.4038C141.994 33.206 143.334 32.7219 144.495 32.7219C145.526 32.7219 146.016 32.9512 146.661 33.257C146.454 34.7096 145.217 35.729 143.85 35.729ZM157.232 27.4977L154.525 34.2764H154.447L151.637 27.4977H149.084L153.287 36.9523L150.889 42.2275H153.364L159.862 27.4977H157.232ZM135.96 37.5129H138.332V21.8911H135.96V37.5129Z"
                  fill="white" />
                <path
                  d="M13.9212 9.42911C13.5602 9.81134 13.3281 10.423 13.3281 11.1875V38.8379C13.3281 39.6023 13.5345 40.214 13.9212 40.5963L14.0244 40.6727L29.7012 25.1783V24.8215L14.0244 9.32715L13.9212 9.42911Z"
                  fill="url(#paint0_linear_2490_5186)" />
                <path
                  d="M34.914 30.3513L29.7056 25.178V24.8213L34.9398 19.6479L35.0687 19.7244L41.2569 23.2157C43.0102 24.2096 43.0102 25.8406 41.2569 26.8345L35.0687 30.3004C35.0429 30.2748 34.914 30.3513 34.914 30.3513Z"
                  fill="url(#paint1_linear_2490_5186)" />
                <path
                  d="M35.0359 30.2753L29.6985 25L13.9443 40.5709C14.5374 41.1825 15.4914 41.2589 16.5743 40.6473L35.0359 30.2753Z"
                  fill="url(#paint2_linear_2490_5186)" />
                <path
                  d="M35.0313 19.7245L16.5441 9.35244C15.4611 8.74084 14.5071 8.81729 13.9141 9.42887L29.6682 24.9998L35.0313 19.7245Z"
                  fill="url(#paint3_linear_2490_5186)" />
                <defs>
                  <linearGradient id="paint0_linear_2490_5186" x1="28.2954" y1="39.1147" x2="2.32484" y2="12.5281"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00A0FF" />
                    <stop offset="0.0066" stop-color="#00A1FF" />
                    <stop offset="0.2601" stop-color="#00BEFF" />
                    <stop offset="0.5122" stop-color="#00D2FF" />
                    <stop offset="0.7604" stop-color="#00DFFF" />
                    <stop offset="1" stop-color="#00E3FF" />
                  </linearGradient>
                  <linearGradient id="paint1_linear_2490_5186" x1="43.5212" y1="25.0013" x2="5.17795" y2="25.0013"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFE000" />
                    <stop offset="0.4087" stop-color="#FFBD00" />
                    <stop offset="0.7754" stop-color="#FFA500" />
                    <stop offset="1" stop-color="#FF9C00" />
                  </linearGradient>
                  <linearGradient id="paint2_linear_2490_5186" x1="21.5694" y1="32.5618" x2="-13.6488" y2="-3.49187"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF3A44" />
                    <stop offset="1" stop-color="#C31162" />
                  </linearGradient>
                  <linearGradient id="paint3_linear_2490_5186" x1="-0.601758" y1="39.3523" x2="15.1248" y2="23.2529"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32A071" />
                    <stop offset="0.0685" stop-color="#2DA771" />
                    <stop offset="0.4762" stop-color="#15CF74" />
                    <stop offset="0.8009" stop-color="#06E775" />
                    <stop offset="1" stop-color="#00F076" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 最後一行 -->
    <div class="bottom-copyright  container d-flex justify-content-center py-4">
      <div class="row w-100">
        <div class="col-12 col-lg-9 ps-0">© 2022 - 2023 FreshCart eCommerce HTML Template. All rights reserved. Powered
          by <span class="text-light-green">Codescandy</span>.</div>
        <div class="footer-last-right  col-12 col-lg-3 ps-lg-5 d-flex align-items-center">
          <div class=" size-38">Follow us on</div>
          <div class="little-box ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
              </path>
            </svg>
          </div>
          <div class="little-box ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
              </path>
            </svg>
          </div>
          <div class="little-box ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
              </path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

  @yield('js')
</body>

</html>
