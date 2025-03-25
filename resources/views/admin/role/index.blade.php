@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <h5 class="card-title anchor mt-3 ps-3" id="pagination"> Chức vụ </h5>
                <div class="py-3 container">
                    <div id="table-pagination " class="table-responsive">
                        <table class="table table-striped border border-1 ">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->created_at }}</td>
                                        <td>
                                            <form action="{{ route('role.delete', $role->id) }}" method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
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
        </div> <!-- end col-->

        <div class="col-lg-3">
            <div class="card card-height-100">
                <h5 class="text-center mt-2 card-title anchor ">Thêm mới chức vụ</h5>
                <div class="container d-flex justify-content-start m-lg-1">
                    <form action="{{ route('role.store') }}" method="POST" class="form" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Tên chức vụ mới</label>
                            <input type="text" id="simpleinput" class="form-control" name="RoleName">
                        </div>
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
