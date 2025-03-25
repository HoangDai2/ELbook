@extends('admin.main')

@section('content')
    <div class="card">
        <h5 class="card-title anchor mt-3 ps-3" id="pagination"> Danh sách sản phẩm </h5>
        <div class="py-3 container">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
            <div id="table-pagination " class="table-responsive">
                <table class="table table-striped border border-1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tác giả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item => $product)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $product->product_code }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->author }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-sm btn-green m-1">Sửa</a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger m-1">Xóa</button>
                                    </form>
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-primary btn-view m-1">Xem</a>

                                </td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
