@extends('admin.main')

@section('content')
            <div class="card">
                <h5 class="card-title anchor mt-3 ps-3" id="pagination"> Chức vụ </h5>
                <div class="py-3 container">
                    <div id="table-pagination " class="table-responsive">
                        <table class="table table-striped border border-1">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Danh mục</th>
                                    <th>Mô tả</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary m-1">Sửa</a>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-1">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end card-->
@endsection
