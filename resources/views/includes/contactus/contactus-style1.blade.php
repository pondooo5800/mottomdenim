


    <div class="container-fuild">
        <nav aria-label="breadcrumb" style="background-color: #fff">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">{{ trans('lables.bread-crumb-home') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ trans('lables.bread-contact') }}
                    </li>
                </ol>
            </div>
        </nav>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="fullwidth-banner"
            style="background-attachment: unset;background-size: contain;background-image: url('{{ asset('gallary/contact.jpg') }}');">
        </div>
    </div>

    <section class="pro-content">
        <div class="container">
            <div class="page-heading-title" style="text-align: center">
                <h2> {{ trans('lables.bread-contact') }}
                </h2>

            </div>
        </div>

        <!-- contact Content -->
        <section class="contact-content contact-two-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 col-lg-6">

                                <div class="">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496113.92042378994!2d100.35291010406299!3d13.725108789863835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2z4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4Lij!5e0!3m2!1sth!2sth!4v1659319955056!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    {{-- <form id="contactusForm">
                                        <div class="row">
                                            <div class="from-group mb-3 col-12">
                                                <label for="inlineFormInputGroup">{{ trans('lables.contact-fname') }}</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="first_name" placeholder="{{ trans('lables.contact-fname') }}">
                                                </div>
                                                <small class="first_name errors d-none" style="color:red"></small>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="from-group mb-3 col-12">
                                                <label for="inlineFormInputGroup">{{ trans('lables.contact-lname') }}</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="last_name" placeholder="{{ trans('lables.contact-lname') }}">
                                                </div>
                                                <small class="last_name errors d-none" style="color:red"></small>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="from-group mb-3 col-12">
                                                <label for="inlineFormInputGroup">{{ trans('lables.contact-email') }}</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="email" placeholder="{{ trans('lables.contact-email') }}">
                                                </div>
                                                <small class="email errors d-none" style="color:red"></small>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="from-group mb-3 col-12">
                                                <label for="inlineFormInputGroup">{{ trans('lables.contact-phone') }}</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="phone" placeholder="{{ trans('lables.contact-phone') }}">
                                                </div>
                                                <small class="phone errors d-none" style="color:red"></small>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="from-group mb-3 col-12">
                                                <label for="inlineFormInputGroup">{{ trans('lables.contact-message') }}</label>
                                                <div class="">
                                                    <textarea class="form-control" id="message" placeholder="{{ trans('lables.contact-message') }}" rows="5"
                                            cols=""></textarea>
                                                </div>
                                                <small class="message errors d-none" style="color:red"></small>
                                            </div>
                                        </div>




                                        <button type="submit" class="btn btn-secondary swipe-to-top">SUBMIT <i
                                                class="fas fa-location-arrow"></i></button>
                                    </form> --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-1"></div>
                            <div class="col-12 col-lg-5 contact-main">
                                <p style="font-size: 16px;">รายละเอียดที่อยู่</p>
                                <p style="font-size: 16px;">Email : <span>xxx</span> </p>
                                <p style="font-size: 16px;">Tel : <span>0xx-xxx-xxxx  , 0xx-xxx-xxxx</span></p>

                                        {{-- <ul class="contact-info pl-0 mb-0">
                                            <li> <i class="fas fa-mobile-alt"></i><span>{{isset(getSetting()['phone_number']) ? getSetting()['phone_number'] : '' }}</span> </li>
                                            <li> <i class="fas fa-map-marker"></i><span>{{isset(getSetting()['address']) ? getSetting()['address'] : '' }}</span> </li>
                                            <li> <i class="fas fa-envelope"></i><span><a href="mailto:{{isset(getSetting()['email']) ? getSetting()['email'] : '#' }}">{{isset(getSetting()['email']) ? getSetting()['email'] : '' }}</a></span> </li>
                                        </ul>
 --}}
<br>
<br>
 <div >
    <label for=""> แชร์</label>&nbsp; &nbsp;
    <a style="font-size: 25px;color: #1876D2;" href="{{isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}" class="fab fb fa-facebook-square" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-facebook') }}"></a>
</div>
                    </div>



                  </div>
                </div>
              </div>

            </div>
          </section>
          </section>

