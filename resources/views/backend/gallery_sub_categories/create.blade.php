@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm Nguồn hàng theo danh mục</h1>
        
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
                <form action="{{ route('backend.gallery_sub_categories.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Phụ lục</label>
                        <select name="sub_category_id" class="form-control" >
                            @foreach($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}" {{ $sub_category->id == old('sub_category_id') ? 'selected' : '' }}>{{ $sub_category->name }} {{ $sub_category->category_id }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
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