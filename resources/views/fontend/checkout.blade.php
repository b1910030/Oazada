@extends('layouts.app')
@extends('partials.header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css">
	<style>
		body {
			background-color: #f5f5f5;
		}
		.card {
			border-radius: 0px;
		}
		.card-header {
			background-color: #f5f5f5;
			border-bottom: none;
		}
		.card-body {
			background-color: #ffffff;
		}
		.btn-primary {
			background-color: #3C83C8;
			border-color: #3C83C8;
		}
		.btn-primary:hover {
			background-color: #296BB6;
			border-color: #296BB6;
		}
        .product-name {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px; /* Độ rộng tối đa của cột */
        }
	</style>
</head>
<body>
	<div class="container py-5">
        <form action="{{ route('checkout.update') }}" method="POST">
            @csrf
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h5 class="mb-0">Thông tin đơn hàng</h5>
					</div>
					<div class="card-body">
						
							<div class="mb-3">
								<label for="fullName" class="form-label">Họ và tên</label>
								<input type="text" class="form-control" name="name" id="name" required>
							</div>
							<div class="mb-3">
								<label for="phone" class="form-label">Điện thoại</label>
								<input type="tel" class="form-control" name="phone" id="phone" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Địa chỉ Email</label>
								<input type="email" class="form-control" name="email" id="email" required>
							</div>
							<div class="mb-3">
								<label for="address" class="form-label">Địa chỉ giao hàng</label>
								<textarea class="form-control" name="address" id="address" rows="3" required></textarea>
							</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="card-header">
						<h5 class="mb-0">Đơn hàng của bạn</h5>
					</div>
					<div class="card-body">
						<table class="table table-borderless mb-0">
                            @foreach($carts as $cart)
							<tr>
								<td class="fw-bold product-name">{{ $cart->product->name}}</td>
								<td class="text-end">{{ number_format($cart->product->price)}} VNĐ</td>
							</tr>
                            @endforeach
							<tr>
								<td class="text-end">Tổng tiền hàng</td>
								<td class="text-end fw-bold">{{ number_format($total) }} VNĐ</td>
                                <input type="hidden" name="total" value="{{$total}}">
							</tr>
							{{-- <tr>
								<td class="text-end">Phí vận chuyển</td>
								<td class="text-end">25.000 VNĐ</td>
							</tr> --}}
							<tr>
								<td class="text-end">Thành tiền</td>
								<td class="text-end fw-bold">{{ number_format($total) }} VNĐ</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5 class="mb-0">Thanh toán</h5>
					</div>
					<div class="card-body">
						
							<div class="mb-3">
								<label for="cardNumber" class="form-label">Phương thức thanh toán</label>
								<div class="checkbox">
                                    
                                    <form-group>
                                        <input name="payment_method"  type="radio" value="cod"> <label> Tiền mặt</label><br>
                                        <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> 
                                    </form-group>
                                    
                                </div>
							</div>
							
							<div class="d-grid">
								<button class="btn btn-primary btn-lg" type="submit">Thanh toán</button>
							</div>
						
						<div class="text-center mt-3">
							<i class="fab fa-cc-visa fa-2x text-success mx-2"></i>
							<i class="fab fa-cc-mastercard fa-2x text-success mx-2"></i>
							<i class="fab fa-cc-amex fa-2x text-success mx-2"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
        </form>
	</div>
</body>
</html>
@endsection