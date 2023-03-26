<div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="text-center">Đăng nhập</h1>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-light mt-3">Đăng nhập</button>
                    <p>Không phải thành viên? <a href="{{ route('dangky') }}">Đăng ký ngay</a></p>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
