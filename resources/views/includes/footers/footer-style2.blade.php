<section class="pro-content header-section">
  <!-- //footer style Two -->
  <footer id="footerTwo" class="footer-area footer-two  d-lg-block d-xl-block">
    <div class="container">
      <div class="row">
        {{-- <div class="col-12 col-lg-3">
          <div class="single-footer">
            <h2 style="color: #B4B3B3;font-weight: normal;">{{ trans('lables.footer-about-store') }}</h2>

            <ul class="contact-list  pl-0 mb-0">
              <li> <i class="fas fa-map-marker"></i><span>{{isset(getSetting()['address']) ? getSetting()['address'] : '#' }}</span> </li>
              <li> <i class="fas fa-phone"></i><span>({{isset(getSetting()['phone_number']) ? getSetting()['phone_number'] : '#' }})</span> </li>
              <li> <i class="fas fa-envelope"></i><span> <a href="mailto:{{isset(getSetting()['email']) ? getSetting()['email'] : '#' }}">{{isset(getSetting()['email']) ? getSetting()['email'] : '#' }}</a> </span> </li>

            </ul>
          </div>
        </div> --}}
        <div class="col-12 col-md-6 col-lg-6">
          <div class="footer-block">
              <div class="single-footer single-footer-left">
                <h2 style="color: #B4B3B3;font-weight: normal;">{{ trans('lables.footer-about-store') }}</h2>
                <div class="container">
                    <div class="row">
                      <div class="col">
                        <ul class="links-list pl-0">
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">สินค้ามาใหม่</a> </li>
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">สินค้าขายดี</a> </li>
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">สินค้าลดราคา</a> </li>
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">Mottom</a> </li>
                        </ul>
                      </div>
                      <div class="col">
                        <ul class="links-list pl-0">
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">บทความ</a> </li>
                        <li> <a style="color: #B4B3B3;font-weight:normal" href="{{ url('/') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">ติดต่อ</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                    {{-- <li> <a href="{{ url('/shop') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shop') }}">{{ trans('lables.footer-shop') }}</a> </li>
                    <li> <a href="{{ url('/cart') }}" data-toggle="tooltip" data-placement="left" title="{{ trans('lables.footer-shopping-cart') }}">{{ trans('lables.footer-shopping-cart') }}</a> </li>
                    <li> <a href="{{ url('/wishlist') }}" data-toggle="tooltip" data-placement="left" title="{{  trans("lables.header-wishlist") }}">{{  trans("lables.header-wishlist") }}</a> </li>
                    <li> <a href="{{ url('/compare') }}" data-toggle="tooltip" data-placement="left" title="{{  trans("lables.header-compare") }}">{{  trans("lables.header-compare") }}</a> </li> --}}
              </div>

          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="single-footer">


              <div class="socials">
                        <div class="row" style="text-align: end">
                            <div class="col-12">
                                <div class="footer-info">
                                    <span style="color:#B4B3B3"> ©&nbsp;2022 Mottom Denim.
                                        Powered by Shopify</span>
                                  </div>
                                  <div class="footer-image">
                                    <img style="height: 35px" class="img-fluid" src="{{ asset('assets/front/images/miscellaneous/payments2.png') }}">
                                </div>
                            </div>
                        </div>

                  {{-- <ul class="list">

                        @if (isset(getSetting()['facebook_url']))
                        <li><a href="{{isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}" class="fab fa-facebook-f" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-facebook') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['twitter_url']))
                        <li><a href="{{isset(getSetting()['twitter_url']) ? getSetting()['twitter_url'] : '#' }}" class="fab fa-twitter" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-twitter') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['google_url']))
                        <li><a href="{{isset(getSetting()['google_url']) ? getSetting()['google_url'] : '#' }}" class="fab fa-google" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-google') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['linkedin_url']))
                        <li><a href="{{isset(getSetting()['google_url']) ? getSetting()['linkedin_url'] : '#' }}" class="fab fa-linkedin-in" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-linkedin') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['instagram_url']))
                        <li><a href="{{isset(getSetting()['instagram_url']) ? getSetting()['instagram_url'] : '#' }}" class="fab fa-instagram" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-instagram') }}"></a></li>
                        @endif

                    </ul> --}}
              </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
        <div class="copyright-content" style="background-color: #fff">
            {{-- <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                    <div class="footer-image">
                        <img class="img-fluid" src="{{ asset('assets/front/images/miscellaneous/payments.png') }}">
                    </div>

                  </div>
                  <div class="col-12 col-md-6">
                    <div class="footer-info">
                      ©&nbsp;{{ trans('lables.footer-company') }}
                    </div>

                  </div>
              </div>
            </div> --}}
          </div>
    </div>
</footer>
  </section>
