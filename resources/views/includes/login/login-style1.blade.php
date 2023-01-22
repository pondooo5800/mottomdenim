<!-- login Content -->
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
            @if(getSetting()['authenticate_with_email_password'] == '1')
            <div class="col-12 col-sm-12 col-md-5">

                <div class="heading">
                    <p style="font-size: 18px;font-weight: bold;color:#494F69;">
                        {{ trans('lables.login-login') }}
                    </p>
                </div>
                <div class="col-12 registration-process">

                    <form id="loginForm">
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="input-group">
                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="text" class="form-control" id="loginEmail" placeholder="{{ trans('lables.login-email') }}">
                                </div>
                                <small class="email errors d-none" style="color:red"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="input-group">
                                    <input  style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="password" class="form-control" id="loginPassword" placeholder="{{ trans('lables.login-password') }}">
                                </div>
                                <small class="password errors d-none" style="color:red"></small>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
                            <div class="col-12 " style="border-width: 0.5px;border-bottom-color: #494F69;">
                                <a style=" text-decoration-line: underline;color:#494F69;font-size: 13px;font-weight: normal" href="{{ url('/forget-password') }}">{{ trans('lables.login-forget-password') }}?</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <button style="width: 100%; color: #B4B3B3" class="btn btn-secondary swipe-to-top" id="loginAccount">{{ trans('lables.login-login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr style="border:none;
                        border-left:1px solid hsla(200, 10%, 50%,100);
                        height:40vh;
                        width:1px;">
            <div class="col-12 col-sm-12 col-md-5">
                <div class="heading">
                    <p style="font-size: 18px;font-weight: bold;color:#494F69;">
                        {{ trans('lables.login-sign-up') }}
                    </p>
                </div>
                <div class="col-12 registration-process mb-0">
                    <p style="font-size: 14px;margin-bottom:5px;">{{ trans('lables.login-sign-up-detail-1') }}</p>
                    <p style="font-size: 14px;margin-bottom:5px;">{{ trans('lables.login-sign-up-detail-2') }}</p>
                </div>
                <div class="row" style="margin-top: 27%;">
                    <div class="col-12 ">
                        <a href="{{ url('/register') }}" style="width: 100%; color: #B4B3B3" class="btn btn-secondary swipe-to-top" id="">{{ trans('lables.login-create-account') }}</a>
                    </div>
                </div>

            </div>
            @endif
            {{-- <div class="col-12 col-sm-12 my-5">
                <div class="registration-socials">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-xl-6 ">
                            {{ trans('lables.login-access-account') }}
                        </div>
                        <div class="col-12  col-xl-6 right">
                            @if(getSetting()['authenticate_with_google'] == 1)
                            <a href="{{url('/api/client/customer_login/google')}}" type="button" class="btn btn-google google-click"><i class="fab fa-google-plus-g"></i>&nbsp;Google</a>
                            @endif
                            @if(getSetting()['authenticate_with_facebook'] == 1)
                            <a href="{{url('/api/client/customer_login/facebook')}}"  type="button" class="btn btn-facebook facebook-click"><i class="fab fa-facebook-f"></i>&nbsp;Facebook</a>
                            @endif
                            <!-- <button type="button" class="btn btn-twitter"><i class="fab fa-twitter"></i>&nbsp;Twitter</button> -->
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-12 col-sm-12 col-md-5">
                <div class="heading">
                    <p style="font-size: 18px;font-weight: bold;color:#494F69;">
                        ลงทะเบียน
                    </p>
                </div>


                <div class="col-12 registration-process mb-0">

                    <form id="registerForm">
                        <div class="row">
                            <div class="from-group mb-3 col-12 col-md-6">
                                <label for="inlineFormInputGroup">{{ trans('lables.login-first-name') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="registerFirstName" placeholder="{{ trans('lables.login-first-name') }}">
                                </div>
                                <small class="first_name errors d-none" style="color:red"></small>
                            </div>
                            <div class="from-group mb-3 col-12 col-md-6">
                                <label for="inlineFormInputGroup">{{ trans('lables.login-last-name') }}</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" id="registerLastName" placeholder="{{ trans('lables.login-last-name') }}">
                                </div>
                                <small class="last_name errors d-none" style="color:red"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <label for="inlineFormInputGroup">{{ trans('lables.login-email') }}</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" id="registerEmail" placeholder="{{ trans('lables.login-email') }}">
                                </div>
                                <small class="email errors d-none" style="color:red"></small>
                            </div>
                        </div>


                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <label for="inlineFormInputGroup">{{ trans('lables.login-password') }}</label>
                                <div class="input-group">

                                    <input type="password" class="form-control" id="registerPassword" placeholder="{{ trans('lables.login-password') }}">
                                </div>
                                <small class="password errors d-none" style="color:red"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <label for="inlineFormInputGroup">{{ trans('lables.login-confirm-password') }}</label>
                                <div class="input-group">

                                    <input type="password" class="form-control" id="registerConfirmPassword" placeholder="{{ trans('lables.login-confirm-password') }}">
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
            </div> --}}

        </div>
    </div>
</section>
