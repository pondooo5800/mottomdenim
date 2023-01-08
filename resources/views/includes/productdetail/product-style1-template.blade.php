<template id="product-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6  ">
                <div class="slider-wrapper pd2 slider-show">
                    <div class="slider-for">
                    </div>

                    <div class="slider-nav">


                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="pro-rating">
                            <fieldset class="disabled-ratings overall-rating display-rating">
                            </fieldset>
                            {{-- <a href="#review" class="btn-link review-count"></a> --}}
                        </div>
                        <div class="buttons">
                            <button type="button" class="btn  btn-link wishlist-icon"
                                style="padding-left: 0;font-size: 20px;"><i class="fa fa-heart-o"></i></button>
                        </div>
                        <br>
                        <h4 class="pro-title" style="color: #494F69"></h4>

                        <div class="price product-card-price">
                        </div>

                        <div class="pro-infos">
                            {{-- <div class="pro-single-info"><b>Product ID :</b><span
                                    class="product-detail-section-product-id"></span></div>
                            <div class="pro-single-info"><b>Categroy :</b><a href="javascript:void(0)"
                                    class="product-detail-section-cateogory-link"></a></div> --}}
                            <input type="hidden" id="product_combination_id" />
                        </div>

                        <div class="row col-12">
                            <p style="margin: 100px 30px 20px 0px;color:#494F69;font-size: 15px;">ขนาด</p>
                                <p style="margin: 100px 30px 20px 0px;text-decoration-line: underline;">
                                        <a style="color:#494F69;font-size: 15px;" data-target="#show-image-Modal" data-toggle="modal" href="">
                                            รายละเอียด
                                        </a>
                                </p>
                            </a>
                        </div>
                        <div class="pro-options">

                        </div>
                        {{-- <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px">
                            <div class="pro-color d-flex justify-content-start">

                            </div>
                        </div> --}}
                        <div class="pro-counter">
                            <div style="display: none;" class="input-group item-quantity">

                                <input type="text" id="quantity-input" name="quantity" class="form-control" value="1">

                                <span class="input-group-btn">
                                    <button type="button" class="quantity-plus btn" data-type="plus" data-field="">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                    <button type="button" class="quantity-minus btn" data-type="minus" data-field="">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </span>
                            </div>
                            <button style="margin-right: 10%;width: 120px;height: 30px;border-radius: 50px;font-size:14px;" type="button" class="btn-secondary add-to-cart">เพิ่มในตะกร้า</button>
                            <button  onclick="window.location.href='{{url('cart')}}'" style="background-color:#30506D;width: 120px;height: 30px;border-radius: 50px;font-size:14px;" type="button" class="btn-info add-to-cart">สั่งซื้อสินค้า</button>
                        </div>
                        <div class="pro-sub-buttons">

                        </div>
                            <br>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="nav nav-pills" role="tablist">
                                    <a style="font-size: 15px;color: #494F69; border: 1px solid #dee2e6;" class="nav-link nav-item  active" href="#description" id="description-tab"
                                        data-toggle="pill" role="tab">รายละเอียดสินค้า</a>
                                    <a style="font-size: 15px;color: #494F69; border: 1px solid #dee2e6;" class="nav-link nav-item" href="#review" id="review-tab" data-toggle="pill"
                                        role="tab">รีวิว</a>
                                </div>
                                <div class="tab-content" style="margin-top: 0px;">
                                    <div role="tabpanel" class="tab-pane fade active show description" id="description"
                                        aria-labelledby="description-tab">

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade " id="review"
                                        aria-labelledby="review-tab">
                                        <div class="reviews">
                                            <div class="review-bubbles">
                                                <p style="font-size: 16px;color: #494F69;">
                                                    ความคิดเห็นของลูกค้า
                                                </p>
                                                <div id="review-rating-show">
                                                </div>
                                            </div>
                                            <div class="write-review">
                                                <p style="font-size: 16px;color: #494F69;">แสดงความคิดเห็น</p>
                                                <div class="write-review-box">
                                                    <div class="from-group row mb-3">
                                                        <div class="col-12"> <label
                                                                for="inlineFormInputGroup2">ระดับ</label></div>
                                                        <div class="pro-rating col-12">

                                                            <fieldset class="ratings">
                                                                <div class="rating"></div>
                                                                <div class='rating-stars text-center'>
                                                                    <ul id='stars'>
                                                                        <li class='star' title='Poor' data-value='1'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' title='Fair' data-value='2'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' title='Good' data-value='3'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' title='Excellent'
                                                                            data-value='4'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                        <li class='star' title='WOW!!!' data-value='5'>
                                                                            <i class='fa fa-star fa-fw'></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </fieldset>
                                                            <input type="hidden" id="selected_rating" />
                                                        </div>
                                                    </div>

                                                    <div class="from-group row mb-3">
                                                        <div class="col-12"> <label for="title">หัวข้อ</label></div>
                                                        <div class="input-group col-12">

                                                            <input type="text" class="form-control" id="title"
                                                                placeholder="หัวข้อ">
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="from-group row mb-3">
                                                        <div class="col-12"> <label for="comment">รายละเอียด</label>
                                                        </div>
                                                        <div class="input-group col-12">

                                                            <textarea class="form-control" id="comment"
                                                                placeholder="รายละเอียด"></textarea>
                                                            <div class="invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="from-group">
                                                        <button style="width: 120px;height: 30px;border-radius: 50px;font-size:14px;" type="button" class="btn-secondary"
                                                            onclick="productReview()">ตกลง</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="review-rating-template">
    <div class="review-bubble-single">
        <div class="review-bubble-bg">
            <div class="pro-rating">

                <fieldset class="ratings">

                    <input type="radio" id="star05" name="rating0" value="5" class="rating review-rating5">
                    <label class="full" for="star05" title="Awesome0 - 5 stars"></label>


                    <input type="radio" id="star04" name="rating0" value="4" class="rating review-rating4">
                    <label class="full" for="star04" title="Pretty0 good - 4 stars"></label>

                    <input type="radio" id="star03" name="rating0" value="3" class="rating review-rating3">
                    <label class="full" for="star03" title="Pretty0 good - 3 stars"></label>

                    <input type="radio" id="star02" name="rating0" value="2" class="rating review-rating2">
                    <label class="full" for="star02" title="Meh0 - 2 stars"></label>

                    <input type="radio" id="star01" name="rating0" value="1" class="rating review-rating1">
                    <label class="full" for="star01" title="Meh0 - 1 stars"></label>
                </fieldset>
            </div>
            <h4 class="review-title"></h4>
            <span class="review-date"></span>
            <p class="review-comment"></p>
        </div>
    </div>
</template>
<div class="modal fade" id="show-image-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom:0;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 col-sm-12 col-md-12 tex-center">
                    <img src="{{ asset("assets/images/size.png") }}" alt="Snow" style="width:100%;max-width:100%">
                </div>
            </div>
        </div>
    </div>
</div>
