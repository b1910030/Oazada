@extends('backend.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
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
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tên danh mục</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                    </div>

                    <div class="form-group">
                        <label for="name">Nhóm</label>
                        <input type="text" class="form-control" id="group" name="group" value="{{ old('group')}} " />
                    </div>

                    <div class="form-group">
                        <label for="name">Danh mục cha</label>
                        <select name="id_parent" class="form-control" >
                            <option value="null">Không</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection