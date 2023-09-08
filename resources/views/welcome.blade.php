<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
  .dropdown :hover {
    color: #3ae65d;
    display: block;
  }

  .footer {
    width: 100%;
    background-color: #F0F3F2;
  }

  .card-w {
    width: 300px;
  }

  a {
    color: black;
  }

  a:hover {
    color: #3ae65d;
  }

  .btx {
    width: 50px;
    height: 50px;

  }

  .circle {
    width: 10px !important;
    height: 10px !important;
    border-radius: 50%;
  }
</style>

<body>
  <!--頂層回首頁 FreshCart-->
  <div class="d-xl-flex flex-row mb-3 container ">
    <a href="https://freshcart.codescandy.com/index.html" class="p-xl-3 fw-bolder fs-2 text-dark text-decoration-none ">
      <img src="{{ asset('image/freshcart-logo.svg') }}" alt=""></a>
    <div class="input-group mb-3 pt-4 w-25">
      <input type="text" class="form-control" placeholder="Search for products" aria-label="Recipient's username"
        aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2">
        <img src="{{ asset('image/search.svg') }}" alt="">
      </button>
    </div>
    <div class="py-xl-4 ps-xl-2">
      <button class="btn border" type="submit">
        <img src="{{ asset('image/geo-alt.svg') }}" alt="" class="pe-xl-2">Location
      </button>
    </div>
    <div class="pt-xl-4  ms-auto ">
      <a href="https://freshcart.codescandy.com/pages/shop-wishlist.html" class="text text-decoration-none">
        <img src="{{ asset('image/heart.svg') }}" alt="">
      </a>
      <a href="{{ route('product.index') }}">
        <img src="{{ asset('image/person.svg') }}" alt="" class="ps-xl-3">
      </a>
    </div>
    <a href="https://freshcart.codescandy.com/pages/shop-wishlist.html" class="p-xl-4">
      <img src="{{ asset('image/bag-check.svg') }}" alt="">
    </a>

  </div> <!--標題頂層-->
  <div class="d-xl-flex flex-row container mb-xxl-5 "> <!--頂層第二列-->
    <div class="dropdown">
      <button class="btn bg-success-subtle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('image/list.svg') }}" alt="" class="p-xl-1">All Departments
      </button>
      <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item active" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Separated link</a></li>
      </ul>
    </div>
    <div class="ps-xl-2  d-block"> <!--第二列選單一-->
      <div class="dropdown ps-xl-3 ">
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Dashboard
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2 "><!--第二列選單二-->
      <div class="dropdown ps-xl-3 ">
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          shop
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2">
      <div class="dropdown "><!--第二列選單三-->
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          stores
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2 ">
      <div class="dropdown ps-xl-3 "><!--第二列選單四-->
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Mega menu
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2"><!--第二列選單五-->
      <div class="dropdown ps-xl-3 ">
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Pages
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2"><!--第二列選單六-->
      <div class="dropdown ps-xl-3 ">
        <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Account
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="ps-xl-2"><!--第二列選單七-->
      <div class="dropdown text-xl- ">
        <a class="btn fw-bolder " href="https://freshcart.codescandy.com/dashboard/index.html" role="button">
          dashboard
        </a>

      </div>
    </div>
    <div class="ps-xl-2"><!--第二列選單八-->
      <div class="dropdown ps-xl-3 ">
        <a class="btn   fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Docs
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="nobody mb-xxl-5 mt-5"><!--中間商品層-->
    <div class="big-swiper">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators h-25 align-items-end">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
            class="active me-3 circle bg-dark" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="circle bg-dark"
            aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner container">
          <div class="carousel-item active">
            <div class="card ">
              <img src="{{ asset('image/slide-1.jpg') }}" class="card-img" alt="...">
              <div class="card-img-overlay d-flex flex-column justify-content-center w-50 ms-5 ps-3">
                <p class="card-text bg-warning  text-dark col-4 fw-bold">
                  <samll><small>Opening Sale Discount 50%</small></samll>
                </p>
                <h1 class="card-title col-xxl-7  ">SuperMarket For Fresh Grocery </h1>
                <p class="card-text col-xxl-8 ">Introduced a new model for online grocery shopping
                  and convenient home delivery.</p>
                <button type="button" class="btn btn-dark text-start " style="width: 120px;"><small> sohw now<small><img
                        src="./img/arrow-right-short.svg" alt="" class="ms-2 "></small></small>

                </button>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card ">
              <img src="{{ asset('image/slider-2.jpg') }}" class="card-img" alt="...">
              <div class="card-img-overlay d-flex flex-column justify-content-center w-50 ms-5 ps-3">
                <p class="card-text bg-warning  text-dark col-5 fw-bold">
                  <samll><small>Free Shipping - orders over $100</small></samll>
                </p>
                <h1 class="card-title col-xxl-7  ">
                  Free Shipping on
                  <br>
                  orders over
                  <span class=" text-success fw-bold">100%</span>
                </h1>
                <p class="card-text col-xxl-8 ">Free Shipping to First-Time Customers Only, After promotions and
                  discounts are applied.
                </p>
                <button type="button" class="btn btn-dark text-start " style="width: 120px;"><small> sohw now<small><img
                        src="{{ asset('image/arrow-right-short.svg') }}" alt="" class="ms-2 "></small></small>

                </button>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="swiper-x">
      <div class="d-flex col-xxl-12 container text-start mt-5"> <!--商品特價標題-->
        <div class="p-2 flex-grow-1 ">
          <h1>Popular Products</h1>
        </div>
        <div class="p-2">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </button>
        </div>
      </div>
      <div class="swiper-shop"> <!--卷軸-->
        <div id="carouselExample" class="carousel slide">
        </div>
      </div>
    </div>

    <div class="fruil mt-3"><!--水果麵包-->
      <div class="container">
        <div class="row row-cols">
          <div class="col"> <!--水果卡片-->
            <div class="p-1">
              <div class="card ">
                <img src="{{ asset('image/grocery-banner.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay text-start d-flex flex-column  justify-content-center">
                  <h2 class="card-title">Fruits & Vegetables</h2>
                  <p class="card-text"><small>Get Upto 30% Off</small></p>
                  <p class="card-text"><button type="button" class="btn btn-dark"><small>show now</small></button></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col"><!--麵包卡片-->
            <div class="p-3">
              <div class="card ">
                <img src="{{ asset('image/grocery-banner-2.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay text-start d-flex flex-column  justify-content-center">
                  <h2 class="card-title">Freshly Baked Buns</h2>
                  <p class="card-text"><small>Get Upto 25% Off</small></p>
                  <p class="card-text"><button type="button" class="btn btn-dark"><small>show now</small></button></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="special-off">
      <div class="col-xxl-12 container text-start mt-5"> <!--商品特價標題-->
        <h1>Popular Products</h1>
      </div>
      <div class="container text-start  "> <!--商品特價中-->
        <div class="container text-center">
          <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($products ?? [] as $product)
              <div class="col">
                <div class="p-3">
                  <div class="card">
                    <img src="{{ asset($product->img_path) }}" alt="">
                    <div class="card-body">
                      {{-- <h6 class="card-title text-start"><small>Snack & Munchies</small></h6> --}}
                      <h6 class="card-subtitle mb-2 text-body-secondary text-start">{{ $product->name }}</h6>
                      <p class="card-text text-start">{{ $product->desc }}</p>
                      <div class="row d-flex justify-content-between align-items-center">
                        <h6 class="col-4 card-link px-0 mt-2">
                          <small>${{ $product->price }}</small>
                        </h6>
                        <button type="button" class="col-4  btn btn-primary"><small>+Add</small></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="special-day"> <!--商品特賣倒數-->
      <div class="col-xxl-12 container text-start mt-5">
        <h1>Daily Best Sells</h1>
      </div>
      <div class="container text-start nor">
        <div class="row align-items-start mb-xxl-5 ">
          <div class="col-xl-3 ">
            <div class="card text-bg-dark">
              <img src="{{ asset('image/banner-deal (1).jpg') }}" class="card-img" alt="...">
              <div class="card-img-overlay p-xxl-4">
                <h5 class="card-title text-start">
                  <h2>100% Organic Coffee Beans.</h2>
                </h5>
                <p class="card-text text-start"><small>Get the best deal before close.</small></p>
                <p class="card-text text-start dropend">
                  <button type="button" class="btn btn-success dropdown-toggle">
                    Dropend
                  </button>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="card">
              <img src="{{ asset('image/product-img-11.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title"><small><small>Tea, Coffee & Drinks</small></small></h6>
                <p class="card-text">Roast Ground Coffee</p>
                <div class="col-xxl-12 mb-xxl-2">star</div> <!--星星評價-->
                <button type="button" class="btn btn-primary container">+ Add to Cart</button>
                <div class="row  d-flex justify-content-around">
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="card">
              <img src="{{ asset('image/product-img-11.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title"><small><small>Tea, Coffee & Drinks</small></small></h6>
                <p class="card-text">Roast Ground Coffee</p>
                <div class="col-xxl-12 mb-xxl-2">star</div> <!--星星評價-->
                <button type="button" class="btn btn-primary container">+ Add to Cart</button>
                <div class="row  d-flex justify-content-around">
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="card">
              <img src="{{ asset('image/product-img-11.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title"><small><small>Tea, Coffee & Drinks</small></small></h6>
                <p class="card-text">Roast Ground Coffee</p>
                <div class="col-xxl-12 mb-xxl-2">star</div> <!--星星評價-->
                <button type="button" class="btn btn-primary container">+ Add to Cart</button>
                <div class="row  d-flex justify-content-around">
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                  <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-start my-5 "> <!--網頁特色-->
      <div class="row align-items-start">
        <div class="col-xl-3 ">
          <div class="row ">
            <div class="col-12">
              <img src="{{ asset('image/clock.svg') }}" alt="">
            </div>
            <div class="col-12 fw-bolder  ">
              <p>10 minute grocery now</p>
            </div>
            <div class="col-12">
              <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('image/gift.svg') }}" alt="">
            </div>
            <div class="col-12 fw-bolder">
              <p>Best Prices & Offers</p>
            </div>
            <div class="col-12">
              <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess &
                offers.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('image/package.svg') }}" alt="">
            </div>
            <div class="col-12 fw-bolder">
              <p>
                Wide Assortment
              </p>
            </div>
            <div class="col-12">
              <p>
                Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other
                categories.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('image/refresh-cw.svg') }}" alt="">
            </div>
            <div class="col-12">
              <p>Easy Returns
              </p>
            </div>
            <div class="col-12 ">
              Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions
              asked <a href="#" class="text-decoration-none
                  ">policy</a>. <!--網站鏈結-->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="footer"> <!--最底層-->
    <div class="container text-start "> <!--下層文字區-->
      <div class="row align-items-start border-bottom   ">
        <div class="col-xxl-4 col-xl-4 col-lg-12">
          <div class="row ">
            <div class="col-12 mb-xxl-3  fw-bolder">
              Categouries
            </div>
            <div class="col-6">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Vegetables & Fruits</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Breakfast & instant
                  food</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Bakery & Biscuits</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Atta, rice & dal</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Sauces & spreads</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Organic & gourmet</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Baby care</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Cleaning essentials</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Personal care</a></p>
            </div>
            <div class="col-6">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Dairy, bread & eggs</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Cold drinks & juices</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Tea, coffee & drinks</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Masala, oil & more</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Chicken, meat & fish</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Paan corner</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Pharma & wellness</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Dashboard & office</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Pet care</a></p>
            </div>
          </div>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 col-xs-6">
          <div class="row ">
            <div class="col-12 mb-xl-3 fw-bolder">Get to know us</div>
            <div class="col-12">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Company</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">About</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Blog</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Help Center</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Our Value</a></p>
            </div>
          </div>

        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 col-xs-6">
          <div class="row">
            <div class="col-12 mb-xl-3 fw-bolder">For Consumers</div>
            <div class="col-12">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Payments</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Shipping</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Product Returns</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">FAQ</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Shop Checkout</a></p>
            </div>
          </div>

        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 col-xs-6">
          <div class="row">
            <div class="col-12 mb-xl-3 fw-bolder">Become a Shopper</div>
            <div class="col-12">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Shopper Opportunities</a>
              </p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Become a Shopper</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Earnings</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Ideas & Guides</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">New Retailers</a></p>
            </div>
          </div>

        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 col-xs-6">
          <div class="row">
            <div class="col-12 mb-xl-3 fw-bolder">Freshcart programs</div>
            <div class="col-12">
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Freshcart programs</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Gift Cards</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Promos & Coupons</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Freshcart Ads</a></p>
              <p><a class="link-opacity-10-hover col-12 text-decoration-none   " href="#">Careers</a></p>
            </div>
          </div>

        </div>
      </div>


      <div class="row"> <!--信用卡  額外連接-->
        <div class="col-12">
          <div class="d-flex mb-3">
            <div class="pt-2 fw-bold text-start">Payment Partners</div>
            <div class="p-2">
              <div class="row">
                <div class="col">
                  <img src="{{ asset('image/amazonpay.svg') }}" alt="">
                </div>
                <div class="col">
                  <img src="{{ asset('image/american-express.svg') }}" alt="">
                </div>
                <div class="col">
                  <img src="{{ asset('image/mastercard.svg') }}" alt="">
                </div>
                <div class="col">
                  <img src="{{ asset('image/paypal.svg') }}" alt="">
                </div>
                <div class="col">
                  <img src="{{ asset('image/visa.svg') }}" alt="">
                </div>
              </div>
            </div>
            <div class="ms-auto p-0 w-75 ">
              <div class="row">
                <div class="col-xl-4  text-end  w-50">Get deliveries with FreshCart</div>
                <div class="col-xl-4 w-25 ">
                  <img src="{{ asset('image/appstore-btn.svg') }}" alt="">
                </div>
                <div class="col-xl-4 w-25">
                  <img src="{{ asset('image/googleplay-btn.svg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>