<?php
    $categoryURL = request()->get('category');
    $shopURL = request()->segment(1);
    // dd($shopURL);
?>

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
                        <div class="thumb" style="height: 400px;">
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
                             <a class="product-img-link" href="javascript:void(0)">
                                <div class="img-add-cart">
                                    <div class="figure">
                                        <img class="image-main img-fluid product-card-image " src=""style="    width: 100%;
                                        height: 400px;
                                        object-fit: fill;">
                                        <img class="image-hover img-fluid product-card-image-sub" src=""style="    width: 100%;
                                        height: 400px;
                                        object-fit: fill;">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (empty($categoryURL) && empty($shopURL)) { ?>
                            <div class="display-sale">
                            <div class="d-flex justify-content-between" style="padding-top: 10px">
                                <a href="javascript:void(0)" class="icon heart wishlist-icon" data-toggle="tooltip"
                                data-placement="bottom" title="" data-original-title="Wishlist">
                                <i style="font-size: 18px" class="far fa-heart"></i>
                                </a>
                                    <a class="product-card-link" href="javascript:void(0)"><img
                                            style="width: 30px;height: 30px;"
                                            src="{{ asset('assets/images/add-01.png') }}" alt="add to cart"
                                            style="width:42px;height:42px;"></a>
                            </div>
                            </div>
                            <p style="font-size: 13px;color:#494F69!important;" class="title text-center"><a href="javascript:void(0)"
                                    class="product-card-name"></a></p>
                            <p class="para product-card-desc"></p>
                            <div style="font-size: 15px;color: #494F69" class="price product-card-price">
                            </div>
                            <br>
                            <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px">
                                <div class="pro-color d-flex justify-content-start">

                                </div>
                            </div>


                        <?php } elseif($categoryURL == 2){ ?>
                            <div class="display-sale">
                                <div class="d-flex justify-content-between" style="padding-top: 10px">
                                    <a href="javascript:void(0)" class="icon heart wishlist-icon" data-toggle="tooltip"
                                    data-placement="bottom" title="" data-original-title="Wishlist">
                                    <i style="font-size: 18px" class="far fa-heart"></i>
                                    </a>
                                        <a class="product-card-link" href="javascript:void(0)"><img
                                                style="width: 30px;height: 30px;"
                                                src="{{ asset('assets/images/add-01.png') }}" alt="add to cart"
                                                style="width:42px;height:42px;"></a>
                                </div>

                            </div>
                            <p style="margin-bottom: 5px;font-size: 13px;" class="title text-center">
                                <a style="font-weight:normal;color:#494F69!important; " href="javascript:void(0)"class="product-card-name"></a>
                            </p>
                            <p class="para product-card-desc"></p>
                            <div style="margin-bottom: 5px;font-size: 13px;color: #7F7E7F" class="price product-card-price">
                            </div>
                            <div style="margin-bottom: 5px;font-size: 15px;color: #B11818" class="price product-card-price-discount">
                            </div>
                            <br>
                            <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px;display: none;">
                                <div class="pro-color d-flex justify-content-start">

                                </div>
                            </div>

                        <?php } else{ ?>
                            <div class="display-sale">
                            <div class="d-flex justify-content-between"style="padding-top: 10px;">
                                <p style="font-size: 13px;color:#494F69!important;" class="title text-start">
                                    <a href="javascript:void(0)"class="product-card-name"></a>
                                </p>

                                <div class="col-6" style="text-align: end">
                                    <a href="javascript:void(0)" class="icon heart wishlist-icon" data-toggle="tooltip"
                                data-placement="bottom" title="" data-original-title="Wishlist">
                                <span class="align-middle"> <i style="font-size: 18px" class="far fa-heart"></i></span>

                                </a>
                                    <a class="product-card-link" href="javascript:void(0)"><img
                                            style="width: 30px;height: 30px;"
                                            src="{{ asset('assets/images/add-01.png') }}" alt="add to cart"
                                            style="width:42px;height:42px;"></a>
                            </div>
                            </div>
                            </div>
                            <p class="para product-card-desc"></p>
                            <div class="row"style="text-align: end;">
                                <div class="col-6">
                                    <div style="font-size: 15px;color: #494F69" class="price product-card-price justify-content-start">
                                    </div>

                                </div>
                            </div>
                            <div class="row justify-content-start" style="margin-left: 0px;margin-right: 0px">
                                <div class="pro-color d-flex justify-content-start">
                                </div>
                            </div>
                        <?php } ?>

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
