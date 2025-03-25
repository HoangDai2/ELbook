@extends('admin.main')
@section('content')
    <div class="card">
        <h5 class="card-title anchor mt-3 ps-3" id="pagination">Thêm người dùng</h5>
        <div class="py-3 container">
            <form action="{{ route('voucher.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Mã Voucher</label>
                    <input type="text" class="form-control" name="code" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Giảm giá</label>
                    <input type="number" class="form-control"  name="discount" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Loại</label>
                    <select class="form-control" name="type" required>
                        <option value="fixed">Cố định</option>
                        <option value="percentage">Phần trăm</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Ngày bắt đầu</label>
                    <input type="datetime-local" name="start_date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Ngày kết thúc</label>
                    <input type="datetime-local" name="end_date" class="form-control"  required>
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label">Giới hạn sử dụng</label>
                    <input type="number" name="usage_limit" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
            <a href="{{ route('voucher.index') }}" class="btn btn-sm btn-success">Quay lại</a>
        </div>
    </div>
@endsection
