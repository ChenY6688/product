<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @yield('head')
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
      <a href="{{ route('user.info') }}" class="p-xl-4">
        <img src="{{ asset('image/bag-check.svg') }}" alt="">
      </a>
      <a href="https://freshcart.codescandy.com/pages/shop-wishlist.html" class="text text-decoration-none">
        <img src="{{ asset('image/heart.svg') }}" alt="">
      </a>
      <a href="{{ route('user.info') }}">
        <img src="{{ asset('image/person.svg') }}" alt="" class="ps-xl-3">
      </a>
    </div>
    <a href="{{ route('user.info') }}" class="p-xl-4">
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
  <main class="nobody mb-xxl-5 mt-5">
    @yield('main')
  </main>
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
    @yield('js')
</body>

</html>