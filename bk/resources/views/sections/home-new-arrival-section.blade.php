  <section class="new-products-content pro-content" style="padding-top:50px" >
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title text-center">
              <h4 style="color: #494F69"> {{ trans('lables.home-new-arrival-title') }}
              </h4>
            </div>
          </div>
        </div>
        @include(isset(getSetting()['card_style']) ?
              'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
        <div class="new-arrival row">

        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title" style="text-align: center">
                <a href="{{ url('/shop?category=1') }}" style="width: 150px;
                border-color: #fff;color:#494F69;font-size:13px;"
                class="btn btn-light swipe-to-top shadow-sm p-3 mb-5 bg-white rounded">ทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <section class="new-products-content pro-content" style="padding-top:50px" >
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title text-center">
              <h4 style="color: #494F69"> {{ trans('lables.home-shop-title') }}
              </h4>
            </div>
          </div>
        </div>
        @include(isset(getSetting()['card_style']) ?
              'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
        <div class="product-all row">

        </div>
      </div>
    </div>
</section>
