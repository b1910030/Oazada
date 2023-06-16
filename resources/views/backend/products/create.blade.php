@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm sản phẩm</h1>
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
                <form action="{{ route('backend.products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Danh mục</label>
                        <select name="category_id" class="form-control" >
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" />
                    </div>
                    <div class="form-group">
                        <label for="unit">Đơn vị</label>
                        <input type="text" class="form-control" id="unit" name="unit" value="{{ old('unit') }}" />
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