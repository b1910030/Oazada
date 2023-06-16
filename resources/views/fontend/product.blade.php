@extends('layouts.app')
@extends('partials.header')
@section('content')
    <main>
        <div class="wrapper">
            <div class="alimod-industry-nav">
                @foreach($categories as $category)
                @foreach($banners as $banner)
                @if($banner->category_id == $category->id)
                <div class="banner-area">
                    <div class="top-banner" style="width: 100%; background: url(&quot;{{$banner->image}}&quot;) center center no-repeat; height: 240px;">
                        <div class="content-area"><span class="industry-en-title hugo3-util-ellipsis hugo3-fw-bold">{{ $category->title}}</span>
                            <span class="sub-title hugo3-util-ellipsis hugo3-fw-default	">Khám phá các sản phẩm mới và thịnh hành</span>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach

                
                <div class="nav-area hugo3-common-style-pc">
                    <div class="nav-title  hugo3-fz-large hugo3-fw-bold">Tìm nguồn cung theo danh mục</div>
                    
                    <div class="nav-wrapper">
                        <div class="hugo2-pc-navi-flex-container undefined">
                            <div class="tab-wrapper level-1 scroll">
                                <div class="tab-inner-wrapper pic-text-vertical" style="margin-left: 0%; width: 350%; background: white;">
                                    <div class="hugo-dotelement" style="width: 12.5%;">
                                        <a href="#" class="hugo-dotelement nav-item">
                                            <div class="nav-container anchor-0">
                                                <div class="item-container">
                                                    @foreach($source_categories as $source_category)
                                                      <div style="padding: 0 14px 0 14px;" class="item-wrapper">
                                                        <div style="margin-left: 30px;" class="image-container">
                                                            <img src="{{ $source_category->image }}" class="item-image" alt="">
                                                            <div class="item-image-mask"></div>
                                                        </div>
                                                        <div class="item-title-container">
                                                            <div class="item-title hugo3-util-ellipsis line-2">
                                                                {{ $source_category->name }}
                                                            </div>
                                                        </div>
                                                      </div>
                                                    @endforeach
                                                </div>                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Phụ lục --}}
            <div>
                @foreach($sub_categories as $sub_category)
                <div class="alimod-industry-theme-list-floor hugo3-common-style-pc">
                    <div class="hugo3-floor-title hugo3-f hugo3-common-style-pc hugo3-pc-floor-title floor theme-card-title">
                        <a href="#" class="hugo-dotelement ">
                            <div class="main-wrapper">
                                <div>
                                    
                                    <div class="hugo3-util-ellipsis title hugo3-fw-bold hugo3-fz-large">{{ $sub_category->name }}</div>
                                    
                                </div>
                                <div class="right-wrapper">
                                    <div class="hugo3-f more-text"></div>
                                    <img src="https://img.alicdn.com/imgextra/i3/O1CN01RF7coO1v3dUmuMXib_!!6000000006117-2-tps-30-30.png" class="more-icon" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hugo3-pc-grid hugo3-pc-grid-6 hugo3-pc-grid-scroll card-container">
                        <div class="hugo3-pc-grid-scroll-inner" style="margin-left: 0px; width: 1414px;">
                            @foreach($gallery_sub_categories as $gallery_sub_category)
                            @if($gallery_sub_category->sub_category_id == $sub_category->id)
                            <div class="hugo3-pc-grid-item">
                                <a href="#" class="hugo-dotelement theme-card-container ">
                                    <div class="hugo3-product-picture static picture-pc vertical theme-card-img">
                                        <img src="{{ $gallery_sub_category->image }}" class="picture-image picture-image-6 " alt="">
                                        <div class="mask"></div>
                                        <div class="customize-top"></div>
                                        <div class="customize-bottom"></div>
                                    </div>
                                    <div class="theme-card-title hugo3-fz-medium hugo3-fw-heavy hugo3-util-ellipsis line-3">
                                        {{$gallery_sub_category->name}}
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="hugo-dotelement scroll-arrow scroll-next" data-appeared="true"></div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Thẻ --}}
            <div>
                <div class="alimod-industry-feature-service">
                    <div class="card-list">
                        <div class="hugo2-pc-grid-pc wrap card-list">
                            @foreach($cards as $card)
                            <div class="item item-column-2 first-line">
                                <div class="item-inner">
                                    <div class="entrance-card-container hugo3-common-style-pc">
                                        <div class="card-wrapper" style="background-color: rgb(255, 255, 255);">
                                            <div class="hugo3-floor-title hugo3-f hugo3-common-style-pc hugo3-pc-floor-title card" style="border: none;">
                                                <a href="#" class="hugo-dotelement ">
                                                    <div class="main-wrapper">
                                                        <div>
                                                            <div class="hugo3-util-ellipsis title hugo3-fw-bold hugo3-fz-large line-2">
                                                                {{ $card->name }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-area">
                                                @foreach($product_cards as $product_card)
                                                @if($product_card->card_id == $card->id)
                                                <a href="#" class="hugo-dotelement hugo3-product hugo3-product-vertical hugo3-product-pc hugo3-common-style-pc item-area">
                                                    <div class="pic-wrapper">
                                                        <div class="hugo3-product-picture static radius picture-pc vertical">
                                                            <img src="{{ $product_card->image }}" class="picture-image picture-image-auto " alt="">
                                                            <div class="mask"></div>
                                                            <div class="customize-top"></div>
                                                            <div class="customize-bottom"></div>
                                                        </div>
                                                    </div>
                                                    <div class="hugo3-product-wrap-margin wrap-margin-center wrap-margin-pc picture-radius hugo3-f hugo3-fz-small">
                                                        <div class="hugo3-product-price-area first-field">
                                                            <div class="hugo3-product-element price price-pc price-center hugo3-fw-heavy min-price">
                                                                <div class="hugo3-util-ellipsis hugo3-fw-heavy hugo3-fz-default">
                                                                    
                                                                    {{ number_format($product_card->price) }} đ
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Giới thiệu --}}
            <div>
                <div class="alimod-industry-products-waterfall">
                    <div class="hugo3-floor-title hugo3-f hugo3-common-style-pc hugo3-pc-floor-title floor">
                        <div class="main-wrapper">
                            <div>
                                <div class="hugo3-util-ellipsis title hugo3-fw-bold hugo3-fz-large">
                                    Chỉ dành cho bạn
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hugo2-pc-slider industry-products-waterfall-slider pc"  style="width: 1200px;">
                        @foreach($introduces as $introduce)
                            <div class="mySlides">
                                <div class="hugo2-slider-inner">
                                    <a href="#" class="hugo-dotelement slider-image-container pc">
                                        <img src="{{ $introduce->image }}" class="slider-image pc" alt="">
                                    </a>    
                                
                                </div>
                                <div class="dots">
                                    @foreach($introduces as $introduce)
                                        <div class="dot-item"></div>
                                    @endforeach
                                </div>
                            </div>
                         @endforeach
                         <script>
                            let slideIndex = 0;
                            showSlides();
                            
                            function showSlides() {
                              let i;
                              let slides = document.getElementsByClassName("mySlides");
                              let dots = document.getElementsByClassName("dot-item");
                              for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";  
                              }
                              slideIndex++;
                              if (slideIndex > slides.length) {slideIndex = 1}    
                              for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace("active", "");
                              }
                              slides[slideIndex-1].style.display = "block";  
                              dots[slideIndex-1].className += " active";
                              setTimeout(showSlides, 2500); // Change image every 2 seconds
                            }
                            </script>
                    </div>
                </div>
            </div>
    
            {{-- Sản phẩm --}}
            <div class="">
                <div class="hugo3-pc-grid hugo3-pc-grid-5 hugo3-pc-grid-list">
                    @foreach($products as $product)
                    <div class="hugo3-pc-grid-item">
                        <a  href="{{ route('detail', $product) }}" style="text-decoration: none; color: black;">
                        <div class="pic-wrapper">
                            <div class="hugo3-product-picture static picture-pc vertical">
                                <img class="picture-image picture-image-5 " src="{{ $product->image }}" alt="">
                            </div>
                        </div>

                        <div class="hugo3-product-wrap-margin wrap-margin-left wrap-margin-pc hugo3-f">
                            <div></div>
                            <div class="hugo3-product-element subject hugo3-util-ellipsis line-2 subject-pc field-margin-bottom">
                                <span>{{ $product->name }}</span>
                            </div>
                            <div class="hugo3-product-price-area">
                                <div type="min-price" class="hugo3-product-element price price-pc price-left hugo3-fw-heavy min-price"><div class="hugo3-util-ellipsis hugo3-fw-heavy hugo3-fz-medium">
                                    @if ($product && $product->price)
                                        {{ number_format($product->price) }} đ
                                    @endif&nbsp;</div><!---->
                                </div>
                            </div>
                            <div class="hugo3-product-element moq moq-pc hugo3-util-ellipsis">
                                <span class="moq-number">{{ $product->quantity }}</span><span class="moq-unit"> {{ $product->unit }}</span>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <section class="container package-container text-center" id="package" style="margin-top: -60px;">
            <div class="row mt-5 justify-content-center package-wrapper">
            @foreach($products as $product)
            <div class="col-lg-2" style="margin-bottom: 140px">
                <div class="card package-card">
                <a href="" class="package-link">
                    <div class="package-wrapper-img overflow-hidden">
                    <img
                        src="{{ $product->image }}"
                        class="img-fluid"
                    />
                    </div>
                    <div class="package-price d-flex justify-content-center">
                    <span class="btn btn-light position-absolute package-btn">
                        ${{ $product->price }}
                    </span>
                    </div>
                    <h5 class="btn position-absolute w-100">
                    {{ $product->name }}
                    </h5>
                </a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
            </div>

            <footer class="footer">

            </footer>
        </div>s/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/j
    </main> --}}
    
@endsection

