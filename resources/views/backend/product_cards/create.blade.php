@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm sản phẩm cho thẻ</h1>
        
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('backend.product_cards.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Thẻ</label>
                        <select name="card_id" class="form-control" >
                            @foreach($cards as $card)
                                <option value="{{ $card->id }}" {{ old('card_id') == $card->id ? 'selected' : '' }}>{{ $card->name }}  {{ $card->category_id }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Giá</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" />
                    </div>

                    <div class="form-group">
                        <label for="image">Hình ảnh</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" />
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection