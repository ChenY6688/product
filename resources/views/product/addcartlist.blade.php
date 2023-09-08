<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Order List Dashboard - FreshCart </title>

    <!-- Libs CSS -->
    <link href="/css/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.min.css">
    <!-- Libs JS -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="/js/theme.min.js"></script>
    <link href="/css/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/cart-shopping-solid.svg">
</head>

<body>

    <!-- main -->
    <nav class="navbar navbar-expand-lg navbar-glass">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center">
                    <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-text-indent-right" viewBox="0 0 16 16">
                            <i class="fa-solid fa-bars-staggered mb-5"></i>
                        </svg>
                    </a>
                    <form role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <div>
                    <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">
                        <li class="dropdown-center ">
                            <a class="position-relative btn-icon btn-ghost-secondary btn rounded-circle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-light fa-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0 ">
                                <div
                                    class="border-bottom p-5 d-flex
                justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">Notifications</h5>
                                        <p class="mb-0 small">You have 2 unread messages</p>
                                    </div>
                                    <a href="#" class="text-muted">
                                    </a><a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="Mark all as read">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-check2-all text-success"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z">
                                            </path>
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                                <div data-simplebar="init" style="height: 250px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- List group -->
                                                        <ul
                                                            class="list-group list-group-flush notification-list-scroll fs-6">
                                                            <!-- List group item -->
                                                            <li
                                                                class="list-group-item px-5 py-4 list-group-item-action active">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-1.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">Your order is
                                                                                    placed</span> waiting for shipping
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">1 minute
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>
                                                            <li
                                                                class="list-group-item  px-5 py-4 list-group-item-action">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-5.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">Jitu Chauhan
                                                                                </span> answered to your pending order
                                                                                list with notes
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">2 days
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>
                                                            <li
                                                                class="list-group-item px-5 py-4 list-group-item-action">
                                                                <a href="#" class="text-muted">
                                                                    <div class="d-flex">
                                                                        <img src="./assets/images/avatar/avatar-2.jpg"
                                                                            alt=""
                                                                            class="avatar avatar-md rounded-circle ">
                                                                        <div class="ms-4">
                                                                            <p class="mb-1">
                                                                                <span class="text-dark">You have new
                                                                                    messages</span> 2 unread messages
                                                                            </p>
                                                                            <span><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="12" height="12"
                                                                                    fill="currentColor"
                                                                                    class="bi bi-clock text-muted"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                                                    </path>
                                                                                </svg><small class="ms-2">3 days
                                                                                    ago</small></span>
                                                                        </div>
                                                                    </div>
                                                                </a>



                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                                <div class="border-top px-5 py-4 text-center">
                                    <a href="#" class=" ">
                                        View All
                                    </a>
                                </div>
                            </div>

                        </li>
                        <li class="dropdown ms-4">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./assets/images/avatar/avatar-1.jpg" alt=""
                                    class="avatar avatar-md rounded-circle">
                            </a>

                            <div class="dropdown-menu dropdown-menu-end p-0">



                                <div class="lh-1 px-5 py-4 border-bottom">
                                    <h5 class="mb-1 h6">FreshCart Admin</h5>
                                    <small>admindemo@email.com</small>
                                </div>



                                <ul class="list-unstyled px-2 py-3">

                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            Profile
                                        </a>


                                    </li>


                                    <li>
                                        <a class="dropdown-item" href="#">

                                            Settings
                                        </a>
                                    </li>

                                </ul>
                                <div class="border-top px-5 py-3">

                                    <a href="#">Log Out</a>
                                </div>



                            </div>

                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
    <div class="main-wrapper">
        <!-- navbar vertical -->
        <nav class="navbar-vertical-nav d-none d-xl-block ">
            <div class="navbar-vertical">
                <div class="px-4 py-5">
                    <a href="#" class="navbar-brand">
                        <img src="./assets/images/logo/freshcart-logo.svg" alt="">
                    </a>
                </div>
                <div class="navbar-vertical-content flex-grow-1" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="navbar-nav flex-column" id="sideNavbar">
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-house-chimney-blank"></i></span>
                                                        <span class="nav-link-text">Dashboard</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Store Managements</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-cart-shopping"></i></span>
                                                        <span class="nav-link-text">Products</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-list-ul"></i></span>
                                                        <span class="nav-link-text">Categories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  " href="#" data-bs-toggle="collapse"
                                                    data-bs-target="#navCategoriesOrders" aria-expanded="false"
                                                    aria-controls="navCategoriesOrders">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-briefcase-blank"></i></span>
                                                        <span class="nav-link-text">Orders</span>
                                                    </div>
                                                </a>
                                                <div id="navCategoriesOrders" class="collapse  show "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="#">
                                                                List
                                                            </a>
                                                        </li>
                                                        <!-- Nav item -->
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="#">
                                                                Single
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-shop"></i></span>
                                                        <span class="nav-link-text">Sellers / Vendors</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-user-group"></i></span>
                                                        <span class="nav-link-text">Customers</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-star"></i></span>
                                                        <span class="nav-link-text">Reviews</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Nav item -->
                                            <li class="nav-item">
                                                <a class="nav-link  collapsed " href="#"
                                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelFirst"
                                                    aria-expanded="false" aria-controls="navMenuLevelFirst">
                                                    <span class="nav-link-icon"><i
                                                            class="fa-light fa-arrow-turn-down-right fa-rotate-90"></i></span>
                                                    <span class="nav-link-text">Menu Level</span>
                                                </a>
                                                <div id="navMenuLevelFirst" class="collapse "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#navMenuLevelSecond1"
                                                                aria-expanded="false"
                                                                aria-controls="navMenuLevelSecond1">
                                                                Two Level
                                                            </a>
                                                            <div id="navMenuLevelSecond1" class="collapse"
                                                                data-bs-parent="#navMenuLevel">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">NavItem
                                                                            1</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">NavItem
                                                                            2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link  collapsed  " href="#"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#navMenuLevelThreeOne1"
                                                                aria-expanded="false"
                                                                aria-controls="navMenuLevelThreeOne1">
                                                                Three Level
                                                            </a>
                                                            <div id="navMenuLevelThreeOne1" class="collapse "
                                                                data-bs-parent="#navMenuLevel">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link  collapsed " href="#"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#navMenuLevelThreeTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="navMenuLevelThreeTwo">
                                                                            NavItem 1
                                                                        </a>
                                                                        <div id="navMenuLevelThreeTwo"
                                                                            class="collapse collapse "
                                                                            data-bs-parent="#navMenuLevelThree">
                                                                            <ul class="nav flex-column">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link "
                                                                                        href="#">
                                                                                        NavChild Item 1
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link " href="#">Nav
                                                                            Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Site Settings</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-newspaper"></i></span>
                                                        <span class="nav-link-text">Blog</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-images"></i></span>
                                                        <span class="nav-link-text">Media</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-gear"></i></span>
                                                        <span class="nav-link-text">Store Settings</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Support</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-solid fa-headphones"></i></span>
                                                        <span class="nav-link-text">Support Ticket</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-circle-question"></i></span>
                                                        <span class="nav-link-text">Help Center</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-duotone fa-infinity"></i></span>
                                                        <span class="nav-link-text">How FreshCart Works</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Our Apps</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-apple"></i></span>
                                                        <span class="nav-link-text">Apple Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-google-play"></i></span>
                                                        <span class="nav-link-text">Google Play Store</span>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar"
                            style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1"
            id="offcanvasExample">
            <div class="navbar-vertical">
                <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                    <a href="#" class="navbar-brand">
                        <img src="./assets/images/logo/freshcart-logo.svg" alt="">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="navbar-vertical-content flex-grow-1 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <ul class="navbar-nav flex-column">
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-house-chimney-blank"></i></span>
                                                        <span>Dashboard</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Store Managements</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-cart-shopping"></i></span>
                                                        <span class="nav-link-text">Products</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-regular fa-list-ul"></i></span>
                                                        <span class="nav-link-text">Categories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  " href="#" data-bs-toggle="collapse"
                                                    data-bs-target="#navOrders" aria-expanded="false"
                                                    aria-controls="navOrders">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-light fa-briefcase-blank"></i></span>
                                                        <span class="nav-link-text">Orders</span>
                                                    </div>
                                                </a>
                                                <div id="navOrders" class="collapse  show "
                                                    data-bs-parent="#sideNavbar">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="#">
                                                                List
                                                            </a>
                                                        </li>
                                                        <!-- Nav item -->
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="#">
                                                                Single

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-shop"></i></span>
                                                        <span class="nav-link-text">Sellers / Vendors</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-user-group"></i></span>
                                                        <span class="nav-link-text">Customers</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link " href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-star"></i></span>
                                                        <span class="nav-link-text">Reviews</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Site Settings</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-newspaper"></i></span>
                                                        <span class="nav-link-text">Blog</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-thin fa-images"></i></span>
                                                        <span class="nav-link-text">Media</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-gear"></i></span>
                                                        <span class="nav-link-text">Store Settings</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Support</span> <span
                                                    class="badge bg-light-info text-dark-info">Coming Soon</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-sharp fa-solid fa-headphones"></i></span>
                                                        <span class="nav-link-text">Support Ticket</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-light fa-circle-question"></i></span>
                                                        <span class="nav-link-text">Help Center</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-duotone fa-infinity"></i></span>
                                                        <span class="nav-link-text">How FreshCart Works</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item mt-6 mb-3">
                                                <span class="nav-label">Our Apps</span>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-apple"></i></span>
                                                        <span class="nav-link-text">Apple Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link disabled" href="#">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i
                                                                class="fa-brands fa-google-play"></i></span>
                                                        <span class="nav-link-text">Google Play Store</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="#" data-bs-toggle="collapse"
                                                            data-bs-target="#navMenuLevelSecond2"
                                                            aria-expanded="false" aria-controls="navMenuLevelSecond2">
                                                            Two Level
                                                        </a>
                                                        <div id="navMenuLevelSecond2" class="collapse"
                                                            data-bs-parent="#navMenuLevel">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">NavItem 1</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">NavItem 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link  collapsed  " href="#"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#navMenuLevelThree2" aria-expanded="false"
                                                            aria-controls="navMenuLevelThree2">
                                                            Three Level
                                                        </a>
                                                        <div id="navMenuLevelThree2" class="collapse "
                                                            data-bs-parent="#navMenuLevel">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a class="nav-link  collapsed " href="#"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#navMenuLevelThree3"
                                                                        aria-expanded="false"
                                                                        aria-controls="navMenuLevelThree3">
                                                                        NavItem 1
                                                                    </a>
                                                                    <div id="navMenuLevelThree3"
                                                                        class="collapse collapse "
                                                                        data-bs-parent="#navMenuLevelThree">
                                                                        <ul class="nav flex-column">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link " href="#">
                                                                                    NavChild Item 1
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link " href="#">Nav
                                                                        Item 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 279px; height: 1102px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 702px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>
            </div>

        </nav>


        <!-- main wrapper -->
        <main class="main-content-wrapper">
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <!-- page header -->
                        <div>
                            <h2>新增產品</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body p-0">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label class="form-check-label fs-1" for="firstCheckbox">產品名稱*</label>
                                            <input name="name" class="form-check-input me-1 fs-1 w-75" type="text" value="" required>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="form-check-label fs-1" for="secondCheckbox">產品圖片</label>
                                            <input name="image" class="form-check-input me-1 fs-1 w-75" type="file" value=""
                                                style="height: 100px;" required accept="image/*">
                                        </li>
                                        <li class="list-group-item">
                                            <label class="form-check-label fs-1" for="thirdCheckbox">產品價格</label>
                                            <input name="price" class="form-check-input me-1 fs-1 w-75" type="number" value="" min="0" required>
                                        </li>
                                        <li class="list-group-item">
                                            <label class="form-check-label fs-1" for="fourthCheckbox">顯示狀態</label>
                                            <label class="fs-1">
                                                <input type="radio" id="appear" name="status" value="1" checked>
                                                要顯示
                                            </label>
                                            <label class="fs-1">
                                                <input type="radio" id="no-appear" name="status" value="2" />
                                                不顯示
                                            </label>
    
                                        </li>
                                        <li class="list-group-item" style="height: 300px">
                                            <label class="form-check-label fs-1" for="thirdCheckbox">產品描述</label>
                                            <hr>
                                            <textarea name="desc" class="w-100" style="resize: none; min-height: 150px;"></textarea>
                                        </li>
                                    </ul>
                                    <div class="btn-group justify-content-center d-flex">
                                        <a href="{{ route('product.index') }}" class="btn btn-primary m-3">取消按鈕</a>
                                        <button type="submit" class="btn btn-primary m-3">新增按鈕</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>
