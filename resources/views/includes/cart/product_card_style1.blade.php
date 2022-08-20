<template id="product-card-template">
    <div class="div-class">
        <div class="product product3">
            <article>
                <style>
                    .img-add-cart .btn {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        -ms-transform: translate(-50%, -50%);
                        color: white;
                        border: none;
                        cursor: pointer;
                        border-radius: 5px;
                        text-align: center;
                    }

                    .bottom-right {
                        position: absolute;
                        bottom: 30px;
                        right: 20px;
                    }
                    .bottom-right:hover .btn {
                    opacity: 0.3;
                    }
                    .heart:hover  {
                    opacity: 0.3;
                    }
                    .figure {
                            position: relative;
                        }
                        .figure img.image-hover {
                          position: absolute;
                          top: 0;
                          right: 0;
                          left: 0;
                          bottom: 0;
                          object-fit: contain;
                          opacity: 0;
                          transition: opacity .2s;
                        }
                        .figure:hover img.image-hover {
                          opacity: 1;
                        }
                </style>
                <div class="content  content-relative">
                    {{-- <span class="tag product-card-category"></span> --}}
                    <div class="thumb" >
                        <div class="badges">
                        </div>
                        {{-- <div class="product-hover d-none d-lg-flex d-xl-flex">
                            <div class="icons">

                                <a href="javascript:void(0)" class="icon active swipe-to-top wishlist-icon"
                                    data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Wishlist">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <div class="icon swipe-to-top quick-view-icon" data-toggle="modal"
                                    data-target="#quickViewModal" data-tooltip="tooltip" data-placement="bottom" title=""
                                    data-original-title="Quick View">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <a href="javascript:void(0)" class="icon swipe-to-top compare-icon" data-toggle="tooltip"
                                    data-placement="bottom" title="" data-original-title="Compare"><i
                                        class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                            </div>
                        </div> --}}
                        <div class="mobile-icons d-lg-none d-xl-none">
                            <div class="icons">
                                <div class="icon-liked">
                                    <a href="javascript:void(0)" class="icon active wishlist-icon-2">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                                <div class="icon quick-view-icon" data-toggle="modal" data-target="#quickViewModal"><i
                                        class="fas fa-eye"></i></div>
                                <a href="javascript:void(0)" class="icon compare-icon"><i class="fas fa-align-right"
                                        data-fa-transform="rotate-90"></i></a>
                            </div>
                        </div>
                        <div class="img-add-cart">
                            <div class="figure">
                                <img class="image-main img-fluid product-card-image " src="">
                                <img class="image-hover img-fluid product-card-image-sub" src="">
                              </div>
                            {{-- <img class="img-fluid product-card-image " src="" alt="Modern Single Sofa"> --}}
                            <div class="bottom-right">
                                <a class="btn product-card-link" href="javascript:void(0)"><img
                                        style="width: 40px;height: 40px;"
                                        src="{{ asset('assets/images/add-01.png') }}" alt="add to cart"
                                        style="width:42px;height:42px;"></a>
                            </div>


                        </div>
                    </div>
                    <div style="padding-top: 10px">
                        <a href="javascript:void(0)" class="icon heart wishlist-icon" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Wishlist">
                        <i style="font-size: 18px" class="far fa-heart"></i>
                    </a>

                    </div>
                    <p style="font-size: 22px" class="title text-center"><a href="javascript:void(0)"
                            class="product-card-name"></a></p>
                    <p class="para product-card-desc"></p>
                    <div style="font-size: 18px" class="price product-card-price">
                    </div>
                    <div class=" btn-hover new-design">
                        {{-- <a class="btn  btn-secondary  swipe-to-top product-card-link" href="javascript:void(0)"
                            data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="View Detail">View Detail</a> --}}
                    </div>
                </div>




            </article>
            <div class="d-none display-rating"></div>
            <div class="d-none display-rating1"></div>
            <div class="d-none add-to-card-bag"></div>

            <div class="input-group item-quantity d-none">

                <input type="text" id="" name="quantity" class="form-control qty-input" value="1">

                <span class="input-group-btn">
                    <button type="button" value="quantity21" class="quantity-plus21 btn quantity-right-plus"
                        data-type="plus" data-field="">
                        <i class="fas fa-plus"></i>
                    </button>

                    <button type="button" value="quantity21" class="quantity-minus21 btn quantity-left-minus"
                        data-type="minus" data-field="">
                        <i class="fas fa-minus"></i>
                    </button>
                </span>
            </div>


        </div>
    </div>
</template>
