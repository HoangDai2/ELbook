<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Scandinavian | ELBook</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('client/libs/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/feather-font/css/iconfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/icomoon-font/css/icomoon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/font-awesome/css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/wpbingofont/css/wpbingofont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/elegant-icons/css/elegant.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/slick/css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/slick/css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/libs/mmenu/css/mmenu.min.css') }}" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client/assets/css/responsive.css') }}" type="text/css">

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=EB+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap"
        rel="stylesheet">
</head>

<body class="home home-12 title-12">
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v4 color-white bg-black">
            <div class="header-desktop">
                <div class="header-top">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 header-left">
                                    <div class="header-page-link">
                                        <!-- Search -->
                                        <div class="search-box">
                                            <div class="search-toggle"><i class="icon-search"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center header-center">
                                    <div class="site-logo">
                                        <a href="index12.html">
                                            <img width="400" height="79"
                                                src="{{ asset('/client/media/logo-white.png') }}"
                                                alt="Ruper – Furniture HTML Theme" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
                                    <div class="header-page-link">

                                        <!-- Login   -->
                                        <div class="login-header icon">
                                            <a class="active-login" href="#"><i class="icon-user"></i></a>
                                            <div class="form-login-register">
                                                <div class="box-form-login">
                                                    <div class="active-login"></div>
                                                    <div class="box-content">
                                                        <div class="form-login active">
                                                            <form id="login_ajax" method="post" class="login">
                                                                <h2>Sign in</h2>
                                                                <p class="status"></p>
                                                                <div class="content">
                                                                    <div class="username">
                                                                        <input type="text" required="required"
                                                                            class="input-text" name="username"
                                                                            id="username" placeholder="Your name" />
                                                                    </div>
                                                                    <div class="password">
                                                                        <input class="input-text" required="required"
                                                                            type="password" name="password"
                                                                            id="password" placeholder="Password" />
                                                                    </div>
                                                                    <div class="rememberme-lost">
                                                                        <div class="rememberme">
                                                                            <input name="rememberme" type="checkbox"
                                                                                id="rememberme" value="forever" />
                                                                            <label for="rememberme"
                                                                                class="inline">Remember me</label>
                                                                        </div>
                                                                        <div class="lost_password">
                                                                            <a href="forgot-password.html">Lost your
                                                                                password?</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-login">
                                                                        <input type="submit" class="button"
                                                                            name="login" value="Login" />
                                                                    </div>
                                                                    <div class="button-next-reregister">Create An
                                                                        Account</div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="form-register">
                                                            <form method="post" class="register">
                                                                <h2>REGISTER</h2>
                                                                <div class="content">
                                                                    <div class="email">
                                                                        <input type="email" class="input-text"
                                                                            placeholder="Email" name="email"
                                                                            id="reg_email" value="" />
                                                                    </div>
                                                                    <div class="password">
                                                                        <input type="password" class="input-text"
                                                                            placeholder="Password" name="password"
                                                                            id="reg_password" />
                                                                    </div>
                                                                    <div class="button-register">
                                                                        <input type="submit" class="button"
                                                                            name="register" value="Register" />
                                                                    </div>
                                                                    <div class="button-next-login">Already has an
                                                                        account</div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Wishlist -->
                                        <div class="wishlist-box">
                                            <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                            <span class="count-wishlist">1</span>
                                        </div>

                                        <!-- Cart -->
                                        <div class="ruper-topcart dropdown light">
                                            <div class="dropdown mini-cart top-cart">
                                                <div class="remove-cart-shadow"></div>
                                                <a class="dropdown-toggle cart-icon" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <div class="icons-cart"><i class="icon-large-paper-bag"></i><span
                                                            class="cart-count">2</span></div>
                                                </a>
                                                <div class="dropdown-menu cart-popup">
                                                    <div class="cart-empty-wrap">
                                                        <ul class="cart-list">
                                                            <li class="empty">
                                                                <span>No products in the cart.</span>
                                                                <a class="go-shop" href="shop-grid-left.html">GO TO
                                                                    SHOP<i aria-hidden="true"
                                                                        class="arrow_right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cart-list-wrap">
                                                        <ul class="cart-list ">
                                                            <li class="mini-cart-item">
                                                                <a href="#" class="remove"
                                                                    title="Remove this item"><i
                                                                        class="icon_close"></i></a>
                                                                <a href="shop-details.html" class="product-image"><img
                                                                        width="600" height="600"
                                                                        src="media/product/3.jpg" alt=""></a>
                                                                <a href="shop-details.html" class="product-name">Chair
                                                                    Oak Matt Lacquered</a>
                                                                <div class="quantity">Qty: 1</div>
                                                                <div class="price">$150.00</div>
                                                            </li>
                                                            <li class="mini-cart-item">
                                                                <a href="#" class="remove"
                                                                    title="Remove this item"><i
                                                                        class="icon_close"></i></a>
                                                                <a href="shop-details.html" class="product-image"><img
                                                                        width="600" height="600"
                                                                        src="media/product/1.jpg" alt=""></a>
                                                                <a href="shop-details.html"
                                                                    class="product-name">Zunkel Schwarz</a>
                                                                <div class="quantity">Qty: 1</div>
                                                                <div class="price">$100.00</div>
                                                            </li>
                                                        </ul>
                                                        <div class="total-cart">
                                                            <div class="title-total">Total: </div>
                                                            <div class="total-price"><span>$100.00</span></div>
                                                        </div>
                                                        <div class="free-ship">
                                                            <div class="title-ship">Buy <strong>$400</strong> more to
                                                                enjoy <strong>FREE Shipping</strong></div>
                                                            <div class="total-percent">
                                                                <div class="percent" style="width:20%"></div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons">
                                                            <a href="shop-cart.html"
                                                                class="button btn view-cart btn-primary">View cart</a>
                                                            <a href="shop-checkout.html"
                                                                class="button btn checkout btn-default">Check out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-wrapper">
                    <div class="section-padding">
                        <div class="section-container p-l-r">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                    <div class="site-navigation">
                                        <nav id="main-navigation">
                                            <ul id="menu-main-menu" class="menu">
                                                <li class="level-0 menu-item mega-menu current-menu-item">
                                                    <a href="index.html"><span class="menu-text">Home</span></a>
                                                </li>
                                                <li class="level-0 menu-item">
                                                    <a href="shop-grid-left.html"><span
                                                            class="menu-item-text">Shop</span></a>
                                                </li>
                                                <li class="level-0 menu-item mega-menu ">
                                                    <a href="page-my-account.html"><span class="menu-item-text">My
                                                            Account</span></a>
                                                </li>
                                                <li class="level-0 menu-item mega-menu ">
                                                    <a href="page-about.html"><span class="menu-item-text">About
                                                            Us</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
                        <section class="section section-small-padding m-t-10 m-b-10">
                            <!-- Block Sliders -->
                            <div class="block block-sliders layout-12 color-white auto-height nav-center">
                                <div class="slick-sliders" data-autoplay="false" data-dots="true" data-nav="false"
                                    data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1"
                                    data-columns1440="1" data-columns="1">
                                    <div class="item slick-slide">
                                        <div class="item-content">
                                            <div class="content-image">
                                                <img width="1920" height="1080"
                                                    src="{{ asset('client/media/slider/31.jpg') }}"
                                                    alt="Image Slider">
                                            </div>
                                            <div class="item-info horizontal-center vertical-middle">
                                                <div class="content text-center">
                                                    <div class="subtitle-slider">Spring Collection</div>
                                                    <h2 class="title-slider">Outdoor Dining<br> Chair Sale </h2>
                                                    <a class="button-slider button-white"
                                                        href="shop-grid-left.html">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item slick-slide">
                                        <div class="item-content">
                                            <div class="content-image">
                                                <img width="1920" height="1080"
                                                    src="{{ asset('client/media/slider/32.jpg') }}"
                                                    alt="Image Slider">
                                            </div>
                                            <div class="item-info horizontal-center vertical-middle">
                                                <div class="content text-center">
                                                    <div class="subtitle-slider">Spring Collection</div>
                                                    <h2 class="title-slider">Summer <br>Collection 2022</h2>
                                                    <a class="button-slider button-white"
                                                        href="shop-grid-left.html">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item slick-slide">
                                        <div class="item-content">
                                            <div class="content-image">
                                                <img width="1920" height="1080"
                                                    src="{{ asset('client/media/slider/33.jpg') }}"
                                                    alt="Image Slider">
                                            </div>
                                            <div class="item-info horizontal-center vertical-middle">
                                                <div class="content text-center">
                                                    <div class="subtitle-slider">Spring Collection</div>
                                                    <h2 class="title-slider">Spring <br> Collection 2022</h2>
                                                    <a class="button-slider button-white"
                                                        href="shop-grid-left.html">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-small-padding">
                            <!-- Block Product Categories -->
                            <div class="block block-product-cats layout-6 x-small-space">
                                <div class="block-content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 md-b-10">
                                            <div class="cat-item">
                                                <div class="cat-image">
                                                    <a href="shop-grid-left.html">
                                                        <img width="469" height="475"
                                                            src="{{ asset('client/media/product/cat-27.jpg') }}"
                                                            alt="Product Category">
                                                    </a>
                                                </div>
                                                <div class="cat-title">
                                                    <a href="shop-grid-left.html">
                                                        Furniture
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 md-b-10">
                                            <div class="cat-item">
                                                <div class="cat-image">
                                                    <a href="shop-grid-left.html">
                                                        <img width="469" height="475"
                                                            src="{{ asset('client/media/product/cat-28.jpg') }}"
                                                            alt="Product Category">
                                                    </a>
                                                </div>
                                                <div class="cat-title">
                                                    <a href="shop-grid-left.html">
                                                        Lighting
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 md-b-10">
                                            <div class="cat-item">
                                                <div class="cat-image">
                                                    <a href="shop-grid-left.html">
                                                        <img width="469" height="475"
                                                            src="{{ asset('client/media/product/cat-29.jpg') }}"
                                                            alt="Product Category">
                                                    </a>
                                                </div>
                                                <div class="cat-title">
                                                    <a href="shop-grid-left.html">
                                                        Modern
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="cat-item">
                                                <div class="cat-image">
                                                    <a href="shop-grid-left.html">
                                                        <img width="469" height="475"
                                                            src="{{ asset('client/media/product/cat-30.jpg') }}"
                                                            alt="Product Category">
                                                    </a>
                                                </div>
                                                <div class="cat-title">
                                                    <a href="shop-grid-left.html">
                                                        Bed & Bath
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-30">
                            <div class="section-container">
                                <!-- Block Products -->
                                <div class="block block-products slider">
                                    <div class="block-widget-wrap">
                                        <div class="block-title title-underline">
                                            <h2>New Arrivals</h2>
                                            <div class="title-right">
                                                <a href="shop-grid-left.html">View all new arrivals</a>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="content-product-list slick-wrap">
                                                <div class="slick-sliders products-list grid"
                                                    data-slidestoscroll="true" data-dots="false" data-nav="1"
                                                    data-columns4="1" data-columns3="2" data-columns2="3"
                                                    data-columns1="3" data-columns1440="4" data-columns="4">
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/1.jpg') }}"
                                                                                class="post-image" alt="">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/1-2.jpg') }}"
                                                                                class="hover-image back"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a rel="nofollow" href="#"
                                                                                class="product-btn button">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">Add to
                                                                                wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button
                                                                                class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview"
                                                                            data-title="Quick View">
                                                                            <a href="#"
                                                                                class="quickview quickview-button">Quick
                                                                                View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a
                                                                                href="shop-details.html">Zunkel
                                                                                Schwarz</a></h3>
                                                                        <span class="price">$100.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/2.jpg') }}"
                                                                                class="post-image" alt="">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/2-2.jpg') }}"
                                                                                class="hover-image back"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a rel="nofollow" href="#"
                                                                                class="product-btn button">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">Add to
                                                                                wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button
                                                                                class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview"
                                                                            data-title="Quick View">
                                                                            <a href="#"
                                                                                class="quickview quickview-button">Quick
                                                                                View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a
                                                                                href="shop-details.html">Namaste
                                                                                Vase</a></h3>
                                                                        <span class="price">$200.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/3.jpg') }}"
                                                                                class="post-image" alt="">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/3-2.jpg') }}"
                                                                                class="hover-image back"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a rel="nofollow" href="#"
                                                                                class="product-btn button">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">Add to
                                                                                wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button
                                                                                class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview"
                                                                            data-title="Quick View">
                                                                            <a href="#"
                                                                                class="quickview quickview-button">Quick
                                                                                View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a
                                                                                href="shop-details.html">Chair Oak Matt
                                                                                Lacquered</a></h3>
                                                                        <span class="price">$150.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-33%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/4.jpg') }}"
                                                                                class="post-image" alt="">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/4-2.jpg') }}"
                                                                                class="hover-image back"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a rel="nofollow" href="#"
                                                                                class="product-btn button">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">Add to
                                                                                wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button
                                                                                class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview"
                                                                            data-title="Quick View">
                                                                            <a href="#"
                                                                                class="quickview quickview-button">Quick
                                                                                View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a
                                                                                href="shop-details.html">Pillar Dining
                                                                                Table Round</a></h3>
                                                                        <span class="price">
                                                                            <del
                                                                                aria-hidden="true"><span>$150.00</span></del>
                                                                            <ins><span>$100.00</span></ins>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="onsale">-7%</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-details.html">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/5.jpg') }}"
                                                                                class="post-image" alt="">
                                                                            <img width="600" height="600"
                                                                                src="{{ asset('client/media/product/5-2.jpg') }}"
                                                                                class="hover-image back"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart"
                                                                            data-title="Add to cart">
                                                                            <a rel="nofollow" href="#"
                                                                                class="product-btn button">Add to
                                                                                cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist"
                                                                            data-title="Wishlist">
                                                                            <button class="product-btn">Add to
                                                                                wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button
                                                                                class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview"
                                                                            data-title="Quick View">
                                                                            <a href="#"
                                                                                class="quickview quickview-button">Quick
                                                                                View <i class="icon-search"></i></a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-stock">
                                                                        <span class="stock">Out Of Stock</span>
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a
                                                                                href="shop-details.html">Amp Pendant
                                                                                Light Large</a></h3>
                                                                        <span class="price">
                                                                            <del
                                                                                aria-hidden="true"><span>$150.00</span></del>
                                                                            <ins><span>$140.00</span></ins>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section top-border p-t-70 m-b-70">
                            <div class="block block-banners banners-effect">
                                <div class="block-title title-big">
                                    <h2>Rupper Exclusive Online Furniture Store</h2>
                                </div>
                                <div class="block-content">
                                    <div class="block-widget-banner layout-14 no-space">
                                        <div class="banners">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="961" height="590"
                                                                src="{{ asset('client/media/banner/banner-25.jpg') }}"
                                                                alt="Banner Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 banner-infor">
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <a class="link-title" href="shop-grid-left.html">
                                                                    <h3 class="title-banner">Furniture</h3>
                                                                </a>
                                                                <div class="banner-image-description">
                                                                    Style any outdoor area with some careful study and
                                                                    sound decisions.
                                                                </div>
                                                                <a class="button btn-underline"
                                                                    href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 banner-infor">
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <a class="link-title" href="shop-grid-left.html">
                                                                    <h3 class="title-banner">Decor</h3>
                                                                </a>
                                                                <div class="banner-image-description">
                                                                    Style any outdoor area with some careful study and
                                                                    sound decisions.
                                                                </div>
                                                                <a class="button btn-underline"
                                                                    href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="961" height="590"
                                                                src="{{ asset('client/media/banner/banner-26.jpg') }}"
                                                                alt="Banner Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="961" height="590"
                                                                src="{{ asset('client/media/banner/banner-27.jpg') }}"
                                                                alt="Banner Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 banner-infor">
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <a class="link-title" href="shop-grid-left.html">
                                                                    <h3 class="title-banner">Lighting</h3>
                                                                </a>
                                                                <div class="banner-image-description">
                                                                    Style any outdoor area with some careful study and
                                                                    sound decisions.
                                                                </div>
                                                                <a class="button btn-underline"
                                                                    href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 banner-infor">
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <a class="link-title" href="shop-grid-left.html">
                                                                    <h3 class="title-banner">Kitchen & Bath</h3>
                                                                </a>
                                                                <div class="banner-image-description">
                                                                    Style any outdoor area with some careful study and
                                                                    sound decisions.
                                                                </div>
                                                                <a class="button btn-underline"
                                                                    href="shop-grid-left.html">SHOP NOW</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="961" height="590"
                                                                src="{{ asset('client/media/banner/banner-28.jpg') }}"
                                                                alt="Banner Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding m-b-70">
                            <div class="section-container">
                                <!-- Block Testimonial -->
                                <div class="block block-testimonial layout-1">
                                    <div class="block-widget-wrap">
                                        <div class="block-content">
                                            <div class="testimonial-wrap slick-wrap">
                                                <div class="slick-sliders" data-slidestoscroll="true" data-nav="1"
                                                    data-dots="0" data-columns4="1" data-columns3="1"
                                                    data-columns2="1" data-columns1="1" data-columns="1">
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div>
                                                                </div>
                                                                <div class="testimonial-excerpt">
                                                                    ” Wonderful communication and your company even sent
                                                                    a generous amount of samples to me, making my
                                                                    decision to spend money on an internet item easy.
                                                                    Thank you. Product quality is perfect. “
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="62" height="62"
                                                                        src="{{ asset('client/media/testimonial/1.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Robet Smith
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="rating">
                                                                    <div class="star star-4"></div>
                                                                </div>
                                                                <div class="testimonial-excerpt">
                                                                    ” Wonderful communication and your company even sent
                                                                    a generous amount of samples to me, making my
                                                                    decision to spend money on an internet item easy.
                                                                    Thank you. Product quality is perfect. “
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="62" height="62"
                                                                        src="{{ asset('client/media/testimonial/2.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Saitama One
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <div class="item">
                                                            <div class="testimonial-item">
                                                                <div class="rating">
                                                                    <div class="star star-5"></div>
                                                                </div>
                                                                <div class="testimonial-excerpt">
                                                                    ” Wonderful communication and your company even sent
                                                                    a generous amount of samples to me, making my
                                                                    decision to spend money on an internet item easy.
                                                                    Thank you. Product quality is perfect. “
                                                                </div>
                                                            </div>
                                                            <div class="testimonial-image image-position-top">
                                                                <div class="thumbnail">
                                                                    <img width="62" height="62"
                                                                        src="{{ asset('client/media/testimonial/3.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="testimonial-info">
                                                                    <h2 class="testimonial-customer-name">Sara Colinton
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section section-padding top-border p-t-70 m-b-70">
                            <div class="section-container">
                                <!-- Block Feature -->
                                <div class="block block-feature no-border">
                                    <div class="block-widget-wrap">
                                        <div class="row lg-m-lr">
                                            <div class="col-lg-3 col-md-6 col-sm-6 md-b-30 lg-p-lr">
                                                <div class="box">
                                                    <div class="box-icon">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="svg-icon plant" x="0" y="0" viewBox="0 0 64 64"
                                                                style="enable-background:new 0 0 512 512"
                                                                xml:space="preserve">
                                                                <g>
                                                                    <g xmlns="http://www.w3.org/2000/svg"
                                                                        id="Shipping">
                                                                        <path
                                                                            d="M54.416,37.9a3.906,3.906,0,0,0-1.665-1.562,4,4,0,0,0-3.8.1L38.915,42.227A3.978,3.978,0,0,0,37.657,40a4.062,4.062,0,0,0-2.667-1H28.829a1,1,0,0,1-.708-.293l-.244-.244A4.964,4.964,0,0,0,24.345,37H16.66c-.151,0-.3.01-.5.025a5,5,0,0,0-3.039,1.438L10.5,41.086l-.933-.933a1,1,0,0,0-1.414,0L2.494,45.8a1,1,0,0,0,0,1.415l14.139,14.15a1,1,0,0,0,1.415,0l5.66-5.66a1,1,0,0,0,0-1.414l-.793-.793.207-.207A1,1,0,0,1,23.829,53h11.1a4.933,4.933,0,0,0,2.5-.674l15.52-8.96a3.96,3.96,0,0,0,2-3.466A4.018,4.018,0,0,0,54.416,37.9ZM17.34,59.246,4.615,46.511l4.244-4.238L21.586,55ZM51.95,41.634,36.422,50.6a2.941,2.941,0,0,1-1.492.4h-11.1a2.978,2.978,0,0,0-2.122.879l-.207.207L11.914,42.5l2.623-2.623a2.988,2.988,0,0,1,1.807-.86c.11-.009.213-.017.316-.017h7.685a2.979,2.979,0,0,1,2.118.877l.244.244A2.978,2.978,0,0,0,28.829,41H34.99a2.048,2.048,0,0,1,1.344.5,1.962,1.962,0,0,1,.66,1.287,1.9,1.9,0,0,1-.133.92,1.809,1.809,0,0,1-.448.709A1.983,1.983,0,0,1,35,45H28.42a1,1,0,0,0,0,2H35a3.973,3.973,0,0,0,2.827-1.173,3.829,3.829,0,0,0,.781-1.113l11.338-6.546a2.014,2.014,0,0,1,1.914-.04,1.929,1.929,0,0,1,.823.77,2.015,2.015,0,0,1,.267,1A1.983,1.983,0,0,1,51.95,41.634Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M15,34H51a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1V33A1,1,0,0,0,15,34ZM35,4v8H31V4ZM16,4H29v9a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4H50V32H16Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M25,28H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M25,25H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M29,25H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M25,22H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M29,22H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M29,28H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                        <path
                                                                            d="M47,24H37a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H47a1,1,0,0,0,1-1V25A1,1,0,0,0,47,24Zm-1,4H38V26h8Z"
                                                                            fill="" data-original=""
                                                                            style=""></path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="box-title-wrap">
                                                        <h3 class="box-title">
                                                            Free Shipping
                                                        </h3>
                                                        <p class="box-description">
                                                            You will love at great low prices
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 md-b-30 lg-p-lr">
                                                <div class="box">
                                                    <div class="box-icon">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="svg-icon2 plant" x="0" y="0"
                                                                viewBox="0 0 513.063 513.063"
                                                                style="enable-background:new 0 0 512 512"
                                                                xml:space="preserve">
                                                                <g>
                                                                    <g xmlns="http://www.w3.org/2000/svg"
                                                                        id="XMLID_779_">
                                                                        <g id="XMLID_484_">
                                                                            <path id="XMLID_581_"
                                                                                d="m418.532 205.063h-191.127c8.838-10.159 14.208-23.411 14.208-37.902 0-31.889-25.943-57.832-57.832-57.832s-57.832 25.943-57.832 57.832c0 14.491 5.37 27.743 14.207 37.902h-45.624c-27.57 0-50 22.43-50 50v58.999c0 5.523 4.477 10 10 10s10-4.477 10-10v-58.999c0-16.542 13.458-30 30-30h280c16.542 0 30 13.458 30 30v54h-104c-27.57 0-50 22.43-50 50s22.43 50 50 50h104v54c0 16.542-13.458 30-30 30h-280c-16.542 0-30-13.458-30-30v-59.078c0-5.523-4.477-10-10-10s-10 4.477-10 10v59.078c0 27.57 22.43 50 50 50h324c27.57 0 50-22.43 50-50v-208c0-27.57-22.43-50-50-50zm-234.751-75.733c20.861 0 37.832 16.971 37.832 37.832s-16.971 37.832-37.832 37.832c-20.86 0-37.832-16.971-37.832-37.832s16.971-37.832 37.832-37.832zm230.724 95.733h4.027c16.542 0 30 13.458 30 30v54h-24v-54c0-11.247-3.735-21.637-10.027-30zm-143.973 134c0-16.542 13.458-30 30-30h148v60h-148c-16.542 0-30-13.458-30-30zm148 134h-4.027c6.292-8.363 10.027-18.752 10.027-30v-54h24v54c0 16.542-13.458 30-30 30z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                            <path id="XMLID_1260_"
                                                                                d="m297.972 349.062c-2.64 0-5.22 1.07-7.08 2.93s-2.92 4.44-2.92 7.07 1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93 2.63 0 5.2-1.07 7.07-2.93 1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07c-1.86-1.861-4.44-2.93-7.07-2.93z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                            <path id="XMLID_1711_"
                                                                                d="m329.283 137.66c31.889 0 57.832-25.943 57.832-57.832 0-31.888-25.943-57.832-57.832-57.832s-57.832 25.943-57.832 57.832 25.943 57.832 57.832 57.832zm0-95.663c20.86 0 37.832 16.971 37.832 37.832s-16.971 37.832-37.832 37.832-37.832-16.971-37.832-37.832 16.971-37.832 37.832-37.832z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                            <path id="XMLID_1712_"
                                                                                d="m231.613 98.581c5.523 0 10-4.477 10-10v-78.581c0-5.523-4.477-10-10-10s-10 4.477-10 10v78.581c0 5.523 4.477 10 10 10z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                            <path id="XMLID_1757_"
                                                                                d="m183.613 64c5.523 0 10-4.477 10-10v-44c0-5.523-4.477-10-10-10s-10 4.477-10 10v44c0 5.523 4.477 10 10 10z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                            <path id="XMLID_1760_"
                                                                                d="m54.532 369.062c2.63 0 5.21-1.07 7.07-2.93s2.93-4.44 2.93-7.07-1.07-5.21-2.93-7.07-4.43-2.93-7.07-2.93c-2.63 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.439 2.93 7.07 2.93z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="box-title-wrap">
                                                        <h3 class="box-title">
                                                            Flexible Payment
                                                        </h3>
                                                        <p class="box-description">
                                                            Pay with Multiple Credit Cards
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 md-b-30 lg-p-lr">
                                                <div class="box">
                                                    <div class="box-icon">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="svg-icon2 plant" x="0" y="0"
                                                                viewBox="0 0 512.001 512.001"
                                                                style="enable-background:new 0 0 512 512"
                                                                xml:space="preserve">
                                                                <g>
                                                                    <g xmlns="http://www.w3.org/2000/svg">
                                                                        <g>
                                                                            <path
                                                                                d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26    c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561    c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188    c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58    c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166    C512,237.745,454.954,180.699,384.834,180.699z"
                                                                                fill="" data-original=""
                                                                                style=""></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="box-title-wrap">
                                                        <h3 class="box-title">
                                                            14 Day Returns
                                                        </h3>
                                                        <p class="box-description">
                                                            Within 30 days for an exchange.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 md-b-30 lg-p-lr">
                                                <div class="box">
                                                    <div class="box-icon">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                class="svg-icon2 plant" x="0" y="0"
                                                                viewBox="0 0 479.965 479.965"
                                                                style="enable-background:new 0 0 512 512"
                                                                xml:space="preserve">
                                                                <g>
                                                                    <path xmlns="http://www.w3.org/2000/svg"
                                                                        d="m433.737 148.658-.135 232.91c-.012 22.527-23.058 37.706-43.805 28.854-10.328-4.417-4.09-19.158 6.31-14.704 10.146 4.33 21.489-3.028 21.495-14.16l.135-232.905c0-73.143-59.51-132.653-132.658-132.653h-70.684c-73.148 0-132.658 59.51-132.658 132.658l.046 84.339c.002 4.418-3.577 8.002-7.996 8.004-4.418.002-8.002-3.576-8.004-7.996l-.046-84.343c0-81.974 66.687-148.662 148.658-148.662h70.684c81.97 0 148.658 66.688 148.658 148.658zm-43.249 46.3c0-3.576-2.373-6.718-5.813-7.695-28.699-8.157-52.95-29.228-64.479-58.278-2.517-6.346-11.366-6.82-14.53-.746-12.747 24.464-32.552 44.98-58.176 58.619.114-10.951-2.578-22.012-8.212-32.027-2.812-4.998-9.796-5.469-13.283-.994-10.676 13.7-29.434 32.284-58.17 43.013-4.14 1.546-6.242 6.154-4.697 10.293 1.547 4.141 6.156 6.24 10.293 4.697 25.487-9.516 43.953-24.507 56.473-37.942 2.062 7.8 2.186 16.173.035 24.402-1.667 6.384 4.701 11.939 10.803 9.414 29.883-12.382 54.279-32.693 71.328-58.765 14.307 25.285 36.867 43.099 62.429 51.882v104.087c0 48.504-28.468 92.987-72.524 113.327-4.011 1.853-5.762 6.605-3.91 10.617 1.853 4.01 6.603 5.762 10.617 3.91 49.378-22.797 81.397-72.475 81.813-126.779.005-.179.003-110.857.003-111.035zm-154.324 195.644c-14.535-14.533-38.057-14.534-52.593 0-4.693 4.697-12.335 4.695-17.028 0l-31.007-31.005c-4.695-4.695-4.694-12.336.001-17.03 4.077-4.078 7.078-8.897 8.919-14.326 1.419-4.185-.822-8.727-5.007-10.146-4.183-1.42-8.727.822-10.146 5.007-1.045 3.083-2.755 5.824-5.082 8.151-10.932 10.934-10.932 28.723 0 39.657l31.007 31.006c10.935 10.934 28.725 10.932 39.657 0 8.279-8.281 21.684-8.281 29.964 0l14.647 14.646c8.28 8.28 8.282 21.683 0 29.964-23.261 23.263-61.109 23.261-84.368 0l-75.518-75.518c-23.261-23.26-23.261-61.108 0-84.368 8.261-8.263 21.702-8.263 29.963-.002l1.599 1.6c5.206 5.208 13.771 1.152 13.753-5.771l-.188-69.488c-.012-4.411-3.591-7.979-8-7.979-4.426 0-8.012 3.593-8 8.021l.147 54.248c-47.626-19.81-89.98 65.661-40.588 115.054l75.518 75.518c29.501 29.499 77.496 29.499 106.997 0 14.533-14.535 14.534-38.058-.001-52.593zm-18.427-113.602v-21c0-4.418-3.582-8-8-8s-8 3.582-8 8v21c0 4.418 3.582 8 8 8s8-3.582 8-8zm80-21c0-4.418-3.582-8-8-8s-8 3.582-8 8v21c0 4.418 3.582 8 8 8s8-3.582 8-8zm-30.8 81.6c-11.185 8.39-26.871 8.649-38.399.001-3.534-2.652-8.549-1.936-11.2 1.599s-1.936 8.549 1.599 11.2c17.277 12.963 40.807 12.596 57.601.001 3.535-2.651 4.251-7.666 1.601-11.2-2.655-3.537-7.671-4.252-11.202-1.601z"
                                                                        fill="" data-original=""
                                                                        style=""></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="box-title-wrap">
                                                        <h3 class="box-title">
                                                            Online Support
                                                        </h3>
                                                        <p class="box-description">
                                                            24 hours a day, 7 days a week
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>

        <footer id="site-footer" class="site-footer">
            <div class="footer">
                <div class="section-padding">
                    <div class="section-container large">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">About</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="page-about.html">Our Story</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Visit Melbourne Studio</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Visit Sydney Studio</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Visit Brisbane Studio [Closed]</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Design</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">How Ruper Works</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Help</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="page-faq.html">Contact & FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">Track Your Order</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">Returns & Refunds</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">Shipping & Delivery</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">Lead Times</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-menu">
                                        <h2 class="block-title">Services</h2>
                                        <div class="block-content">
                                            <ul>
                                                <li>
                                                    <a href="page-about.html">Sale</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Quick Ship</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">New Designs</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Accidental Fabric Protection</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Furniture Care</a>
                                                </li>
                                                <li>
                                                    <a href="page-about.html">Gift Cards</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="block block-newsletter m-b-30">
                                        <h2 class="block-title">Newsletter</h2>
                                        <div class="block-content">
                                            <div class="newsletter-text">Enter your email below to be the first to know
                                                about new collections and product launches.</div>
                                            <form action="#" method="post" class="newsletter-form">
                                                <input type="email" name="your-email" value=""
                                                    size="40" placeholder="Email address">
                                                <span class="btn-submit">
                                                    <input type="submit" value="Subscribe">
                                                </span>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="block block-social">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="section-padding">
                    <div class="section-container large">
                        <div class="block-widget-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-left">
                                        <p class="copyright">Copyright © 2022. All Right Reserved</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-right">
                                        <div class="block block-image">
                                            <img width="309" height="32"
                                                src="{{ asset('client/media/payments.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back Top button -->
    <div class="back-top button-show">
        <i class="arrow_carrot-up"></i>
    </div>

    <!-- Search -->
    <div class="search-overlay">
        <div class="close-search"></div>
        <div class="wrapper-search">
            <form role="search" method="get" class="search-from ajax-search" action="#">
                <div class="search-box">
                    <button id="searchsubmit" class="btn" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input id="myInput" type="text" autocomplete="off" value="" name="s"
                        class="input-search s" placeholder="Search...">
                    <div class="search-top">
                        <div class="close-search">Cancel</div>
                    </div>
                    <div class="content-menu_search">
                        <label>Suggested</label>
                        <ul id="menu_search" class="menu">
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Home Décor</a></li>
                            <li><a href="#">Industrial</a></li>
                            <li><a href="#">Kitchen</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Wishlist -->
    <div class="wishlist-popup">
        <div class="wishlist-popup-inner">
            <div class="wishlist-popup-content">
                <div class="wishlist-popup-content-top">
                    <span class="wishlist-name">Wishlist</span>
                    <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                    <span class="wishlist-popup-close"></span>
                </div>
                <div class="wishlist-popup-content-mid">
                    <table class="wishlist-items">
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600"
                                            src="{{ asset('client/media/product/3.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Chair Oak Matt Lacquered</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <span>$150.00</span>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#" class="button">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="wishlist-item-remove"><span></span></td>
                                <td class="wishlist-item-image">
                                    <a href="shop-details.html">
                                        <img width="600" height="600"
                                            src="{{ asset('client/media/product/4.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td class="wishlist-item-info">
                                    <div class="wishlist-item-name">
                                        <a href="shop-details.html">Pillar Dining Table Round</a>
                                    </div>
                                    <div class="wishlist-item-price">
                                        <del aria-hidden="true"><span>$150.00</span></del>
                                        <ins><span>$100.00</span></ins>
                                    </div>
                                    <div class="wishlist-item-time">June 4, 2022</div>
                                </td>
                                <td class="wishlist-item-actions">
                                    <div class="wishlist-item-stock">
                                        In stock
                                    </div>
                                    <div class="wishlist-item-add">
                                        <div data-title="Add to cart">
                                            <a rel="nofollow" href="#" class="button">Add to cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wishlist-popup-content-bot">
                    <div class="wishlist-popup-content-bot-inner">
                        <a class="wishlist-page" href="shop-wishlist.html">
                            Open wishlist page
                        </a>
                        <span class="wishlist-continue" data-url="">
                            Continue shopping
                        </span>
                    </div>
                    <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compare -->
    <div class="compare-popup">
        <div class="compare-popup-inner">
            <div class="compare-table">
                <div class="compare-table-inner">
                    <a href="#" id="compare-table-close" class="compare-table-close">
                        <span class="compare-table-close-icon"></span>
                    </a>
                    <div class="compare-table-items">
                        <table id="product-table" class="product-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="compare-table-settings">Settings</a>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Chair Oak Matt Lacquered</a> <span
                                            class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Zunkel Schwarz</a> <span
                                            class="remove">remove</span>
                                    </th>
                                    <th>
                                        <a href="shop-details.html">Namaste Vase</a> <span
                                            class="remove">remove</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-image">
                                    <td class="td-label">Image</td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600"
                                                src="{{ asset('client/media/product/3.jpg') }}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600"
                                                src="{{ asset('client/media/product/1.jpg') }}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="shop-details.html">
                                            <img width="600" height="600"
                                                src="{{ asset('client/media/product/2.jpg') }}" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tr-sku">
                                    <td class="td-label">SKU</td>
                                    <td>VN00189</td>
                                    <td></td>
                                    <td>D1116</td>
                                </tr>
                                <tr class="tr-rating">
                                    <td class="td-label">Rating</td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:80%"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="star-rating">
                                            <span style="width:100%"></span>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="tr-price">
                                    <td class="td-label">Price</td>
                                    <td><span class="amount">$150.00</span></td>
                                    <td><del><span class="amount">$150.00</span></del> <ins><span
                                                class="amount">$100.00</span></ins></td>
                                    <td><span class="amount">$200.00</span></td>
                                </tr>
                                <tr class="tr-add-to-cart">
                                    <td class="td-label">Add to cart</td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-title="Add to cart">
                                            <a href="#" class="button">Add to cart</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="tr-description">
                                    <td class="td-label">Description</td>
                                    <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida
                                        nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec
                                        dignissim viverra nunc, ut aliquet magna posuere eget.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</td>
                                    <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece
                                        comfort all year around. Feel better in this sweatshirt because Hanes keeps
                                        plastic bottles of landfills by using recycled polyester.7.8 ounce fleece
                                        sweatshirt made with up to 5 percent polyester created from recycled plastic.
                                    </td>
                                </tr>
                                <tr class="tr-content">
                                    <td class="td-label">Content</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                        omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</td>
                                </tr>
                                <tr class="tr-dimensions">
                                    <td class="td-label">Dimensions</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quickview -->
    <div class="quickview-popup">
        <div id="quickview-container">
            <div class="quickview-container">
                <a href="#" class="quickview-close"></a>
                <div class="quickview-notices-wrapper"></div>
                <div class="product single-product product-type-simple">
                    <div class="product-detail">
                        <div class="row">
                            <div class="img-quickview">
                                <div class="product-images-slider">
                                    <div id="quickview-slick-carousel">
                                        <div class="images">
                                            <div class="scroll-image">
                                                <div class="slick-wrap">
                                                    <div class="slick-sliders image-additional" data-dots="true"
                                                        data-columns4="1" data-columns3="1" data-columns2="1"
                                                        data-columns1="1" data-columns="1" data-nav="true">
                                                        <div class="img-thumbnail slick-slide">
                                                            <a href="{{ asset('client/media/product/3.jpg') }}"
                                                                class="image-scroll" title="">
                                                                <img width="900" height="900"
                                                                    src="{{ asset('client/media/product/3.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="img-thumbnail slick-slide">
                                                            <a href="{{ asset('client/media/product/3-2.jpg') }}"
                                                                class="image-scroll" title="">
                                                                <img width="900" height="900"
                                                                    src="{{ asset('client/media/product/3-2.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quickview-single-info">
                                <div class="product-content-detail entry-summary">
                                    <h1 class="product-title entry-title">Chair Oak Matt Lacquered</h1>
                                    <div class="price-single">
                                        <div class="price">
                                            <del><span>$150.00</span></del>
                                            <span>$100.00</span>
                                        </div>
                                    </div>
                                    <div class="product-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                            <span style="width:80%">Rated <strong class="rating">4.00</strong> out
                                                of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <a href="#" class="review-link">(<span class="count">1</span>
                                            customer review)</a>
                                    </div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore…</p>
                                    </div>
                                    <form class="cart" method="post" enctype="multipart/form-data">
                                        <div class="quantity-button">
                                            <div class="quantity">
                                                <button type="button" class="plus">+</button>
                                                <input type="number" class="input-text qty text" step="1"
                                                    min="1" max="" name="quantity" value="1"
                                                    title="Qty" size="4" placeholder=""
                                                    inputmode="numeric" autocomplete="off">
                                                <button type="button" class="minus">-</button>
                                            </div>
                                            <button type="submit" class="single-add-to-cart-button button alt">Add
                                                to cart</button>
                                        </div>
                                        <button class="button quick-buy">Buy It Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div class="page-preloader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Dependency Scripts -->
    <script src="{{ asset('client/libs/popper/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/libs/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/libs/slick/js/slick.min.js') }}"></script>
    <script src="{{ asset('client/libs/countdown/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('client/libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('client/assets/js/app.js') }}"></script>
</body>

</html>
