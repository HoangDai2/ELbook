<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Admin ElBook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/config.min.js') }}"></script>

    <style>
         body { font-family: Arial, sans-serif; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .btn-view {
            background: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn-view:hover {
            background: #0056b3;
        }

        /* CSS cho modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            width: 50%;
            border-radius: 8px;
            position: relative;
            transform: scale(0.8);
            opacity: 0;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .modal.show .modal-content {
            transform: scale(1);
            opacity: 1;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <header class="topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center gap-2">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu topbar-button">
                                <iconify-icon icon="solar:hamburger-menu-broken"
                                    class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block me-auto">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search..." autocomplete="off"
                                    value="">
                                <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center gap-1">
                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-broken"
                                    class="fs-24 align-middle light-mode"></iconify-icon>
                                <iconify-icon icon="solar:sun-broken"
                                    class="fs-24 align-middle dark-mode"></iconify-icon>
                            </button>
                        </div>

                        <!-- Category -->
                        <div class="dropdown topbar-item d-none d-lg-flex">
                            <button type="button" class="topbar-button" data-toggle="fullscreen">
                                <iconify-icon icon="solar:full-screen-broken"
                                    class="fs-24 align-middle fullscreen"></iconify-icon>
                                <iconify-icon icon="solar:quit-full-screen-broken"
                                    class="fs-24 align-middle quit-fullscreen"></iconify-icon>
                            </button>
                        </div>

                        <!-- Notification -->
                        <div class="dropdown topbar-item">
                            <button type="button" class="topbar-button position-relative"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <iconify-icon icon="solar:bell-bing-broken" class="fs-24 align-middle"></iconify-icon>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 280px;">
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('public\admin\assets\images\users\avatar-1.jpg') }}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0"><span class="fw-medium">Josephine Thompson
                                                    </span>commented on admin panel <span>" Wow 😍! this
                                                        admin looks good and awesome design"</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                                <p class="mb-0 text-wrap">
                                                    Hi, How are you? What about our next meeting
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('admin/assets/images')}}/users/avatar-3.jpg"

                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Jacob Gines</p>
                                                <p class="mb-0 text-wrap">
                                                    Answered to your comment on the cash flow forecast's
                                                    graph 🔔.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                        <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-wrap">You have received
                                                    <b>20</b> new messages in the
                                                    conversation
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('admin/assets/images/users/avatar-5.jpg') }}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                                <p class="mb-0 text-wrap">
                                                    Commented on Admin
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center py-3">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All
                                        Notification <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Theme Setting -->
                        <div class="topbar-item d-none d-md-flex">
                            <button type="button" class="topbar-button" id="theme-settings-btn"
                                data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                                aria-controls="theme-settings-offcanvas">
                                <iconify-icon icon="solar:settings-broken" class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32" src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}"
                                        alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Gaston!</h6>

                                <a class="dropdown-item" href="apps-chat.html">
                                    <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Messages</span>
                                </a>

                                <a class="dropdown-item" href="pages-pricing.html">
                                    <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Pricing</span>
                                </a>
                                <a class="dropdown-item" href="pages-faqs.html">
                                    <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Help</span>
                                </a>
                                <a class="dropdown-item" href="auth-lock-screen.html">
                                    <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Lock screen</span>
                                </a>

                                <div class="dropdown-divider my-1"></div>

                                <a class="dropdown-item text-danger" href="auth-signin.html">
                                    <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                                        class="align-middle">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Right Sidebar (Theme Settings) -->
        <div>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                    <h5 class="text-white m-0">Theme Settings</h5>
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100">
                        <div class="p-3 settings-bar">

                            <div>
                                <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-light" value="light">
                                    <label class="form-check-label" for="layout-color-light">Light</label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-bs-theme"
                                        id="layout-color-dark" value="dark">
                                    <label class="form-check-label" for="layout-color-dark">Dark</label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-light" value="light">
                                    <label class="form-check-label" for="topbar-color-light">Light</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-topbar-color"
                                        id="topbar-color-dark" value="dark">
                                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                </div>
                            </div>


                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-light" value="light">
                                    <label class="form-check-label" for="leftbar-color-light">
                                        Light
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-color"
                                        id="leftbar-color-dark" value="dark">
                                    <label class="form-check-label" for="leftbar-color-dark">
                                        Dark
                                    </label>
                                </div>
                            </div>

                            <div>
                                <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-default" value="default">
                                    <label class="form-check-label" for="leftbar-size-default">
                                        Default
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small" value="condensed">
                                    <label class="form-check-label" for="leftbar-size-small">
                                        Condensed
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-hidden" value="hidden">
                                    <label class="form-check-label" for="leftbar-hidden">
                                        Hidden
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover-active" value="sm-hover-active">
                                    <label class="form-check-label" for="leftbar-size-small-hover-active">
                                        Small Hover Active
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="data-menu-size"
                                        id="leftbar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label" for="leftbar-size-small-hover">
                                        Small Hover
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="offcanvas-footer border-top p-3 text-center">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== App Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="" class="logo-dark">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                </a>

                <a href="" class="logo-light">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('admin/assets/images/logo-light.png') }}" class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:hamburger-menu-broken" class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>

                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title">Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:home-2-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                            <span class="badge bg-success badge-pill text-end"></span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarExtendedUI">
                            <span class="nav-icon"><i class='bx bx-user'></i></span>
                            <span class="nav-text"> Chức vụ </span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('role.index') }}">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--User-->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarExtendedUI">
                            <span class="nav-icon"><i class='bx bx-user'></i></span>
                            <span class="nav-text"> User </span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('user.index') }}">Danh sách người dùng</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('user.create') }}">Thêm người dùng</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end User -->

                    <!--Category-->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarCharts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:chart-square-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Danh mục </span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('category.index')}}">Danh sách danh mục</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('category.create')}}">Thêm mới danh mục</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- end Category -->

                    <!--Product-->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarForms">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:checklist-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Sản Phẩm </span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('product.index') }}">Danh sách sản phẩm</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('product.create') }}">Thêm sản phẩm</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-choices.html">Sản phẩm đã xóa</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="forms-clipboard.html">Flash Sale</a>
                                </li>

                            </ul>
                        </div>
                    </li> <!-- end Products -->

                    <!--Comment & Rating-->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarTables">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bedside-table-4-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Bình luận & Đánh giá </span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-basic.html">Bình luận</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="tables-gridjs.html">Đánh giá</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Comment & Rating -->

                    <!--Order -->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarIcons">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bicycling-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Đơn hàng </span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-boxicons.html">Danh sách đơn hàng</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.html">Chờ xử lí</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.html">Đã thanh toán</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.html">Đang giao</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.html">Hoàn thành</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="icons-solar.html">Bị hủy</a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Order -->

                    <!--Voucher-->
                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarMaps">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:streets-map-point-broken"></iconify-icon>
                            </span>
                            <span class="nav-text"> Voucher </span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('voucher.index') }}">Danh sách mã giảm giá</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="maps-vector.html">Mã giảm giá bị xóa</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('voucher.create') }}">Thêm mã giảm giá </a>
                                </li>
                            </ul>
                        </div>
                    </li> <!-- end Voucher -->

                </ul>
            </div>
        </div>
        <!-- ========== App Menu End ========== -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-fluid">

                <!-- Start here.... -->

                @yield('content')
            </div>
            <!-- End Container Fluid -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/vendor.js') }}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <!-- Vector Map Js -->
    <script src="{{ asset('admin/assets/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jsvectormap/maps/world.js') }}"></script>

    <!-- Dashboard Js -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>

</body>


<!-- Mirrored from techzaa.in/rasket/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Mar 2025 16:04:51 GMT -->

</html>
