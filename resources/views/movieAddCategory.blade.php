@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa Loại Phim</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">

                        <label for="name">Tên Loại:</label>
                        <input type="text" name="id" value=" " hidden="true">

                        <input required="true" type="text" class="form-control" id="name" name="name" value=" ">
                    </div>
                    <button class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection