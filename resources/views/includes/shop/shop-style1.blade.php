<!-- Shop Page One content -->
<?php
    $categoryURL = request()->get('category');
    $shopURL = request()->segment(1);

    // dd($categoryURL);
?>
<section class="pro-content" style="padding-top: 10px">
    <div class="container">
        <div class="page-heading-title" style="text-align: center;padding-bottom:0px">
            <?php if ($categoryURL == '1') {?>
                <p style="font-size: 25px;font-weight: normal; color: #494F69"> {{ trans('lables.shop-new-arrivar') }}</p>
            <?php } elseif ($categoryURL == '2') { ?>
                <p style="font-size: 25px;font-weight: normal; color: #494F69"> {{ trans('lables.shop-sell') }}</p>
            <?php } elseif ($shopURL == 'shop') { ?>
                <p style="font-size: 25px;font-weight: normal; color: #494F69"> {{ trans('lables.home-shop-title') }}</p>
            <?php }?>
        </div>
        @if (isset($page->page_detail))

            <section class="contact-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            {!! $page->page_detail[0]->description !!}
                        </div>
                    </div>

                </div>
            </section>
    @else

    @endif
    </div>

    <section id="swap" class="shop-content shop-topbar shop-one">
        <div class="container">
            <div class="products-area">
                @include(isset(getSetting()['card_style']) ?
                'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
                <div class="row shop_page_product_card">

                </div>

            </div>

        </div>
    </section>

</section>
