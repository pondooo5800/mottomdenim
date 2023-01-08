<!-- Shop Page One content -->

<div class="container-fuild">
    <nav aria-label="breadcrumb" style="background-color: #fff">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">{{ trans('lables.bread-crumb-home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ trans('lables.bread-crumb-shop-new-arrival') }}</li>
            </ol>
        </div>
    </nav>
</div>
<br>
<br>
<div class="container">
    <div class="fullwidth-banner" style="background-image: url('{{ asset('gallary').'/'.$data['homeBanners'][0]->gallary->name }}');">
    </div>
</div>
<section class="pro-content" style="padding-top:50px;">
    <div class="container">
        <div class="page-heading-title" style="text-align: center">
            <h2> {{ trans('lables.shop-new-arrivar') }}
            </h2>

        </div>
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


    {{-- <div class="container">
        <div class="pagination justify-content-between ">


        </div>
    </div> --}}

</section>
