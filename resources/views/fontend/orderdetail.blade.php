@extends('layouts.app')
@extends('partials.header')
@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Cart or Wishlist */
.shopping-cart .cart-header{
    padding: 10px;
}
.shopping-cart .cart-header h4{
    font-size: 18px;
    margin-bottom: 0px;
}
.shopping-cart .cart-item a{
    text-decoration: none;
}
.shopping-cart .cart-item{
    background-color: #fff;
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    padding: 10px 10px;
    margin-top: 10px;
}
.shopping-cart .cart-item .product-name{
    font-size: 16px;
    font-weight: 600;
    width: 100%;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    cursor: pointer;
}
.shopping-cart .cart-item .price{
    font-size: 16px;
    font-weight: 600;
    padding: 4px 2px;
}
.shopping-cart .btn1{
    border: 1px solid;
    margin-right: 3px;
    border-radius: 0px;
    font-size: 10px;
}
.shopping-cart .btn1:hover{
    background-color: #2874f0;
    color: #fff;
}
.shopping-cart .input-quantity{
    border: 1px solid #000;
    margin-right: 3px;
    font-size: 12px;
    width: 100%;
    height: 31px;
    outline: none;
    text-align: center;
}
/* Cart or Wishlist */
    </style>
    @livewireStyles
</head>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<body>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
    
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4></h4>
                                </div>
                                <div class="col-md-2">
                                    <h4></h4>
                                </div>
                                <div class="col-md-2">
                                    <h4></h4>
                                </div>
                                <div class="col-md-2">
                                    <h4></h4>
                                </div>
                                <div class="col-md-2">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        @foreach ($orders as $order)  
                        <h3 style="padding-top: 30px;">Thông tin đơn hàng. ID: {{$order->id}}</h3>
                            @foreach ($orderdetails as $orderdetail)
                            @if( $order->id == $orderdetail->order_id)
                                <div class="cart-item">
                                    
                                    <div class="row">
                                        <div class="col-md-4 my-auto">
                                            <a href="">
                                                <label class="product-name">
                                                    <img src="{{ $orderdetail->product->image }}" style="width: 50px; height: 50px" alt="">
                                                    {{ $orderdetail->product->name }}
                                                </label>
                                            </a>
                                        </div>
                                        <div class="col-md-2 my-auto">
                                            <label class="price">{{ number_format($orderdetail->product->price) }} đ</label>
                                        </div>
                                        
                                        <div class="col-md-2 col-7 my-auto">
                                            <form style="display: flex;" action="" method="POST">    
                                                @csrf 
                                                <div class="">
                                                    
                                                    <div class="quantity">
                                                        <div class="input-group"> 
                                                            <input name="quantity" type="number" value="{{ $orderdetail->quantity }}" min="1" max="{{ $orderdetail->product->quantity }}" class="input-quantity qty-input"  />
                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="">
                                                    <button type="submit"  class="btn btn-primary btn-sm">                                
                                                        <i class="fa fa-upload"></i> Cập nhật
                                                    </button>
                                                </div> --}}
                                            </form>
                                        </div>

                                        
                                        <div class="col-md-2 my-auto">
                                            <label class="price">{{ number_format($orderdetail->product->price * $orderdetail->quantity) }} đ</label>
                            
                                        </div>
                                        <div class="col-md-2 col-5 my-auto">
                                            <div class="remove">
                                                {{-- <form action="" method="POST"  >  
                                                    @csrf                
                                                    <button type="submit"  class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i> Xóa
                                                    </button>
                                                </form> --}}
                                            </div>
                                        </div>
                                    
                                        
                                    </div>
                                    
                                </div>
                                @endif
                            @endforeach
                        @endforeach  

                        {{-- <a href="#" style="float: right;"><button style="width: 200px; height: 50px; font-size: 20px;" class="btn btn-success btn-sm">Thanh toán</button></a>   
                        <a href="#" style="float: right; padding-right: 10px;"><button style="width: 200px; height: 50px; font-size: 20px;" class="btn btn-primary btn-sm">Tiếp tục mua hàng</button></a> --}}
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts

</body>
</html>

@endsection