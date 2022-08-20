<!-- Shop Page One content -->
<?php
    $categoryURL = request()->get('category');
    // dd($categoryURL);
?>
<div class="container-fuild">
    <nav aria-label="breadcrumb" style="background-color: #fff">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">{{ trans('lables.bread-crumb-home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ trans('lables.bread-crumb-shop') }}</li>
            </ol>
        </div>
    </nav>
</div>
<br>
<br>
<?php  switch ($categoryURL) {
    case 1:
    $img_banner = "gallary/new_product.jpg";
    break;
    case 2:
    $img_banner = "gallary/sell_product.jpg";
    break;
    case 3:
    $img_banner = "gallary/best_selle.jpg";
    break;
    case 4:
    $img_banner = "gallary/mottom.jpg";
    break;
    case 5:
    $img_banner = "gallary/cheval.jpg";
    break;
    case '':
    $img_banner = "gallary/new_product.jpg";
    break;
}?>

<div class="container">
    <div class="fullwidth-banner"style="background-attachment: unset;background-size: contain;background-image: url('{{ asset($img_banner) }}');">
    </div>
</div>
<section class="pro-content">
    <div class="container">
        <div class="page-heading-title" style="text-align: center">
            <?php  switch ($categoryURL) {
                case 1: ?>
                <h2> {{ trans('lables.shop-new-arrivar') }}</h2>
                   <?php break;
                case 2: ?>
                <h2> {{ trans('lables.shop-sell') }}</h2>
                <?php break;
                case 3: ?>
                <h2> {{ trans('lables.shop-best-seller') }}</h2>
                <?php break;
                case 4: ?>
                <h2>เกี่ยวกับ Mottom Denim</h2>
                <?php break;

            }?>


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
    <?php if ($categoryURL == 4 || $categoryURL == 5 ) { ?>
        <section class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card" style="background-color: #F3F1F1;border:transparent">
                            <div class="card-body">
                                <p style="color: #B4B3B3">ค้นหาจากแท็ก <span style="color: #000">สินค้า xxx ชิ้น</span></p>
                                <a style="margin-right:20px;border-width: 1px;border-color: #000;background-color: transparent;" class="btn btn-secondary" href=""><span style="color: #000">แขนยาว</span></a>
                                <a style="margin-right:20px;border-width: 1px;border-color: #7F7E7F;background-color: transparent;" class="btn btn-secondary" href=""><span style="color: #7F7E7F">แขนสั้น</span></a>
                                <a style="margin-right:20px;border-width: 1px;border-color: #7F7E7F;background-color: transparent;" class="btn btn-secondary" href=""><span style="color: #7F7E7F">แจ๊คเก็ต</span></a>

                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="form-group ">
                            <div class="select-control" style="width: 100%">
                                <select style="
                                border-radius: 5px;
                                height: 40px;
                                color: #B4B3B3;
                            " class="form-control category-filter" name="category">
                                    <option value="">ประเภทสินค้า</option>
                                </select>
                            </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="form-group ">
                            <div class="select-control" style="width: 100%">
                                <select style="
                                border-radius: 5px;
                                height: 40px;
                                color: #B4B3B3;
                            " class="form-control category-filter" name="category">
                                    <option value="">ชนิดสินค้า</option>
                                </select>
                            </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="form-group ">
                            <div style="width: 100%">
                               <input style="
                               border-radius: 5px;
                               height: 40px;
                               color: #B4B3B3;
                           "  type="text" class="form-control" placeholder="ค้นหา">
                            </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-1">
                        <div class="block">
                            <div class="buttons" style="font-size: 25px;">
                                <a href="javascript:void(0);" id="grid_4column"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="block" style="text-align: end">
                            <div class="buttons" style="font-size: 25px;">
                                <a href="javascript:void(0);" id="grid_4column"><i class="fas fa-th-large"></i></a>&nbsp;
                                <a href="javascript:void(0);" id="list_4column"><i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        {{-- <div class="form-group ">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </button>
                            <button style="border-width: 1px;border-color: #000;" class="btn-secondary" type="button" id="filter">filter</button>
                        </div>
 --}}
                    </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row align-items-center">
                            <div class="col-12 d-flex justify-content-between">
                                <form class="form-inline justify-content-center">
                                    <div class="form-group ">
                                        <div class="select-control">
                                            <select class="form-control category-filter" name="category">
                                                <option value="">ประเภทสินค้า</option>
                                                @foreach ($data['category'] as $category)
                                                @if (isset($_GET['category']) && $_GET['category'] == $category->id)
                                                <option selected value="{{ $category->id }}">
                                                    {{ $category->detail[0]->category_name }}</option>
                                                @else
                                                <option value="{{ $category->id }}">
                                                    {{ $category->detail[0]->category_name }}</option>
                                                @endif

                                                @endforeach
                                            </select>
                                        </div>
                                        <label>{{ trans('lables.shop-category') }}</label>
                                        <div class="select-control">
                                            <select class="form-control category-filter" name="category">
                                                <option value="">choose</option>
                                                @foreach ($data['category'] as $category)
                                                @if (isset($_GET['category']) && $_GET['category'] == $category->id)
                                                <option selected value="{{ $category->id }}">
                                                    {{ $category->detail[0]->category_name }}</option>
                                                @else
                                                <option value="{{ $category->id }}">
                                                    {{ $category->detail[0]->category_name }}</option>
                                                @endif

                                                @endforeach
                                            </select>
                                        </div>

                                    </div>


                                    <div class="form-group ">
                                        <label>{{ trans('lables.shop-price') }}</label>
                                        <div class="select-control">
                                            <select class="form-control price-filter" name="price">
                                                <option value="">choose</option>
                                                @foreach ($data['price_range'] as $price_range)
                                                @if (isset($_GET['price']) && $_GET['price'] == $price_range)
                                                <option selected value="{{ $price_range }}">{{ $price_range }}
                                                </option>
                                                @else
                                                <option value="{{ $price_range }}">{{ $price_range }}</option>
                                                @endif

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    @foreach ($data['attribute'] as $key => $attribute)
                                    <div class="form-group ">
                                        <label>{{ $attribute->attribute_detail[0]->name }}</label>
                                        <input type="hidden" name="attribute[]" value="{{ $attribute->id }}" />
                                        <div class="select-control">
                                            <select class="form-control variaion-filter" name="variation[]"
                                                data-attribute-id="{{ $attribute->id }}"
                                                data-attribute-name="{{ $attribute->attribute_detail[0]->name }}">
                                                <option value="">choose</option>
                                                @foreach ($attribute->variation as $variation)
                                                @if (isset($_GET['variation_id']) &&
                                                in_array($variation->variation_detail[0]->variation_id, explode(',',
                                                $_GET['variation_id'])))
                                                <option selected value="{{ $variation->variation_detail[0]->variation_id }}"
                                                    data-variation-name={{ $variation->variation_detail[0]->name }}>
                                                    {{ $variation->variation_detail[0]->name }}</option>
                                                @else
                                                <option value="{{ $variation->variation_detail[0]->variation_id }}"
                                                    data-variation-name={{ $variation->variation_detail[0]->name }}>
                                                    {{ $variation->variation_detail[0]->name }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @endforeach


                                    <div class="form-group ">
                                        <button class="btn-secondary" type="button" id="filter">filter</button>
                                    </div>
                                </form>


                                <form>
                                    <div class="form-group">
                                        <label>{{ trans('lables.shop-sort-by') }}</label>
                                        <div class="select-control">
                                            <select class="form-control sortBy">
                                                <option value="">choose</option>
                                                <option disabled><b>Price</b></option>
                                                <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To
                                                    High</option>
                                                <option value="high-to" data-sort-by="price" data-sort-type="desc">High To
                                                    Low</option>
                                                <option disabled><b>Name</b></option>
                                                <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
                                                <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <div class="block">
                                    <label>{{ trans('lables.shop-display') }}</label>
                                    <div class="buttons" style="font-size: 25px;">
                                        <a href="javascript:void(0);" id="grid_4column"><i class="fas fa-th-large"></i></a>
                                        <a href="javascript:void(0);" id="list_4column"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}

   <?php  } ?>
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

    <?php if ($categoryURL == 4 || $categoryURL == 5 ) { ?>

    <div class="container">
        <div class="pagination justify-content-between ">


        </div>
    </div>
<?php } ?>
</section>
