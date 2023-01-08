<style>
    .blog p{
        display: block !important;
    }
</style>
<template id="blog-template">
    <div class="col-12 col-sm-12 col-md-12">
        <div class="row blog">
            <div class="col-12 col-lg-4">
                <div class="fullwidth-banner"
        style="background-image: url('{{ asset('gallary/202109054758category900x900.jpg') }}');">
    </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="blog-thumbnail">
                    <span class="date-tag badge blog-template-date"></span>
                    <a href="" class="blog-template-image-link">
                        <img class="img-thumbnail blog-template-image" src="" width="100%">
                    </a>
                </div>
                <div class="blog-detial" style="text-align: left;padding-bottom: 50px;">
                    <span class="tag blog-template-category">
                    </span>
                    <h5><a class="blog-template-title" href=""></a></h5>

                    <p class="blog-template-description">
                    </p>
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <label for=""> แชร์</label>&nbsp; &nbsp;
                            <a style="font-size: 25px;color: #1876D2;" href="{{isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}" class="fab fb fa-facebook-square" data-toggle="tooltip" data-placement="bottom" title="{{ trans('lables.footer-facebook') }}"></a>

                        </div>
                        <div class="col-6" style="text-align:end">
                            <a style="border-width: 2px;border-color: #000;background-color: transparent;" class="blog-template-readmore-link btn btn-secondary" href=""><span style="color: #000">ดูเพิ่มเติม</span></a>

                        </div>
                      </div>
                </div>

            </div>


        </div>
    </div>
</template>
