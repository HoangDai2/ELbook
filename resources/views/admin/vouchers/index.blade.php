@extends('admin.main')

@section('content')
    <div class="card">
        <h5 class="card-title anchor mt-3 ps-3" id="pagination"> Chức vụ </h5>
        <div class="py-3 container">
            <div id="table-pagination " class="table-responsive">
                <table class="table table-striped border border-1">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Giảm giá</th>
                            <th>Loại</th>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vouchers as $voucher)
                        <tr>
                            <td>{{ $voucher->code }}</td>
                            <td>{{ $voucher->discount }} {{ $voucher->type == 'percentage' ? '%' : 'VND' }}</td>
                            <td>{{ $voucher->type }}</td>
                            <td>{{ $voucher->start_date->format('d/m/Y') }}</td>
                            <td>{{ $voucher->end_date->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('voucher.edit', $voucher->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                                <form action="{{ route('voucher.destroy', $voucher->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-sm btn-danger">Xóa</button>
                                </form>
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
