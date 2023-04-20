<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        {{ $movie['TenPhim'] }} - Cinema
    </title>
    @include('cdn')
    <style>
        .theatre {
            display: flex;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .cinema-seats {
            display: block;

            .seat {
                cursor: pointer;

                &:hover:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    border-radius: 7px;
                }

                &.active {}

                &.active:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.6);
                    border-radius: 7px;
                }
            }
        }

        .right {
            margin-left: 70px;

            .cinema-row {
                transform: skew(7deg);
                margin: 0 6px;
            }

            .seat {
                width: 35px;
                height: 50px;
                border-radius: 7px;
                background: linear-gradient(to top, #66CC00, #66CC00, #66CC00, #66CC00, #66CC00, #66CC00, white);
                margin-bottom: 10px;
                transform: skew(-8deg);
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
                margin-left: 20px;
            }

            .row-2 {
                transform: skew(9deg);

                .seat {
                    transform: skew(-10deg);
                }
            }

            .row-3 {
                transform: skew(10deg);

                .seat {
                    transform: skew(-12deg);
                }
            }

            .row-4 {
                transform: skew(11deg);

                .seat {
                    transform: skew(-15deg);
                }
            }

            .row-5 {
                transform: skew(12deg);

                .seat {
                    transform: skew(-16deg);
                }
            }

            .row-6 {
                transform: skew(13deg);

                .seat {
                    transform: skew(-18deg);
                }
            }

            .row-7 {
                transform: skew(15deg);

                .seat {
                    transform: skew(-20deg);
                }
            }
        }

        .seat-row
        {
            display: flex;
        }

        .seat-row h1
        {
            padding-right: 15px;
        }
    </style>
</head>

<body>
    <header>
        <x-navbar />
    </header>
    <h1 style="padding-top: 100px">{{ $suatchieu['IDSuatChieu'] }}</h1>
    <div class="container" style="padding-bottom: 500px">
        <div class="theatre">
            <div class="cinema-seats right">
                <div class="seat-row">
                    <h1>A</h1>
                    @foreach ($ghe as $seat)
                        @if ($seat['IDPhongChieu'] == $phong['IDPhongChieu'] && $seat['HangGhe'] == 'A')
                            <div class="cinema-row row-1 seat" >
                                <h1 onclick="chonGhe">{{ $seat['SoGhe'] }}</h1>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="seat-row">
                    <h1>B</h1>
                    @foreach ($ghe as $seat)
                        @if ($seat['IDPhongChieu'] == $phong['IDPhongChieu'] && $seat['HangGhe'] == 'B')
                            <div class="cinema-row row-1 seat" >
                                <h1>{{ $seat['SoGhe'] }}</h1>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="seat-row">
                    <h1>C</h1>
                    @foreach ($ghe as $seat)
                        @if ($seat['IDPhongChieu'] == $phong['IDPhongChieu'] && $seat['HangGhe'] == 'C')
                            <div class="cinema-row row-1 seat" >
                                <h1>{{ $seat['SoGhe'] }}</h1>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="seat-row">
                    <h1>D</h1>
                    @foreach ($ghe as $seat)
                        @if ($seat['IDPhongChieu'] == $phong['IDPhongChieu'] && $seat['HangGhe'] == 'D')
                            <div class="cinema-row row-1 seat" >
                                <h1>{{ $seat['SoGhe'] }}</h1>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <x-event />
    <x-footer />
    <script>
        $('.cinema-seats .seat').on('click', function() {
            $(this).toggleClass('active');
        });


    </script>
</body>

</html>
