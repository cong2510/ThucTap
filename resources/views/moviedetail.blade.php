<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie['TenPhim'] }} - Cinema</title>
    @include('cdn')
    <style>
        .movie-info {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .movie-info span {
            font-size: 18px;

        }

        .movie-info li {
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .movie-detail p {
            color: #a6b2c9 !important;
            font-size: 20px;
        }

        .movie-tittle a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .movie-tittle a:hover {
            color: #60CC00;
        }
    </style>
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <div class="container" style="padding-top: 100px;padding-bottom: 100px">
        <div class="movie-tittle" style="padding-bottom: 30px">
            <h3 style="font-weight: bold"><a href="{{ route('index') }}">TRANG CHỦ</a> | {{ $movie['TenPhim'] }}</h3>
        </div>
        <div class="row">
            <div class="movie-picture col-4">
                <img src="/images/{{ $movie['Img'] }}"alt="">
            </div>
            <div class="movie-content col-8">
                <div class="movie-name">
                    <h3 style="font-weight: bold">{{ $movie['TenPhim'] }}</h3>
                </div>
                <div class="movie-detail">
                    <p>{{ $movie['Mota'] }}</p>
                </div>
                <ul class="movie-info">
                    <li>
                        <span class="col-left">Thể loại: </span>
                        @foreach ($theloais as $theloai)
                            <span class="col-right">
                                @if ($theloai['IDTheLoai'] == $movie['IDTheLoai'])
                                    {{ $theloai['TenTheLoai'] }}
                                @endif
                            </span>
                        @endforeach
                    </li>
                    <li>
                        <span class="col-left">Khởi chiếu: </span>
                        <span class="col-right">{{ $movie['KhoiChieu'] }}</span>
                    </li>
                    <li>
                        <span class="col-left">Thời lượng: </span>
                        <span class="col-right">{{ $movie['ThoiLuong'] }}</span>
                    </li>
                    <li>
                        <span class="col-left">
                            <button type="button" class="btn btn-muave" style="background: #66CC00;margin-right: 10px"
                                data-bs-toggle="collapse" data-bs-target="#trailer">
                                <a href="#"
                                    style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">XEM
                                    TRAILER</a>
                            </button>
                        </span>
                        <span class="col-right">
                            <button type="button" class="btn btn-muave hover-bg-white" style="background: #66CC00;">
                                <a href="#"
                                    style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">MUA
                                    VÉ</a>
                            </button>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container collapse" style="width: 90%" id="trailer">
        <div style="text-align: center">
            <h1>{{ $movie['TenPhim'] }}</h1>
        </div>
        <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="{{ asset('trailer/' . $movie['Trailer']) }}" id="video"
                allowscriptaccess="always" sandbox></iframe>
        </div>
    </div>
    <div class="movie-showtime">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-today-tab" data-bs-toggle="pill" data-bs-target="#pills-today"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"
                    value="{{ Carbon\Carbon::today()->toDateString() }}">{{ Carbon\Carbon::today()->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next-tab" data-bs-toggle="pill" data-bs-target="#pills-next"
                    type="button" role="tab" aria-controls="pills-next" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next1-tab" data-bs-toggle="pill" data-bs-target="#pills-next1"
                    type="button" role="tab" aria-controls="pills-next1" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(2)->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next2-tab" data-bs-toggle="pill" data-bs-target="#pills-next2"
                    type="button" role="tab" aria-controls="pills-next2" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(3)->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next3-tab" data-bs-toggle="pill" data-bs-target="#pills-next3"
                    type="button" role="tab" aria-controls="pills-next3" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(4)->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next4-tab" data-bs-toggle="pill" data-bs-target="#pills-next4"
                    type="button" role="tab" aria-controls="pills-next4" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(5)->toDateString() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-next5-tab" data-bs-toggle="pill" data-bs-target="#pills-next5"
                    type="button" role="tab" aria-controls="pills-nex5" aria-selected="false"
                    value="{{ Carbon\Carbon::today()->addDay(1)->toDateString() }}">{{ Carbon\Carbon::today()->addDay(6)->toDateString() }}</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-today" role="tabpanel"
                aria-labelledby="pills-today-tab" tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if ($suat['IDPhim'] == $movie['IDPhim'] && Carbon\Carbon::today()->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next" role="tabpanel" aria-labelledby="pills-next-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(1)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next1" role="tabpanel" aria-labelledby="pills-next1-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(2)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next2" role="tabpanel" aria-labelledby="pills-next2-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(3)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next3" role="tabpanel" aria-labelledby="pills-next3-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(4)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next4" role="tabpanel" aria-labelledby="pills-next4-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(5)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-next5" role="tabpanel" aria-labelledby="pills-next5-tab"
                tabindex="0">
                <div class="container" style="width: 90%">
                    @foreach ($phong as $phongchieu)
                        <h1>Phòng {{ $phongchieu['IDPhongChieu'] }}</h1>
                        <div class="row">
                            <div>
                                @foreach ($suatchieu as $suat)
                                    @if ($suat['IDPhongChieu'] == $phongchieu['IDPhongChieu'])
                                        @if (
                                            $suat['IDPhim'] == $movie['IDPhim'] &&
                                                Carbon\Carbon::today()->addDays(6)->eq($suat['NgayChieu']))
                                            <button class="btn btn-muave mt-auto"
                                                style="border: 0;background: #66CC00;color:white;font-weight: bold">
                                                <a href="{{ route('ticket', $suat['IDSuatChieu']) }}"
                                                    style="color: white;font-weight: bold;text-decoration: none">
                                                    {{ $suat['GioChieu'] }}
                                                </a>
                                            </button>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-event />
    <x-footer />
</body>

</html>
