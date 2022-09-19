  <section class="new-products-content pro-content" >
    <div class="banner-six banner_div banners-content">

        <div class="container">
            <div class="group-banners">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                      <div class="imagespace">
                      <figure class="banner-image ">
                          <a href="" class="banner-link5"><img style="object-fit: contain;height: 570px;" class="responsive" src="{{ asset('/images/maskgroup/mask_group1.png') }}" alt="Banner Image"></a>
                      </figure>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6">
                            <div class="imagespace">
                            <figure class="banner-image ">
                              <a href="" class="banner-link1"><img style="object-fit: contain; class="responsive" src="{{ asset('/images/maskgroup/mask_group2.png') }}" alt="Banner Image"></a>
                            </figure>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6">
                            <div class="imagespace">
                            <figure class="banner-image ">
                              <a href="" class="banner-link2"><img style="object-fit: contain; class="responsive" src="{{ asset('/images/maskgroup/mask_group3.png') }}" alt="Banner Image"></a>
                            </figure>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6">
                            <div class="imagespace">
                            <figure class="banner-image ">
                                <a href="" class="banner-link3"><img style="object-fit: contain; class="responsive" src="{{ asset('/images/maskgroup/mask_group4.png') }}" alt="Banner Image"></a>
                            </figure>
                            </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6">
                              <div class="imagespace">
                              <figure class="banner-image ">
                                  <a href="" class="banner-link4"><img style="object-fit: contain; class="responsive" src="{{ asset('/images/maskgroup/mask_group5.png') }}" alt="Banner Image"></a>
                                </figure>
                              </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>

    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title">
              <h2> {{ trans('lables.home-new-arrival-title') }}
              </h2>
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
                <a href="{{ url('/shop?category=1') }}" style="border-radius: 20px; border-width: 2px;
                border-color: #B4B3B3;"
                class="btn btn-light swipe-to-top">ดูทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12" style="text-align: center">
                <iframe width="100%" height="480" src="https://www.youtube.com/embed/_MH9bvrWTec" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
                </iframe>
          </div>
        </div>
      </div>
    </div>
</section>
