<!-- full width banner -->
{{-- {{ dd($data['homeBanners'][0]->gallary) }} --}}
@if(count($data['homeBanners']) > 0)
<div class="p-banners-content pro-content">
    <a href="{{ url('/shop?category=2') }}">

        <div class="fullwidth-banner"
            style="background-attachment: unset;background-image: url('{{ asset('gallary').'/'.$data['homeBanners'][0]->gallary->name }}');">


            {{-- <div class="parallax-banner-text">
                <?php
      print stripslashes($data['homeBanners'][0]->content);
    ?>
            </div> --}}

        </div>
    </a>

</div>
@endif
