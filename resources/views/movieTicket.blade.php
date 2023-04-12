@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Quản Lý Vé</h2>
            </div>
            <div class="panel-body">
                <a href="{{ route('movieAddTicket') }}">
                    <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Vé</button>
                </a>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Vé</th>
                            <th>ID Phim</th>
                            <th>Tên phim</th>
                            <th>Loại phim</th>
                            <th>Xuất chiếu</th>
                            <th>Giờ chiếu</th>
                            <th>Số lượng vé</th>
                            <th>Ngày Thêm</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td><img src=" " style="max-width: 100px" /></td>
                            <td style="text-transform: capitalize;"></td>
                            <td> </td>
                            <td> </td>
                            <td style="text-transform: capitalize"> </td>
                            <td> </td>

                            <td> </td>

                            <td>
                                <a href=" "><button class="btn btn-warning">Sửa</button></a>
                            </td>
                            <td>
                                <button class="btn btn-danger">Xoá</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection