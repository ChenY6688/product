@extends('templates.indexTemplate')

@section('main')
    <div class="big-swiper">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators h-25 align-items-end">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active me-3 circle bg-dark" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    class="circle bg-dark" aria-label="Slide 2"></button>
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
                            <button type="button" class="btn btn-dark text-start " style="width: 120px;"><small> sohw
                                    now<small><img src="./img/arrow-right-short.svg" alt=""
                                            class="ms-2 "></small></small>

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
                            <p class="card-text col-xxl-8 ">Free Shipping to First-Time Customers Only, After promotions
                                and
                                discounts are applied.
                            </p>
                            <button type="button" class="btn btn-dark text-start " style="width: 120px;"><small> sohw
                                    now<small><img src="{{ asset('image/arrow-right-short.svg') }}" alt=""
                                            class="ms-2 "></small></small>

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
                                <p class="card-text"><button type="button" class="btn btn-dark"><small>show
                                            now</small></button></p>
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
                                <p class="card-text"><button type="button" class="btn btn-dark"><small>show
                                            now</small></button></p>
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
                                        <h6 class="card-subtitle mb-2 text-body-secondary text-start">
                                            {{ $product->name }}</h6>
                                        <p class="card-text text-start">{{ $product->desc }}</p>
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <h6 class="col-4 card-link px-0 mt-2">
                                                <small>${{ $product->price }}</small>
                                            </h6>
                                            <button type="button"
                                                class="col-4  btn btn-primary"><small>+Add</small></button>
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
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
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
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
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
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
                                <div class="btx col-xxl-3 col-xl-4 col-lg-6 border p-0 text-center">1886 <br> days
                                </div>
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
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near
                            you.
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
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best
                            pricess &
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
                            Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg &
                            other
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
                        Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                        questions
                        asked <a href="#" class="text-decoration-none
                ">policy</a>. <!--網站鏈結-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
