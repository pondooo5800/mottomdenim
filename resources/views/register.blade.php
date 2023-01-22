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
                            <div class="from-group mb-3 col-12 col-lg-6">
                                <div class="input-group">
                                    <input style="border-color: transparent;
                                    border-bottom-color: #494F69;
                                    border-width: 1.5px;
                                    color: #494F69;" type="text" class="form-control" id="registerFirstName" placeholder="{{ trans('lables.login-first-name') }}">
                                </div>
                                <small class="first_name errors d-none" style="color:red"></small>
                            </div>
                            <div class="from-group mb-3 col-12 col-lg-6">
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
                            <div class="from-group mb-3 col-12">
                                <div class="form-group">
                                    <div class="select-control">
                                        <select  style="height: 41px;width: 240px;"class="form-control " id="country_id" onchange="states()">
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="form-group">
                                    <div class="select-control">
                                        <select style="height: 41px;width: 240px;" class="form-control" id="state_id">
                                            <option value="">{{ trans('lables.shipping-address-select-district') }}</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group mb-3 col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input style="width: 19px;height: 19px;" class="form-check-input" type="checkbox" value="" id="">
                                        <label style="color: #494F69" class="form-check-label">
                                            &nbsp; {{ trans('lables.checkout-news') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input style="width: 19px;height: 19px;" class="form-check-input" type="checkbox" value="" id="">
                                        <label style="color: #494F69" class="form-check-label">
                                            &nbsp; {{ trans('lables.checkout-confrem') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="from-group mb-3 col-12">
                        <div class="input-group">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="text" class="form-control" id="street_address" placeholder="{{ trans('lables.shipping-address-stret-address') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="from-group mb-3 col-lg-6 col-12">
                        <div class="input-group">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="text" class="form-control" id="postcode" placeholder="{{ trans('lables.shipping-address-postal-code') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="from-group mb-3 col-lg-6 col-12">
                        <div class="input-group">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="text" class="form-control" id="country_multiple" placeholder="{{ trans('lables.shipping-address-country_multiple') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="from-group mb-3 col-12 col-lg-3">
                        <div class="input-group">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="text" class="form-control" id="number_phone" placeholder="{{ trans('lables.shipping-address-num-phone') }}">
                        </div>
                    </div>
                    <div class="from-group mb-3 col-12 col-lg-6">
                        <div class="input-group">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="text" class="form-control" id="phone" placeholder="{{ trans('lables.shipping-address-phone') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style=" color: #494F69;"
                        class="col-3 col-form-label">{{ trans('lables.profile-dob') }}</label>
                    <div class="col-lg-6 col-12">
                        <div class="input-group date">
                            <input style="border-color: transparent;
                            border-bottom-color: #494F69;
                            border-width: 1.5px;
                            color: #494F69;" type="date" class="form-control datepicker" id="dob">
                        </div>

                    </div>
                </div>
                <div class="row" style="margin-top: 27%;">
                        <div class="col-12 ">
                            <button style="width: 100%;color: #B4B3B3" class="btn btn-secondary swipe-to-top" id="createAccount">{{ trans('lables.login-create-account') }}</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        countries();
    });
    // $("#shippingAddressForm").submit(function(e) {
    //     e.preventDefault();
    //     first_name = $("#shippingAddressForm").find("#first_name").val();
    //     last_name = $("#shippingAddressForm").find("#last_name").val();
    //     street_address = $("#shippingAddressForm").find("#street_address").val();
    //     country_id = $("#shippingAddressForm").find("#country_id").val();
    //     state_id = $("#shippingAddressForm").find("#state_id").val();
    //     city = $("#shippingAddressForm").find("#city").val();
    //     postcode = $("#shippingAddressForm").find("#postcode").val();

    //     gender = $("#shippingAddressForm").find("#gender").val();
    //     dob = $("#shippingAddressForm").find("#dob").val();
    //     phone = $("#shippingAddressForm").find("#phone").val();
    //     method = $("#shippingAddressForm").find("#method").val();
    //     latlong = $("#shippingAddressForm").find("#location").val();
    //     if (method == 'post') {
    //         url = '/api/client/customer_address_book';
    //     } else {
    //         ids = $("#shippingAddressForm").find("#addres_id").val();
    //         url = '/api/client/customer_address_book/' + ids;
    //     }

    //     $.ajax({
    //         type: method,
    //         url: "{{ url('') }}" + url,
    //         data: {
    //             is_default: '1',
    //             gender: gender,
    //             dob: dob,
    //             phone: phone,
    //             postcode:postcode,
    //             city_id:city,
    //             state_id:state_id,
    //             country_id:country_id,
    //             street_address:street_address,
    //             last_name:last_name,
    //             first_name:first_name,
    //             type: 'profile',
    //             latlong:latlong,
    //         },
    //         headers: {
    //             'Authorization': 'Bearer ' + customerToken,
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    //             clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
    //             clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
    //         },
    //         beforeSend: function() {},
    //         success: function(data) {
    //             if (data.status == 'Success') {
    //                 toastr.success('{{ trans("response.shipping-add-successfully") }}')
    //                 getCustomerAdress();
    //             } else if (data.status == 'Error') {
    //                 toastr.error('{{ trans("response.some_thing_went_wrong") }}');
    //             }
    //             $("#shippingAddressForm").find("#first_name").val('');
    //             $("#shippingAddressForm").find("#last_name").val('');
    //             $("#shippingAddressForm").find("#street_address").val('');
    //             $("#shippingAddressForm").find("#country_id").val('');
    //             $("#shippingAddressForm").find("#state_id").val('');
    //             $("#shippingAddressForm").find("#city").val('');
    //             $("#shippingAddressForm").find("#postcode").val('');
    //             $("#shippingAddressForm").find("#gender").val('');
    //             $("#shippingAddressForm").find("#dob").val('');
    //             $("#shippingAddressForm").find("#phone").val('');
    //             $("#shippingAddressForm").find("#method").val('');
    //             $("#shippingAddressForm").find("#location").val('');
    //         },
    //         error: function(data) {
    //             console.log();
    //             if (data.status == 422) {
    //                 jQuery.each(data.responseJSON.errors, function(index, item) {
    //                     $("#" + index).parent().find('.invalid-feedback').css('display', 'block');
    //                     $("#" + index).parent().find('.invalid-feedback').html(item);
    //                 });
    //             } else {
    //                 toastr.error('{{ trans("response.some_thing_went_wrong") }}');
    //             }
    //         },
    //     });
    // });

    function countries(){
        $.ajax({
            type: 'get',
            url: "{{ url('') }}/api/client/country?getAllData=1",
            headers: {
                'Authorization': 'Bearer ' + customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    html = '<option value="">{{ trans('lables.shipping-address-select-address') }}</option>';
                    for(i=0;i<data.data.length;i++){
                        selected = '';
                        if($.trim($("#country_id_hidden").val()) != '' && $.trim($("#country_id_hidden").val()) == data.data[i].country_id){
                            selected = 'selected';
                            $("#country_id_hidden").val('');
                        }
                        html += '<option value="'+data.data[i].country_id+'" '+selected+'>'+data.data[i].country_name+'</option>';
                    }
                    $("#country_id").html(html);
                    if($.trim($("#state_id_hidden").val()) != ''){
                        $("#country_id").trigger('change');
                        $("#state_id").trigger('change');
                    }


                } else if (data.status == 'Error') {
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
            error: function(data) {
            },
        });
    }

    function states(){
        country_id = $("#country_id").val();
        if(country_id == ''){
            $("#state_id").html('');
            return;
        }

        $.ajax({
            type: 'get',
            url: "{{ url('') }}/api/client/state?country_id="+country_id+'&getAllData=1',
            headers: {
                'Authorization': 'Bearer ' + customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    html = '<option value="">{{ trans('lables.shipping-address-select-district') }}</option>';
                    for(i=0;i<data.data.length;i++){
                        selected = '';
                        if($.trim($("#state_id_hidden").val()) != '' && $.trim($("#state_id_hidden").val()) == data.data[i].id){
                            selected = 'selected';
                        }
                        html += '<option value="'+data.data[i].id+'" '+selected+'>'+data.data[i].name+'</option>';
                    }
                    $("#state_id").html(html);
                    $("#state_id_hidden").val('');
                } else if (data.status == 'Error') {
                    toastr.error('{{ trans("response.some_thing_went_wrong") }}');
                }
            },
            error: function(data) {
            },
        });
    }
</script>
@endsection

