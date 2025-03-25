@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-1 anchor" id="basic">Xem sản phẩm</h5>
            <div class="">
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control w-25" name="name" value="{{ $product->name }}" disabled>
                    </div>
                    <h6>Ảnh sản phẩm:</h6>
                    <div class="row">
                        @foreach ($product->images as $image)
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $product->name }}" class="img-fluid mb-2">
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Giá</label>
                        <input class="form-control" type="number"  name="price"  value="{{ $product->price }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Danh mục</label>
                        <input class="form-control"  name="category_id" value="{{ $product->category->name }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Mô tả</label>
                        <textarea class="form-control" rows="5" name="description" value="{{ $product->description }}" disabled></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Số lượng</label>
                        <input class="form-control" type="number" name="quantity" value="{{ $product->quantity }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Tác giả</label>
                        <input class="form-control"  name="author" value="{{ $product->author }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Nhà xuất bản</label>
                        <input class="form-control"  name="publisher" value="{{ $product->publisher }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Độ tuổi phù hợp</label>
                        <input class="form-control" type="number" name="specified_age" value="{{ $product->specified_age }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Ngôn ngữ</label>
                        <input class="form-control"  name="language" value="{{ $product->language }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Năm sản xuất</label>
                        <input class="form-control" type="number" name="year_of_publication" value="{{ $product->year_of_publication }}" disabled></input>
                    </div>
                    <div class="mb-3">
                        <label for="example-textarea" class="form-label">Số trang</label>
                        <input class="form-control" type="number"  name="page_number" value="{{ $product->page_number }}" disabled></input>
                    </div>
                    <a href="{{ route('product.index') }}" type="submit" class="btn btn-primary">Quay lại</a>

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
