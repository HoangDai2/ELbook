@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 anchor" id="basic">Thêm Danh mục</h5>
           <div class="">
            <form action="{{ route('category.update', $category->id)}}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Tên danh mục mới</label>
                    <input type="text" id="simpleinput" class="form-control w-25" value="{{ $category->name }}" name="name">
                </div>
                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Mô tả</label>
                    <input class="form-control h-100" value="{{ $category->description }}" name="description"></input>
               </div>
                <button type="submit" class="btn btn-primary">Sửa lại</button>
            </form>
        </div>
    </div>
@endsection

