@extends('layouts.app')
@extends('partials.header')
@section('content')
    <main>
        <div id="ncms-content-root" style="min-height: 768px; background-color: rgb(119, 106, 99)">
            <div>
                <h5 class="ss">Sẵn sàng vận chuyển</h5>
                <ul class="homepage">
                    <li>MOQ thấp</li>
                    <li>Đặt hàng trực tiếp</li>
                    <li>Giao hàng nhanh</li>
                </ul>
            </div>
            <div class="alimod-common-activity-home">
                <div class="hugo2-pc-pagex-root">
                    <div style="position: relative;">
                        <div style="width: 100%; height: 16px;"></div>
                        <div style="padding-bottom: 16px;">
                            <div class="venue-floor-wrapper" style="width: 100%; margin: 0px 10px;">
                                <div class="hugo2-pc-entry-bp-col-component">
                                    <a href="#" style="background-color: rgb(84, 185, 216);">
                                        <div class="text-wrapper">
                                            <p class="scene-name overflow" style="color: white; line-height: 40.8px;">Sản phẩm được đánh giá tốt</p>
                                            <div class="scene-description" style="color: white; ">Sản phẩm có đánh giá tích cực trong vòng 90 ngày qua</div>
                                            <div class="scene-link">Tìm nguồn hàng ngay</div>
                                        </div>
                                    </a>
                                    <div class="product-wrapper">
                                        @foreach ($appreciate1s as $appreciate1)
                                        <div class="wrap">
                                            <a href="#" class="hugo-dotelement alimod-hugo2-product alimod-hugo2-product-vertical alimod-hugo2-product-pc">
                                                <div class="alimod-product-elements picture picture-pc radius">
                                                    <img src="{{ $appreciate1->image }}" class="picture-image picture-image-4 " alt="">
                                                    <div class="mask"></div>
                                                </div>
                                                <div class="alimod-product-elements wrap-margin">
                                                    <div class="wrap-margin-pc wrap-left-right-0">
                                                        <div class="alimod-product-elements subject hugo2-product-util-ellipsis subject-pc field-margin-bottom">
                                                            {{ $appreciate1->name }}
                                                        </div>
                                                        <div class="alimod-product-elements price price-pc field-margin-bottom">
                                                            <div class="hugo2-product-util-ellipsis">{{ $appreciate1->price }}</div>
                                                        </div>
                                                        <div class="alimod-product-elements moq moq-pc hugo2-product-util-ellipsis has-price">
                                                            <span class="moq-number">{{ $appreciate1->quantity }}</span>
                                                            <span class="moq-unit"> {{ $appreciate1->unit }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> 
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alimod-common-activity-home">
                <div class="hugo2-pc-pagex-root">
                    <div style="position: relative;">
                        <div style="padding-bottom: 16px;">
                            <div class="venue-floor-wrapper" style="width: 100%; margin: 0px 10px;">
                                <div class="hugo2-pc-entry-bp-col-component">
                                    <a href="#" style="background-color: rgb(53, 177, 119);">
                                        <div class="text-wrapper">
                                            <p class="scene-name overflow" style="color: white; line-height: 40.8px;">Giảm giá độc quyền</p>
                                            <div class="scene-description" style="color: white; ">Độc quyền cho khách hàng mới đến cửa hàng</div>
                                            <div class="scene-link">Tìm nguồn hàng ngay</div>
                                        </div>
                                    </a>
                                    <div class="product-wrapper">
                                        @foreach ($appreciate2s as $appreciate2)
                                        <div class="wrap">
                                            <a href="#" class="hugo-dotelement alimod-hugo2-product alimod-hugo2-product-vertical alimod-hugo2-product-pc">
                                                <div class="alimod-product-elements picture picture-pc radius">
                                                    <img src="{{ $appreciate2->image }}" class="picture-image picture-image-4 " alt="">
                                                    <div class="mask"></div>
                                                </div>
                                                <div class="alimod-product-elements wrap-margin">
                                                    <div class="wrap-margin-pc wrap-left-right-0">
                                                        <div class="alimod-product-elements subject hugo2-product-util-ellipsis subject-pc field-margin-bottom">
                                                            {{ $appreciate2->name }}
                                                        </div>
                                                        <div class="alimod-product-elements price price-pc field-margin-bottom">
                                                            <div class="hugo2-product-util-ellipsis">{{ $appreciate2->price }} </div>
                                                        </div>
                                                        <div class="alimod-product-elements moq moq-pc hugo2-product-util-ellipsis has-price">
                                                            <span class="moq-number">{{ $appreciate2->quantity }}</span>
                                                            <span class="moq-unit"> {{ $appreciate2->unit }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>  
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alimod-common-activity-home">
                <div class="hugo2-pc-pagex-root">
                    <div style="position: relative;">
                        <div style="padding-bottom: 16px;">
                            <div class="venue-floor-wrapper" style="width: 100%; margin: 0px 10px;">
                                <div class="hugo2-pc-entry-bp-col-component">
                                    <a href="#" style="background-color: rgb(53, 61, 185);">
                                        <div class="text-wrapper">
                                            <p class="scene-name overflow" style="color: white; line-height: 40.8px;">Đặt hàng theo thùng</p>
                                            <div class="scene-description" style="color: white; ">Hưởng chiết khẩu với đơn hàng số lượng lớn</div>
                                            <div class="scene-link">Tìm nguồn hàng ngay</div>
                                        </div>
                                    </a>
                                    <div class="product-wrapper">
                                        @foreach ($appreciate3s as $appreciate3)  
                                        <div class="wrap">                                       
                                            <a href="#" class="hugo-dotelement alimod-hugo2-product alimod-hugo2-product-vertical alimod-hugo2-product-pc">
                                                <div class="alimod-product-elements picture picture-pc radius">
                                                    <img src="{{ $appreciate3->image}}" class="picture-image picture-image-4 " alt="">
                                                    <div class="mask"></div>
                                                </div>
                                                <div class="alimod-product-elements wrap-margin">
                                                    <div class="wrap-margin-pc wrap-left-right-0">
                                                        <div class="alimod-product-elements subject hugo2-product-util-ellipsis subject-pc field-margin-bottom">
                                                            {{ $appreciate3->name }}
                                                        </div>
                                                        <div class="alimod-product-elements price price-pc field-margin-bottom">
                                                            <div class="hugo2-product-util-ellipsis">{{ $appreciate3->price }}</div>
                                                        </div>
                                                        <div class="alimod-product-elements moq moq-pc hugo2-product-util-ellipsis has-price">
                                                            <span class="moq-number">{{ $appreciate3->quantity }}</span>
                                                            <span class="moq-unit"> {{ $appreciate3->unit }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>  
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hugo2-pc-pagex-tab">
                <div class="hugo2-pc-navi-flex-container undefined">
                    <div class="tab-wrapper level-1 scroll">
                        <div class="tab-inner-wrapper text" style="margin-left: 0%; width: 150%; background: white;">
                            <div class="hugo-dotelement tab-item active" style="width: 270px; background: rgb(170, 129, 99);">
                                <div class="text-wrapper" title="Tất cả">
                                    <div class="text" style="color: white;">
                                        Tất cả danh mục
                                    </div>
                                </div>
                            </div>
                            @foreach($categorie1s as $category)
                            <div class="hugo-dotelement tab-item active" style="width: 270px; background: white;">
                                <div class="text-wrapper" title="Tất cả">
                                    <div class="text" style="color: black;">
                                        {{ $category->title}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="pre arrow ">
                            <div class="blur-wrapper">
                                <div class="blur"></div>
                            </div>
                            <div class="img-wrapper" style="background: white;">
                                <span class="iconfont icon-arrow-right rotated" style="font-size: 20px; font-weight: bold;"></span>
                            </div>
                        </div>
                        <div class="next arrow show">
                            <div class="blur-wrapper">
                                <div class="blur"></div>
                            </div>
                            <div class="img-wrapper" style="background: white;">
                                <span class="iconfont icon-arrow-right undefined" style="font-size: 20px; font-weight: bold;">

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="min-height: 692px;">
                <div class="tab-panel-container">
                    <div class="grid-list-flex undefined">
                        @foreach($products as $product)
                        <div class="grid-col-item-wrapper grid-col-5">
                            <div class="grid-col-item">
                                <a href="" class="hugo-dotelement alimod-hugo2-product alimod-hugo2-product-vertical alimod-hugo2-product-pc">
                                    <div class="alimod-product-elements picture picture-pc">
                                        <img src="{{ $product->image }}" class="picture-image picture-image-5 " alt="">
                                        <div class="mask"></div>
                                    </div>
                                    <div class="alimod-product-elements wrap-margin">
                                        <div class="wrap-margin-pc">
                                            <div class="alimod-product-elements subject hugo2-product-util-ellipsis subject-pc number-of-lines-2 field-margin-bottom">
                                                {{ $product->name }}
                                            </div>
                                            <div class="alimod-product-elements price price-pc field-margin-bottom">
                                                <div class="hugo2-product-util-ellipsis">{{ $product->price }}</div>
                                            </div>
                                            <div class="alimod-product-elements moq moq-pc hugo2-product-util-ellipsis has-price">
                                                <span class="moq-number">{{ $product->quantity }}</span>
                                                <span class="moq-unit"> {{ $product->unit }}</span>
                                            </div>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>  
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </main>

@endsection