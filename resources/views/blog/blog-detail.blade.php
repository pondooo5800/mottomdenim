@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-heading-title" style="text-align: center">
        <p style="font-size: 25px;font-weight: normal; color: #494F69">{{ trans('lables.page-header-blog') }}</p>
    </div>
</div>
<br>
<section class="pro-content" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
            </div>
            <div class="col-12 col-md-4">
                <div class="row justify-content-center">
                    <div class="select-control">
                        <select style="width: 160px;" class="form-control">
                            <option value="">สัปดาห์นี้</option>
                        </select>
                    </div>
                    <div style="padding-left: 10px;padding-right: 10px;"></div>

                    <div class="select-control">
                        <select style="width: 160px;" class="form-control">
                            <option value="">Bangkok,Thailand</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Site Content -->
    <section class="blog-content">
        <div class="container">
            <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img style="width: 100%; height: auto;object-fit: unset;"
                            src="{{ asset('assets/images/mask_group.png') }}" class="img-fluid" />
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                            </div>
                    </div>
                    <div class="card-body" style="position: absolute;bottom:0;align-self: center;">
                        <h6 style="color: #fff;text-align: center" class="card-title">Bangkok Fashion Week SS23: Denim
                            Highlights
                        </h6>
                        <p class="card-text" style="color: #fff;text-align: center">
                            Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.
                        </p>
                    </div>
            </div>

        </div>
        <br>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 text-center">
                        <p style="font-size: 14px;margin-bottom:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img style="width: 100%; height: auto;object-fit: unset;"
                                src="{{ asset('assets/images/Mask-evet.png') }}" class="img-fluid" />
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                        </div>
                        <div class="card-body" style="position: absolute;bottom:0;align-self: center;">
                            <h6 style="color: #fff;text-align: center" class="card-title">Bangkok Fashion Week SS23: Denim
                                Highlights
                            </h6>
                            <p class="card-text" style="color: #fff;text-align: center">
                                Some quick example text to build on the card title and make up the bulk of
                                the
                                card's content.
                            </p>
                        </div>
                </div>

            </div>
    </section>
</section>
@endsection
