@extends('layouts.app')
@extends('partials.header')
@section('content')
    <main>
        <div class="wrapper">
    
            {{-- Sản phẩm --}}
            <div class="">
                <h2 style="padding: 20px 10px;">Kết quả tìm kiếm</h2>
                <div class="hugo3-pc-grid hugo3-pc-grid-5 hugo3-pc-grid-list">
                    @if(count($products) === 0)
                    <h3 style="padding-left: 450px;">Không tìm thấy sản phẩm</h3>
                    @else 
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
                    @endif
                </div>
            </div>
        </div>
@endsection

