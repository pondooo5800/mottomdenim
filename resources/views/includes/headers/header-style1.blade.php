{{-- {{ dd($header_menu) }} --}}
<!-- //header style One-->
<header id="headerOne" class="header-area header-one  header-desktop d-none d-lg-block d-xl-block">
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
                                style="color: #494F69">
                                English
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($data['language'] as $languages)
                                <a style="color: #494F69" class="dropdown-item language-default"
                                    href=" {{ url('/lang/' . $languages->code) }}" data-id={{ $languages->id }}
                                    data-name="{{ $languages->name }}">{{ $languages->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-maxi bg-header-bar">
        <div class="container" style="max-width:1300px!important;">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-4" style="text-align: end">
                    <a href="{{ url('/') }}" class="logo" data-toggle="tooltip" data-placement="bottom"
                        title="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                        <img style="width: 218px;height: 116px;" class="img-fluid"
                            src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}"
                            alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                    </a>
                </div>
                <div class="col-12 col-md-5">
                    <ul class="pro-header-right-options">
                        <form class="form-inline">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.header-search-products') }}">
                                        <i style="font-size: 18px;color: #494F69" class="fas fa-search"></i></button>
                                 </span>
                                <input autocomplete="off" style="color:#494F69;border: none;border-bottom: 2px solid #494F69ed;" type="search" placeholder="{{ trans('lables.header-search-products') }}" name="search" class="form-control">
                            </div>
                        </form>
                        {{-- <div class="auth-login">
                            <a href="{{ url('/profile') }}">
                                {{ trans('lables.header-my-account') }}
                            </a>
                        </div> --}}
                        <li>
                            <a href="{{ url('/login') }}"style="font-size:14px;font-weight:normal; padding-right: 0;color: #494F69;">
                                {{ trans('lables.login-login') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/wishlist') }}" class="btn" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-wishlist') }}">
                                <i style="color:#494F69;font-size: 22px" class='fa fa-heart-o'></i>
                                 <span style="display: none;" class="badge badge-secondary wishlist-count">0</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="headerOneCartButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="cart-left">
                                    <img class="img-fluid" style="width: 20px" src="{{ asset("assets/images/fa-shopping-bag.png") }}" alt="Product Image">
                                    <span class="badge total-menu-cart-product-count">0</span>
                                </div>
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
                                <a class="btn btn-link btn-block " href="{{ url('/cart') }}">{{
                                    trans('lables.header-view-cart') }}</a>
                                <a class="btn btn-secondary btn-block  swipe-to-top" href="{{ url('/checkout') }}">{{
                                    trans('lables.header-checkout') }}</a>
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
                {{-- <div class="col-12 col-sm-6">
                    <form class="form-inline">
                        <div class="search-field-module">
                            <button style="border-color:#fff;  background-color: #fff;color: #B4B3B3;
                            font-weight: bold;" class="btn btn-secondary dropdown-toggle selected_category"
                                type="button" id="headerOneCartButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-all-categories') }}">
                                หมวดหมู่
                                {{ trans('lables.header-all-categories') }}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                                @foreach ($data['category'] as $categories)
                                <a class="dropdown-item cat-dropdown" href="javascript:void(0)"
                                    data-id="{{ $categories->id }}"
                                    data-name="{{ isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name : '' }}">{{
                                    isset($categories->detail[0]->category_name) ? $categories->detail[0]->category_name
                                    : '' }}</a>
                                @endforeach

                            </div>
                            <div class="search-field-wrap">
                                <input type="search" style="font-weight: lighter;"
                                    placeholder="{{ isset($_GET['search']) ? $_GET['search'] : trans('lables.header-search-products').'...' }}"
                                    data-toggle="tooltip" data-placement="bottom" title="Search Item" id="search-input">
                                <button style="border-color:#fff;  background-color: #fff;color: #B4B3B3;"
                                    class="btn btn-secondary" id="search_button" data-toggle="tooltip"
                                    data-placement="bottom" title="{{ trans('lables.header-search-products') }}">
                                    <i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div> --}}

                {{-- <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <ul class="pro-header-right-options">
                        <div class="auth-login">
                            <a href="{{ url('/profile') }}">
                                {{ trans('lables.header-my-account') }}
                            </a>
                        </div>
                        <li class="login-registerModal">
                            <a href="#" data-target="#login-registerModal" data-toggle="modal" data-tooltip="tooltip"
                                class="btn" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-login-register') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/wishlist') }}}}" class="btn" data-toggle="tooltip" data-placement="bottom"
                                title="{{ trans('lables.header-wishlist') }}">
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

                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart"> {{ trans('lables.header-cart') }} </span>
                                    <span class="cart-item"> {{ trans('lables.header-item') }} </span>
                                </div>
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
                                <a class="btn btn-link btn-block " href="{{ url('/cart') }}">{{
                                    trans('lables.header-view-cart') }}</a>
                                <a class="btn btn-secondary btn-block  swipe-to-top" href="{{ url('/checkout') }}">{{
                                    trans('lables.header-checkout') }}</a>
                            </li>
                        </template>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">
                            <ul class="shopping-cart-items top-cart-product-show">
                                <li>{{ trans('lables.header-emptycart') }}</li>
                            </ul>


                        </div>
                        </li>
                    </ul>
                </div> --}}
            </div>
            <div class="header-navbar bg-menu-bar" style="padding-bottom:0px">
                <div class="container">
                    <nav id="navbar_header_1" class="navbar navbar-expand-lg  bg-nav-bar" style="background-color: #fff;justify-content: center;">
                        <div class="navbar-collapse" style="justify-content: center;">
                            @include('includes.headers.main-menu')
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <hr style="border-color: #494F69">
    <div class="container" style="max-width:1300px!important;">
        <a href="{{url('/refund')}}">
            <span style="border-bottom: 1px solid #494F69;font-size: 14px;color: #494F69"> {{ trans('lables.home-servics-policy') }}</span>&nbsp; &nbsp; &nbsp; &nbsp;
        </a>
        <label style="font-size: 14px;color: #494F69">{{ trans('lables.home-servics-by-free') }}</label>&nbsp; &nbsp; &nbsp; &nbsp;
        <label style="font-size: 14px;color: #494F69">{{ trans('lables.home-servics-cash') }}</label>
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
