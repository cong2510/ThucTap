<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function add_Category(){
        return view('/admin.movieAddCategory');
    }
    public function all_Category(){
        $all_Category=DB::table('theloai')->get();
        $manager_Category=view('/movieCategory')->with('/movieCategory',$all_Category);
        return view('movieCategory')->with('all_Category',$all_Category);
    }
    public function save_Category(Request $request){
        $data =array();
        $data['IDTheLoai']=$request->IDTheLoai;
        $data['TenTheLoai']=$request->TenTheLoai;
        DB::table('theloai')->insert($data);
        Session::put('message','Thêm thể loại thành công');
        return Redirect::to('add-Category');
    }
}