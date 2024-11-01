<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    {{--
    <!-- Required meta tags --> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin(Sajad)</title>
    {{--
    <!-- plugins:css --> --}}
    <link rel="stylesheet" href={{ asset('vendors/feather/feather.css') }}>
    {{--
    <!-- endinject -->
    <!-- Plugin css for this page --> --}}
    <link rel="stylesheet" href={{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('js/select.dataTables.min.css') }} />
    {{--
    <!-- End plugin css for this page -->
    <!-- inject:css --> --}}
    <link rel="stylesheet" href={{ asset('css/vertical-layout-light/style.css') }}>
    {{--
    <!-- endinject --> --}}
    <link rel="shortcut icon" href={{ asset('images/favicon.png') }} />
</head>

<body style="font-family: IranSans !important;">
<div class="container-scroller">
    {{--
    <!-- partial:partials/_navbar.html --> --}}
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                        </div>
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

                        <p class="mb-0 font-weight-normal float-left dropdown-header">اعلان ها</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">ارور سایت</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="ti-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">تنظیمات</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="ti-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">ثبت نام کاربر جدید</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="images/faces/face28.jpg" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <div style="margin-left: -5px">
                                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                <dotlottie-player src="https://lottie.host/1633372b-d5f3-4c1b-9eeb-d7cca76c9e92/aazaRvPSkJ.json" background="transparent" speed="1" style="width: 50px; height: 50px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                            </div></i>
                            تظیمات
                        </a>
                        <a class="dropdown-item" href={{ route('Home') }}>
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/d8d94fef-5baf-47c0-b0d5-79b0bfb1c3d7/poN370Jquw.json" background="transparent" speed="1" style="width: 40px; height: 40px" direction="1" playMode="normal" loop autoplay></dotlottie-player>خروج از حساب
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-flex">
                    <a class="nav-link" href="#">
                        <i class="icon-ellipsis"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/1633372b-d5f3-4c1b-9eeb-d7cca76c9e92/aazaRvPSkJ.json" background="transparent" speed="1" style="width: 50px; height: 50px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            </div>
            <div id="theme-settings" class="settings-panel">
                <div class="settings-close" style="margin-top: -10px">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                    <dotlottie-player src="https://lottie.host/9d476bf6-daaa-4143-8164-a7b29e307a45/nO4vkBABc6.json" background="transparent" speed="1" style="width: 40px; height: 40px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
                </div>
                <p class="settings-heading" style="font-family: IranSans !important;">رنگ منو سمت چپ</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>روشن
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>تیره
                </div>
                <p class="settings-heading mt-2" style="font-family: IranSans !important;">رنگ منو بالا</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <div class="settings-close" style="margin-top: -10px">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/9d476bf6-daaa-4143-8164-a7b29e307a45/nO4vkBABc6.json" background="transparent" speed="1" style="width: 40px; height: 40px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
            </div>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">لیست کار های من</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                        aria-controls="chats-section">پیام ها</a>
                </li> --}}
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="فقط بنویسش 🫡">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">اضافه کن</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            {{-- <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li> --}}
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 font-weight-light mb-0"></h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span></span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray"></p>
                        <p class="text-gray mb-0"></p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span></span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray"></p>
                        <p class="text-gray mb-0 "></p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    {{-- <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">دوست ها</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">دیدن
                            همه</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">

                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul> --}}
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class={{request()->is('Admin') ? "nav-item" : 'nav-itemnotactive'}}>
                    <a class={{request()->is('Admin') ? "nav-link active" : 'nav-link'}} href="{{ route('Admin') }}">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">خانه</span>
                    </a>
                </li>
                <li class={{request()->is('AddProduct') ? "nav-item" : 'nav-item' }}>
                    <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">محصولات</span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href={{ route('AddProduct') }}>اضافه کردن محصول</a></li>
                            <li class="nav-item"><a class="nav-link" href={{ route('EditProduct') }}>ویرایش محصول</a></li>
                            <li class="nav-item"><a class="nav-link" href={{ route('DeleteProduct') }}>حذف محصول</a></li>
                        </ul>
                    </div>
                </li>
                <li class={{request()->is('CategoryAdmin') ? "nav-item" : 'nav-item' }}>
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="undefined" aria-controls="form-elements">
                        <i class="icon-columns menu-icon"></i>
                        <span class="menu-title">دسته بندی</span>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href={{ route('CategoryAdmin') }}>دسته بندی محصولات</a></li>
                        </ul>
                    </div>
                </li>
                <li class={{request()->is('UsersAdmin') ? "nav-item" : 'nav-item' }}>
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="icon-bar-graph menu-icon"></i>
                        <span class="menu-title">کاربران</span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href={{ route('UsersAdmin') }}>لیست کاربران</a></li>
                        </ul>
                    </div>
                </li>
                <!-- partial -->
                <div class="main-panel">
                    <div class="body-form">
                        <div class="form">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>

                </div>
                <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
</body>

</html>

