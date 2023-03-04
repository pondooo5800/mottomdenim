<div class="container-fuild">
    <nav aria-label="breadcrumb" style="background-color: #fff">

        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">{{ trans('lables.bread-crumb-home') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ trans('lables.bread-shopping-cart') }}</li>
            </ol>
        </div>
    </nav>
</div>
<section class="pro-content">
    <div class="container">
        <div class="page-heading-title">
            <h4 style="font-weight: bold;color: #494F69;">{{ trans('lables.cart-page-shopping-cart') }}
                <span style="font-family: 'FCIconic-Bold';color: #494F69;" class="badge total-product-count">(0)</span>
            </h4>
        </div>
    </div>


    <!-- cart Content -->
    <section class=" cart-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 cart-area cart-page-one">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <table class="table top-table" id="cartItem-product-show">

                            </table>

                            <div class="col-12 col-lg-12 mb-4">

                                <div class="row click-btn">

                                    <div class="col-12 align-right">
                                        <div class="row">
                                            <button type="button" class="btn btn-light swipe-to-top" onclick="updateCartItem()">
                                                {{ trans('lables.cart-page-update-cart') }}
                                            </button>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <table class="table right-table" id="cartItem-grandtotal-product-show">

                            </table>
                            {{-- <a href="{{url('/checkout')}}"> --}}
                            <a href="{{url('/checkout')}}">
                                <button style="margin-bottom: 10px;background-color: #333333;height: 50px;" class="btn btn-secondary swipe-to-top m-btn col-12">{{ trans('lables.cart-page-total-cart') }}</button>
                            </a>
                            <a href="{{url('/shop')}}">
                                <button style="background-color: #fff;height: 50px;font-size:15px" class="btn m-btn col-12"> {{ trans('lables.cart-page-continue-shopping') }} </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <template id="cartItem-Template">
        <tbody>
            <tr class="d-flex cartItem-row">
                <td class="col-12 col-md-3">
                    <img style="height: 220px;" class="img-fluid cartItem-image" src="" />
                </td>
                <td class="col-12 col-md-9 item-detail-left" style="flex-direction: column;align-items: start">
                    <div class="item-detail text-left" style="width: 100%">
                        <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;" class="cartItem-name"></h4>
                        <div class="row">
                            <div class="col-3">
                                <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;"> ขนาด</h4>
                                <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;"> สี</h4>
                                <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;"> ราคาต่อหน่วย</h4>
                                <h4 style="padding-top:5px;color:#333333; font-size: 15px;margin-bottom: 10px;"> จำนวน</h4>
                            </div>
                            <div class="col">
                                <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;"class="cartItem-size"></h4>
                                <h4 style="color:#333333; font-size: 15px;margin-bottom: 10px;"class="cartItem-color"></h4>
                                <div class="item-price cartItem-price" style="margin-bottom: 5px;"></div>
                                <div style="margin-bottom: 10px;width: 120px;" class="input-group">
                                    <button style="background-color: #fff;height: 30px;
                                    border-right-color: #fff;height: 30px;" type="button" value="quantity" class="input-group-text quantity-left-minus cartItem-qty-2" data-type="minus" data-field="">
                                        <span class="fas fa-minus"></span>
                                    </button>
                                    <input style="border-right-color: #fff;border-left-color: #fff;text-align: center;height:30px;" type="text" id="quantity2" name="quantity" class="form-control cartItem-qty">
                                    <button style=" background-color: #fff;border-left-color: #fff;height: 30px;" type="button" value="quantity" class="input-group-text quantity-right-plus cartItem-qty-1" data-type="plus" data-field="">
                                        <span class="fas fa-plus"></span>
                                    </button>
                                  </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3" >
                                <h4 style="color:#333333; font-size: 20px;margin-top: 4px;"> ราคา</h4>
                                <div class="item-controls">
                                    <button style="padding: 0 0px;border: 0px solid #fff;" type="button" class="btn cartItem-remove">
                                        <span style="font-size: 15px;text-decoration-line: underline;color: #E80C0C">ลบ</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="align-middle item-total cartItem-total"></div>
                            </div>
                          </div>
                        <div class="item-attributes"></div>

                    </div>
                </td>
                {{-- <td class="item-price col-12 col-md-2 cartItem-price"></td>
                <td class="col-12 col-md-2">
                    <div class="input-group item-quantity">

                        <input type="text" id="quantity2" name="quantity" class="form-control cartItem-qty">

                        <span class="input-group-btn">
                            <button type="button" value="quantity" class="quantity-right-plus btn cartItem-qty-1" data-type="plus" data-field="">

                                <span class="fas fa-plus"></span>
                            </button>

                            <button type="button" value="quantity" class="quantity-left-minus btn cartItem-qty-2" data-type="minus" data-field="">
                                <span class="fas fa-minus"></span>
                            </button>


                        </span>


                    </div>
                </td>
                <td class="align-middle item-total col-12 col-md-2 cartItem-total" align="center"></td> --}}
            </tr>
        </tbody>
    </template>


    <template id="cartItem-grandtotal-template">

        <thead>
            <tr>
                <th style="color: #333333;font-size: 15px;" scope="col" colspan="2" align="left">ยอดชำระ</th>

            </tr>
        </thead>
        <tbody>
            {{-- ซ่อนชั่วคราว --}}
            <tr style="display: none;">
                <th scope="row">{{ trans('lables.cart-page-subtotal') }}</th>
                <td align="right" class="caritem-subtotal"></td>
            </tr>
              {{-- ซ่อนชั่วคราว --}}
            <tr style="display: none;">
                <th scope="row">{{ trans('lables.cart-page-discount') }}</th>
                <td align="right" class="caritem-discount-coupon"></td>
            </tr>

            <tr class="item-price">
                <td align="left" class="caritem-grandtotal"></td>
            </tr>
        </tbody>


    </template>

</section>


