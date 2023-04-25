@extends('dashboard')
@section('admin')

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Movie')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên Phim:</label>

                    <input required="true" name="TenPhim" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Tên Thể Loại:</label>
                    <select name="TenTheLoai" id="" class="form-control">


                        <option value=" ">Chọn thể loại</option>
                        @foreach ( $Theloai as $data)
                        <option value="{{ $data->TenTheLoai }}">{{ $data->TenTheLoai }}</option>
                        @endforeach

                    </select>
                </div>
                <div class=" form-group">
                    <label for="name">Thời Lượng:</label>

                    <input required="true" name="ThoiLuong" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class=" form-group">
                    <label for="name">Giá Vé:</label>

                    <input required="true" name="GiaVe" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Mô Tả:</label>

                    <input required="true" name="Mota" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <div class=" form-group">
                        <label for="name">Ngày Khởi Chiếu:</label>

                        <input required="true" name="NgayKhoiChieu" type="date" class="form-control" id="title"
                            name="title" value=" ">
                    </div>
                    <label for="name">Ảnh Kèm Theo:</label>

                    <input class="form-control file" type="file" name="HinhAnh" data-max-file-count="15"
                        multiple="multiple">


                </div>
                <div class="form-group">
                    <label for="name">Mô Tả:</label>

                    <input required="true" name="Mota" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <button type="submit" name="add_Movie" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection