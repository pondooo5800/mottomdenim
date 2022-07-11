{{-- {{ dd($header_menu) }} --}}
<!-- //header style One-->
<header id="headerOne" class="header-area header-one  header-desktop d-none d-lg-block d-xl-block">
    {{-- <?php
    echo '<pre>';
    print_r($data['language']);
    ?> --}}
    {{-- @if (trans('lables.header-top-offer') != '')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="container">
                <div class="pro-description">
                    <div class="pro-info">
                        {!! trans('lables.header-top-offer') !!}
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    @endif --}}

    <div class="header-mini bg-top-bar" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 text-end">

                    <div class="navbar-lang" style="justify-content: end">

                        <div class="dropdown">
                            <button class="btn dropdown-toggle language-default-name" type="button"
                                style="color: black">
                                English
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($data['language'] as $languages)
                                    <a style="color: black" class="dropdown-item language-default"
                                        href=" {{ url('/lang/' . $languages->code) }}" data-id={{ $languages->id }}
                                        data-name="{{ $languages->name }}">{{ $languages->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="dropdown">
                            <button class="btn dropdown-toggle" id="selected-currency" type="button" style="color: black">
                                USD
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($data['currency'] as $currencies)
                                    <a style="color: black" class="dropdown-item selected-currency" data-id="{{ $currencies->id }}"
                                        data-code="{{ $currencies->title }}"
                                        href="javascript:void(0)">{{ $currencies->title }}</a>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                </div>

                {{-- <div class="col-12 col-md-6 without-auth-login">
                    <ul class="link-list pro-header-options">
                        <li>
                        <li class="link-item">
                            <div class="nav-link -before"
                            style="padding-right: 0;color: #000;">
                            &nbsp;{{ trans('lables.header-welcome-user') }}</div>
                        </li>
                        </li>
                    </ul>
                </div> --}}
                {{-- <div class="col-12 col-md-6 auth-login">
                    <ul class="pro-header-options">
                        <li>
                            <p> {{ trans('lables.header-welcome-text') }} <span class="welcomeUsername"></span></p>
                        </li>
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button">
                                {{ trans('lables.header-my-account') }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/profile') }}"
                                    title="{{ trans('lables.header-profile') }}">{{ trans('lables.header-profile') }}</a>
                                <a class="dropdown-item" href="{{ url('/wishlist') }}"
                                    title="{{ trans('lables.header-wishlist') }}">{{ trans('lables.header-wishlist') }}</a>
                                <a class="dropdown-item" href="{{ url('/compare') }}"
                                    title="{{ trans('lables.header-compare') }}">{{ trans('lables.header-compare') }}</a>
                                <a class="dropdown-item" href="{{ url('/orders') }}"
                                    title="{{ trans('lables.header-order') }}">{{ trans('lables.header-order') }}</a>
                                @if (isset(getSetting()['point_setting']) && getSetting()['point_setting'] == 'enable')
                                    <a class="dropdown-item" href="{{ url('/points') }}"
                                        title="{{ trans('lables.header-points') }}">{{ trans('lables.header-points') }}</a>
                                @endif
                                <a class="dropdown-item" href="{{ url('/shipping-address') }}"
                                    title="{{ trans('lables.header-shipping-address') }}">{{ trans('lables.header-shipping-address') }}</a>
                                <a class="dropdown-item" href="{{ url('/change-password') }}"
                                    title="{{ trans('lables.header-change-password') }}">{{ trans('lables.header-change-password') }}</a>
                                <a class="dropdown-item log_out" href="javascript:void(0)"
                                    title="{{ trans('lables.header-logout') }}">{{ trans('lables.header-logout') }}</a>
                            </div>
                        </li>
                    </ul>

                </div> --}}
            </div>
        </div>
    </div>
    <div class="header-maxi bg-header-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-3">
                    <a href="{{ url('/') }}" class="logo" data-toggle="tooltip" data-placement="bottom"
                        title="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                        <img style="width: 180px;height: 79px;" class="img-fluid"
                            src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}"
                            alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                    </a>
                </div>

                <div class="col-12 col-sm-6">
                    <form class="form-inline">
                        <div class="search-field-module">
                            <button style="border-color:#fff;  background-color: #fff;color: #B4B3B3;
                            font-weight: lighter;" class="btn btn-secondary dropdown-toggle selected_category"
                                type="button" id="headerOneCartButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-all-categories') }}">
                                หมวดหมู่
                                {{-- {{ trans('lables.header-all-categories') }} --}}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                                @foreach ($data['category'] as $categories)
                                    <a class="dropdown-item cat-dropdown" href="javascript:void(0)"
                                        data-id="{{ $categories->id }}"
                                        data-name="{{ isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name : '' }}">{{ isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name : '' }}</a>
                                @endforeach

                            </div>
                            <div class="search-field-wrap">
                                <input type="search"
                                    placeholder="{{ isset($_GET['search']) ? $_GET['search'] : trans('lables.header-search-products') . '...' }}"
                                    data-toggle="tooltip" data-placement="bottom" title="Search Item" id="search-input">
                                <button style="border-color:#fff;  background-color: #fff;color: #B4B3B3;" class="btn btn-secondary" id="search_button" data-toggle="tooltip"
                                    data-placement="bottom" title="{{ trans('lables.header-search-products') }}">
                                    <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <ul class="pro-header-right-options">
                        <div class="auth-login">
                            <a href="{{ url('/profile') }}">
                                {{ trans('lables.header-my-account') }}
                            </a>
                        </div>
                        <li class="login-registerModal">
                            <a href="#" data-target="#login-registerModal" data-toggle="modal"
                                data-tooltip="tooltip" class="btn" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-login-register') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/wishlist') }}" class="btn" data-toggle="tooltip"
                                data-placement="bottom" title="{{ trans('lables.header-wishlist') }}">
                                <i class="far fa-heart"></i>
                                <span class="badge badge-secondary wishlist-count">0</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="headerOneCartButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="cart-left">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="badge badge-secondary total-menu-cart-product-count">0</span>
                                </div>

                                {{-- <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart"> {{ trans('lables.header-cart') }} </span>
                                    <span class="cart-item"> {{ trans('lables.header-item') }} </span>
                                </div> --}}
                            </button>
                            <template id="top-cart-product-template">
                        <li class="top-cart-product-id">
                            <div class="item-thumb">

                                <div class="image">
                                    <img class="img-fluid top-cart-product-image" src="" alt="Product Image">
                                </div>
                            </div>
                            <div class="item-detail">
                                <h3 class="top-cart-product-name"></h3>
                                <div class="item-s top-cart-product-qty-amount"></div>
                            </div>
                        </li>
                        </template>
                        <template id="top-cart-product-total-template">
                            <li>
                                <span class="item-summary ">{{ trans('lables.header-total') }}&nbsp;:&nbsp;<span
                                        class="top-cart-product-total"></span>
                                </span>
                            </li>
                            <li>
                                <a class="btn btn-link btn-block "
                                    href="{{ url('/cart') }}">{{ trans('lables.header-view-cart') }}</a>
                                <a class="btn btn-secondary btn-block  swipe-to-top"
                                    href="{{ url('/checkout') }}">{{ trans('lables.header-checkout') }}</a>
                            </li>
                        </template>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                            <ul class="shopping-cart-items top-cart-product-show">
                                <li>{{ trans('lables.header-emptycart') }}</li>
                            </ul>


                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar bg-menu-bar">
        <div class="container">
            <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">

                <div class="navbar-collapse"
                    style="background-color: #fff;align-items: center;justify-content: center;">
                    @include('includes.headers.main-menu')
                </div>
            </nav>
        </div>
    </div>
    <div class="modal fade" id="login-registerModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:0;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="heading">
                            <h2 style="justify-content: center">
                                {{ trans('lables.login-login') }}
                            </h2>
                        </div>
                        <div class="col-12 registration-process">
                            <form id="loginForm">
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label for="inlineFormInputGroup">{{ trans('lables.login-email') }}</label>
                                        <div class="input-group">
                                            <input
                                                style="
                                        width: 60%;
                                        height: 40px;
                                        margin: 0 auto;
                                        margin-top:10px;
                                        background-color: #F3F1F1;
                                        border: snow;
                                        border-radius: 20px;"
                                                type="text" class="form-control" id="loginEmail"
                                                placeholder="{{ trans('lables.login-email') }}">
                                        </div>
                                        <small class="email errors d-none" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <div style="display: flex;justify-content: space-between;">
                                            <label
                                                for="inlineFormInputGroup">{{ trans('lables.login-password') }}</label>
                                            <div style="text-decoration-line: underline;">
                                                <a href="{{ url('/forget-password') }}"><span
                                                        style="color:#B4B3B3">{{ trans('lables.login-forget-password') }}</span></a>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <input
                                                style="
                                        width: 60%;
                                        height: 40px;
                                        margin: 0 auto;
                                        margin-top:10px;
                                        background-color: #F3F1F1;
                                        border: snow;
                                        border-radius: 20px;"type="password"
                                                class="form-control" id="loginPassword"
                                                placeholder="{{ trans('lables.login-password') }}">
                                        </div>
                                        <small class="password errors d-none" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div style="display: flex;justify-content: space-between;">
                                            <button style="border-radius: 20px;background-color: #116095;border: snow;"
                                                class="btn btn-secondary swipe-to-top"
                                                id="loginAccount">{{ trans('lables.login-login') }}</button>
                                            <div style="text-decoration-line: underline;">
                                                <a data-toggle="modal" href="#create-accountModal"><span
                                                        style="color:#000">{{ trans('lables.login-create-account') }}</span></a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="create-accountModal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:0;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="heading">
                            <h2 style="justify-content: center">
                                {{ trans('lables.login-create-account') }}
                            </h2>
                        </div>
                        <div class="col-12 registration-process">
                            <form id="registerForm">
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label
                                            for="inlineFormInputGroup">{{ trans('lables.login-first-name') }}</label>
                                        <div class="input-group">
                                            <input
                                                style="
                                            width: 60%;
                                            height: 40px;
                                            margin: 0 auto;
                                            margin-top:10px;
                                            background-color: #F3F1F1;
                                            border: snow;
                                            border-radius: 20px;"
                                                type="text" class="form-control" id="registerFirstName"
                                                placeholder="{{ trans('lables.login-first-name') }}">
                                        </div>
                                        <small class="first_name errors d-none" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label
                                            for="inlineFormInputGroup">{{ trans('lables.login-last-name') }}</label>
                                        <div class="input-group">

                                            <input
                                                style="
                                            width: 60%;
                                            height: 40px;
                                            margin: 0 auto;
                                            margin-top:10px;
                                            background-color: #F3F1F1;
                                            border: snow;
                                            border-radius: 20px;"
                                                type="text" class="form-control" id="registerLastName"
                                                placeholder="{{ trans('lables.login-last-name') }}">
                                        </div>
                                        <small class="last_name errors d-none" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label for="inlineFormInputGroup">{{ trans('lables.login-email') }}</label>
                                        <div class="input-group">

                                            <input
                                                style="
                                            width: 60%;
                                            height: 40px;
                                            margin: 0 auto;
                                            margin-top:10px;
                                            background-color: #F3F1F1;
                                            border: snow;
                                            border-radius: 20px;"
                                                type="text" class="form-control" id="registerEmail"
                                                placeholder="{{ trans('lables.login-email') }}">
                                        </div>
                                        <small class="email errors d-none" style="color:red"></small>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label
                                            for="inlineFormInputGroup">{{ trans('lables.login-password') }}</label>
                                        <div class="input-group">

                                            <input
                                                style="
                                            width: 60%;
                                            height: 40px;
                                            margin: 0 auto;
                                            margin-top:10px;
                                            background-color: #F3F1F1;
                                            border: snow;
                                            border-radius: 20px;"
                                                type="password" class="form-control" id="registerPassword"
                                                placeholder="{{ trans('lables.login-password') }}">
                                        </div>
                                        <small class="password errors d-none" style="color:red"></small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <label
                                            for="inlineFormInputGroup">{{ trans('lables.login-confirm-password') }}</label>
                                        <div class="input-group">

                                            <input
                                                style="
                                            width: 60%;
                                            height: 40px;
                                            margin: 0 auto;
                                            margin-top:10px;
                                            background-color: #F3F1F1;
                                            border: snow;
                                            border-radius: 20px;"
                                                type="password" class="form-control" id="registerConfirmPassword"
                                                placeholder="{{ trans('lables.login-confirm-password') }}">
                                        </div>
                                        <small class="confirm_password errors d-none" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="from-group mb-3 col-12">
                                        <div class="form-check" style=" padding-left: 2.25rem;">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">{{ trans('lables.check-me') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div style="display: flex;justify-content: space-between;">
                                            <button style="border-radius: 20px;"
                                                class="btn btn-secondary swipe-to-top"
                                                id="createAccount">{{ trans('lables.login-create-account') }}</button>
                                            <div style="text-decoration-line: underline;">
                                                <a data-toggle="modal" href="#create-accountModal"><span
                                                        style="color:#000">{{ trans('lables.login-login') }}</span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>


@include('includes.headers.sticky-header')

@if (isset($header_menu->menu))
    @php
        $header_menu = json_decode($header_menu->menu, true);
        $menuloop = 0;
    @endphp
    <!-- header mobile -->
    @include('includes.headers.mobile-menu')
@endif
