  <!-- NEW Arrival -->
  <style>

.mottom .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 20px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.cheval .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 20px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
  </style>
  <section class="new-products-content pro-content" >
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title">
              <h2> {{ trans('lables.home-new-arrival-title') }}
              </h2>
              {{-- <p>{{ trans('lables.home-new-arrival-description') }}</p> --}}
            </div>
          </div>
        </div>
        @include(isset(getSetting()['card_style']) ?
              'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
        <div class="new-arrival row">

        </div>
      </div>
    </div>
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title" style="text-align: center">
                <a href="{{ url('/shop') }}" style="border-radius: 20px; border-width: 2px;
                border-color: #B4B3B3;"
                class="btn btn-light swipe-to-top">ดูทั้งหมด</a>
            </div>
          </div>
          <div class="col-12" style="padding-top: 20px">
            <div class="pro-heading-title"style="text-align: center">
                <div class="container">
                    <div class="row">
                      <div class="col-sm">
                         <div class="mottom">
                    <img style="height: 380px;
                    width: 380px;
                    border-radius: 0px;
                    " src="{{ asset('assets/images/TopBanner.png') }}" alt="mottom">
                    <a href="{{ url('/mottom') }}" class="btn">Mottom</a>
                  </div>
                  <br>
                      </div>
                      <div class="col-sm">
                        <div class="cheval">
                    <img style="height: 380px;
                    width: 380px;
                    border-radius: 0px;
                    " src="{{ asset('assets/images/TopBanner.png') }}" alt="cheval">
                    <a href="{{ url('/cheval') }}" class="btn">Cheval</a>
                  </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>