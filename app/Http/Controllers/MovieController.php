<?php

namespace App\Http\Controllers;

use App\Models\Ghe;
use App\Models\Movie;
use App\Models\Phong;
use App\Models\Suatchieu;
use App\Models\Theloai;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function index()
    {
        $date = new DateTime();
        $movies = Movie::all();
        return view('index', [
            'movies' => $movies,
            'date' => $date,
        ]);
    }

    public function moviedetail($id)
    {
        $movie = Movie::find($id);
        $theloais = Theloai::all();
        $suatchieu = Suatchieu::all();
        $phong = Phong::all();


        if ($movie === null) {
            return view('errors.404');
        } else {
            return view('moviedetail', [
                'movie' => $movie,
                'theloais' => $theloais,
                'suatchieu' => $suatchieu,
                'phong' => $phong,
            ]);
        }
    }

    public function ticket($idSuat)
    {
        $suatchieu = Suatchieu::find($idSuat);
        $movie = Movie::find($suatchieu['IDPhim']);
        $theloais = Theloai::all();
        $phong = Phong::find($suatchieu['IDPhongChieu']);
        $ghe = Ghe::all();
        // $ghe = Ghe::all();




        return view('ticket', [
            'movie' => $movie,
            'theloais' => $theloais,
            'suatchieu' => $suatchieu,
            'phong' => $phong,
            'ghe' => $ghe,
        ]);
    }
}
