<section class="pro-content header-section">
  <!-- //footer style Two -->
  <footer id="footerTwo" class="footer-area footer-two  d-lg-block d-xl-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-2 col-lg-2">
          <div class="footer-block">
              <div class="single-footer single-footer-left">
                <div class="container">
                    <div class="row">
                        <ul class="links-list pl-0">
                            <li> <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/shop?category=1') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.shop-new-arrivar') }}">{{ trans('lables.shop-new-arrivar') }}</a> </li>
                            <li> <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/shop') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.home-shop-title') }}">{{ trans('lables.home-shop-title') }}</a> </li>
                            <li> <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/blog') }}" data-toggle="tooltip" data-placement="left" title="อีเว้นท์">อีเว้นท์</a> </li>
                            <li> <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/about-us') }}" data-toggle="tooltip" data-placement="left" title="เกี่ยวกับ">เกี่ยวกับ</a> </li>
                            <li> <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/contact-us') }}" data-toggle="tooltip" data-placement="left" title="ติดต่อ">ติดต่อ</a> </li>
                            <li>
                                <a style="color: #B4B3B3;font-weight:normal;font-size: 15px;" href="{{ url('/shop?category=2') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.shop-sell') }}">{{ trans('lables.shop-sell') }} </a>
                            </li>
                        </ul>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <div class="container-fluid d-flex">
                <div class="row facebook-social">
                   <div class="col d-flex" >
                       <img class="gear mt-auto" width="45px" src="{{ asset('assets/images/logo-facebook.png') }}" data-toggle="tooltip" data-placement="bottom" title="FACEBOOK">
                   </div>
               </div>
            </div>

        </div>

        <div class="col-12 col-lg-6">
          <div class="single-footer">
              <div class="socials">
                        <div class="row">
                            <div class="col-12">
                                <h4 style="font-weight:normal;color:#B4B3B3">ร่วมกับเรา</h4>
                                <span style="font-size:15px;color:#B4B3B3">สมัครเพื่อรับส่วนลด</span>
                                <br>
                                <br>
                                <form id="registerForm">
                                    <div class="row">
                                        <div class="from-group mb-3 col-12 col-md-6">
                                            <div class="input-group">
                                                <input style="background-color: #F4F4F4;border-radius: 50px;" type="text" class="form-control" id="registerFirstName" placeholder="ชื่อ นามสกุล">
                                            </div>
                                            <small class="first_name errors d-none" style="color:red"></small>
                                        </div>
                                        <div class="from-group mb-3 col-12 col-md-6">
                                            <div class="input-group">
                                                <input style=" background-color: #F4F4F4;border-radius: 50px;" type="text" class="form-control" id="registerLastName" placeholder="อีเมล">
                                            </div>
                                            <small class="last_name errors d-none" style="color:red"></small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12" style="text-align: end">
                                            <button style="background-color: #000;font-weight: normal" class="btn btn-light swipe-to-top" id="createAccount">สมัครสมาชิก</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="footer-info">
                                    <span style="color:#B4B3B3"> ©&nbsp;2022 Mottom Denim.
                                        Powered by Shopify</span>
                                  </div>
                                  <div class="footer-image">
                                    <img style="height: 35px" class="img-fluid" src="{{ asset('assets/front/images/miscellaneous/payments2.png') }}">
                                </div>
                            </div>
                        </div>
              </div>

          </div>
        </div>
      </div>
    </div>
    <br><br>
</footer>
  </section>
