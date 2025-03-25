@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 anchor" id="basic">Thêm Danh mục</h5>
           <div class="">
            <form action="{{ route('category.store') }}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Tên danh mục mới</label>
                    <input type="text" id="simpleinput" class="form-control w-25"  name="CategoryName">
                </div>
                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="example-textarea" rows="5" name="Description"></textarea>
               </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection

