@extends('admin.main')

@section('content')
    <div class="card">
        <h5 class="card-title anchor mt-3 ps-3" id="pagination"> Chức vụ </h5>
        <div class="py-3 container">
            <div id="table-pagination " class="table-responsive">
                <table class="table table-striped border border-1">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Chức vụ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->role->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phoneNumber }}</td>
                                <td>{{ $item->address }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-green m-1">Sửa</a>
                                    <form action="{{ route('user.destroy', $item->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger m-1">Xóa</button>
                                    </form>
                                    <button class="btn btn-sm btn-primary btn-view m-1" data-name="{{ $item->name }}"
                                        data-email="{{ $item->email }}" data-phone="{{ $item->phoneNumber }}",
                                        data-address="{{ $item->address }}" data-dateOfBirth="{{ $item->dateOfBirth }}"
                                        data-created_at="{{ $item->created_at }}"
                                        data-updated_at="{{ $item->updated_at }}" data-role="{{ $item->role->name }}">Xem</button>

                                </td>
                            </tr>
                        @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal hiển thị thông tin chi tiết -->

    <div id="userModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Thông tin người dùng</h3>
            <p><strong>Chức vụ: </strong><span id="userRole"></span></p>
            <p><strong>Họ và tên: </strong> <span id="userName"></span></p>
            <p><strong>Email: </strong> <span id="userEmail"></span></p>
            <p><strong>Số điện thoại: </strong> <span id="userPhone"></span></p>
            <p><strong>Địa chỉ: </strong><span id="UserAddess"></span></p>
            <p><strong>Ngày sinh: </strong><span id="UserDateOfBirth"></span></p>
            <p><strong>Ngày tạo: </strong><span id="UserCreatedAt"></span></p>
            <p><strong>Ngày cập nhật: </strong><span id="UserUpdatedAt"></span></p>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("userModal");
            const closeBtn = document.querySelector(".close-btn");
            const userName = document.getElementById("userName");
            const userEmail = document.getElementById("userEmail");
            const userPhone = document.getElementById("userPhone");
            const userRole = document.getElementById("userRole");
            const userAddress = document.getElementById("UserAddess");
            const userDateOfBirth = document.getElementById("UserDateOfBirth");
            const userCreatedAt = document.getElementById("UserCreatedAt");
            const userUpdatedAt = document.getElementById("UserUpdatedAt");

            // Lắng nghe sự kiện khi nhấn vào nút "Xem"
            document.querySelectorAll(".btn-view").forEach(button => {
                button.addEventListener("click", function() {
                    userName.textContent = this.getAttribute("data-name");
                    userEmail.textContent = this.getAttribute("data-email");
                    userPhone.textContent = this.getAttribute("data-phone");
                    userRole.textContent = this.getAttribute("data-role");
                    userAddress.textContent = this.getAttribute("data-address");
                    userDateOfBirth.textContent = this.getAttribute("data-dateOfBirth");
                    userCreatedAt.textContent = this.getAttribute("data-created_at");
                    userUpdatedAt.textContent = this.getAttribute("data-updated_at");

                    modal.style.display = "flex";
                    setTimeout(() => modal.classList.add("show"), 10);
                });
            });

            function closeModal() {
                modal.classList.remove("show");
                setTimeout(() => {
                    modal.style.display = "none";
                }, 300);
            }

            closeBtn.addEventListener("click", closeModal);

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });
        });
    </script>
@endsection
