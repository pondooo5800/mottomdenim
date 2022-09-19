      <div class="sidebar-social">
        <ul class="d-flex justify-content-between">
            @php  $temp = '0' @endphp

            @if(isset($header_menu->menu))
            @php
                $header_menu = json_decode(($header_menu->menu), true); $menuloop = 0; unset($header_menu[5]);
            @endphp
            @foreach($header_menu as $key => $menu[$menuloop])
            @if(count($menu[$menuloop]['children']) == 0)


            @php $link = '#' @endphp
            @if($menu[$menuloop]['type'] == 'exlink')
                @php $link = $menu[$menuloop]['exlink'] @endphp
            @elseif($menu[$menuloop]['type'] == 'product')
                @php $link = url('/product').$menu[$menuloop]['product'] @endphp
            @elseif($menu[$menuloop]['type'] == 'category')
                @php $link = url('/shop').'?category='.$menu[$menuloop]['category'] @endphp
                    @switch($menu[$menuloop]['category'])
                        @case(1)
                        @php $img_link = asset('assets/images/new.png') @endphp
                            @break;
                        @case(2)
                        @php $img_link = asset('assets/images/bestseller.png') @endphp
                            @break;
                        @case(3)
                        @php $img_link = asset('assets/images/discount.png') @endphp
                            @break;
                        @case(4)
                        @php $img_link = asset('assets/images/mottom.png') @endphp
                            @break;
                        @default
                    @endswitch
            @elseif($menu[$menuloop]['type'] == 'link')
              @php $link = url('/').$menu[$menuloop]['link'] @endphp
            @elseif($menu[$menuloop]['type'] == 'contentpage')
              @php $link = url('/page/').$menu[$menuloop]['contentpage'] @endphp
            @elseif($menu[$menuloop]['type'] == 'page')
                @php $link = url('/').$menu[$menuloop]['page'] @endphp
                @if ($menu[$menuloop]['page'] == "/blog")
                    @php $img_link = asset('assets/images/blogs.png') @endphp
                @endif
            @endif
            <li class="nav-item">
              <a class="nav-link " href="{{$link}}">
                <img style="height: 40px" class="img-fluid" src="{{ $img_link }} ">
                    <?php $index = 0; ?>
                    @if(isset($menu[$menuloop]['language_id']))
                      @php $index = array_search($data['selectedLenguage'],$menu[$menuloop]['language_id']) @endphp
                    @endif
                    <span class="text-menu"> {{$menu[$menuloop]['name'][$index]}} </span>
              </a>
            </li>

            @else

            @php $link = '#' @endphp
            @if($menu[$menuloop]['type'] == 'exlink')
                @php $link = $menu[$menuloop]['exlink'] @endphp
            @elseif($menu[$menuloop]['type'] == 'product')
                @php $link = url('/product').$menu[$menuloop]['product'] @endphp
            @elseif($menu[$menuloop]['type'] == 'category')
                @php $link = url('/shop').'?category='.$menu[$menuloop]['category'] @endphp
            @elseif($menu[$menuloop]['type'] == 'link')
                @php $link = url('/').$menu[$menuloop]['link'] @endphp
            @elseif($menu[$menuloop]['type'] == 'contentpage')
                @php $link = url('/page/').$menu[$menuloop]['contentpage'] @endphp
            @elseif($menu[$menuloop]['type'] == 'page')
                @php $link = url('/').$menu[$menuloop]['page'] @endphp
            @endif

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{$link}}">
                    <?php $index = 0; ?>
                    @if(isset($menu[$menuloop]['language_id']))
                    @php $index = array_search($data['selectedLenguage'],$menu[$menuloop]['language_id']) @endphp
                    @endif
                    {{$menu[$menuloop]['name'][$index]}}
              </a>
              @if(count($menu[$menuloop]['children']) > 0)
                @include('includes.headers.menu')
              @endif
            </li>
            @endif
            @endforeach
            @endif
            {{-- <li>
                <a href="URL-HERE" title="Facebook" target="_blank" rel="nofollow">
                    <img style="height: 40px" class="img-fluid" src="{{ asset('assets/images/new.png') }}">
                    <span>facebook</span></a>
            </li>

            <li>
                <a href="URL-HERE" title="Google Plus" target="_blank" rel="nofollow">
                <img style="height: 40px" class="img-fluid" src="{{ asset('assets/images/bestseller.png') }}">
                <span>Google plus</span></a>
            </li>
            <li>
                <a href="URL-HERE" title="Facebook" target="_blank" rel="nofollow">
                    <img style="height: 40px" class="img-fluid" src="{{ asset('assets/images/discount.png') }}">
                    <span>facebook</span></a>
            </li>

            <li>
                <a href="URL-HERE" title="Google Plus" target="_blank" rel="nofollow">
                <img style="height: 40px" class="img-fluid" src="{{ asset('assets/images/mottom.png') }}">
                <span>Google plus</span></a>
            </li>
            <li>
                <a href="URL-HERE" title="Google Plus" target="_blank" rel="nofollow">
                <img style="height: 40px" class="img-fluid" src="{{ asset('assets/images/blogs.png') }}">
                <span>Google plus</span></a>
            </li> --}}


        </ul>
    </div>
