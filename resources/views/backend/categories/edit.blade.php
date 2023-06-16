@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Chỉnh sửa {{ $category->title }}</h1>
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
                <form action="{{ route('backend.categories.update', $category) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Tên danh mục</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" />
                    </div>
                    <div class="form-group">
                        <label for="id_parent">Danh mục cha</label>
                        <input type="text" class="form-control" id="id_parent" name="id_parent" value="{{ $category->id_parent }}" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection