<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Movie;
use App\Models\Rap;
use App\Models\SuatChieu;
use App\Models\Theloai;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
 
class DatVeController extends Controller
{
 
     
 
 
    public function ticket($idd)
    {
        $movie = Movie::find($idd);
        $Suatchieu = SuatChieu::all();
        $Rap = Rap::all();
        $Ghe = Ghe::all();
        if ($movie === null) {
            return view('errors.404');
        } else {
            return view('ticket', [
                'movie' => $movie,
                'Suatchieu' =>$Suatchieu,
                'Rap' =>$Rap,
                'Ghe' =>$Ghe,
            ]);
        }
    }   
 
    public function insert_Ve(){
        return view('DonThanhToan');
    }
}