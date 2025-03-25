@extends('admin.main')
@section('content')
    <div class="card">
        <h5 class="card-title anchor mt-3 ps-3" id="pagination">Sửa người dùng</h5>
        <div class="py-3 container">
            <form action="{{ route('voucher.update', $voucher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Mã Voucher</label>
                    <input type="text" name="code" value="{{ $voucher->code }}"  class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Giảm giá</label>
                    <input type="number" name="discount" step="0.01" value="{{ $voucher->discount }}" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Loại</label>
                    <select name="type" required class="form-control">
                        <option value="fixed" {{ $voucher->type == 'fixed' ? 'selected' : '' }}>Cố định</option>
                        <option value="percentage" {{ $voucher->type == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Ngày bắt đầu</label>
                    <input type="datetime-local" name="start_date" value="{{ $voucher->start_date->format('Y-m-d\TH:i') }}" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Ngày kết thúc</label>
                    <input type="datetime-local" name="end_date" value="{{ $voucher->end_date->format('Y-m-d\TH:i') }}" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dateOfBirth" class="form-label">Giới hạn sử dụng</label>
                    <input type="number" name="usage_limit" value="{{ $voucher->usage_limit }}" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
            <a href="{{ route('voucher.index') }}" class="btn btn-sm btn-success">Quay lại</a>
        </div>
    </div>
@endsection
