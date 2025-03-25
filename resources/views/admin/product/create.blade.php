@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 anchor" id="basic">Thêm sản phẩm</h5>
            <div class="">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
                <form action="{{ route('product.store') }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control w-25" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" name="images[]" multiple onchange="previewImages(event)">
                        <div id="image-preview" class="mt-3 d-flex flex-wrap"></div>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Giá</label>
                        <input class="form-control" type="number"  name="price"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Danh mục</label>
                        <select class="form-control"  name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Mô tả</label>
                        <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Số lượng</label>
                        <input class="form-control" type="number" name="quantity"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Tác giả</label>
                        <input class="form-control"  name="author"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Nhà xuất bản</label>
                        <input class="form-control"  name="publisher"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Độ tuổi phù hợp</label>
                        <input class="form-control" type="number" name="specified_age"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Ngôn ngữ</label>
                        <input class="form-control"  name="language"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Năm sản xuất</label>
                        <input class="form-control" type="number" name="year_of_publication"></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Số trang</label>
                        <input class="form-control" type="number"  name="page_number"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
        <script>
            function previewImages(event) {
                const files = event.target.files; // Lấy danh sách file đã chọn
                const previewContainer = document.getElementById('image-preview'); // Khu vực hiển thị ảnh
                previewContainer.innerHTML = ''; // Xóa nội dung cũ

                if (files) {
                    Array.from(files).forEach(file => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            // Tạo thẻ img để hiển thị ảnh
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.alt = file.name;
                            img.style.width = '100px';
                            img.style.height = '100px';
                            img.style.objectFit = 'cover';
                            img.style.marginRight = '10px';
                            img.style.marginBottom = '10px';
                            img.classList.add('img-thumbnail');

                            // Thêm ảnh vào khu vực preview
                            previewContainer.appendChild(img);
                        };

                        reader.readAsDataURL(file); // Đọc file dưới dạng URL
                    });
                }


            }
        </script>
    @endsection
