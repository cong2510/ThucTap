<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="container" style="padding-top: 100px;">
        <div class="movie-tittle">
            <h3 style="font-weight: bold"><a href="{{ route('index') }}">TRANG CHỦ</a> | DEMON SLAYER</h3>
        </div>
        <div class="row">
            <div class="movie-picture col-4">
                <img src="{{ asset('images/phim1.jpg') }}" alt="">
            </div>
            <div class="movie-content col-8">
                <div class="movie-name">
                    <h3 style="font-weight: bold">DEMON SLAYER</h3>
                </div>
                <div class="movie-detail">
                    <p>Sau trận chiến khốc liệt với anh em quỷ Thượng Huyền Lục Gyuutarou và Daki tại Phố Đèn Đỏ,
                        Tanjiro và các kiếm sĩ diệt quỷ đều bị thương nặng, thanh gươm của Tanjiro cũng bị hư hỏng nặng
                        và cậu cần một thanh gươm mới để tiếp tục làm nhiệm vụ...</p>
                </div>
                <ul class="movie-info">
                    <li>
                        <span class="col-left">Thể loại: </span>
                        <span class="col-right">Animation</span>
                    </li>
                    <li>
                        <span class="col-left">Khởi chiếu: </span>
                        <span class="col-right">2023-03-22</span>
                    </li>
                    <li>
                        <span class="col-left">Thời lượng: </span>
                        <span class="col-right">110 phút</span>
                    </li>
                    <li>
                        <span class="col-left">
                            <button type="button" class="btn btn-muave" style="background: #66CC00;margin-right: 10px">
                                <a href="#"
                                    style="font-weight: bold;color: white;text-decoration: none;font-size: 14px;padding: 8px;">XEM TRAILER</a>
                            </button>
                        </span>
                        <span class="col-right">
                            <button type="button" class="btn btn-muave" style="background: #66CC00;">
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
    <x-event />
    <x-footer />
</body>

</html>
