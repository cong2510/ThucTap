<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class UserController extends Controller
{
    public function add_User(){
        return view('/admin.movieAddUser');
    }
    public function all_User(){
        $all_User=DB::table('khachhang')->get();
        $manager_User=view('/movieUser')->with('/movieUser',$all_User);
        return view('/movieUser')->with('/movieUser',$manager_User);
    }
    public function save_User(Request $request){
        $data =array();
        $data['TenKH']=$request->TenKH;
        $data['Username']=$request->Username;
        $data['Password']=$request->Password;
        DB::table('khachhang')->insert($data);
        Session::put('message','Thêm khách hàng thành công');
        return Redirect::to('add-User');
    }
}
