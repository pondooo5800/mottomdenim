@extends('layouts.master')
@section('content')
<section class="page-area pro-content" style="padding-top:0px">
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 50px">
            <a href="{{ url('/') }}" class="logo" data-toggle="tooltip" data-placement="bottom"
                title="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                <img style="width: 218px;height: 116px;" class="img-fluid"
                    src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}"
                    alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
            </a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">

                <div class="heading">
                    <p style="font-size: 18px;font-weight: bold;color:#494F69;">
                        ลงทะเบียน
                    </p>
                </div>
                <div class="col-12 registration-process">

                    <form id="registerForm">
                        <div class="row">
                            <div class="from-group mb-3 col-12 col-md-6">
                                <div class="input-group">
                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="text" class="form-control" id="registerFirstName" placeholder="{{ trans('lables.login-first-name') }}">
                                </div>
                                <small class="first_name errors d-none" style="color:red"></small>
                            </div>
                            <div class="from-group mb-3 col-12 col-md-6">
                                <div class="input-group">
                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="text" class="form-control" id="registerLastName" placeholder="{{ trans('lables.login-last-name') }}">
                                </div>
                                <small class="last_name errors d-none" style="color:red"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="input-group">

                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="text" class="form-control" id="registerEmail" placeholder="{{ trans('lables.login-email') }}">
                                </div>
                                <small class="email errors d-none" style="color:red"></small>
                            </div>
                        </div>


                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="input-group">

                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="password" class="form-control" id="registerPassword" placeholder="{{ trans('lables.login-password') }}">
                                </div>
                                <small class="password errors d-none" style="color:red"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="input-group">

                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="password" class="form-control" id="registerConfirmPassword" placeholder="{{ trans('lables.login-confirm-password') }}">
                                </div>
                                <small class="confirm_password errors d-none" style="color:red"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 ">
                                <button class="btn btn-light swipe-to-top" id="createAccount">{{ trans('lables.login-create-account') }}</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="heading">
                    <p style="font-size: 18px;font-weight: bold;color:#494F69;">
                        ลงทะเบียน
                    </p>
                </div>
                <div class="col-12 registration-process mb-0">
                    <p style="font-size: 14px;margin-bottom:5px;">หากคุณไม่มีบัญชี ของเว็ปไซต์ Mottom Denim</p>
                    <p style="font-size: 14px;margin-bottom:5px;">สามารถสมัครได้ที่นี่</p>
                </div>
                <div class="row" style="margin-top: 27%;">
                    <div class="col-12 ">
                        <a href="{{ url('/register') }}" style="width: 100%; color: #B4B3B3"
                            class="btn btn-secondary swipe-to-top" id="loginAccount">{{
                            trans('lables.login-create-account') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
